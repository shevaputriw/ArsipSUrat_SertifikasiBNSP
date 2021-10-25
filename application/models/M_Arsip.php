<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Arsip extends CI_Model {

    public function getAllSurat() {
        return $this->db->get('surat')->result_array();
    }

    public function Tambah_Surat() {
        $this->id_surat = uniqid();
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            "nomor_surat" => $this->input->post('nomor_surat', true),
            "kategori_surat" => $this->input->post('kategori_surat', true),
            "judul" => $this->input->post('judul', true),
            "file_surat" => $this->uploadSurat(),
            "waktu_pengarsipan" => date('Y-m-d H:i:s', time())
        ];
        $this->db->insert('surat', $data);
    }

    public function uploadSurat() {
        $config['upload_path'] = './upload/surat/'; 
        $config['allowed_types'] = 'pdf';
        $config['overwrite'] = true;

        $this->upload->initialize($config);
        $this->load->library('upload',$config);
        if($this->upload->do_upload('file_surat')) {
            return $this->upload->data("file_name");
        }
        return $this->input->post('old_file', true);
    }

    public function Hapus_Surat($id_surat){
        return $this->db->delete('surat',array("id_surat"=>$id_surat));
    }

    public function getArsipById($id_surat) {
        $this->db->select('*');
        $this->db->where('id_surat' , $id_surat);
        $query = $this->db->get('surat');
        return $query->result_array();
    }

    public function Detail_Surat($id_surat) {
        $query=$this->db->get_where('surat',array('id_surat'=>$id_surat));

        return $query->row_array();
    }

    public function Edit_Surat($id_surat) {
        $post=$this->input->post();
        date_default_timezone_set('Asia/Jakarta');

        $this->id_surat = $post["id_surat"];
        $this->nomor_surat = $post["nomor_surat"];
        $this->judul = $post["judul"];
        $this->kategori_surat = $post["kategori_surat"];
        $this->waktu_pengarsipan = date('Y-m-d H:i:s', time());
        $this->file_surat = $this->uploadSurat();
        
        $this->db->update('surat',$this, array('id_surat' => $post['id_surat']));
    }

}

/* End of file M_Arsip.php */

?>