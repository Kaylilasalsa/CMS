<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
        public function __construct(){
            parent ::__construct();
            $this->load->library('session');
             if($this->session->userdata('level')==NULL){
            redirect('auth');
            }
        }

        public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tgl','DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
                'judul_halaman' => 'Halaman konten',
                'kategori'      =>  $kategori,
                'konten'        =>  $konten
        );
		$this->template->load('admin/template_admin','admin/konten_index',$data);
	   }
       public function simpan(){
            $namafoto = date("YmdHis") . '.jpg';
            $config['upload_path']          = 'assets/upload/konten/';
            $config['max_size']             = 500 * 1024; // 500 KB
            $config['overwrite']            = TRUE;
            $config['file_name']            = $namafoto;
            $config['allowed_types']        = '*';
            $this->load->library('upload', $config);
             if ($_FILES['foto']['size'] >= 500 * 1024) { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php 
                redirect('admin/konten');
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
    'id_kategori' => $this->input->post('id_kategori'), 
    'keterangan'  => $this->input->post('keterangan'),
    'harga'  => $this->input->post('harga'),
    'tgl'         => date('Y-m-d'),
    'foto'        => $namafoto,
    'username'    => $username, 
    'slug'        => str_replace(' ', '-', $this->input->post('judul')),
      );
      $this->db->insert('konten', $data);

              $this->session->set_flashdata('alert','<div class="alert alert-primary alert-dismissible" role="alert">
              berhasil menambahkan konten
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
              redirect('admin/konten');

        }
      
        public function update() {
          // Ambil nama foto lama dari input
          $namafoto = $this->input->post('nama_foto');
          
          // Konfigurasi upload
          $config['upload_path']   = 'assets/upload/konten/';
          $config['allowed_types'] = 'jpg|jpeg|png';
          $config['max_size']      = 500 * 1024; // Maksimal 500 KB
          $config['overwrite']     = TRUE; 
          $config['file_name']     = $namafoto; // Gunakan nama file lama jika overwrite
          
          // Load library upload
          $this->load->library('upload', $config);
      
          // Inisialisasi variabel foto yang akan diupdate
          $uploadedfoto = $namafoto; // Default gunakan foto lama
      
          // Validasi file jika ada file yang diunggah
          if (!empty($_FILES['foto']['name'])) { // Cek jika user upload foto baru
              if ($_FILES['foto']['size'] >= 500 * 1024) { // Cek ukuran file
                  $this->session->set_flashdata('alert', 
                      '<div class="alert alert-danger alert-dismissible" role="alert">
                          Ukuran foto terlalu besar, upload ulang foto dengan ukuran kurang dari 500 KB.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>');
                  redirect('admin/konten');
                  return;
              } elseif (!$this->upload->do_upload('foto')) { // Cek proses upload
                  $this->session->set_flashdata('alert', 
                      '<div class="alert alert-danger alert-dismissible" role="alert">
                          Gagal mengupload foto: ' . $this->upload->display_errors() . '
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>');
                  redirect('admin/konten');
                  return;
              } else {
                  // Upload berhasil, ambil nama file baru
                  $data_upload = $this->upload->data();
                  $uploadedfoto = $data_upload['file_name'];
              }
          }
      
          // Data yang akan diupdate
          $data = array(
              'judul'       => $this->input->post('judul'),
              'id_kategori' => $this->input->post('id_kategori'), 
              'keterangan'  => $this->input->post('keterangan'),
              'harga'  => $this->input->post('harga'),
              'slug'        => str_replace(' ', '-', $this->input->post('judul')),
              'foto'        => $uploadedfoto, // Gunakan foto baru atau lama
          );
      
          // Kondisi WHERE untuk update
          $where = array(
              'foto' => $this->input->post('nama_foto')
          );
      
          // Proses update ke database
          $this->db->update('konten', $data, $where);
      
          // Set notifikasi berhasil
          $this->session->set_flashdata('alert',
              '<div class="alert alert-primary alert-dismissible" role="alert">
                  Berhasil memperbarui konten.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
          
          // Redirect kembali ke halaman konten
          redirect('admin/konten');
      }
      
          public function delete_data($id){
           $filename = FCPATH . '/assets/upload/konten/'.$id;
              if (file_exists($filename)){
                  unlink("./assets/upload/konten/" . $id);
              }
       
            $where = array(
              'foto'   => $id
            );
            $this->db->delete('konten',$where);
            $this->session->set_flashdata('alert','<div class="alert alert-primary alert-dismissible" role="alert">
            Berhasil menghapus kategori.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          ');
            redirect('admin/konten');
          }
        }
    
