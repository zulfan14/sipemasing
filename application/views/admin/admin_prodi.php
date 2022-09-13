<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Prodi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Admin</a></li>
                        <li class="breadcrumb-item active">Data Prodi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class=" container-fluid">
            <div class="col-lg-8 mt-5">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Data Prodi</button>
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
                                        <th>ID PRODI</th>
                                        <th>NAMA</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($prodi as $pd) : ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $pd['id']; ?></td>
                                            <td><?= $pd['nama_prodi']; ?></td>
                                            <td onclick="javascript: return comfirm('Anda Yakin Ingin Menghapus Prodi Ini?')">
                                                <?= anchor(
                                                    'prodi/hapus/' . $pd['id'],
                                                    '<div class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </div>'
                                                ); ?>

                                            </td>
                                            <td onclick="javascript: return comfirm('Anda Yakin Ingin Menghapus Prodi Ini?')">
                                                <?= anchor(
                                                    'prodi/edit/' . $pd['id'],
                                                    '<div class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </div>'
                                                ); ?>

                                            </td>
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
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Prodi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('prodi/tambahprodi') ?>" method="POST">
                        <div class="form-group">
                            <label>ID Prodi</label>
                            <input type="text" name="id" id="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Prodi</label>
                            <input type="text" name="nama_prodi" id="nama_prodi" class="form-control">
                        </div>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>