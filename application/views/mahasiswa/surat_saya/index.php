<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo $title?></h2>
        </div>


        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2 id='title'>Surat saya</h2>
                            </div>
                        </div>
                    </div>
                      <div class="body" id='body'>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Surat</th>
                                        <th>Tanggal Permintaan Surat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $this->load->model('Pegawai_model','dbObject');
                                   $no=1; foreach ($surat_saya as $row) {?>
                                    <tr>
                                      <td><?php echo $no++?></td>
                                      <td><?php echo $row->jenis_surat?></td>
                                      <td><?php
                                            $t = explode('-',$row->tanggal_masuk);
                                            $tgl = $t[2];
                                            $bulan = $t[1];
                                            $tahun = $t[0];

                                            switch($bulan){
                                              case '01':
                                                $bul = 'Januari';
                                                break;
                                              case '02':
                                                $bul = 'Februari';
                                                break;
                                              case '03':
                                                $bul = 'Maret';
                                                break;
                                              case '04':
                                                $bul = 'April';
                                                break;
                                              case '05':
                                                $bul = 'Mei';
                                                break;
                                              case '06':
                                                $bul = 'Juni';
                                                break;
                                              case '07':
                                                $bul = 'Juli';
                                                break;
                                              case '08':
                                                $bul = 'Agustus';
                                                break;
                                              case '09':
                                                $bul = 'September';
                                                break;
                                              case '10':
                                                $bul = 'Oktober';
                                                break;
                                              case '11':
                                                $bul = 'November';
                                                break;
                                              case '12':
                                                $bul = 'Desember';
                                                break;
                                            }
                                          echo $tgl.' '.$bul.' '.$tahun;
                                          ?></td>
                                          <td><?php
                                          if ($row->status_surat=='Pending') {
                                          echo "<b class='text text-center text-warning'>Pending</b>";
                                        }elseif ($row->status_surat=='On Process') {
                                          echo "<b class='text text-center text-primary'>On Process</b>";
                                        }elseif ($row->status_surat=='Ditolak') {
                                          echo "<b class='text text-center text-danger'>Ditolak</b>";
                                        }elseif ($row->status_surat=='Selesai') {
                                          echo "<b class='text text-center text-success'>Selesai</b>";
                                        }
                                          ?></td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                      <th>No</th>
                                      <th>Jenis Surat</th>
                                      <th>Tanggal Permintaan Surat</th>
                                      <th>Status</th>
                                    </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        <!-- #END# CPU Usage -->
</section>
