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
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Admin</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <?php foreach ($pendaftar as $pr) :
        ?>
            <form action="<?= base_url('admin/pendaftar_update'); ?>" method="POST">
                <div class="form-group">
                    <input type="hidden" name="id" id="id" class="form-control" value="<?= $pr['id']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $pr['nama']; ?>">
                    <div class="form-group">
                        <label>email </label>
                        <input type="text" name="email" id="email" class="form-control" value="<?= $pr['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="is_active">Status Pembayaran</label>
                        <select class="custom-select" name="is_active" id="is_active" required>
                            <option selected>Pilih Status</option>
                            <option value="1">Sudah Bayar</option>
                            <option value="0">Belum bayar</option>
                        </select>
                    </div>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php endforeach; ?>
    </section>
</div>