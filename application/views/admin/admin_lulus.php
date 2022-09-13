<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <a class="btn btn-primary" href="<?= base_url('admin/cetakPDF') ?>"><i class="fa fa-print"></i>Cetak PDF</a>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        <th>NOMOR IDENTITAS</th>
                                        <th>NOMOR HP</th>
                                        <th>NEGARA</th>
                                        <th>TEMPAT_LAHIR</th>
                                        <th>IJAZAH</th>
                                        <th>PASSPORT</th>
                                        <th>PENANGGUNG JAWAB</th>
                                        <th>TIDAK BEKERJA</th>
                                        <th>MEMATUHI UNDANG UNDANG</th>
                                        <th>JAMINAN BIAYA</th>
                                        <th>SURAT KESEHATAN</th>
                                        <th>TIDAK BERPOLITIK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($lulus as $l) : ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $l['nama']; ?></td>
                                            <td><?= $l['email']; ?></td>
                                            <td><?= $l['nik'] ?></td>
                                            <td><?= $l['hp'] ?></td>
                                            <td><?= $l['negara'] ?></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['ijazah']; ?>">Download</a></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['passport']; ?>">Download</a></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['penanggung_jawab']; ?>">Download</a></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['pernyataan_tidak_bekerja']; ?>">Download</a></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['pernyataan_undang']; ?>">Download</a></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['jaminan_biaya']; ?>">Download</a></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['surat_kesehatan']; ?>">Download</a></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['surat_kesehatan']; ?>">Download</a></td>
                                            <td><a href="<?= base_url('assets/document/'); ?><?= $l['pernyataan_tidak_berpolitik']; ?>">Download</a></td>
                                        </tr>
                                    <?php $no++;
                                    endforeach; ?>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>