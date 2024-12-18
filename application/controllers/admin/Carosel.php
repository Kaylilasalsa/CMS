<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carosel extends CI_Controller {
        public function __construct(){
            parent ::__construct();
            $this->load->library('session');
             if($this->session->userdata('level')==NULL){
            redirect('auth');
            }
        }

        public function index(){
        $this->db->from('carosel');
        $carosel = $this->db->get()->result_array();
        $data = array(
                'judul_halaman' => 'Halaman carosel',
                'carosel'      =>  $carosel,
        );
		$this->template->load('admin/template_admin','admin/carosel',$data);
	   }
       public function simpan(){
            $namafoto = date("YmdHis") . '.jpg';
            $config['upload_path']          = 'assets/upload/Carosel/';
            $config['max_size']             = 3000 * 1024; // 500 KB
            $config['overwrite']            = TRUE;
            $config['file_name']            = $namafoto;
            $config['allowed_types']        = '*';
            $this->load->library('upload', $config);
             if ($_FILES['foto']['size'] >= 3000 * 1024) {  $this->session->set_flashdata('alert','
                <div class="alert alert-danger alert-dismissible" role="alert">
                    Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 1000 KB
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/carosel');
            } elseif (!$this->upload->do_upload('foto')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
            
         
              // Jika `die;` untuk debugging, letakkan di sini
              // die;
              $this->db->from('konten');
              $this->db->where('judul', $this->input->post('judul'));
              $cek = $this->db->get()->result_array();
              if($cek<>NULL){
                  $this->session->set_flashdata('alert','<div class="alert alert-primary alert-dismissible" role="alert">
            judul konten sudah di gunakan.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
              redirect('admin/konten');
              }
              $username = $this->session->userdata('username');
if (!$username) {
    $this->session->set_flashdata('alert', '<div class="alert alert-danger">Session expired. Please log in again.</div>');
    redirect('auth');
}

    $data = array(
    'judul'       => $this->input->post('judul'),
    'foto'        => $namafoto,
    );
    $this->db->insert('carosel', $data);
    $this->session->set_flashdata('alert','<div class="alert alert-primary alert-dismissible" role="alert">
    berhasil menambahkan carousel.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>');
    redirect('admin/carosel');

        }
          public function delete_data($id){
           $filename = FCPATH . '/assets/upload/carosel/'.$id;
              if (file_exists($filename)){
                  unlink("./assets/upload/carosel/" . $id);
              }
       
            $where = array(
              'foto'   => $id
            );
            $this->db->delete('carosel',$where);
            $this->session->set_flashdata('alert','<div class="alert alert-primary alert-dismissible" role="alert">
            Berhasil menghapus kategori.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          ');
            redirect('admin/carosel');
          }
        }
    
