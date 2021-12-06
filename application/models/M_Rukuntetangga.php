<?php
/**
 * 
 */
class M_Rukuntetangga extends CI_Model
{
	function tampil($tabel)
	{
		$this->db->select('*');
		$this->db->from($tabel);
		return $this->db->get();
	}

	function tampil_perid($tabel, $id)
	{
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where('id',$id);
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