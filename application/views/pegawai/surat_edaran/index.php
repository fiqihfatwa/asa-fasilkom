<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo $title?></h2>
        </div>
        <!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Surat Edaran
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">

            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->
    </div>
</section>

<div class="modal fade modal-1" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Kelengkapan Berkas</h4>
                </div>
                <div class="modal-body modal-1-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade modal-2" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title">Alasan Penolakan</h4>
                </div>
                <div class="modal-body">
                        <form action="<?php echo base_url()?>pegawai/tolak_surat" method="post">
                          <input type="hidden" name="id_isi" value="" class="id-hapus">
                            <textarea class="form-control" name="tolak"></textarea><br>
                            <button type="submit" class="btn btn primary"> Submit </button>
                          </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<script>

  $('.muncul-modal').on('click',function(){
      var id_isi = $(this).find('.id_isi').val();
      var nim  = $(this).find('.nim').val();
      $.post("<?php echo base_url()?>pegawai/cek_kelengkapan_berkas",{nim:nim, id_isi:id_isi}, function(data){
        $('.modal-1-body').empty();
        jQuery.each(data, function(i, val){
          if(val.type=='file'){
            var url = "<?php echo base_url()?>berkas_mahasiswa/document/"+val.isi+val.type[0].replace("f","");
            $('.modal-1-body').append(val.form+" : <a href='"+url+"' target='_blank'>lihat</a><br>");
          }else{
            $('.modal-1-body').append(val.form+" : "+val.isi+"<br>");
          }

        });
         $('.modal-1').modal("show");
      });

  });

$('.modal-tolak').on('click',function(){
  var id_isi = $(this).find('.id_isi').val();
  $('.id-hapus').prop("value",id_isi);
  $('.modal-2').modal("show");
});


$('.notif').on('click',function(){
  var id = $(this).find('.id-isi').val();
  var url = "notif_surat_selesai.php?id="+id;

  $.post(url,function(data){
    if(data==1){
      alert('Pemberitahun Terkirim!')
    }else{
      alert(data);
    }
  })
})
</script>
