<style>
	.skala{
		border: 5px solid #ffc72d;
		text-align: center;
		padding: 10px;
		margin: 10px;
	}
	
	.skala h2{
		color: #ffc72d;
	}
	
	.kepadatan{
		border: 5px solid #b1d356;
		text-align: center;
		padding: 10px;
		margin: 10px;
	}
	
	.kepadatan h2{
		color: #b1d356;
	}
	
	.populasi{
		border: 5px solid #6a258a;
		text-align: center;
		padding: 10px;
		margin: 10px;
	}
	
	.populasi h2{
		color: #6a258a;
	}
	
	.data{
		margin-top: 10px
	}
	
	.data h4{
		color: #b1d356;
	}
	
	.data table tr td{
		padding-right: 10px;
	}
	
</style>
<div class="gtco-section">
	<div class="gtco-container">
		<div class="row gtco-heading">
			<div class="col-md-12 text-left">
				<h2><?php echo $kecamatan['kecamatan_nama'];?></h2>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-2 skala">
							Skala
							<h2><?php echo $kecamatan['kecamatan_skala']; ?></h2>
						</div>
						<div class="col-md-2 populasi">
							Populasi
							<h2><?php echo $kecamatan['kecamatan_populasi']; ?></h2>
						</div>
						<div class="col-md-2 kepadatan">
							Luas Wilayah
							<h2><?php echo $kecamatan['kecamatan_kepadatan']; ?><sub><small>ha</small></sub></h2>
						</div>
					</div>
					<br>
					<div class="row">
						<p><?php echo $kecamatan['kecamatan_deskripsi']; ?></p>
					</div>
				</div>
				<div class="col-md-4" style="padding-left:40px;">
					<div class="row">
						<img src="<?php echo base_url(); ?>uploads/kecamatan/<?php echo $kecamatan['kecamatan_gambar']; ?>" class="img-responsive">
					</div>
					<div class="row data">
						<hr/>
						<h4>Profil</h4>
						<table>
							<tr>
								<td>Sub-Wilayah Kota</td>
								<td>:</td>
								<td><?php echo $kecamatan['swk_nama']; ?></td>
							</tr>
							<tr>
								<td>Nama Kecamatan</td>
								<td>:</td>
								<td><?php echo $kecamatan['kecamatan_nama']; ?></td>
							</tr>
							<tr>
								<td>Skala</td>
								<td>:</td>
								<td><?php echo $kecamatan['kecamatan_skala']; ?></td>
							</tr>
						</table>
					</div>
					<div class="row data">
						<hr/>
						<h4>Demografi</h4>
						<table>
							<tr>
								<td>Populasi</td>
								<td>:</td>
								<td><?php echo $kecamatan['kecamatan_populasi']; ?></td>
							</tr>
							<tr>
								<td>Luas Wilayah</td>
								<td>:</td>
								<td><?php echo $kecamatan['kecamatan_luas']; ?></td>
							</tr>
							<tr>
								<td>Kepadatan</td>
								<td>:</td>
								<td><?php echo $kecamatan['kecamatan_kepadatan']; ?></td>
							</tr>
							<tr>
								<td>Ruang Terbuka Hijau</td>
								<td>:</td>
								<td><?php echo $kecamatan['kecamatan_rth']; ?></td>
							</tr>
							<tr>
								<td>Ruang Terbuka Non-hijau</td>
								<td>:</td>
								<td><?php echo $kecamatan['kecamatan_rtnh']; ?></td>
							</tr>
						</table>
					</div>
					<div class="row data">
						<hr/>
						<h4>Kualitas Lingkungan</h4>
						<table>
							<tr>
								<td>Temperatur</td>
								<td>:</td>
								<td><?php echo $kecamatan['kl_temperatur']; ?> °C</td>
							</tr>
							<tr>
								<td>Kecepatan Angin</td>
								<td>:</td>
								<td><?php echo $kecamatan['kl_kecepatan_angin']; ?> m/s</td>
							</tr>
							<tr>
								<td>Curah Hujan</td>
								<td>:</td>
								<td><?php echo $kecamatan['kl_curah_hujan']; ?> %</td>
							</tr>
							<tr>
								<td>Kelembapan</td>
								<td>:</td>
								<td><?php echo $kecamatan['kl_kelembapan']; ?> %</td>
							</tr>
						</table>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END .gtco-services -->
