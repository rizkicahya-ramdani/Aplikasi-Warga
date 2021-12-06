<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?php echo $tabel_title; ?></h3>
          </div>
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th width="5%">No</th>
                <th>Nomor KK</th>
                <th>Kepala Keluarga</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=0; foreach ($data_keluarga as $k): $no++;?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $k['nomor_kk'] ?></td>
                    <td><?php echo $k['nama_kk'] ?></td>
                    <td><?php echo $k['alamat_kk'] ?></td>
                    <td>
                      <a href="<?php echo base_url('keluarga/anggota_keluarga/').$k['id'] ?>" class="btn btn-xs btn-info">Lihat</a>
                      <a href="<?php echo base_url('keluarga/edit/').$k['id'] ?>" class="btn btn-xs btn-warning">Edit</a>
                      <a href="<?php echo base_url('keluarga/hapus/').$k['id'] ?>" class="btn btn-xs btn-danger">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <a href="<?php echo base_url('keluarga/tambah') ?>" class="btn btn-sm btn-primary">Tambah Data Keluarga</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
