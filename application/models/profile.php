<?php

class Profile extends CI_Controller {

    function get_id() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $q = $query->row();
        return $q->member_id;
    }

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

    function get_additional() {
        $this->db->select('a.additional_id, a.type, a.etc');
        $this->db->from('additional_tbl as a');
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



    function get_browser_industry($where_industry) {
        $this->db->select('*');
        $this->db->from('member_tbl');
        $this->db->where('industry', $where_industry);

        $query = $this->db->get()->result_array();

        $q = json_encode($query);
        return $q;
    }

    function get_search() {
        $search_query = $this->input->post('inputsearch');

        $this->db->select('*');
        $this->db->from('member_tbl');
        $this->db->like(mb_strtolower('firstname'), mb_strtolower($search_query));
        $this->db->or_like(mb_strtolower('lastname'), mb_strtolower($search_query));
        $this->db->or_like(mb_strtolower('title'), mb_strtolower($search_query));
        $this->db->or_like(mb_strtolower('industry'), mb_strtolower($search_query));
        $this->db->or_like(mb_strtolower('city'), mb_strtolower($search_query));
        $this->db->or_like(mb_strtolower('state'), mb_strtolower($search_query));
        $this->db->or_like(mb_strtolower('country'), mb_strtolower($search_query));

        $query = $this->db->get();
        $q = $query;
        return $q;
    }

    function upload_img() {
        $this->load->library('upload');

        $config = array(
            'allowed_types' => 'jpg',
            'upload_path' => realpath(APPPATH . '../img'),
            'max_size' => 2000,
            'overwrite' => TRUE,
            'file_name' => 'img_new' . $this->input->post('id_member_img')
        );

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('picture')) { // array of input names (type file)
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data('picture')); // array
        }

        $update_img = 'img/img_new' . $this->input->post('id_member_img') . '.jpg';

        $data = array(
            'photo' => $update_img
        );
        $this->db->where('member_id', $this->input->post('id_member_img'));
        $this->db->update('member_tbl', $data);
        return true;
    }

    function del_img() {
        $data = array(
            'photo' => 'img/profile_blank.jpg'
        );
        $this->db->where('member_id', $this->input->post('id_member_img'));
        $this->db->update('member_tbl', $data);
        return true;
    }

    function insert_new_message() {
        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        $row = $query->row();

        $this->load->helper('date');
        $time = time();
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m-d", $time);
        $waktu = date("H:i:s", $time);


        $new_message = array(
            'member_id_from_message_id' => $row->member_id,
            'member_id_to_message_id' => $this->input->post('member_id_message'),
            'message' => $this->input->post('message_input'),
            'date_scape' => $tgl,
            'time_scape' => $waktu
        );
        $this->db->insert('message_member', $new_message);
        return true;
    }

    function view_counter($id_member) {
        $this->load->helper('date');
        $time = time();
        date_default_timezone_set('Asia/Jakarta');
        $tahun = date("Y", $time);
        $bulan = date("m", $time);

        $this->db->select('bulan');
        $this->db->from('view_counter');
        $this->db->where('member_id_member_view', $id_member);
        $query_bulan = $this->db->get();
        $bulan_query = $query_bulan->num_rows();

        $this->db->select('tahun');
        $this->db->from('view_counter');
        $this->db->where('member_id_member_view', $id_member);
        $query_tahun = $this->db->get();
        $tahun_query = $query_tahun->num_rows();



        if ($bulan_query != 0 && $tahun_query != 0) {
            $this->db->select('total');
            $this->db->from('view_counter');
            $this->db->where('member_id_member_view', $id_member);
            $query = $this->db->get();
            $q = $query->row()->total;
            $q++;
            $data = array(
                'total' => $q
            );
            $this->db->where('member_id_member_view', $id_member);
            $this->db->where('bulan', $bulan);
            $this->db->where('tahun', $tahun);
            $this->db->update('view_counter', $data);
        } else {
            $new_member_statistic = array(
                'member_id_member_view' => $id_member,
                'tahun' => $tahun,
                'bulan' => $bulan,
                'total' => 1
            );
            $insert2 = $this->db->insert('view_counter', $new_member_statistic);
        }
        return true;
    }

    function get_list_emp($num, $offset) {
        $data = $this->db->get('member_tbl', $num, $offset);

        return $data->result();
    }

    function get_total_rows() {

        $this->db->select('member_id');
        $this->db->from('member_tbl');
        $query = $this->db->get();
        $q = $query->num_rows();
        return $q;
    }

    function get_viewer_dashboard_total() {
        $this->db->select('a.total, a.bulan, a.tahun');
        $this->db->from('view_counter as a');
        $this->db->join('member_tbl as b', 'a.member_id_member_view = b.member_id');
        $this->db->where('b.email', $this->session->userdata('email'));
        $query = $this->db->get()->result_array();
        $q = json_encode($query);
        return $q;
    }

    function get_where_last_comment_id() {
        
        
        $this->db->distinct();
        $this->db->select('a.member_id_from_message_id');
        $this->db->from('message_member as a');
        $this->db->join('member_tbl as b', 'a.member_id_to_message_id = b.member_id');
        $this->db->where('b.email', $this->session->userdata('email'));
        $query = $this->db->get()->result_array();

        $q = json_encode($query);
        return $q;
    }
    
    function the_last_comment($last_id){
                
        $this->db->select_max('a.id_message');
        $this->db->from('message_member as a');
        $this->db->join('member_tbl as b', 'a.member_id_to_message_id = b.member_id');
        $this->db->where('a.member_id_from_message_id', $last_id);
        $query = $this->db->get();
        $id = $query->row();
        
        $this->db->select('b.member_id, b.firstname, b.lastname, a.message');
        $this->db->from('message_member as a');
        $this->db->join('member_tbl as b', 'a.member_id_from_message_id = b.member_id');
        $this->db->where('a.id_message', $id->id_message);
        $query2 = $this->db->get()->result_array();

        $q = json_encode($query2);
        return $q;
    }
    
        function get_message_member($where_id) {

        $this->db->select('b.member_id, b.firstname, b.lastname, b.photo, a.message, a.date_scape, a.time_scape');
        $this->db->from('message_member as a');
        $this->db->join('member_tbl as b', 'a.member_id_to_message_id = b.member_id');
       
        $this->db->where('a.member_id_from_message_id', $where_id);
        $query = $this->db->get()->result_array();

        $q = json_encode($query);
        return $q;
    }

}

?>
