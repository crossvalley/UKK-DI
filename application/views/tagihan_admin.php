<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?=$judul?>
  </title>
</head>

<body>

  <div class="container-fluid">
    <h2>
      <center><strong>Halaman Data Tagihan</strong></center>
    </h2><br />
    <div class="box">
      <div class="box-header">
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      <p><center><font color="green" size="4px"><b><?= $this->session->flashdata('pesan_sukses'); ?></b></font></center></p>
        <table id="tabletarif" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Bulan</th>
              <th>Tahun</th>
              <th>Jumlah Meter</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php $no=1; foreach ($DataTagihan as $data) {  ?>
            <tr>
              <td>
                <?=$no++  ?>
              </td>
              <td>
                <?=$data->bulan ?>
              </td>
              <td>
                <?=$data->tahun?>
              </td>
              <td>
                <?=$data->jumlah_meter?>
              </td>
              <td>
                <?=$data->status?>
              </td>
              <td>
                <a class="btn btn-danger" data-toggle="modal" data-target="#hapus" href="#" onclick="hapus('<?=$data->id_tagihan?>')">Hapus</a></td>
              </td>
            </tr>
            <?php } ?>
            </tfoot>
          </table>
        </div>
      </div>


        <!-- Modal hapus tagihan-->
        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <h3><strong>Hapus Data Tagihan</strong></h3>
                        </div>
                        <div class="modal-body">
                            <h4>Anda Yakin Ingin Menghapus Tagihan ?</h4>
                        </div>
                        <form action="<?=base_url('admin_home/hapus_tagihan')?>" method="post" class="form-horizontal form-label-left">
                                    
                                    <input type="hidden" id="id_tagihan1" name="id_tagihan" required="required" class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" id="id_penggunaan1" name="id_penggunaan" required="required" class="form-control col-md-7 col-xs-12">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <input type="submit" value="Konfirmasi" class="btn btn-primary">
                                    </div>
                                    </div>
                                    </form>
                    </div>
          </div>


    </div>
    <script type="text/javascript">
        function hapus(a) {
          $.ajax({
            type: "post",
            url: "<?=base_url()?>admin_home/data_tagihan_detail/" + a,
            dataType: "json",
            success: function (data) {
              $("#id_tagihan1").val(data.id_tagihan);
              $("#id_penggunaan1").val(data.id_penggunaan)

            }
          });
        }
      </script>
</body>

</html>
