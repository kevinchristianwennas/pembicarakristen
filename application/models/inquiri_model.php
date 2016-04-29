<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inquiri_model extends CI_Model {
	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get($id) {
    	$query = $this->db->get_where('inquiri', array('id' => $id));
    	return $query->result();
    }

    public function getUnread() {
    	$query = $this->db->get_where('inquiri', array('is_read' => 0));
    	return $query->result();
    }

    public function tagAsRead($id) {
    	$this->db->where('id', $id);
        return $this->db->update('inquiri', array('is_read' => 1));
    }

	public function getRead() {
    	$query = $this->db->get_where('inquiri', array('is_read' => 1));
    	return $query->result();
    }

    public function insert($data) {
    	return $this->db->insert('inquiri', $data);
    }

    public function delete($id) {
    	return $this->db->delete('inquiri', array('id' => $id));
    }
}