<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title"><?php echo $tabel_title; ?></h3>
          </div>

          <form class="" method="post" action="<?php echo base_url('keluarga/simpan') ?>">
            <div class="card-body">
              <div class="form-group">
                <label>Nomor Kartu KK</label>
                <input type="text" class="form-control" placeholder="Nomor KK" name="nomor_kk">
              </div>
              <div class="form-group">
                <label>Nama KK</label>
                <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="nama_kk">
              </div>
              <div class="form-group">
                <label>Alamat KK</label>
                <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="alamat_kk">
              </div>
              <div class="form-group">
                <label>Domisili RT</label>
                <select class="form-control" name="id_rt">
                  <option>- Pilih -</option>
                  <?php foreach ($data_rt as $key): ?>
                    <option value="<?php echo $key['id'] ?>"><?php echo $key['nama_rt'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-sm btn-primary float-right">Simpan</button>
              <a href="<?php echo base_url('keluarga') ?>" class="btn btn-sm btn-default">Kembali</a>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
