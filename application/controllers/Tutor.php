<?php
class Tutor extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('MASUK') != TRUE){
            $url=base_url();
            redirect($url);
        }
        $this->load->model("Tutor_model");
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public $error ="";
    public $status ="";

    public function index()
    {
        $data["tutors"] = $this->Tutor_model->getAll();
        $data["title"] = "Data Tutor";
        $data["actor"] = "Tutor";
    
        $this->load->view('tutor/list',$data);    
    }

    public function hapus($id=null)
    {
        if (!isset($id)){
            redirect('siswa');
        }
        else{
            $this->Tutor_model->delete($id);
            redirect('tutor');
        }
    }

    public function ubah($id=null)
    {
        $tutor = $this->Tutor_model;
        
        $data["title"] = "Ubah Data";
        $data["actor"] = "Tutor";

        $data['tutor'] = $tutor->getByid($id);
        
        $this->form_validation->set_rules('tutor_nip','NIP','required|numeric');
        $this->form_validation->set_rules('tutor_nama','NAMA','required');


        if ($this->form_validation->run() == FALSE){
            $this->load->view('tutor/ubah',$data);
        } else{

            if(isset($_POST["submit"])) {
                $tutor->perbarui();
                $this->session->set_flashdata('flash', 'Ditambahkan');
            }
            redirect('tutor');
        }
    }

    public function tambah(){
        $tutor = $this->Tutor_model;

        $data["title"] = "Tambah Data";
        $data["actor"] = "Tutor";
        
        $this->form_validation->set_rules('tutor_nip','NIP','required|numeric');
        $this->form_validation->set_rules('tutor_nama','NAMA','required');
    

        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('tutor/tambah',$data);
        } else{

            if(isset($_POST["submit"])) {

                $tutor->simpan();
                $this->session->set_flashdata('flash', 'Ditambahkan');
            }
            redirect('tutor');
        }

    }
    
}