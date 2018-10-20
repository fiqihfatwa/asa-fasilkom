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
                <?php foreach ($form_surat as $form): ?>
                    <div class="row clearfix">
                      <div class="col-sm-12">
                        <h2 class="card-inside-title"><?php echo $form->form_surat?></h2>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="<?php echo $form->type ?>" name="<?php echo $form->name ?>" class="form-control" placeholder="<?php echo $form->placeholder ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endforeach; ?>
                 </div>
            </div>
      </div>
</div>
