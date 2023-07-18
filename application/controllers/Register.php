<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->helper('string');
        $this->load->library('session');
        $this->load->helper('url');
        // $this->load->library('url');
    }

    public function index() {
        $this->load->view('register');
    }

    public function register() {
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
            $this->load->view('register');
        } else {
            // Création d'un code d'accès aléatoire
            $code_acces = random_string('alnum', 10);

            // Enregistrement des données dans la base de données
            $data = array(
                'matricule' => $this->input->post('matricule'),
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'date_embauche' => $this->input->post('date_embauche'),
                'poste' => $this->input->post('poste'),
                'email' => $this->input->post('email'),
                'code_acces' => $code_acces,
                'type_utilisateur' => $this->input->post('type_utilisateur'),
                'is_active'=> 1
            );
            $this->register_model->register_user($data);
            redirect('login');
            echo 'Inscription réussie !';
        }
    }

    public function login() {
        $this->load->view('login');
    }
    
    public function authenticate() {
        $matricule = $this->input->post('matricule');
        $code_acces = $this->input->post('code_acces');
    
        // Vérification du matricule et du code d'accès dans la base de données
        $user = $this->register_model->authenticate_user($matricule, $code_acces);
    
        if ($user) {
            // Utilisateur authentifié, enregistrez les informations dans la session
            $this->session->set_userdata('id', $user['id']);
            $this->session->set_userdata('matricule', $user['matricule']);
            $this->session->set_userdata('nom', $user['nom']);
            $this->session->set_userdata('prenom', $user['prenom']);
            $this->session->set_userdata('poste', $user['poste']);
            $this->session->set_userdata('date_embauche', $user['date_embauche']);
            $this->session->set_userdata('email', $user['email']);
            $this->session->set_userdata('type_utilisateur', $user['type_utilisateur']);
            $this->session->set_userdata('code_acces', $user['code_acces']);
    
            // Redirection vers la page d'accueil après l'authentification
            redirect('home');
        } else {
            // Matricule ou code d'accès invalide, affichez un message d'erreur
            $data['error'] = 'Matricule ou code d\'accès invalide.';
            $this->load->view('login', $data);
        }
    }

    
    public function logout()
{
    // Supprimer les données de session de l'utilisateur
    $this->session->unset_userdata('id');
    $this->session->unset_userdata('matricule');
    $this->session->unset_userdata('nom');
    $this->session->unset_userdata('prenom');
    $this->session->unset_userdata('poste');
    $this->session->unset_userdata('date_embauche');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('type_utilisateur');
    $this->session->unset_userdata('code_acces');

    // Redirection vers la page d'authentification après la déconnexion
    redirect('login');
}
    
}
?>
