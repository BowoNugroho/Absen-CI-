<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_patroli extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('M_patroli');
		$this->load->helper('url');
		
	}
	public function index()
	{
		$this->load->view('V_headerpart');
		$this->load->view('V_home');
		$this->load->view('V_footer');
	}

	public function showgrafik()
	{
		$data = array(
			'data1' => $this->M_patroli->tampil_data2(),
			'data2' => $this->M_patroli->tampil_data3(),
		);
		$this->load->view('V_headerpart');
		$this->load->view('V_grafik',$data);
		$this->load->view('V_footer');
	}
	public function showpatroli()
	{
		$data ['menampilkan_data']=$this->M_patroli->tampil_data();
		$this->load->view('V_headerpart');
		$this->load->view('V_patroli',$data);
		$this->load->view('V_footer');
	}
	public function showlokasi()
	{
		$data ['menampilkan_lokasi']=$this->M_patroli->tampil_lokasi();
		$this->load->view('V_headerpart');
		$this->load->view('V_lokasi',$data);
		$this->load->view('V_footer');
	}
	public function showdaftar()
	{
		$data ['menampilkan_petugas']=$this->M_patroli->tampil_petugas();
		$this->load->view('V_headerpart');
		$this->load->view('V_daftar',$data);
		$this->load->view('V_footer');
	}
	public function showscan()
	{
		$this->load->view('V_headerpart');
		$this->load->view('V_scan');
		$this->load->view('V_footer');
	}
	public function showedit($id)
	{
		$data['menampilkan_data']=$this->db->query("	SELECT
			tbl_patroli.tanggal_jam,
			tbl_patroli.id_patroli,
			tbl_patroli.catatan,
			tbl_lokasi.nama_lokasi,
			tbl_petugas.nama_petugas
			FROM
			tbl_patroli
			LEFT JOIN tbl_lokasi ON tbl_patroli.id_lokasi = tbl_lokasi.id_lokasi
			LEFT JOIN tbl_petugas ON tbl_patroli.id_petugas = tbl_petugas.id_petugas
			WHERE tbl_patroli.id_patroli='$id'")->result();
		$this->load->view('V_headerpart');
		$this->load->view('V_edit',$data);
		$this->load->view('V_footer');	
	}

	public function savedata()
	{
		$id = $this->input->post('id');
		$scan = $this->input->post('scan');
		$scanmd5 = md5($scan);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'id_lokasi' => md5($scan),
			'tanggal_jam'=> date('Y-m-d H:i:s'),
			'id_petugas' => $this->session->userdata('id_petugas')
		);
		$ceklokasi=$this->db->query("SELECT
			tbl_lokasi.id_lokasi,
			tbl_lokasi.nama_lokasi
			FROM
			tbl_lokasi
			WHERE
			tbl_lokasi.id_lokasi ='$scanmd5'");
		//$ceklokasi='0';
		if ($ceklokasi->num_rows() !=1){
			echo '<script>
			alert("RFID Tidak Terdaftar!!!");
			history.go(-2);
			</script>';
		}else if($ceklokasi->num_rows() == 1){
			$this->M_patroli->inputdata($data);
			redirect(base_url("index.php/C_patroli/showpatroli"));
		}else{
			$this->M_patroli->inputdata($data);
			redirect(base_url("index.php/C_patroli/showpatroli"));
		}
	}
	public function edit()
	{
		$where = array('id' => $id);
		$data['user'] = $this->M_patroli->edit_data($where,'user')->result();
		$this->load->view('V_edit',$data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$ctt = $this->input->post('ctt');
		$tbl_patroli='tbl_patroli';
		$data = array(
			'catatan' => $ctt
		);
		$where = array(
			'id_patroli' => $id
		);
		$this->M_patroli->update_data($where,$data,$tbl_patroli);
		redirect(base_url("index.php/C_patroli/showpatroli"));
	}
	public function savelokasi()
	{
		$nama = $this->input->post('lokasi');
		$rfid = $this->input->post('rfid');
		$scanmd5 = md5($rfid);
		$data = array(
			'nama_lokasi' => $nama,
			'id_lokasi' => md5($rfid)
		);
		$ceklokasi=$this->db->query("SELECT
			tbl_lokasi.nama_lokasi,
			tbl_lokasi.id_lokasi
			FROM tbl_lokasi
			WHERE
			tbl_lokasi.id_lokasi = '$scanmd5'");
		if($ceklokasi->num_rows()!=1){
			$this->M_patroli->getsavelokasi($data);
			echo '<script>
			alert("Anda berhasil input data"); 
			window.location = "'.base_url("index.php/C_patroli/showlokasi").'"; 
			</script>';
			//redirect(base_url("index.php/C_patroli/showlokasi"));
		}else{
			echo '<script>
			alert("Nama Lokasi atau RFID Sudah dipakai!!!");
			history.go(-1);
			</script>';
		};
	}
	public function savepetugas()
	{
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$status = $this->input->post('status');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama_petugas' => $nama,
			'id_petugas' => $nip,
			'status' => $status,
			'username' => $username,
			'password' => md5($password)
		);
		// if($data) {
		// 	echo '<script>
		// 	alert("Nama Lokasi atau RFID Sudah dipakai!!!");
		// 	history.go(-1);
		// 	</script>';       
		// 	redirect(base_url("index.php/C_patroli/showdaftar"));     
		// } else {  
			$this->M_patroli->getsavepetugas($data);  
			echo '<script>
			alert("Anda berhasil input data"); 
			window.location = "'.base_url("index.php/C_patroli/showdaftar").'"; 
			</script>';   
		// };
	}
}