<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Keluarga</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Nomor Kartu KK</label>
              <input type="text" class="form-control" placeholder="Nomor KK" value="<?php echo $data_kk['nomor_kk'] ?>" readonly>
              <input type="hidden" class="form-control" placeholder="Nomor KK" name="id_kk" value="<?php echo $data_kk['id'] ?>">
            </div>
            <div class="form-group">
              <label>Nama KK</label>
              <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" value="<?php echo $data_kk['nama_kk'] ?>" readonly>
            </div>
            <div class="form-group">
              <label>Alamat KK</label>
              <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" value="<?php echo $data_kk['alamat_kk'] ?>" readonly>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Anggota Keluarga</h3>
          </div>
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th width="5%">No</th>
                <th>NIK</th>
                <th>Kepala Keluarga</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Pendidikan</th>
                <th>Status</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>340304311219760001</td>
                <td>Drs. dr. Bambang Sudjatmiko, M.Pd., M.Sc., M.Si.</td>
                <td>Gunungkidul, 31 Desember 1976</td>
                <td>S1</td>
                <td>Kepala Keluarga</td>
                <td>
                  <a href="" class="btn btn-xs btn-info">Detail</a>
                  <a href="<?php echo base_url('keluarga/edit_anggota_keluarga') ?>" class="btn btn-xs btn-warning">Edit</a>
                  <a href="<?php echo base_url('keluarga/hapus_anggota_keluarga') ?>" class="btn btn-xs btn-danger">Hapus</a>
                </td>
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <a href="<?php echo base_url('keluarga/tambah_anggota_keluarga/').$this->uri->segment(3) ?>" class="btn btn-sm btn-primary">Tambah Anggota Keluarga</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
