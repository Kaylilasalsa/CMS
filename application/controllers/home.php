<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        public function __construct(){
            parent ::__construct();
        }
        public function index(){
            $this->db->from('konfigurasi');
            $konfigurasi =$this->db->get()->row();
            $this->db->from('carosel');
            $carosel = $this->db->get()->result_array();

            $this->db->from('konten');
            $konten = $this->db->get()->result_array();

            $this->db->from('kategori');
            $kategori = $this->db->get()->result_array();

            $data = array(
                'Judul_halaman' => 'Beranda | kayii',
                'konfigurasi' => $konfigurasi,
                'carosel' => $carosel,
                'konten' => $konten,
                'kategori' => $kategori,
            );
            $this->load->view('beranda', $data);
	   }
       
       public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('carosel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();


		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->join('user c','a.username=c.username',"left");
        $this->db->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();	
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
  
		$data = array(
			'Judul_halaman' => 	$nama_kategori." | kayii",
			'konten' => $konten,
                'kategori' => $kategori,
			'konfig'=> $konfig,
			
			'konten'=> $konten,
		);
		$this->load->view('kategori', $data);
    }

    public function about()
	{
		// Ambil konfigurasi
		$this->db->from('konfigurasi');
            $konfigurasi =$this->db->get()->row();

		// Ambil kategori
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		// Ambil semua konten
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->join('user c','a.username=c.username',"left");
        // $this->db->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();	

		// Kirim data ke view
		$data = array(
			'Judul_halaman' => 'Beranda | kayii',
                'konfigurasi' => $konfigurasi,          
                'konten' => $konten,
                'kategori' => $kategori,
	
		);

		$this->load->view('about', $data);
	}

	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->join('user c','a.username=c.username',"left");
		$this->db->where('slug',$id);
		$konten = $this->db->get()->row();
		$data = array(
			'Judul_halaman' => 	$konten->judul." | kayii",
			'konten' => $konten,
         	'kategori' => $kategori,
			'konfig'=> $konfig,
			'konten'=> $konten,
		);
		$this->load->view('detail', $data);
	}

}
