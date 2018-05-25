<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<div class="gtco-section">
	<div class="gtco-container">
		<div class="row gtco-heading">
			<div class="col-md-12 text-left">
				<h2>Case Studies</h2>
				<p>The focus of the density atlas is case studies of projects and neighborhoods at “urban” densities, which generally range from FAR 1.0 – 16.0. Each case study includes the three density measurements: FAR, which measures building bulk; Dwelling Units per Acre/Hectare, which measures the number of households; Population per Acre/Hectare, which measures the impact on streets and services. Each case study includes a “Density Measurement Profile,” a concise summary of the three density measurements.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-left">
				<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Kecamatan</th>
							<th>SWK</th>
							<th>Skala</th>
							<th>Luas Wilayah</th>
							<th>Kepadatan</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach($kecamatan as $row){
						 ?>
						<tr>
							<td><a href="<?php echo base_url(); ?>casestudies/kecamatan/<?php echo $row['kecamatan_id'];?>"><?php echo $row['kecamatan_nama']; ?></td>
							<td><?php echo $row['swk_nama']; ?></td>
							<td><?php echo $row['kecamatan_skala']; ?></td>
							<td><?php echo $row['kecamatan_luas']; ?></td>
							<td><?php echo $row['kecamatan_kepadatan']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Kecamatan</th>
							<th>SWK</th>
							<th>Skala</th>
							<th>Luas Wilayah</th>
							<th>Kepadatan</th>
						</tr>
					</tfoot>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END .gtco-services -->
