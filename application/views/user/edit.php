<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-detail">
                <!-- <form class="form-detail" action="<?= base_url('user'); ?>" method="post"> -->
                <?= form_open_multipart('user/edit'); ?>
                <h2>EDIT PROFILE</h2>
                <div class="form-row">
                    <input type="hidden" name="id" id="id" class="input-text" readonly value="<?= $pendaftar['id']; ?>">
                </div>
                <div class="form-row">
                    <label for="nama">Your name</label>
                    <input type="text" name="nama" id="nama" class="input-text" readonly value="<?= $pendaftar['nama']; ?>">
                </div>
                <div class="form-row">
                    <label for="email">Your Email</label>
                    <input type="text" name="email" id="email" class="input-text" value="<?= $pendaftar['email']; ?>" readonly pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                <div class="form-row">
                    <label for="nik">Identification Number</label>
                    <input type="number" name="nik" id="nik" class="input-text" value="<?= $pendaftar['nik']; ?>">
                </div>
                <div class="form-row">
                    <label for="hp">Your Phone</label>
                    <input type="text" name="hp" id="hp" class="input-text" value="<?= $pendaftar['hp']; ?>">
                </div>
                <div class="form-row">
                    <label for="negara">Your country</label>
                    <input type="text" name="negara" id="negara" class="input-text" value="<?= $pendaftar['negara']; ?>">
                </div>
                <div class="form-row">
                    <label for="tempat_lahir">Place of birth</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="input-text" value="<?= $pendaftar['tempat_lahir']; ?>">
                </div>
                <div class="form-row">
                    <label for="ijazah">Diploma or academic translation</label>
                    <input type="file" name="ijazah" id="ijazah" class="input-text" value="<?= $pendaftar['ijazah']; ?>">
                </div>
                <div class="form-row">
                    <label for="passport">Passport</label>
                    <input type="file" name="passport" id="passport" class="input-text">
                </div>
                <div class="form-row">
                    <label for="penanggung_jawab">Statement Letter from the guarantor or person in charge during study.</label>
                    <input type="file" name="penanggung_jawab" id="penanggung_jawab" class="input-text">
                </div>
                <div class="form-row">
                    <label for="pernyataan_tidak_bekerja">Statement letter will not work while studying in Indonesia.</label>
                    <input type="file" name="pernyataan_tidak_bekerja" id="pernyataan_tidak_bekerja" class="input-text">
                </div>
                <div class="form-row">
                    <label for="pernyataan_tidak_berpolitik">Affidavit of not participating in political activities</label>
                    <input type="file" name="pernyataan_tidak_berpolitik" id="pernyataan_tidak_berpolitik" class="input-text">
                </div>
                <div class="form-row">
                    <label for="pernyataan_undang">Statement letter Complying with the existing laws and regulations in Indonesia</label>
                    <input type="file" name="pernyataan_undang" id="pernyataan_undang" class="input-text">
                </div>
                <div class="form-row">
                    <label for="jaminan_biaya">Certificate of Financing Guarantee</label>
                    <input type="file" name="jaminan_biaya" id="jaminan_biaya" class="input-text">
                </div>
                <div class="form-row">
                    <label for="surat_kesehatan">Healthy Certificate.</label>
                    <input type="file" name="surat_kesehatan" id="surat_kesehatan" class="input-text">
                </div>
                <div class="form-row">
                    <label for="foto">Passport-sized color photo</label>
                    <input type="file" name="foto" id="foto" class="input-text">
                </div>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Register">
                </div>
                <?= form_close(); ?>
                <!-- </form> -->
            </div>
        </div>
    </div>