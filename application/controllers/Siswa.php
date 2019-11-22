<?php

Class Siswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        //chekAksesModule();
        $this->load->library('Ssp');
        $this->load->model('Siswa_model');
    }

    
    
    function data() {
   
        // nama tabel
        $table = 'siswa';
        // nama PK
        $primaryKey = 'siswa_id';
        // list field
        $columns = array(
            array('db' => 'siswa_id', 'dt' => 'siswa_id'),
            array('db' => 'siswa_nis', 'dt' => 'siswa_nis'),
            array('db' => 'siswa_nisn', 'dt' => 'siswa_nisn'),
            array('db' => 'siswa_nama', 'dt' => 'nama'),
            array('db' => 'siswa_tanggal_lahir', 'dt' => 'siswa_tanggal_lahir'),
            array(
                'db' => 'siswa_id',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('siswa/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('siswa/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                }
            )
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }


    function index() {
        $this->load->model('Siswa_model');
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->template->load('template', 'siswa/list',$data);
    }

//     function add() {
//         if (isset($_POST['submit'])) {
//             $uploadFoto = $this->upload_foto_siswa();
//             $this->Model_siswa->save($uploadFoto);
//             redirect('siswa');
//         } else {
//             $this->template->load('template', 'siswa/add');
//         }
//     }
    
//     function edit(){
//         if(isset($_POST['submit'])){
//             $uploadFoto = $this->upload_foto_siswa();
//             $this->Model_siswa->update($uploadFoto);
//             redirect('siswa');
//         }else{
//             $nim           = $this->uri->segment(3);
//             $data['siswa'] = $this->db->get_where('tbl_siswa',array('nim'=>$nim))->row_array();
//             $this->template->load('template', 'siswa/edit',$data);
//         }
//     }
    
//     function delete(){
//         $nim = $this->uri->segment(3);
//         if(!empty($nim)){
//             // proses delete data
//             $this->db->where('nim',$nim);
//             $this->db->delete('tbl_siswa');
//         }
//         redirect('siswa');
//     }
    
//     function upload_foto_siswa(){
//         $config['upload_path']          = './uploads/';
//         $config['allowed_types']        = 'jpg|png';
//         $config['max_size']             = 1024; // imb
//         $this->load->library('upload', $config);
//             // proses upload
//         $this->upload->do_upload('userfile');
//         $upload = $this->upload->data();
//         return $upload['file_name'];
//     }
    
    
//     function siswa_aktif(){
//         $this->template->load('template', 'siswa/siswa_aktif');
//     }
    
//     function load_data_siswa_by_rombel(){
//         $rombel = $_GET['rombel'];
        
//         echo "<table class='table table-bordered'>
//             <tr><th width='90'>NIM</th><th>NAMA</th></tr>";
//         $this->db->where('id_rombel',$rombel);
//         $siswa = $this->db->get('tbl_siswa');
//         foreach ($siswa->result() as $row){
//             echo "<tr><td>$row->nim</td><td>$row->nama</td></tr>";
//         }
//         echo"</table>";
//     }
    
//     function data_by_rombel_excel(){
//         $this->load->library('CPHP_excel');
//         $objPHPExcel = new PHPExcel();
//         $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
//         $objPHPExcel->getActiveSheet()->setCellValue('B1', 'SISWA');
        
//         $rombel = $_POST['rombel'];
//         $this->db->where('id_rombel',$rombel);
//         $siswa = $this->db->get('tbl_siswa');
//         $no=2;
//         foreach ($siswa->result() as $row){
//             $objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $row->nim);
//             $objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $row->nama);
//             $no++;
//         }
        
//         $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
//         $objWriter->save("data-siswa.xlsx");
//         $this->load->helper('download');
//         force_download('data-siswa.xlsx', NULL);
//     }

// 
}