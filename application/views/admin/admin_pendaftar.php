<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pendaftar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Pendaftar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-8 mt-auto">
                <?= $this->session->flashdata('message'); ?>
            </div>
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
                                        <th>TANGGAL PENDAFTARAN</th>
                                        <th>PEMBAYARAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pendaftar as $pr) : ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $pr['nama']; ?></td>
                                            <td><?= $pr['email']; ?></td>
                                            <td><?= date('d F Y', $pr['date_created']); ?></td>
                                            <?php if ($pr['is_active'] == "1") { ?>
                                                <td>
                                                    <?= anchor(
                                                        'admin/editPendaftar/' . $pr['id'],
                                                        'Sudah Bayar'
                                                    ); ?>
                                                </td>
                                            <?php } else { ?>
                                                <td><?= anchor(
                                                        'admin/editPendaftar/' . $pr['id'],
                                                        'Belum Bayar'
                                                    ); ?></td>
                                            <?php } ?>
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