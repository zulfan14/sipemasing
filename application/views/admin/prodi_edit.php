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
        <?php foreach ($prodi as $pd) :
        ?>
            <form action="<?= base_url('prodi/update'); ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="id" id="id" class="form-control" value="<?= $pd['id']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" value="<?= $pd['nama_prodi']; ?>">
                </div>
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php endforeach; ?>
    </section>
</div>