<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus extends CI_Controller {
function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('user_model');
    } 
    public function index(){
        $this->load->view('index');
    } 
     public function login(){
        $this->load->view('login');
    } 

    public function table(){
        $this->load->model('user_model');
        $table['v_userpinjam'] = $this->user_model->list_table()->result();
        $this->load->view('table',$table);
    }

    public function anggota(){
        $this->load->model('user_model');
        $table['anggota'] = $this->user_model->list_anggota()->result();
        $this->load->view('anggota',$table);
    }

    public function buku(){
         $this->load->model('user_model');
         $data['buku'] = $this->user_model->list_buku()->result();
         $this->load->view('buku',$data);
     } 

    public function pinjam(){
         $this->load->model('user_model');
         $data['pinjam'] = $this->user_model->list_pinjam()->result();
         $this->load->view('pinjam',$data);
     }

    public function member(){
         $this->load->model('user_model');
         $data['member'] = $this->user_model->list_member()->result();
         $this->load->view('member',$data);
     }
  
  public function home()
  {
    $this->load->view('home');
  }

   function proses(){
         $email = $this->input->post('email');
         $password = $this->input->post('password');
         
         if ($this->user_model->cek_login($email, $password)== TRUE)
         {
             redirect('perpus/home');
         }else{
              redirect('perpus');
         }}

    function register()
    {           
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|max_length[20]');           
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|max_length[80]');           
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');         
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirmpassword', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
 
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('register');
        }
        else
        {
 
            $form_data = array(
                            'firstname' => set_value('firstname'),
                            'lastname' => set_value('lastname'),
                            'email' => set_value('email'),
                            'password' => set_value('password')
                        );
 
            if ($this->user_model->SaveForm($form_data) == TRUE) 
            {
                redirect('perpus');
            }
            else
            {
            redirect('perpus/register');
            }
        }
 } 
  public function data(){

    $this->load->model('model_laporan'); 

  }

  public function rekap()
  {
    $data = array(

      'title'   => 'Rekap Absen',
      'data_laporan'  => $this->model_laporan->get_all(),

    );

    $this->load->view('data_laporan', $data);
  }

function register2()
    {           
        $this->form_validation->set_rules('nim', 'NIM', 'required|max_length[20]');           
        $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[80]');           
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|max_length[100]');         
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|max_length[80]');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
 
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('register2');
        }
        else
        {
 
            $form_data = array(
                            'nim' => set_value('nim'),
                            'nama' => set_value('nama'),
                            'no_hp' => set_value('no_hp'),
                            'email' => set_value('email'),
                            'alamat' => set_value('alamat')
                        );
 
            if ($this->user_model->SaveForm2($form_data) == TRUE) 
            {
                redirect('perpus');
            }
            else
            {
            redirect('perpus/register2');
            }
        }
 } 

public function tambah_anggota()
  {
    $data = array(

      'title'   => 'Tambah Anggota'

    );

    $this->load->view('tambah_anggota', $data);
  }

  public function simpan_anggota()
  {
    $data = array(
      'id_anggota'         => $this->input->post("id_anggota"),
      'nim'                => $this->input->post("nim"),
      'nama'               => $this->input->post("nama"),
      'no_hp'              => $this->input->post("no_hp"),
      'email'              => $this->input->post("email"),
      'alamat'             => $this->input->post("alamat")
      
    );

    $this->user_model->simpan_anggota($data);

    $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                          </div>');

    redirect('perpus/anggota');

  }

public function edit_anggota($id_anggota)
  {
    $id_anggota = $this->uri->segment(3);

    $data = array(

      'title'   => 'Edit Anggota',
      'anggota' => $this->user_model->edit_anggota($id_anggota)

    );

    $this->load->view('update_anggota', $data);
  }

  public function update_anggota()
  {
    $id['id_anggota'] = $this->input->post("id_anggota");
    $data = array(
      'nim'                => $this->input->post("nim"),
      'nama'               => $this->input->post("nama"),
      'no_hp'              => $this->input->post("no_hp"),
      'email'              => $this->input->post("email"),
      'alamat'             => $this->input->post("alamat")
    );

    $this->user_model->update_anggota($data, $id);

    $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                          </div>');

    //redirect
    redirect('perpus/anggota');

  }

  public function hapus_anggota($id_anggota)
  {
    $id['id_anggota'] = $this->uri->segment(3);
    
    $this->user_model->hapus_anggota($id);

    //redirect
    redirect('perpus/anggota');

  }

  public function tambah_buku()
  {
    $data = array(

      'title'   => 'Tambah Buku'

    );

    $this->load->view('tambah_buku', $data);
  }

  public function simpan_buku()
  {
    $data = array(
      'kd_buku'              => $this->input->post("kd_buku"),
      'judul'                => $this->input->post("judul"),
      'pengarang'            => $this->input->post("pengarang"),
      'penerbit'             => $this->input->post("penerbit"),
      'stok'                 => $this->input->post("stok"),
      'th_terbit'            => $this->input->post("th_terbit"),
      'id_kategori'          => $this->input->post("id_kategori")
      
    );

    $this->user_model->simpan_buku($data);

    $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                          </div>');

    redirect('perpus/buku');

  }

