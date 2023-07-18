<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Charger le modèle de la base de données si nécessaire
        $this->load->database();
    }

    public function register_user($data) {
        // Enregistrement de l'utilisateur dans la base de données
        $this->db->insert('utilisateurs', $data);
    }

    public function authenticate_user($matricule, $code_acces) {
        // Vérification du matricule et du code d'accès dans la base de données
        $this->db->where('matricule', $matricule);
        $this->db->where('code_acces', $code_acces);
        $query = $this->db->get('utilisateurs');
    
        if ($query->num_rows() == 1) {
            // Utilisateur trouvé, retournez les informations
            return $query->row_array();
        } else {
            // Utilisateur non trouvé
            return false;
        }
    }
}
?>
