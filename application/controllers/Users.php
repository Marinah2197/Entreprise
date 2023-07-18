<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->helper('string');
        $this->load->helper('url');
        $this->load->view('template');

    }

    public function index() {
        $this->db->where('is_active', 1);
        $data['users'] = $this->users_model->get_active_users();
        $this->load->view('users/list', $data);
    }

    public function add() {

        // Validation des champs du formulaire
        $this->form_validation->set_rules('matricule', 'Matricule');
        $this->form_validation->set_rules('nom', 'Nom');
        $this->form_validation->set_rules('prenom', 'Prénom');
        $this->form_validation->set_rules('date_embauche', 'Date d\'embauche');
        $this->form_validation->set_rules('poste', 'Poste ou emploi');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('type_utilisateur', 'Type d\'utilisateur');

        if ($this->form_validation->run() == FALSE) {
            // Affichage du formulaire d'inscription en cas d'erreurs de validation
            $this->load->view('users/add');
        } else {
            // Création d'un code d'accès aléatoire
            $code_acces = random_string('alnum', 10);

            // Enregistrement des données dans la base de données
            $data = array(
                'matricule' => $this->input->post('matricule'),
                'nom' => $this->input->post('nom'),
                'prenoms' => $this->input->post('prenom'),
                'date_embauche' => $this->input->post('date_embauche'),
                'poste' => $this->input->post('poste'),
                'email' => $this->input->post('email'),
                'code_acces' => $code_acces,
                'type_utilisateur' => $this->input->post('type_utilisateur'),
                'is_active' => 1
            );
            $this->users_model->add_user($data);

            redirect('users');
        }
    }

    public function edit($user_id) {
        // Récupération des informations de l'utilisateur à modifier
        $data['user'] = $this->users_model->get_user($user_id);

        // Validation des champs du formulaire
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenom', 'Prénom', 'required');
        $this->form_validation->set_rules('poste', 'Poste ou emploi', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');

        if ($this->form_validation->run() == FALSE) {
            // Affichage du formulaire de modification en cas d'erreurs de validation
            $this->load->view('users/edit', $data);
        } else {
            // Mise à jour des données dans la base de données
            $data = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'poste' => $this->input->post('poste'),
                'email' => $this->input->post('email'),
            );
            $this->users_model->update_user($user_id, $data);

            // Redirection vers la liste des utilisateurs après la modification
            redirect('users');
        }
    }

    public function delete($user_id) {

        // Marquer l'utilisateur comme inactif dans la base de données
    $this->users_model->deactivate_user($user_id);


    // Redirection vers la liste des utilisateurs après la suppression
    redirect('users');
    }
    
    public function inactive_users() {
    
        // Récupérer les utilisateurs inactifs
        $data['users'] = $this->users_model->get_inactive_users();
    
        // Charger la vue pour afficher les utilisateurs inactifs
        $this->load->view('users/inactive_users', $data);
    }

    public function reactivate($user_id) {

        // Réactiver l'utilisateur dans la base de données
        $this->users_model->reactivate_user($user_id);
    
        // Redirection vers la liste des utilisateurs inactifs après la réactivation
        redirect('users/index');
    }

    public function profil(){
        $data['user'] = $this->users_model->get_user($this->session->userdata('user_id'));
        $this->load->view('users/profil', $data);
    }

    public function edit_profil() {
        $user_id = $this->session->userdata('id');

        // Validation des champs du formulaire
        $this->form_validation->set_rules('nom', 'Nom');
        $this->form_validation->set_rules('prenom', 'Prénom');
        $this->form_validation->set_rules('date_embauche', 'Date d\'embauche');
        $this->form_validation->set_rules('poste', 'Poste');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');

        if ($this->form_validation->run() == FALSE) {
            // Affichage du formulaire de modification en cas d'erreurs de validation
            $data['user'] = $this->users_model->get_user($user_id);
            $this->load->view('users/edit_profil', $data);
        } else {
            // Mise à jour des données de l'utilisateur
            $data = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'date_embauche' => $this->input->post('date_embauche'),
                'poste' => $this->input->post('poste'),
                'email' => $this->input->post('email')
            );
            $this->users_model->update_user($user_id, $data);

            $this->session->set_userdata($data);

            // Redirection vers la page de profil après la modification
            redirect('users/profil');
        }
    }

}
?>