<?php
/**
 *
 */
class M_Keluarga extends CI_Model
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

	function tampil_relasi_perid($tabel1, $tabel2, $id)
	// function tampil_relasi_perid($id)
	{
		//SELECT * FROM keluarga, rt WHERE keluarga.id_rt = rt.id AND keluarga.id = 1
		$this->db->select('*,'.$tabel2.'.nama_rt');
		$this->db->from($tabel1.','.$tabel2);
		$this->db->where($tabel1.'.id_rt = '.$tabel2.'.id');
		$this->db->where($tabel1.'.id',$id);
		// $this->db->select('a.*, b.nama_rt')->from('keluarga a, rt b');
		// $this->db->where('a.id_rt = b.id')->where('a.id',$id);
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

	function hapus($tabel, $kriteria)
	{
		$this->db->where('id',$kriteria);
		$this->db->delete($tabel);
	}
}