public function edit_buku($kd_buku)
  {
    $kd_buku = $this->uri->segment(3);

    $data = array(

      'title'   => 'Edit Buku',
      'buku' => $this->user_model->edit_buku($kd_buku)

    );

    $this->load->view('update_buku', $data);
  }

  public function update_buku()
  {
    $id['kd_buku'] = $this->input->post("kd_buku");
    $data = array(
      'judul'                => $this->input->post("judul"),
      'pengarang'            => $this->input->post("pengarang"),
      'penerbit'             => $this->input->post("penerbit"),
      'stok'                 => $this->input->post("stok"),
      'th_terbit'            => $this->input->post("th_terbit"),
      'id_kategori'          => $this->input->post("id_kategori")
    );

    $this->user_model->update_buku($data, $id);

    $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                          </div>');

    //redirect
    redirect('perpus/buku');

  }

  public function hapus_buku($kd_buku)
  {
    $id['kd_buku'] = $this->uri->segment(3);
    
    $this->user_model->hapus_buku($id);

    //redirect
    redirect('perpus/buku');

  }

public function tambah_pinjam()
  {
    $data = array(

      'title'   => 'Tambah Pinjam'

    );

    $this->load->view('tambah_pinjam', $data);
  }

  public function simpan_pinjam()
  {
    $data = array(
      'kd_transaksi'              => $this->input->post("kd_transaksi"),
      'id_anggota'                => $this->input->post("id_anggota"),
      'kd_buku'                   => $this->input->post("kd_buku"),
      'tanggal_pinjam'            => $this->input->post("tanggal_kembali"),
      'tanggal_kembali'           => $this->input->post("tanggal_kembali"),
      'jml_pinjam'                => $this->input->post("jml_pinjam"),
      'denda'                     => $this->input->post("denda")
      
    );

    $this->user_model->simpan_pinjam($data);

    $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                          </div>');

    redirect('perpus/pinjam');

  }

public function edit_pinjam($kd_transaksi)
  {
    $kd_transaksi = $this->uri->segment(3);

    $data = array(

      'title'   => 'Edit Pinjam',
      'pinjam' => $this->user_model->edit_pinjam($kd_transaksi)

    );

    $this->load->view('update_pinjam', $data);
  }

  public function update_pinjam()
  {
    $id['kd_transaksi'] = $this->input->post("kd_transaksi");
    $data = array(
      'id_anggota'                => $this->input->post("id_anggota"),
      'kd_buku'                   => $this->input->post("kd_buku"),
      'tanggal_pinjam'            => $this->input->post("tanggal_pinjam"),
      'tanggal_kembali'           => $this->input->post("tanggal_kembali"),
      'jml_pinjam'                => $this->input->post("jml_pinjam"),
      'denda'                     => $this->input->post("denda")
    );

    $this->user_model->update_pinjam($data, $id);

    $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                          </div>');

    //redirect
    redirect('perpus/pinjam');

  }

  public function hapus_pinjam($kd_transaksi)
  {
    $id['kd_transaksi'] = $this->uri->segment(3);
    
    $this->user_model->hapus_pinjam($id);

    //redirect
    redirect('perpus/pinjam');


  }

  public function terima_member()
  {
    $this->load->model('user_model');
    $id_member = $this->uri->segment(3);
    $this->user_model->terima_member($id_member);

    if ($this->user_model->terima_member($id_member,$query) == FALSE )
        {
            $this->session->set_flashdata('message','Member Berhasil Menjadi Anggota');
            redirect('perpus/member');
        }
        else
        {
            $this->session->set_flashdata('message','Data Member Salah');
            redirect('perpus/member');
        }

  }

  public function tolak_member($id_member)
  {
    $id['id_member'] = $this->uri->segment(3);
    
    $this->user_model->tolak_member($id);

    //redirect
    redirect('perpus/member');

  }

 }