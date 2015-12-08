<?php
class types_model extends CI_Model
{
    var $table = 'types';
    var $lang = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->lang = $_SESSION['lang'];
        $this->load->database();
    }

    function get_menu($type)
    {
        $module = array(
            'articles' => 0,
            'products' => 1,
            'downloads' => 2,
            'gallery' => 3,
        );

        $query = $this->db->query("SELECT * FROM types WHERE lang = '{$this->lang}' AND module = " . $module[$type] . ' ORDER BY weight DESC');
        $data = $query->result();

        return $data;
    }

    //查询，统后用这个方法
    function select($options = array())
    {
        $options = $this->_default(array('sortDirection' => 'DESC'), $options);

        // Add where clauses to query
        $qualificationArray = array('id', 'belong');

        foreach ($qualificationArray as $qualifier) {
            if (isset($options[$qualifier]))
                $this->db->where($qualifier, $options[$qualifier]);
        }

        // If limit / offset are declared (usually for pagination) then we need to take them into account
        if (isset($options['limit'])) {
            $total = $this->db->count_all_results($this->table);

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

        $query = $this->db->get($this->table);

        if ($query->num_rows() == 0) {
            return array(
                'data' => array(),
                'total' => 0
            );
        }

        if (isset($options['id'])) {
            return $query->row(0);
        } else {
            return array(
                'data' => $query->result(),
                'total' => $total
            );
        }
    }

    function get_default_product()
    {
        $sql = "select * from types where lang='{$_SESSION['lang']}' and module = 1 and belong = 0 ORDER BY weight DESC";
        $query = $this->db->query($sql);

        $data = $query->result();

        return $data[0];
    }

    function getByID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('types');
        $data = $query->result();

        return $data[0];
    }

    function getByCode($code)
    {
        $this->db->where('code', $code);
        $this->db->where('lang', $this->lang);
        $query = $this->db->get('types');
        $data = $query->result();

        return (count($data) > 0 ? $data[0] : false);
    }

    //前台调用
    function getListByID($id)
    {
        $this->db->where('belong', $id);
        $this->db->order_by('weight', 'DESC');
        $query = $this->db->get('types');

        return ($query->result());
    }

    //取文章的子菜单
    function getSubMenu($id)
    {
        $this->db->where('module', 0);
        $this->db->where('belong', $id);
        $this->db->order_by('weight', 'DESC');

        $query = $this->db->get('types');
        $data = $query->result();

        return $data;
    }

    function saveTypeInfo($data)
    {
        $id = $data['id'];
        $this->db->update('types', $data, array('id' => $id));
    }

    function addType($post)
    {
        $data = (object)array();
        $data->module = $post['module'];
        $data->name = $post['name'];
        $data->lang = $this->lang;

        if ($post['type'] == 'children') {
            $data->belong = $post['id'];
        } else {
            //取当前type的所属分类
            $type_row = $this->getByID($post['id']);
            $data->belong = $type_row->belong;
        }

        $this->db->insert('types', $data);
    }

    function insert($data)
    {
        $this->db->insert('types', $data);

        return $this->db->insert_id();
    }

    function deleteByID($id)
    {
        $this->db->delete('types', array('id' => $id));
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