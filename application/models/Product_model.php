<?php
class Product_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	
	
	
	public function get_bases($slug = FALSE)
 {
    if ($slug === FALSE)
    {
        $query = $this->db->get('bases');
        return $query->result_array();
    }

    $query = $this->db->get_where('bases', array('slug' => $slug));
    return $query->row_array();
 }
 
   
   
   public function get_down_center($slug1 = FALSE)
 {
   if ($slug1 === FALSE)
   {
	   $query1 = $this->db->get('down_center');
	   return $query1->result_array();
	   
   }
   $query1 = $this->db->get_where('down_center', array('slug' => $slug1));
   return $query1->row_array();
 }

 
 }