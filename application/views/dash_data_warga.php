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
                <th>No KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>RT</th>
                <th>JK</th>
                <th>Pend.</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=0; foreach ($data_warga as $d): $no++;?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  <tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
