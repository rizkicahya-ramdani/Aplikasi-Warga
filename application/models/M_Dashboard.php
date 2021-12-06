<?php
/**
 *
 */
class M_Dashboard extends CI_Model
{
  function data_warga()
  {
    $query = $this->db->query("select a.nama_rt,
            count(if(c.jenis_kelamin = 'L',1,NULL)) AS laki,
            count(if(c.jenis_kelamin = 'P',1,NULL)) AS perempuan
            from rt a
            left join keluarga b ON a.id = b.id_rt
            left join anggota_keluarga c ON b.id = c.id_kk group by a.id");
    return $query;
  }

  function data_balita()
  {
    $query = $this->db->query("select a.nama_rt,
            count(if(c.jenis_kelamin = 'L',1,NULL)) AS laki,
            count(if(c.jenis_kelamin = 'P',1,NULL)) AS perempuan
            from rt a
            left join keluarga b ON a.id = b.id_rt
            left join anggota_keluarga c ON b.id = c.id_kk group by a.id");
    return $query;
  }


}

?>
