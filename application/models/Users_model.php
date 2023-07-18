<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_active_users() {
        // Récupération de la liste des utilisateurs actifs
        // $this->db->where('is_active', 1);
        $query = $this->db->get('utilisateurs');
        return $query->result_array();
    }

    public function add_user($data) {
        // Ajout d'un nouvel utilisateur dans la base de données
        $this->db->insert('utilisateurs', $data);
    }

    public function get_user($user_id) {
        // Récupération des informations d'un utilisateur spécifique
        $this->db->where('id', $user_id);
        $query = $this->db->get('utilisateurs');
        return $query->row_array();
    }

    public function update_user($user_id, $data) {
        // Mise à jour des informations d'un utilisateur spécifique
        $this->db->where('id', $user_id);
        $this->db->update('utilisateurs', $data);
    }


    public function deactivate_user($user_id) {
        $this->db->where('id', $user_id);
        $this->db->update('utilisateurs', array ('is_active' => 0));
    }

    public function activate_user($user_id) {
        // Réactivation d'un utilisateur spécifique
        $this->db->where('id', $user_id);
        $this->db->update('utilisateurs', array('is_active' => 1));
    }

    public function get_inactive_users() {
        $this->db->where('is_active', 0);
        $query = $this->db->get('utilisateurs');
        return $query->result_array();
    }

    public function reactivate_user($user_id) {
        $this->db->where('id', $user_id);
        $this->db->update('utilisateurs', array('is_active' => 1));
    }

}
?>
