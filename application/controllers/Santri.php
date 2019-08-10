<?php
class Santri extends CI_Controller{

    public function index(){
        $data['santri'] = $this->m_santri->getalldata()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('santri', $data);
        $this->load->view('templates/footer');
    }

    public function insert_data(){
        $nama           = $this->input->post('nama');
        $no_induk       = $this->input->post('no_induk');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $alamat         = $this->input->post('alamat');
        $sakan          = $this->input->post('sakan');
        

        $datas = array(
            'nama'          => $nama,
            'no_induk'      => $no_induk,
            'tempat_lahir'  => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat'        => $alamat,
            'sakan'         => $sakan
        );


        $this->m_santri->input_data($datas,'tbsantri');
        redirect('santri/index');
    }

    public function delete_data($id)
    {
        $where = array('id' => $id);
        $this->m_santri->delete_data($where, 'tbsantri');
        redirect('santri/index');
    }
    public function edit_data($id)
    {
        $where = array('id' => $id);
        $data['santri'] = $this->m_santri->edit_data($where, 'tbsantri')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('santri', $data);
        $this->load->view('templates/footer');
    }

    
}