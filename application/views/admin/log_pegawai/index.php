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
                    Log Pegawai
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
                                <th>Tanggal</th>
                                <th>Isi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach ($log_pegawai as $row) {?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php
                                $date = explode(' ',$row->tanggal);
                                $tgl = $date[0];
                                $time = $date[1];
                                $t = explode('-',$tgl);
                                $hari = $t[2];
                                $bulan = $t[1];
                                $tahun = $t[0];
                                 echo $hari.'-'.$bulan.'-'.$tahun.' '.$time;?></td>
                                <td><?php echo $row->isi_log?></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Isi</th>
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
