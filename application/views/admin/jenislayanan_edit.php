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
                    <?php foreach($jenis_layanan as $key){ ?>
					<form class="text-center border border-light p-5" method="post" action="<?php echo base_url() . 'admin/JenisLayanan/update'; ?>">
						<p class="h4 mb-4">Edit Jenis Layanan</p>
                        <div class="form-row mb-4">
							<br>
							<small>Id Jenis Layanan</small>
							<input type="text" class="form-control 
                            form-control-line form-user-input" name="id_jenislayanan" id="id_jenislayanan" required readonly value="<?php echo $key->id_jenislayanan ?>">
							<br><br>
							
						</div>

						<div class="form-row mb-4">
							<br>
							<small>Jenis Layanan</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="JenisLayanan" id="JenisLayanan" required value="<?php echo $key->JenisLayanan ?>">
							<br><br>
							
						</div>

                        


						<!-- Sign up button -->
						<button class="btn btn-success my-4" type="submit">Simpan</button>
                        <a class="btn btn-danger my-4 " href="javascript:window.history.go(-1);">Kembali</a>
						<!-- Social register -->

						<hr>

						<!-- Terms of service -->
						<? redirect(base_url("admin/jenislayanan"))?>
					</form>
                    
                 <?php } ?>
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
