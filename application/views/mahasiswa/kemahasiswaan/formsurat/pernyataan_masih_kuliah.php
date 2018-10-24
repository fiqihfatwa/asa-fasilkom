<div class="row clearfix" >
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h2 id='title'>Form pengajuan <?php echo $title?></h2>
                    </div>
                </div>
            </div>
              <div class="body" id='body'>
                <form action="<?php echo base_url()?>mahasiswa/kemahasiswaan/surat_pernyataan_masih_kuliah/<?php echo $id_jenis?>" method="post" enctype="multipart/form-data">
                <?php foreach ($form_surat as $form): ?>
                  <h2 class="card-inside-title"><?php echo $form->form_surat?></h2>
                    <div class="row clearfix">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <div class="form-line">
                            <input id="<?php echo $form->name ?>" type="<?php echo $form->type ?>" name="<?php echo $form->name ?>" class="form-control" placeholder="<?php echo $form->placeholder ?>" required>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endforeach; ?>
                      <button type="submit" name="kirim" class="btn btn-primary waves-effect">Kirim</button>
                  </form>
                 </div>
            </div>
      </div>
</div>
