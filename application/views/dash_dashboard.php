<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Data Warga</h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>RT</th>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0; $lk=0; $pr=0; $jm=0;
                  foreach ($data_warga as $d):
                    $no++;
                    $lk = $lk + $d['laki'];
                    $pr = $pr + $d['perempuan'];
                    $jm = $jm + ($d['laki']+$d['perempuan']);
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $d['nama_rt'] ?></td>
                    <td><?php echo $d['laki'] ?></td>
                    <td><?php echo $d['perempuan'] ?></td>
                    <td><?php echo $d['laki']+$d['perempuan'] ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2">Jumlah</th>
                  <th><?php echo $lk ?></th>
                  <th><?php echo $pr ?></th>
                  <th><?php echo $jm ?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Data Balita</h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>RT</th>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0; $lk=0; $pr=0; $jm=0;
                  foreach ($data_balita as $d):
                    $no++;
                    $lk = $lk + $d['laki'];
                    $pr = $pr + $d['perempuan'];
                    $jm = $jm + ($d['laki']+$d['perempuan']);
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $d['nama_rt'] ?></td>
                    <td><?php echo $d['laki'] ?></td>
                    <td><?php echo $d['perempuan'] ?></td>
                    <td><?php echo $d['laki']+$d['perempuan'] ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2">Jumlah</th>
                  <th><?php echo $lk ?></th>
                  <th><?php echo $pr ?></th>
                  <th><?php echo $jm ?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
