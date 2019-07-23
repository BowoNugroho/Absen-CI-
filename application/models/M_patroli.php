<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_patroli extends CI_Model {

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
		$this->db = $this->load->database('default', true);
	}
	public function index()
	{
		
	}
	// public function cek_login($table,$where)
	// {
	// 	return $this->db->get_where($table,$where);
	// }
	public function cek_login($username,$pass)
	{
		return $this->db->query("SELECT
			tbl_petugas.id_petugas,
			tbl_petugas.nama_petugas,
			tbl_petugas.status,
			tbl_petugas.username,
			tbl_petugas.`password`
			FROM
			tbl_petugas
			WHERE
			tbl_petugas.`password` = '$pass' AND
			tbl_petugas.username = '$username'" 
		);
	}
	public function inputdata($data)
	{
		$hasil = $this->db->insert('tbl_patroli',$data);
		return $hasil;
	}

	public function tampil_data()
	{
		$query = $this->db->query('SELECT
			tbl_patroli.id_patroli,	
			tbl_patroli.tanggal_jam,
			tbl_petugas.nama_petugas,
			tbl_lokasi.nama_lokasi,
			tbl_patroli.catatan
			FROM
			tbl_patroli
			LEFT JOIN 	tbl_lokasi 	ON tbl_patroli.id_lokasi 	= tbl_lokasi.id_lokasi
			LEFT JOIN 	tbl_petugas ON tbl_patroli.id_petugas 	= tbl_petugas.id_petugas
			WHERE 		DATE(tbl_patroli.tanggal_jam)=DATE(NOW())
			ORDER BY 	tbl_patroli.id_patroli DESC');
		return $query->result();
	}
	public function tampil_data2()
	{
		$query = $this->db->query('SELECT
			tbl_patroli.tanggal_jam,
			tbl_patroli.id_patroli,
			tbl_lokasi.nama_lokasi,
			Count(tbl_lokasi.nama_lokasi) as total1
			FROM
			tbl_patroli 
			LEFT JOIN 	tbl_lokasi 	ON tbl_patroli.id_lokasi 	= tbl_lokasi.id_lokasi
			WHERE DATE(tbl_patroli.tanggal_jam)=DATE(NOW())
			GROUP BY tbl_lokasi.nama_lokasi');
		return $query->result();
	}
	public function tampil_data3()
	{
		$query = $this->db->query('SELECT
			tbl_patroli.tanggal_jam,
			tbl_patroli.id_patroli,
			tbl_petugas.nama_petugas,
			Count(tbl_petugas.nama_petugas) as total2
			FROM
			tbl_patroli 
			LEFT JOIN 	tbl_petugas ON tbl_patroli.id_petugas 	= tbl_petugas.id_petugas
			WHERE DATE(tbl_patroli.tanggal_jam)=DATE(NOW())
			GROUP BY tbl_petugas.nama_petugas');
		return $query->result();
	}
	public	function tampil_lokasi()
	{
		$query = $this->db->query('SELECT
			tbl_lokasi.nama_lokasi
			FROM `tbl_lokasi`
			');
		return $query->result();
	}
	public function tampil_petugas()
	{
		$query = $this->db->query('SELECT
			tbl_petugas.nama_petugas
			FROM `tbl_petugas`
			');
		return $query->result();

	}
	public function cekLokasi($scan)
	{
		$query = $this->db->query('SELECT
			tbl_lokasi.id_lokasi,
			tbl_lokasi.nama_lokasi
			FROM
			tbl_lokasi
			WHERE
			tbl_lokasi.id_lokasi = "$scan"');
		return $query;
	}

	public function edit_data($where,$tbl_patroli)
	{
		return $this->db->get_where($tbl_patroli,$where);
	}
	public function update_data($where,$data,$tbl_patroli)
	{
		$this->db->where($where);
		$this->db->update($tbl_patroli,$data);
	}
	public function getsavelokasi($data)
	{
		$hasil = $this->db->insert('tbl_lokasi',$data);
		return $hasil;
	}
	public function getsavepetugas($data)
	{
		$hasil = $this->db->insert('tbl_petugas',$data);
		return $hasil;
	}
}
