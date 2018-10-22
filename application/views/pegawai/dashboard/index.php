<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo $title?></h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box hover-expand-effect">
                    <div class="icon bg-pink">
                        <i class="material-icons">mail</i>
                    </div>
                    <div class="content">
                        <div class="text">Permohonan surat</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $jumlah_permintaan_surat_masuk?>" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-lime">
                            <i class="material-icons">brightness_low</i>
                        </div>
                        <div class="content">
                            <div class="text">Dalam Proses</div>
                            <div class="number"><?php echo $jumlah_surat_on_process?></div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-light-blue">
                            <i class="material-icons">access_alarm</i>
                        </div>
                        <div class="content">
                            <div class="text">Surat Selesai</div>
                            <div class="number"><?php echo $jumlah_surat_selesai?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-light-green">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Pesan Masuk</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-orange">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Kirim Pemberitahuan</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-teal">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">Penolakan Surat</div>
                            <div class="number"><?php echo $jumlah_surat_ditolak?></div>
                        </div>
                    </div>
                </div>
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW TICKETS</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW COMMENTS</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW VISITORS</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->

        <!-- #END# CPU Usage -->
        </div>
    </div>
    <div class="row clearfix">
    <!-- Visitors -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="body bg-pink">
                <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                     data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                     data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                     data-fill-Color="rgba(0, 188, 212, 0)">
                    Arus Persuratan Mingguan
                </div>
                <ul class="dashboard-stat-list">
                    <li>
                        Permintaan Surat Masuk
                        <span class="pull-right"><b><?php echo $jumlah_permintaan_surat_masuk_mingguan?></b> <small>mahasiswa</small></span>
                    </li>
                    <li>
                        Surat yang diproses
                        <span class="pull-right"><b><?php echo $jumlah_surat_on_process_mingguan?></b> <small>mahasiswa</small></span>
                    </li>
                    <li>
                        Surat Selesai Dibuat
                        <span class="pull-right"><b>10</b> <small>mahasiswa</small></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #END# Visitors -->
    <!-- Latest Social Trends -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="body bg-cyan">
                <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                     data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                     data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                     data-fill-Color="rgba(0, 188, 212, 0)">
                    Arus Persuratan Bulanan
                </div>
                <ul class="dashboard-stat-list">
                    <li>
                        Permintaan Surat Masuk
                        <span class="pull-right"><b>20</b> <small>mahasiswa</small></span>
                    </li>
                    <li>
                        Surat yang diproses
                        <span class="pull-right"><b>30</b> <small>mahasiswa</small></span>
                    </li>
                    <li>
                        Surat Selesai Dibuat
                        <span class="pull-right"><b>40</b> <small>mahasiswa</small></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #END# Latest Social Trends -->
    <!-- Answered Tickets -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="body bg-teal">
                <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                     data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                     data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                     data-fill-Color="rgba(0, 188, 212, 0)">
                    Arus Persuratan Persemester
                </div>
                <ul class="dashboard-stat-list">
                    <li>
                        Permintaan Surat Masuk
                        <span class="pull-right"><b>3</b> <small>mahasiswa</small></span>
                    </li>
                    <li>
                        Surat yang diproses
                        <span class="pull-right"><b>10</b> <small>mahasiswa</small></span>
                    </li>
                    <li>
                        Surat Selesai Dibuat
                        <span class="pull-right"><b>204</b> <small>mahasiswa</small></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #END# Answered Tickets -->
</div>
</div>

<?php
// $date = date('Y-m-d');
// $firstDate = date('Y-m-d',strtotime("monday this week"));
// $lastDate = date('Y-m-d',strtotime("sunday this week"));
// $firstMonth = date('Y-m',strtotime("january this year"));
//
// echo "today :".$date;
// echo "<br>";
// echo "fisrtday :".$firstDate;
// echo "<br>";
// echo "lastday :".$lastDate;
// echo "<br>";
// echo "firstMonth :".$firstMonth;

 ?>
</section>
