<?php

class Profile extends CI_Controller {

    function get_img() {
        $this->db->select('photo');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->photo;
    }

    function get_fname() {
        $this->db->select('firstname');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->firstname;
    }

    function get_lname() {
        $this->db->select('lastname');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->lastname;
    }

    function get_title() {
        $this->db->select('title');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->title;
    }

    function get_quotes() {
        $this->db->select('memberquotes');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->memberquotes;
    }

    function get_industry() {
        $this->db->select('industry');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->industry;
    }

    function get_city() {
        $this->db->select('city');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->city;
    }

    function get_state() {
        $this->db->select('state');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->state;
    }

    function get_country() {
        $this->db->select('country');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->country;
    }

    function get_aboutme() {
        $this->db->select('aboutme');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->aboutme;
    }

    function get_lookingfor() {
        $this->db->select('partnerreq');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->partnerreq;
    }

    function get_idea() {
        $this->db->select('bizidea');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->bizidea;
    }

    function get_work_skill() {
        $this->db->select('a.skillexperttext, a.skillexpertname');
        $this->db->from('skillexpert_tbl as a');
        $this->db->join('member_tbl as b', 'a.member_tbl_member_id = b.member_id');
        $this->db->where('b.email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query;
        return $q;
    }

    function get_edu_exp() {
        $this->db->select('a.school, a.degree, a.studyarea, a.activities, a.attdate');
        $this->db->from('edu_tbl as a');
        $this->db->join('member_tbl as b', 'a.member_tbl_member_id = b.member_id');
        $this->db->where('b.email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query;
        return $q;
    }

    function get_work_exp() {
        $this->db->select('a.employer, a.jobtitle, a.periodfrom, a.periodto, a.jobdesc');
        $this->db->from('we_tbl as a');
        $this->db->join('member_tbl as b', 'a.member_tbl_member_id = b.member_id');
        $this->db->where('b.email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query;
        return $q;
    }

    function get_media_youtube() {
        $this->db->select('a.url');
        $this->db->from('media_tbl as a');
        $this->db->join('member_tbl as b', 'a.member_tbl_member_id = b.member_id');
        $this->db->where('b.email', $this->session->userdata('email'));
        $this->db->where('a.mediaref_tbl_mediaref_id', 1);
        $query = $this->db->get();
        $q = $query;
        return $q;
    }

    function get_media_slideshare() {
        $this->db->select('a.url');
        $this->db->from('media_tbl as a');
        $this->db->join('member_tbl as b', 'a.member_tbl_member_id = b.member_id');
        $this->db->where('b.email', $this->session->userdata('email'));
        $this->db->where('a.mediaref_tbl_mediaref_id', 2);
        $query = $this->db->get();
        $q = $query;
        return $q;
    }

    function get_potential_matches() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();

        $this->db->select('b.member_id,b.firstname, b.lastname, b.title, b.photo, a.profession, a.location, a.requirement');
        $this->db->from('potential_matches as a');
        $this->db->join('member_tbl as b', 'a.member_tbl_to_potential = b.member_id');
        $this->db->where('a.member_tbl_potential_tbl', $row->member_id);
        $query = $this->db->get();
        $q = $query;
        return $q;
    }

    function get_your_connection() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();

        $this->db->select('b.member_id, b.firstname, b.lastname, b.title, b.photo');
        $this->db->from('your_connection as a');
        $this->db->join('member_tbl as b', 'a.member_tbl_to_connection = b.member_id');
        $this->db->where('a.member_tbl_from_connection', $row->member_id);
        $query = $this->db->get();
        $q = $query;
        return $q;
    }
    
    function get_message_member(){

        $this->db->select('b.member_id, b.firstname, b.lastname, b.photo, a.message, a.date_scape, a.time_scape');
        $this->db->from('message_member as a');
        $this->db->join('member_tbl as b', 'a.member_id_to_message_id = b.member_id');
        $query = $this->db->get();
        $q = $query;
        return $q;
    }

}

?>
