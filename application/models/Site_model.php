<?php
class Site_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	
	
	//��ȡ�Լݻ��ص�����
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
    
	
	//��ȡԽҰ��е������
	public function get_device($slug1 = FALSE)
 {
	if($slug1 === FALSE)
    {
		
		$query1 = $this->db->get('device');
		return $query1->result_array();
		
		
	}		
	$query1 = $this->db->get_where('device', array('slug' => $slug1));
    return $query1->row_array();
		
 }	
 
 
 
    public function get_case()
	{
		
		
		
	}   
 

 
 
}