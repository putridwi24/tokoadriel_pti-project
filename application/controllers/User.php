<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'noRef.php';

class User extends CI_Controller
{
    // menarik data db models
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_adriel');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');

        $data['habis'] = $this->Data_adriel->countstock();
        $data['expired'] = $this->Data_adriel->countexp();
        $data['hampir_habis'] = $this->Data_adriel->hampir_habis();
        $data['hampir_exp'] = $this->Data_adriel->hampir_kadal();
        $this->load->view('templates/topbar', $data, true);

    }


    public function beranda ()
    {
        // menu awal setelah login
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sumObat'] = $this->Data_adriel->total_obat();
        $data['sumKat'] = $this->Data_adriel->total_kategori();
        $data['sumPemasok'] = $this->Data_adriel->total_pemasok();
        $data['sumJual'] = $this->Data_adriel->count_totaljual();
        $data['sumBeli'] = $this->Data_adriel->count_totalbeli();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/beranda', $data);
        $this->load->view('templates/footer');
    }

    public function menukeloladata ()
    {
        // menu awal setelah login
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sumObat'] = $this->Data_adriel->total_obat();
        $data['sumKat'] = $this->Data_adriel->total_kategori();
        $data['sumPemasok'] = $this->Data_adriel->total_pemasok();
        $data['sumJual'] = $this->Data_adriel->count_totaljual();
        $data['sumBeli'] = $this->Data_adriel->count_totalbeli();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/menukeloladata', $data);
        $this->load->view('templates/footer');
    }

    public function menulaporan ()
    {
        // menu awal setelah login
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/menulaporan', $data);
        $this->load->view('templates/footer');
    }

    public function laporan_total ()
    {
        // menu awal setelah login
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/laporan_total', $data);
        $this->load->view('templates/footer');
    }

    public function laporan_stok_barang ()
    {
        // menu awal setelah login
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/laporan_stok_barang', $data);
        $this->load->view('templates/footer');
    }

    // Tabel kedaluwarsa
    public function tabel_kedaluwarsa()
    {
        $data['title'] = 'Tabel Kedaluwarsa';
        $data['title1'] = 'Tabel Obat Akan Kedaluwarsa';
        $data['title2'] = 'Tabel Obat Sudah Kedaluwarsa';

        $data['table_almostexp'] = $this->Data_adriel->almostexp()->result();
        $data['table_exp'] = $this->Data_adriel->expired()->result();

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['obat'] = $this->Data_adriel->getDataAdriel('tb_obat');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tabel_kedaluwarsa', $data);
        $this->load->view('templates/footer');
    }

        // Tabel stok
    public function tabel_stok()
    {
        $data['title'] = 'Tabel Stok Obat';
        $data['title1'] = 'Tabel Stok Obat Akan Habis';
        $data['title2'] = 'Tabel Stok Obat Sudah Habis';


        $data['habis_stok'] = $this->Data_adriel->habis_stok()->result();
        $data['almstok'] = $this->Data_adriel->almoststok()->result();

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['obat'] = $this->Data_adriel->getDataAdriel('tb_obat');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tabel_stok', $data);
        $this->load->view('templates/footer');
    }

            // Tabel kedaluwarsa
    //coba laporan baru
    // public function lihat_laporan_penjualan()
    // {
    //     $data['title'] = 'Laporan Penjualan Bulanan';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $bulan=$this->input->post('bulan');
    //     $tahun=$this->input->post('tahun');
    //     $bulantahun=$bulan.$tahun;
    //     $data['lap_jual'] = $this->db->query("SELECT * form tb_penjualan where tgl_beli='$bulantahun' ORDER BY id_jual ASC")->result();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('user/laporan_penjualan', $data);
    //     $this->load->view('templates/footer');
    // }
    
    public function tabel_laporan()
    {
        $data['title'] = 'Rekapitulasi Bulanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['sumJual'] = $this->Data_adriel->count_totaljual();
        $data['sumBeli'] = $this->Data_adriel->count_totalbeli();
		$data['report'] = $this->Data_adriel->get_laporan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tabel_laporan', $data);
        $this->load->view('templates/footer');
    }

    // method lihat obat
    public function lihat_obat()
    {
        $data['title'] = 'Lihat Obat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['obat'] = $this->Data_adriel->getDataAdriel('tb_obat');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_obat', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_supplier()
    {
        $data['title'] = 'Lihat Supplier';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['supplier'] = $this->Data_adriel->getDataAdriel('tb_supplier');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_supplier', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_produk()
    {
        $data['title'] = 'Lihat Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['barang'] = $this->Data_adriel->getDataAdriel('tb_barang');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_produk', $data);
        $this->load->view('templates/footer');
    }

        // method lihat pemasok
    public function lihat_pemasok()
    {
        $data['title'] = 'Lihat Pemasok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['pemasok'] = $this->Data_adriel->getDataAdriel('tb_pemasok');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_pemasok', $data);
        $this->load->view('templates/footer');
    }
 
            // method lihat kategori
    public function lihat_kategori()
    {
        $data['title'] = 'Lihat Kategori';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['kategori'] = $this->Data_adriel->getDataAdriel('tb_kategori');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_kategori', $data);
        $this->load->view('templates/footer');
    }

         // method lihat penjualan
    public function lihat_penjualan()
    {
        $data['title'] = 'Tabel Penjualan Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['penjualan'] = $this->Data_adriel->getDataAdriel('tb_penjualan');
        $data['tb_jual'] = $this->Data_adriel->penjualan()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_penjualan', $data);
        $this->load->view('templates/footer');
    }

    
         // method lihat pembelian
    public function lihat_pembelian()
    {
        $data['title'] = 'Tabel Pembelian Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // queri pemanggilan tabel di DB
        $data['pembelian'] = $this->Data_adriel->getDataAdriel('tb_pembelian');
        $data['tb_beli'] = $this->Data_adriel->pembelian()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_pembelian', $data);
        $this->load->view('templates/footer');
    }


    // WILAYAH INPUT INPUT DATA

        // method form pemasok
    public function form_obat()
    {
        $data['title'] = 'Tambah Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['get_kat'] = $this->Data_adriel->get_kategori();
        $data['get_pemasok'] = $this->Data_adriel->get_pemasok();

        $this->form_validation->set_rules('nama_obat', 'Nama Pemasok', 'required');
        $this->form_validation->set_rules('penyimpanan', 'Penyimpanan', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        $this->form_validation->set_rules('nama_kat', 'Kategori', 'required');
        $this->form_validation->set_rules('kedaluwarsa', 'Kedaluwarsa', 'required');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|numeric');
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required|numeric');
        $this->form_validation->set_rules('nama_pemasok', 'Nama Pemasok', 'required');
 
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/form_obat', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->Data_adriel->tambah_obat();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('user/lihat_obat');
        }
    }

    public function form_tambahbarang()
    {
        $data['title'] = 'Tambah Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['get_kat'] = $this->Data_adriel->get_kategori();
        $data['get_supplier'] = $this->Data_adriel->get_supplier();

        $this->form_validation->set_rules('nama_barang', 'Nama Produk', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        $this->form_validation->set_rules('nama_kat', 'Kategori', 'required');
        $this->form_validation->set_rules('kedaluwarsa', 'Kedaluwarsa', 'required');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|numeric');
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required|numeric');
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
 
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/form_tambahbarang', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->Data_adriel->tambah_obat();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('user/lihat_obat');
        }
    }

            // method form kategori
    public function form_tambahkategori()
    {
        $data['title'] = 'Tambah Kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/form_tambahkategori', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->Data_adriel->tambah_kategori();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('user/lihat_kategori');
        }
    }

            // method form pemasok
    public function form_tambahsupplier()
    {
        $data['title'] = 'Tambah Pemasok';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/form_tambahsupplier', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->Data_adriel->tambah_supplier();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('user/lihat_supplier');
        }
    }


    // form pembelian
        public function form_pembelian()
    {
        $data['title'] = 'Tambah Pembelian dari Pemasok';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['get_pemasok'] = $this->Data_adriel->get_pemasok();
        $data['get_med'] = $this->Data_adriel->get_medicine();

        $this->form_validation->set_rules('nama_pemasok', 'Nama Pemasok', 'required');
        $this->form_validation->set_rules('tgl_beli', 'Tanggal Beli', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/form_pembelian', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->Data_adriel->tambah_pembelian();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('user/lihat_pembelian');
        }
    }

        // form penjualan
    public function form_penjualan()
    {
        $data['title'] = 'Tambah Penjualan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['get_med'] = $this->Data_adriel->get_medicine();
        $data['get_pemasok'] = $this->Data_adriel->get_pemasok();
        $data['get_kat'] = $this->Data_adriel->get_kategori();

        $this->form_validation->set_rules('nama_pembeli', 'Nama Pembeli', 'required');
        $this->form_validation->set_rules('tgl_beli', 'Tanggal Beli', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/form_penjualan', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->Data_adriel->tambah_penjualan();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('user/lihat_penjualan');
        }
    }


    // WILAYAH EDIT EDIT DATA //

        // edit obat 
    public function edit_barang($id)
    {
        
        $data['title'] = 'Ubah Data Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Data_adriel->getBarang($id);

        $data['get_kat'] = $this->Data_adriel->get_kategori();
        $data['get_pemasok'] = $this->Data_adriel->get_pemasok();
        // $data['obat_edit'] = $this->Data_adriel->edit_data_obat('tb_obat');

        $this->form_validation->set_rules('nama_obat', 'Nama Pemasok', 'required');
        $this->form_validation->set_rules('penyimpanan', 'Penyimpanan', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        $this->form_validation->set_rules('nama_kat', 'Kategori', 'required');
        $this->form_validation->set_rules('kedaluwarsa', 'Kedaluwarsa', 'required');
        $this->form_validation->set_rules('h_jual', 'Harga Jual', 'required|numeric');
        $this->form_validation->set_rules('h_beli', 'Harga Beli', 'required|numeric');
        $this->form_validation->set_rules('nama_pemasok', 'Nama Pemasok', 'required');
 

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit_barang', $data);
            $this->load->view('templates/footer');
        }
        else {
            // var_dump($this->input->post("h_jual"));die;
            $this->Data_adriel->edit_obatan();
            $this->session->set_flashdata('flash','diubah');
            redirect('user/lihat_produk');
        }
    }
    
    // method ubah kategori
    public function edit_kategori($id_kat)
    {
        $data['title'] = 'Ubah Kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Data_adriel->getKategori($id_kat);


        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit_kategori', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->Data_adriel->edit_kat();
            $this->session->set_flashdata('flash','diubah');
            redirect('user/lihat_kategori');
        }
    }

    // method ubah pemasok
    public function edit_supplier($id_supplier)
    {
        $data['title'] = 'Ubah Supplier';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->Data_adriel->getSupplier($id_supplier);


        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit_supplier', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->Data_adriel->edit_supplier();
            $this->session->set_flashdata('flash','diubah');
            redirect('user/lihat_supplier');
        }
    }

    // LAPORAN
    function gabung()
	{
       $tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->Data_adriel->get_gabung($tahun_beli);
		echo json_encode($data);
	}

    

    // WILAYAH HAPUS HAPUS DATA

        // method hapus data obat
    public function hapus_obat($id)
    {
        $this->Data_adriel->hapus_obat($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('user/lihat_obat');
    }

    // method hapus data kategori
    public function hapus_kategori($id_kat)
    {
        $this->Data_adriel->hapus_kat($id_kat);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('user/lihat_kategori');
    }
    
    // method hapus data kategori
    public function hapus_pemasok($id_pemasok)
    {
        $this->Data_adriel->hapus_pmasok($id_pemasok);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('user/lihat_pemasok');
    }

    // TRANSAKSI
    function getmedbysupplier(){
        $nama_pemasok=$this->input->post('nama_pemasok');
        $data=$this->Data_adriel->getmedbysupplier($nama_pemasok);
        echo json_encode($data);
    }

    function product()
	{
	    $nama_obat=$this->input->post('nama_obat');
        $data=$this->Data_adriel->get_product($nama_obat);
        echo json_encode($data);
	}

    // LAPORAN
    function totale()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->Data_adriel->get_total($tahun_beli);
		echo json_encode($data);
	}

    // NOTA INI
    public function lihat_nota_penjualan($ref)
    {
        $data['title'] = 'Tanda Bukti';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('ref' => $ref);
        $data['table_invoice'] = $this->Data_adriel->show_data($where, 'tb_penjualan')->result();
		$data['show_invoice'] = $this->Data_adriel->show_invoice($where, 'tb_penjualan')->result();

        // queri pemanggilan tabel di DB
        $data['penjualan'] = $this->Data_adriel->getDataAdriel('tb_penjualan');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_nota_penjualan', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_nota_pembelian($ref)
    {
        $data['title'] = 'Tanda Bukti';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('ref' => $ref);
        $data['table_invoice'] = $this->Data_adriel->show_data($where, 'tb_pembelian')->result();
		$data['show_invoice'] = $this->Data_adriel->show_invoice($where, 'tb_pembelian')->result();

        // queri pemanggilan tabel di DB
        $data['penjualan'] = $this->Data_adriel->getDataAdriel('tb_penjualan');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_nota_pembelian', $data);
        $this->load->view('templates/footer');
    }
    
}