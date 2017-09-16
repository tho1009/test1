<?php

class pagination_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_books($limit, $start, $st = NULL) {
        if ($st == "NIL")
            $st = "";
        $sql = "select * from tbl_books where name like  '%$st%' limit " . $start . "," . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function get_books_count($st = null) {
        if ($st == "NIL")
            $st = "";
        $sql = "select * from tbl_books where name like '$st'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    function get_books_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_books');
        return $query->result();
    }
    
    
}
