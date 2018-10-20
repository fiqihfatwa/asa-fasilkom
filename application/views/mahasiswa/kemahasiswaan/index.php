<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo $title?></h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
          <?php echo $this->session->flashdata('notif')?>
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
                  <option value="">- Pilih jenis surat -</option>
                  <?php foreach ($jenis_surat as $data ) {?>
                  <option value="<?php echo $data->id_jenis?>"><?php echo $data->jenis_surat ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
      <div id='form_surat'>

      </div>
        <!-- #END# CPU Usage -->
</section>

<script type="text/javascript">
$(document).ready(function(){
  $("#select").on("change", function () {
    var id_jenis = $('#select').val();
    $.ajax({
      url:"<?php echo base_url()?>mahasiswa/kemahasiswaan/get_jenis_surat",
      type:"GET",
      data:"id_jenis="+id_jenis,
      success:function(data){
        $('#form_surat').html(data);
        $('#ipk').removeAttr('required');
        $('#tglLahir').datepicker({
          format:'yyyy-mm-dd'
        });
        $('#tglLahir').attr("oninput","this.value=this.value.replace(/[^0-9]/g,'')");
        $('#hp').attr("oninput","this.value=this.value.replace(/[^0-9]/g,'')");
        $('#ThnMsk').attr("oninput","this.value=this.value.replace(/[^0-9]/g,'')");
      }
    });
  });
});
</script>
