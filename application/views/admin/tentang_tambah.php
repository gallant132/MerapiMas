

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
                        <form class="col-6" action="<?php echo base_url() . 'admin/tentang/insert'; ?>" method="post">
                        
                            <div class="form-group">
                                <label for="kelas">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Tentang Perusahaan</label>
                                <input type="text" class="form-control" id="tentangperusahaan" name="tentangperusahaan" required>
                            </div>


                            <div class="form-row mb-4">
							<br>

                            <!-- <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <?php foreach ($alamat as $row) :?>
                                    <input type="checkbox" id="id_alamat[]" name="id_alamat[]"  multiple value="<?= $row->id_alamat; ?>"><?= $row->alamat; ?><br>
                                <?php endforeach;?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Contact</label>
                                <div class="col-sm-10">
                                    <select class="bootstrap-select" name="id_contact" id="id_contact"  data-width="100%" data-live-search="true" multiple required>
                                        <?php foreach ($contact as $row) :?>
                                            <option value="<?= $row->id_contact;?>"><?=  $row->contact;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Visi</label>
                                <div class="col-sm-10">
                                    <select class="bootstrap-select" name="id_visi" id="id_visi"  data-width="100%" data-live-search="true" multiple required>
                                        <?php foreach ($visi as $vs) :?>
                                            <option value="<?= $vs->id_visi;?>"><?=  $vs->visi;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Misi</label>
                                <div class="col-sm-10">
                                    <select class="bootstrap-select" name="id_misi" id="id_misi"  data-width="100%" data-live-search="true" multiple required>
                                        <?php foreach ($misi as $ms) :?>
                                            <option value="<?= $ms->id_misi;?>"><?=  $ms->misi;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Leglitas</label>
                                <div class="col-sm-10">
                                    <select class="bootstrap-select" name="id_legalitas" id="id_legalitas"  data-width="100%" data-live-search="true" multiple required>
                                        <?php foreach ($legalitas as $lg) :?>
                                            <option value="<?= $lg->id_legalitas;?>"><?=  $lg->legalitas;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Core of Value</label>
                                <div class="col-sm-10">
                                    <select class="bootstrap-select" name="id_cov" id="id_cov"  data-width="100%" data-live-search="true" multiple required>
                                        <?php foreach ($cov as $cv) :?>
                                            <option value="<?= $cv->id_cov;?>"><?=  $cv->nama;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div> -->


							
							
							
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
