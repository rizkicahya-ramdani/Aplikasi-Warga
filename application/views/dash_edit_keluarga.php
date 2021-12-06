<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title"><?php echo $tabel_title; ?></h3>
          </div>

          <form class="" method="post" action="<?php echo base_url('keluarga/update') ?>">
            <div class="card-body">
              <div class="form-group">
                <label>Nomor Kartu KK</label>
                <input type="text" class="form-control" placeholder="Nomor KK" name="nomor_kk" value="<?php echo $data_keluarga['nomor_kk'] ?>">
                <input type="hidden" name="id_kk" value="<?php echo $this->uri->segment(3) ?>">
              </div>
              <div class="form-group">
                <label>Nama KK</label>
                <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="nama_kk" value="<?php echo $data_keluarga['nama_kk'] ?>">
              </div>
              <div class="form-group">
                <label>Alamat KK</label>
                <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="alamat_kk" value="<?php echo $data_keluarga['alamat_kk'] ?>">
              </div>
              <div class="form-group">
                <label>Domisili RTs</label>
                <select class="form-control" name="id_rt">
                  <option value="<?php echo $data_keluarga['id_rt'] ?>"><?php echo $data_keluarga['nama_rt'] ?></option>
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
