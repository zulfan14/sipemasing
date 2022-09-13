<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Gelombang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Admin</a></li>
                        <li class="breadcrumb-item active">Data Gelombang</li>
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
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Data Gelombang</button>
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
                                        <th>Nama</th>
                                        <th>Tahun</th>
                                        <th>Status</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($gelombang as $gl) : ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $gl['keterangan']; ?></td>
                                            <td><?= $gl['tahun']; ?></td>
                                            <?php if ($gl['status'] == '1') { ?>
                                                <td>Aktif</td>
                                            <?php } else { ?>
                                                <td>Tidak Aktif</td>
                                            <?php } ?>
                                            <td>
                                                <?= anchor(
                                                    'gelombang/hapus/' . $gl['id'],
                                                    '<div class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </div>'
                                                ); ?>
                                            </td>
                                            <td>
                                                <?= anchor(
                                                    'gelombang/edit/' . $gl['id'],
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
                    <h4 class="modal-title">Tambah Gelombang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('gelombang/tambahgelombang') ?>" method="POST">
                        <div class="form-group">
                            <label>gelombang ke </label>
                            <input type="number" name="gelombang" id="gelombang" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="number" name="tahun" id="tahun" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="custom-select" name="status" id="status" required>
                                <option selected>Pilih Status</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
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