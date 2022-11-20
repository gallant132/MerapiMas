<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- css -->
        <?php $this->load->view("admin/partial/css.php") ?>
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

	<!-- Breadcrumbs -->
	<div class="ex-basic-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- Default form register -->
                    <h1 class="text-center pt-3" style="Margin-top:100px">Tambah Layanan</h1>
                    <div class="d-flex align-items-center justify-content-center container row m-auto" style="height: 250px">
                        <form class="col-6" action="<?php echo base_url() . 'admin/NamaLayanan/insert'; ?>" method="post">
                            <div class="form-group">
                                <label for="kelas">Nama Layanan</label>
                                <input type="text" class="form-control" id="Nama_layanan" name="Nama_layanan" required>
                            </div>

                            <div class="form-row mb-4">
							<br>
							<small>Jenis Layanan</small>
							<select name="id_jenislayanan" id="id_jenislayanan" class="form-control" >
                                <option value="" selected disabled>Pilih Jenis Layanan</option>
								<?php foreach($jenis_layanan as $jns) : ?>
									<option value="<?= $jns->id_jenislayanan ?>"><?= $jns->JenisLayanan ?></option>
								<?php endforeach; ?>
                            </select>
							
							
						</div>
                            
                            <div class="d-flex align-items-center flex-column row">
                                <button type="submit" class="col-5 rounded btn btn-success text-white rounded-lg mt-3" onClick="alert('Layanan Ditambahkan')">Tambah</button>
                                <button class="col-5 btn btn-danger text-white rounded rounded-lg mt-3" onclick="window.location.href='/MerapiMas/admin/NamaLayanan' ">Kembali</button>
                            </div>
                        </form>
                    </div>
					<!-- Default form register -->

				</div>
				
			</div>

		</div>
		<!-- end of container -->
	</div>
	
	<!-- js -->
	<?php $this->load->view("admin/partial/js.php") ?>



</body>
</html>
