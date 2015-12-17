<?php
/**
 * Class articles_model
 * 这个类和products类是一样的，如果有修改，请同步更新到这里，有时间，重构时，合并成一个类。
 *
 */
class email_register_model extends CI_Model
{
    var $table = 'email_register';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        if (!isset($_SESSION)) {
            session_start();
        }

        //$this->lang = $_SESSION['lang'];
        $this->load->database();
    }
	
    /**
     * 获取下属地区数据.
     * @param int $type 地区层级数.
     * @param int $parent 所属父级地区ID.
     */
    function get_regions($type, $parent)
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
    function get_region_name($id)
    {
        $sql = 'SELECT region_name FROM region WHERE region_id = ' . (int) $id;
        $query = $this->db->query($sql);
        $row = $query->row();
        return is_object($row) ? $row->region_name : '';
    }
	
    //grid用
    function get($option)
    {
        $this->db->order_by('ctime', 'DESC');
        $query = $this->db->get($this->table, 20, $option['start']);

        return (array('data' => $query->result(),
            'total' => $this->db->count_all_results($this->table)
        ));
    }

    //查询，统后用这个方法
    function select($options = array())
    {
        $options = array_merge(array('sortDirection' => 'DESC'), $options);

        // Add where clauses to query
        $qualificationArray = array('id', 'type_id', 'ctime', 'code');

        foreach ($qualificationArray as $qualifier) {
            if (isset($options[$qualifier]))
                $this->db->where($qualifier, $options[$qualifier]);
        }

        // If limit / offset are declared (usually for pagination) then we need to take them into account
        $total = $this->db->count_all_results($this->table);
        if (isset($options['limit'])) {

            //取得记录数据后，重新设置一下条件
            foreach ($qualificationArray as $qualifier) {
                if (isset($options[$qualifier]))
                    $this->db->where($qualifier, $options[$qualifier]);
            }

            if (isset($options['offset'])) {
                $this->db->limit($options['limit'], $options['offset']);
            } else if (isset($options['limit'])) {
                $this->db->limit($options['limit']);
            }
        }

        // sort
        if (isset($options['sortBy'])) {
            $this->db->order_by($options['sortBy'], $options['sortDirection']);
        }

        foreach ($qualificationArray as $qualifier) {
            if (isset($options[$qualifier]))
                $this->db->where($qualifier, $options[$qualifier]);
        }

        $query = $this->db->get($this->table);

        if (isset($options['id']) or isset($options['code'])) {
            return $query->row(0);
        } else {
            return array(
                'data' => $query->result(),
                'total' => $total
            );
        }
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function update()
    {
        $this->db->update($this->table, $_POST, array('id' => $_POST['id']));
    }

    function get_menu($type_id)
    {
        $this->db->where('type_id', $type_id);
        $this->db->order_by('ctime', 'DESC');
        $query = $this->db->get('articles');

        return ($query->result());
    }

    function loadByID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('articles');
        $data = $query->result();

        return (count($data) > 0 ? $data[0] : false);
    }

    function loadByCode($code)
    {
        $this->db->where('code', strtolower($code));
        $this->db->where('lang', $this->lang);
        $query = $this->db->get('articles');
        $data = $query->result();

        return (count($data) > 0 ? $data[0] : false);
    }

    function getListByType($type_id)
    {
        $this->db->where('type_id', $type_id);
        $this->db->order_by('ctime', 'DESC');
        $query = $this->db->get('articles');

        return ($query->result());
    }

    function getDownloadList($option)
    {
        $page = isset($option['page']) ? $option['page'] : 1;
        $per_page = isset($option['per_page']) ? $option['per_page'] : 10;

        $this->db->where('type_id', $option['type_id']);
        $this->db->order_by('ctime', 'DESC');
        $query = $this->db->get('articles', $per_page, ($page - 1) * $per_page);

        $this->db->where('type_id', $option['type_id']); //取记录数条件

        return (array(
            'data' => $query->result(),
            'total' => $this->db->count_all_results('articles')
        ));
    }

    function getDownloadListSearch($keyword)
    {
        $type_id = '69, 70, 71, 72'; //英文
        if ($this->lang === 'cn') $type_id = '258, 257, 259, 260'; //中文

        $sql = "SELECT * from articles WHERE type_id IN ($type_id) AND name LIKE '%$keyword%'";
        $query = $this->db->query($sql);

        return (array('data' => $query->result(),
            'total' => 0
        ));
    }

    function news_search($keyword)
    {
        //42 products release    43 company news    44 exhibitions
        //249 新品发布    250 公司新闻     251 展会
        $news_id = '42, 43, 44';
        if ($this->lang === 'cn') $news_id = '249, 250, 251';

        $sql = "SELECT * from articles WHERE type_id IN ($$news_id) AND name LIKE '%$keyword%'";
        $query = $this->db->query($sql);

        return (array('data' => $query->result(),
            'total' => 0
        ));
    }

    private function get_type_id()
    {
        switch ($_SESSION['lang']) {
            case 'cn':
                $type_id = 251;
                break;
            case 'en':
                $type_id = 44;
                break;
        }

        return $type_id;
    }

    function getHotArticles()
    {
        $type_id = $this->get_type_id();
        $sql = "select t.lang, a.* from articles as a left join types as t on (a.type_id = t.id) "
            . "where t.lang = '{$_SESSION['lang']}' and is_hot = 1 AND type_id != {$type_id} ORDER BY ctime DESC";

        $query = $this->db->query($sql);
        $data = $query->result();

        return $data;
    }

    function getNewestExhibition()
    {
        $type_id = $this->get_type_id();
        $sql = "select * from articles where type_id = {$type_id} ORDER BY ctime DESC LIMIT 1";
        $query = $this->db->query($sql);
        $data = $query->result();

        return $data;
    }

    function new_news()
    {
        switch ($_SESSION['lang']) {
            case 'cn':
                $type_ids = '249, 250, 251';
                break;
            case 'en':
                $type_ids = '42, 43, 44';
                break;
        }

        $sql = "SELECT * from articles WHERE type_id IN ({$type_ids}) ORDER BY ctime DESC LIMIT 6";
        $query = $this->db->query($sql);

        return $query->result();
    }

    function deleteByID($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }

    /**
     * _default method combines the options array with a set of defaults giving the values
     * in the options array priority.
     *
     * @param array $defaults
     * @param array $options
     * @return array
     */
    function _default($defaults, $options)
    {
        return array_merge($defaults, $options);
    }
}



//end file