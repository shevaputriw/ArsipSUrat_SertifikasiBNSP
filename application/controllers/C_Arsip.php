<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Arsip extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Arsip');
        $this->load->library('form_validation');
        $this->load->helper('url', 'form', 'download'); 
    }

    public function index()
    {
        $data['title'] = 'Arsip Surat';
        $data['surat'] = $this->M_Arsip->getAllSurat();

        $this->load->view('template/Header', $data);
        $this->load->view('Arsip/index', $data);
        $this->load->view('template/Footer', $data);
    }

    public function Tambah_Surat()
    {
        $data['title'] = 'Tambah Arsip Surat';
        $data['kategori_surat'] = ['Undangan','Nota Dinas', 'Pengumuman', 'Pemberitahuan'];


        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('judul', 'Judul Surat', 'required');
    
        if($this->form_validation->run()==FALSE) {
            $this->load->view('template/Header', $data);
            $this->load->view('Arsip/Tambah_Surat', $data);
            $this->load->view('template/Footer', $data);
        }
        else {
            $this->M_Arsip->Tambah_Surat();
            redirect('C_Arsip', 'refresh');
        }
    }

    public function Hapus_Surat($id_surat) {
        $this->M_Arsip->Hapus_Surat($id_surat);
        echo"<script>alert('Arsip Surat Berhasil Dihapus!');</script>";
        redirect('C_Arsip', 'refresh');
    }

    public function Download($id_surat)
    {
        $data = $this->db->get_where('surat',['id_surat'=>$id_surat])->row();
        $this->load->helper('download');
		force_download('upload/surat/'.$data->file_surat, NULL);
    }

    public function Lihat_Surat($id_surat) {
        $data['title'] = 'Detail Arsip Surat';
        $data['surat'] = $this->M_Arsip->getArsipById($id_surat);

        $this->load->view('template/Header', $data);
        $this->load->view('Arsip/Lihat_Surat', $data);
        $this->load->view('template/Footer', $data);
    }

    public function Edit_Surat($id_surat) {
        $data['title'] = 'Edit Arsip Surat';
        $data['kategori_surat'] = ['Undangan','Nota Dinas', 'Pengumuman', 'Pemberitahuan'];
        $data['surat'] = $this->M_Arsip->Detail_Surat($id_surat);

        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('judul', 'Judul Surat', 'required');
    
        if($this->form_validation->run()==FALSE) {
            $this->load->view('template/Header', $data);
            $this->load->view('Arsip/Edit_Surat', $data);
            $this->load->view('template/Footer', $data);
        }
        else {
            $this->M_Arsip->Edit_Surat($id_surat);
            redirect('C_Arsip/Lihat_Surat/'.$id_surat, 'refresh');
        }
    }

    public function About() {
        $data['title'] = 'About';

        $this->load->view('template/Header', $data);
        $this->load->view('Arsip/About', $data);
        $this->load->view('template/Footer', $data);
    }

}

/* End of file C_Arsip.php */

?>