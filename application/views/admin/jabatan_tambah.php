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
                    <h1 class="text-center pt-3" style="Margin-top:100px">Tambah Jabatan</h1>
                    <div class="d-flex align-items-center justify-content-center container row m-auto" style="height: 250px">
                        <form class="col-6" action="<?php echo base_url() . 'admin/Jabatan/insert'; ?>" method="post">
                            <div class="form-group">
                                <label for="kelas">Nama Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                            </div>
                            
                            <div class="d-flex align-items-center flex-column row">
                                <button type="submit" class="col-5 rounded btn btn-success text-white rounded-lg mt-3" onClick="alert('Jabatan ditambahkan')">Tambah</button>
                                <button class="col-5 btn btn-danger text-white rounded rounded-lg mt-3" onclick="window.location.href='/MerapiMas/admin/Jabatan' ">Kembali</button>
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
