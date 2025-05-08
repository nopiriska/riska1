<?php

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model'); // Load the Barang_model
    }

    public function index()
    {
        $data['barang'] = $this->Barang_model->get_all_barang(); // Get all barang data from the model
  $this->load->view('template/head'); 
        $this->load->view('kelola_produk', $data);
$this->load->view('template/footer'); 
   
    // Load the view and pass the data
    }

    public function tambah()
    {
        $this->load->view('tambah');
$this->load->view('template/footer');    
}

    public function proses_tambah()
    {
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $kategori = $this->input->post('kategori');

        $data = array(
            'nama_barang' => $nama_barang,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'stok' => $stok,
            'kategori' => $kategori
        );

        $this->Barang_model->insert_barang($data); // Insert the new barang data into the database
        redirect('barang'); // Redirect back to the barang list
    }

    public function edit_view($id_barang)
    {
        $data['barang'] = $this->Barang_model->get_barang_by_id($id_barang); // Get barang data by ID
$this->load->view('template/footer');// Load the edit view and pass the barang data
        $this->load->view('edit_view', $data); 
$this->load->view('template/head'); 
    }

    public function proses_edit()
    {
        $id_barang = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $kategori = $this->input->post('kategori');

        $data = array(
            'nama_barang' => $nama_barang,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'stok' => $stok,
            'kategori' => $kategori
        );

        $this->Barang_model->update_barang($id_barang, $data); // Update the barang data in the database
        redirect('barang'); // Redirect back to the barang list
    }

    public function hapus($id_barang)
    {
        $this->Barang_model->delete_barang($id_barang); // Delete the barang data from the database
        redirect('barang'); // Redirect back to the barang list
    }
}