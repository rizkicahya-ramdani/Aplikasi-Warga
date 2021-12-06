<?php
/**
 *
 */
class M_Warga extends CI_Model
{
  function tampil()
  {
    //SELECT * FROM keluarga a, rt b, anggota_keluarga c WHERE a.id_rt = b.id AND a.id = c.id_kk
    $this->db->select('a.nomor_kk, b.nama_rt, c.*');
    $this->db->from('keluarga a, rt b, anggota_keluarga c');
    $this->db->where('a.id_rt = b.id')->where('a.id = c.id_kk');
    return $this->db->get();
  }
}
