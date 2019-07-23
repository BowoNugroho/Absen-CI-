<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

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
	}
	public function index()
	{
		
		$this->load->view('V_patrolilogin');
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pass=md5($password);

		$where = array(
			'nama_petugas' => $username,
			'password' => $pass
		);
		$cek = $this->M_patroli->cek_login($username,$pass);
		if($cek->num_rows() ==1 ){
			
			foreach ($cek->result() as $sess) {
				$sess_data['logged_in'] = TRUE;
				$sess_data['nama_petugas'] = $sess->nama_petugas;
				$sess_data['id_petugas'] = $sess->id_petugas;
				$sess_data['status'] = $sess->status;
				$this->session->set_userdata($sess_data);
		//helper_log("login", "masuk ke sistem");
			}
			
			redirect(base_url("index.php/C_patroli/showpatroli"));
			
		}else{
			echo '<script>
			alert("Username atau Password anda SALAH!");
			history.go(-1);
			</script>';
			//redirect(base_url("index.php/C_login"));
			// echo "Username dan password salah !";
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/C_login'));
	}
}
