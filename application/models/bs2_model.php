<?php

class Bs2_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_member($idmember = FALSE) {
        if ($idmember === FALSE) {
            $sqlstr = "select * from `member_tbl` a";
            $query = $this->db->query($sqlstr);
            //$query = $this->db->get('member_tbl');
            return $query->result_array();
        }

        //$query = $this->db->get_where('member_tbl', array('member_id' => $idmember));
        $sqlstr = "select * from `member_tbl` a where a.member_id=" . $idmember;
        $query = $this->db->query($sqlstr);
        return $query->row_array();
    }

    public function get_media($idmember) {
        $query = $this->db->get_where('media_tbl', array('member_tbl_member_id' => $idmember));
        return $query->result_array();
    }

    public function get_edu($idmember) {
        $query = $this->db->get_where('edu_tbl', array('member_tbl_member_id' => $idmember));
        return $query->result_array();
    }

    public function get_skill($idmember) {
        $query = $this->db->get_where('skillexpert_tbl', array('member_tbl_member_id' => $idmember));
        return $query->result_array();
    }

    public function get_work($idmember) {
        $query = $this->db->get_where('we_tbl', array('member_tbl_member_id' => $idmember));
        return $query->result_array();
    }
}