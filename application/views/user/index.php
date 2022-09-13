<body class="form-v4">
    <div class="page-content mt-5">
        <div class="form-v4-content">
            <?php
            if ($pendaftar['lulus'] != 0) { ?>
                <div class="form-left">
                    <div class="col-md-3 text-center" style=" background-color: #8e1b1b">
                        <h4 class="text-bold" style="text-transform: uppercase;">
                            <strong>Congratulations!!
                                <br>
                                <span><?= $pendaftar['nama']; ?>
                                </span>
                            </strong>
                        </h4>
                    </div>
                </div>
                <div class="form-detail ">
                    <div class="form-detail">
                        <h4 class="text-bold">You have completed the admission process for new students at the University of Ubudiyah Indonesia.</h4><br>
                        <h4 class="text-2"><span>Next, </span> please download your graduation certificate on the button below</h4>
                    </div>
                    <div class="form-row-last">
                        <a class=" btn register" href="<?= base_url('user'); ?>" role="button">Download</a>
                    </div>
                </div>
            <?php
            } else { ?>
                <div class="form-left">
                    <h2>INFOMATION</h2>
                    <p class="text-2">Congratulations!! <br><span><?= $pendaftar['nama']; ?></span> You are declared to have passed as a student of U'Budiyah Indonesia University for the 1st batch without a test in 2022.</p>
                    <p class="text-2"><span>Eu ultrices:</span> Please Complete the Re-Registration Form Below.
                        Then Print Pass Certificate</p>
                    <div class="form-left-last">
                        <a class=" account" role="button" href="<?= base_url('auth/procedurePDF'); ?>">Download Procedure</a>
                    </div>
                </div>
                <div class="form-detail">
                    <!-- <form class="form-detail" action="<?= base_url('user'); ?>" method="post"> -->
                    <?= form_open_multipart('user'); ?>
                    <h2>PERSONAL DATA FORM</h2>
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
                        <input type="number" name="nik" id="nik" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="hp">Your Phone</label>
                        <input type="text" name="hp" id="hp" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="prodi">Choose a study program</label>
                        <select class="form-row input-text" name="prodi" id="prodi" required>
                            <option selected>Choose your study program</option>
                            <?php foreach ($prodi as $lp) : ?>
                                <option value="<?= $lp['id_prodi']; ?>"><?= $lp['nama_prodi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="negara">Your country</label>
                        <input type="text" name="negara" id="negara" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="tempat_lahir">Place of birth</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="ijazah">Diploma or academic translation</label>
                        <input type="file" name="ijazah" id="ijazah" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="passport">Passport</label>
                        <input type="file" name="passport" id="passport" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="penanggung_jawab">Statement Letter from the guarantor or person in charge during study.</label>
                        <input type="file" name="penanggung_jawab" id="penanggung_jawab" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="pernyataan_tidak_bekerja">Statement letter will not work while studying in Indonesia.</label>
                        <input type="file" name="pernyataan_tidak_bekerja" id="pernyataan_tidak_bekerja" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="pernyataan_tidak_berpolitik">Affidavit of not participating in political activities</label>
                        <input type="file" name="pernyataan_tidak_berpolitik" id="pernyataan_tidak_berpolitik" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="pernyataan_undang">Statement letter Complying with the existing laws and regulations in Indonesia</label>
                        <input type="file" name="pernyataan_undang" id="pernyataan_undang" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="jaminan_biaya">Certificate of Financing Guarantee</label>
                        <input type="file" name="jaminan_biaya" id="jaminan_biaya" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="surat_kesehatan">Healthy Certificate.</label>
                        <input type="file" name="surat_kesehatan" id="surat_kesehatan" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="foto">Passport-sized color photo</label>
                        <input type="file" name="foto" id="foto" class="input-text" required>
                    </div>
                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="Register">
                    </div>
                    <?= form_close(); ?>
                    <!-- </form> -->
                </div>
        </div>
    </div>
<?php
            }
?>