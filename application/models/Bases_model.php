<?php
class Bases_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_bases($slug = FALSE, $conditions = array())
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get_where('bases', $conditions);
            return $query->result_array();
        }
        
        $query = $this->db->get_where('bases', array('slug' => $slug));
        return $query->row_array();
    }
    
    /**
     * 获取下属地区数据.
     * @param int $type 地区层级数.
     * @param int $parent 所属父级地区ID.
     */
    public function get_regions($type, $parent)
    {
        $sql = 'SELECT region_id, region_name 
                FROM region 
                WHERE region_type = ' . (int)$type . ' AND parent_id = ' . (int)$parent;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    /**
     * 获取地址名.
     * @param int $id 地区ID.
     */
    public function get_region_name($id)
    {
        $sql = 'SELECT region_name FROM region WHERE region_id = ' . (int) $id;
        $query = $this->db->query($sql);
        $row = $query->row();
        return is_object($row) ? $row->region_name : '';
    }
}
 