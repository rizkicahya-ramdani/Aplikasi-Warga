<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title"><?php echo $tabel_title ?></h3>
          </div>
          <form class="" action="<?php echo base_url('keluarga/simpan_anggota_keluarga') ?>" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <label>Nomor Induk Kependudukan</label>
                  <input type="text" class="form-control" placeholder="Nomor Induk Kependudukan">
                  <input type="hidden" name="id_kk" value="<?php echo $this->uri->segment(3) ?>">
                </div>
                <div class="col-4">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="col-3">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir">
                </div>
                <div class="col-2">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" placeholder="Tanggal Lahir">
                </div>

              </div>
              <div class="row">
                <div class="col-3">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                    <option value="">- Pilih -</option>
                    <option value="1">Laki-laki</option>
                    <option value="0">Perempuan</option>
                  </select>
                </div>
                <div class="col-3">
                  <label>Agama</label>
                  <select class="form-control" name="agama">
                    <option value="">- Pilih -</option>
                    <option value="1">Islam</option>
                    <option value="2">Kristen</option>
                    <option value="3">Katholik</option>
                    <option value="4">Hindu</option>
                    <option value="5">Budha</option>
                    <option value="6">Konghucu</option>
                    <option value="7">Aliran Kepercayaan</option>
                  </select>
                </div>
                <div class="col-3">
                  <label>Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <option value="">- Pilih -</option>
                    <option value="0">Tidak Sekolah</option>
                    <option value="1">SD</option>
                    <option value="2">SMP</option>
                    <option value="3">SMA/SMK</option>
                    <option value="4">D1</option>
                    <option value="5">D2</option>
                    <option value="6">D3</option>
                    <option value="7">S1/ D4</option>
                    <option value="8">S2</option>
                    <option value="9">S3</option>
                  </select>
                </div>
                <div class="col-3">
                  <label>Golongan Darah</label>
                  <select class="form-control" name="golongan_darah">
                    <option value="">- Pilih -</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                    <option value="AB">AB</option>
                    <option value="-">Tidak Tahu</option>
                  </select>
                </div>

              </div>
              <div class="row">
                <div class="col-3">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" placeholder="Pekerjaan">
                </div>
                <div class="col-4">
                  <label>Status dalam keluarga</label>
                  <select class="form-control" name="status_dalam_keluarga">
                    <option value="">- Pilih -</option>
                    <option value="1">Kepala Keluarga</option>
                    <option value="2">Istri</option>
                    <option value="3">Anak</option>
                    <option value="4">Orangtua</option>
                    <option value="5">Kerabat</option>
                  </select>
                </div>

                <div class="col-3">
                  <label>Kewarganegaraan</label>
                  <select class="form-control" name="kewarganegaraan">
                    <option value="">- Pilih -</option>
                    <option value="1">Warga Negara Indonesia</option>
                    <option value="2">Warga Negara Asing</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-sm btn-primary float-right" name="simpan" value="Update">
              <a href="<?php echo base_url('keluarga/anggota_keluarga/').$this->uri->segment(3) ?>" class="btn btn-sm btn-default">Kembali</a>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
