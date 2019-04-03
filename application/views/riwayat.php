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
			<center><strong>Halaman Riwayat Pembayaran</strong></center>
		</h2><br>

		<div class="box">
			<div class="box-header">
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="tabelriwayat" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Nomor KWH</th>
							<th>Nama Pelanggan</th>
							<th>Tanggal Riwayat</th>
							<th>Bulan Bayar</th>
							<th>Bukti</th>
							<th>Total Bayar</th>
							<th>Status</th>
							<th>Pemverifikasi</th>
						</tr>
					</thead>
					<tbody>

						<?php $no=1; foreach ($DataRiwayat as $data) {  ?>
						<tr>
							<td>
								<?=$no++ ?>
							</td>
							<td>
								<?=$data->nomor_kwh ?>
							</td>
							<td>
								<?=$data->nama_pelanggan ?>
							</td>
							<td>
								<?=$data->tanggal_pembayaran ?>
							</td>
							<td>
								<?=$data->bulan_bayar ?>
							</td>
							<td>
								<img src="<?=base_url('assets/bukti/'.$data->bukti )?>" width="60px;">
							</td>
							<td>
								<?=$data->total_bayar ?>
							</td>
							<td>
								<?=$data->status ?>
							</td>
							<td>
								<?=$data->nama_admin ?>
							</td>
						</tr>
						<?php } ?>
						
					</tbody>
				  </table>
        </div>
      </div>

    </div>
		<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 -->
<!-- DataTable -->
<!-- <script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.buttonflash.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.jszip.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.vfs_fonts.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.buttons.html5.min.js"></script> -->
</body>

</html>
