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
                    <h1 class="text-center pt-3" style="Margin-top:100px">Tambah Legalitas</h1>
                    <div class="d-flex align-items-center justify-content-center container row m-auto" style="height: 250px">
                        <form class="col-12" action="<?php echo base_url() . 'admin/Legalitas/insert'; ?>" method="post">
                            
                        <div class="form-row mb-4">
                                <br>
                                <small>Nama Perusahaan</small>
                                <select name="id_tentang" id="id_tentang" class="form-control" required>
                                <?php foreach ($tentang as $row) :?>
                                        <option value="<?= $row->id_tentang;?>"><?=  $row->nama_perusahaan;?></option>
                                    <?php endforeach;?>
                                </select>
                                
                            </div>

                            <div class="form-group">
                                <label for="kelas">Legalitas</label>
                                <input type="text" class="form-control" id="legalitas" name="legalitas" required>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Keterangan</label>
                                <input type="text" class="form-control" id="Keterangan" name="Keterangan" required>
                            </div>
                            
                            <div class="d-flex align-items-center flex-column row">
                                <button type="submit" class="col-5 rounded btn btn-success text-white rounded-lg mt-3" onClick="alert('Legalitas ditambahkan')">Tambah</button>
                                <button class="col-5 btn btn-danger text-white rounded rounded-lg mt-3" onclick="window.location.href='/MerapiMas/admin/Legalitas' ">Kembali</button>
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
