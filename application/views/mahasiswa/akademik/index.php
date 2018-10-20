<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo $title?></h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="header">
                <div class="row clearfix">
                  <div class="col-xs-12 col-sm-6">
                      <h2>Pilih jenis pengajuan surat</h2>
                  </div>
                </div>
              </div>
              <div class="body">
                <select class="form-control show-tick" id='select' data-live-search="true">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2 id='title'>Form pengajuan</h2>
                            </div>
                        </div>
                    </div>
                      <div class="body" id='body'>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <script type="text/javascript">
                  $(document).ready(function(){
                    $("#select").on("change", function () {
                      if($(this).val() === '1'){
                        $('#title').html('wkwkwkwkwk');
                      }
                    });
                  });
                  </script>
        <!-- #END# CPU Usage -->
        </div>
    </div>
</section>
