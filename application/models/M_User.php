<?php
/**
 * 
 */
class M_User extends CI_Model
{
	function cek_login_user($user,$pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$user)->where('password',$pass);
		return $this->db->get();
	}

	function tampil($tabel)
	{
		$this->db->select('*');
		$this->db->from($tabel);
		return $this->db->get();
	}

	function simpan($tabel, $data)
	{
		$this->db->insert($tabel,$data);
	}

	function update($tabel, $data, $kriteria)
	{
		$this->db->where($kriteria);
		$this->db->update($tabel,$data);
	}

	function hapus($tabel, $data, $kriteria)
	{
		$this->db->where($kriteria);
		$this->db->delete($tabel,$data);
	}

}