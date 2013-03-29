<div class="row-fluid no-clear">
	<div class="span6 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Data Karyawan</p>
		</div>
		<div class="widget-content">
			<table class="table table-stripped user-table">
				<tbody>
					<tr>
						<td>Nomor Karyawan</td>
						<td><?php echo $model->employee_code;?></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td><?php echo $model->firstname;?> <?php echo $model->lastname;?></td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td><?php echo $model->jabatan->name;?></td>
					</tr>
					<tr>
						<td>Tanggal Mulai Menjabat</td>
						<td><?php echo $history->start_date; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="span6 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Jabatan Baru Yang Dituju</p>
		</div>
		<div class="widget-content">
			<?php echo $myValue ?>
		</div>
	</div>
</div>
