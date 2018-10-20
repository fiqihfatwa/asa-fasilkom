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
                    DAFTAR SURAT YANG SELESAI DIBUAT
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
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jurusan</th>
                                <th class="text-center">Tanggal selesai</th>
                                <th>Jenis surat</th>
                                <th class="text-center">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $this->load->model('Pegawai_model','dbObject');
                           $no=1; foreach ($surat_selesai as $row) {?>
                            <?php
                              $mahasiswa = $this->dbObject->checkDataMahasiswa($row->nim);
                              foreach ($mahasiswa as $mhs) {
                                if($mhs->program_studi=='-' OR ($mhs->program_studi==$mhs->program_studi))
                                  {
                             ?>
                          <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $mhs->nama_depan.' '.$mhs->nama_belakang?></td>
                            <td><?php echo $mhs->program_studi?></td>
                            <td>
                              <?php
                                $tgl = explode("-",$row->tanggal_keluar);
                                $hari = $tgl[2];
                                $bulan = $tgl[1];
                                $tahun = $tgl[0];
                                echo $hari.'-'.$bulan.'-'.$tahun;
                               ?>
                            </td>
                            <td><?php echo $row->jenis_surat?></td>
                            <td>
                              <center>
                                <?php
                                    $id = $row->id_isi;
                                    $this->load->model('Pegawai_model','dbObject');
                                    $ceks = $this->dbObject->get_proses_surat_selesai($id);
                                    //$b = row($ceks);
                                    if($ceks == 0)
                                   {
                                    echo "<button class='btn btn-md btn-primary notif'>
                                        <input type='hidden' value='$id' class='id-isi ubah-kirim-$id'>Kirim Pemberitahuan</button>";
                                    }
                                    else
                                    {
                                      echo "<button class='btn btn-md btn-primary'>Terkirim</button>";
                                    }
                                  ?>
                              </center>
                            </td>
                          </tr>
                          <?php
                        }
                      }
                    }
                           ?>
                        </tbody>
                        <tfoot>
                          <tr>
                              <th>No</th>
                              <th>Nama Mahasiswa</th>
                              <th>Jurusan</th>
                              <th class="text-center">Tanggal selesai</th>
                              <th>Jenis surat</th>
                              <th class="text-center">Tindakan</th>
                          </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->
    </div>
</section>

<script>
$('.notif').on('click',function(){
  var id = $(this).find('.id-isi').val();
  var url = "Surat_selesai_dibuat/notif_surat_selesai?id="+id;

  $.post(url,function(data){
    if(data==1){
      alert('Pemberitahun Terkirim!');
      $('.ubah-kirim'+id).empty();
      $('.ubah-kirim'+id).append("Terkirim");
      location.reload();
    }else{
      location.reload();
      alert(data);
    }
  })
})
</script>
