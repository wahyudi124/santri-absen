<?php
class Scanner extends CI_Controller{

    public function index(){
        // $data['santri'] = $this->m_santri->getalldata()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('absensiscanner');
        $this->load->view('templates/footer');
    }

    public function getdatascan(){
        $no_induk = $this->input->post('no_induk');
        $where = array('no_induk' => $no_induk);
        $data['santri'] = $this->m_santri->get_ajx($where,'tbsantri')->result();
        echo json_encode($data);
    }

}