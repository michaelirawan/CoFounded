<?php

class Membership_model extends CI_Model {

    function validate() {
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', $this->input->post('password'));
        $query = $this->db->get('member_tbl');

        if ($query->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    function create_member() {
        $new_member_insert_data = array(
            'firstname' => $this->input->post('first_name'),
            'lastname' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'photo' => 'img/profile_blank.jpg',
            'title' => 'edit your title',
            'industry' => 'edit your industry',
            'aboutme' => 'edit your about',
            'partnerreq' => 'edit our looking for',
            'bizidea' => 'edit our idea',
            'memberquotes' => 'edit your quotes',
            'city' => 'edit city',
            'state' => 'edit state',
            'country' => 'edit country'
        );
        $insert1 = $this->db->insert('member_tbl', $new_member_insert_data);
        
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->input->post('email'));
        $query = $this->db->get();
        $id_member_baru = $query->row()->member_id;
        
        $this->load->helper('date');
        $time = time();
        date_default_timezone_set('Asia/Jakarta');
        $tahun = date("Y", $time);
        $bulan = date("m", $time);
        
        $new_member_statistic = array(
            'member_id_member_view' => $id_member_baru,
            'tahun' => $tahun,
            'bulan' => $bulan,
            'total' => 0
        );
        $insert2 = $this->db->insert('view_counter', $new_member_statistic);
        
        if($insert1 && $insert2){
            return true;
        }
        else            
            return false;
        
    }

    function update_profile() {
        $update_data = array(
            'firstname' => $this->input->post('fnama'),
            'lastname' => $this->input->post('lnama'),
            'title' => $this->input->post('title'),
            'industry' => $this->input->post('industry'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'country' => $this->input->post('country'),
            'memberquotes' => $this->input->post('status'),
            'aboutme' => $this->input->post('about'),
            'partnerreq' => $this->input->post('looking'),
            'bizidea' => $this->input->post('idea'),
        );
        $this->db->where('email', $this->session->userdata('email'));
        $update = $this->db->update('member_tbl', $update_data);

        return $update;
    }

    function update_skill() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();

        $new_skill = array(
            'skillexpertname' => $this->input->post('skill_name'),
            'skillexperttext' => $this->input->post('desc_skill'),
            'member_tbl_member_id' => $row->member_id
        );
        $insert = $this->db->insert('skillexpert_tbl', $new_skill);
        return $insert;
    }

    function update_edu() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();

        $new_skill = array(
            'school' => $this->input->post('edu_school'),
            'degree' => $this->input->post('edu_degree'),
            'studyarea' => $this->input->post('edu_area'),
            'attdate' => $this->input->post('edu_date'),
            'activities' => $this->input->post('edu_activeties'),
            'member_tbl_member_id' => $row->member_id
        );
        $insert = $this->db->insert('edu_tbl', $new_skill);
        return $insert;
    }

    function update_work_exp() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();

        $new_skill = array(
            'employer' => $this->input->post('company'),
            'jobtitle' => $this->input->post('position'),
            'periodfrom' => $this->input->post('work_from_date'),
            'periodto' => $this->input->post('work_date_to'),
            'jobdesc' => $this->input->post('desc_work'),
            'member_tbl_member_id' => $row->member_id
        );
        $insert = $this->db->insert('we_tbl', $new_skill);
        return $insert;
    }

    function update_addtional() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();

        $new_skill = array(
            'type' => $this->input->post('additional_name'),
            'etc' => $this->input->post('additional_information'),
            'member_tbl_member_id' => $row->member_id
        );
        $insert = $this->db->insert('additional_tbl', $new_skill);
        return $insert;
    }

    function insert_new_media_youtube() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();


        $new_youtube = array(
            'url' => '<iframe width="240" height="180" src="//www.youtube.com/embed/'.substr($this->input->post('input_Youtube'), 31).'" frameborder="0" allowfullscreen></iframe>',
            'mediaref_tbl_mediaref_id' => 1,
            'member_tbl_member_id' => $row->member_id
        );
        $insert = $this->db->insert('media_tbl', $new_youtube);
        return $insert;
    }

    function insert_new_media_slideshare() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();


        $new_youtube = array(
            'url' => $this->input->post('input_slideshare'),
            'mediaref_tbl_mediaref_id' => 2,
            'member_tbl_member_id' => $row->member_id
        );
        $insert = $this->db->insert('media_tbl', $new_youtube);
        return $insert;
    }

    

}