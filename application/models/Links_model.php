<?php
class Links_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	
	
	
	public function get_links($slug = FALSE)
 {
    if ($slug === FALSE)
    {
        $query = $this->db->get('links');
        return $query->result_array();
    }

    $query = $this->db->get_where('links', array('slug' => $slug));
    return $query->row_array();
 }
}