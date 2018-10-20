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
                    Data Pegawai
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
                                <th>Username</th>
                                <th>Bagian</th>
                                <th>Prodi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach ($get_data_pegawai as $row) {?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->bagian; ?></td>
                                <td><?php echo $row->program_studi; ?></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                              <th>No</th>
                              <th>Username</th>
                              <th>Bagian</th>
                              <th>Prodi</th>
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
