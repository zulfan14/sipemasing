<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Admin</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <?php foreach ($gelombang as $gl) :
        ?>
            <form action="<?= base_url('gelombang/update'); ?>" method="POST">
                <div class="form-group">
                    <input type="hidden" name="id" id="id" class="form-control" value="<?= $gl['id']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" readonly name="keterangan" id="keterangan" class="form-control" value="<?= $gl['keterangan']; ?>">
                </div>
                <div class="form-group">
                    <label>gelombang ke </label>
                    <input type="number" name="gelombang" id="gelombang" class="form-control" value="<?= $gl['gelombang']; ?>">
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" name="tahun" id="tahun" class="form-control" value="<?= $gl['tahun']; ?>">
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
        <?php endforeach; ?>
    </section>
</div>