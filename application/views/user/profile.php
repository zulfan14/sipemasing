<body class="form-v4">
    <div class="page-content">
        <div class="col-lg-8 mt-5">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="page-content">

        <!-- <div class="row"> -->
        <div class="form-v4-content">
            <?php if ($pendaftar['lulus'] == 0) { ?>
                <div class="col-md-3 text-center" style="padding: 30px; background-color: #8e1b1b">
                    <img src="<?= base_url('assets/'); ?>images/default.jpg" class=" img-fluid" style="width: 200px; height: 200px;border-top-left-radius:70px; border-bottom-left-radius:30px; border-bottom-right-radius:70px; border-top-right-radius:30px; background:transparent !important" alt=" ...">
                </div>
            <?php } else { ?>
                <div class="col-md-3 text-center" style="padding: 30px; background-color: #8e1b1b">
                    <img src="<?= base_url('assets/document/'); ?><?= $lulus['foto'] ?>" class=" img-fluid" style="width: 200px; height: 200px;border-top-left-radius:70px; border-bottom-left-radius:30px; border-bottom-right-radius:70px; border-top-right-radius:30px; background:transparent !important" alt=" ...">
                </div>
            <?php } ?>

            <div class="form-detail">
                <?= form_open_multipart('user'); ?>
                <?php if ($pendaftar['lulus'] == 0) { ?>
                    <h3 class="text-bold" style="text-transform: uppercase;"><strong><?= $pendaftar['nama']; ?></strong></h3>
                    <P><?= $pendaftar['email']; ?></P>
                    <Br></Br>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Your profile is not complete yet!</h4>
                        <p></p>
                        <hr>
                        <p class="mb-0">Please complete your profile first</p>
                    </div>
                    <br>
                    <div class="form-row-last">
                        <a class=" btn register" href="<?= base_url('user'); ?>" role="button">Complete Profile</a>
                    </div>
                <?php } else { ?>
                    <h3 class="text-bold" style="text-transform: uppercase;"><strong><?= $lulus['nama']; ?></strong></h3>
                    <P><?= $lulus['email']; ?></P>
                    <br>

                    <h3>Identity</h3>

                    <div class="col-md-12 bt-bl mt-4">
                        <b>Identification Number</b>
                        <br>
                        <p class="txt-child"><?= $lulus['nik']; ?></p>
                    </div>
                    <div class="col-md-12 bt-bl mt-4">
                        <b>Your Phone</b>
                        <br>
                        <p class="txt-child"><?= $lulus['hp']; ?></p>
                    </div>
                    <div class="col-md-12 bt-bl mt-4">
                        <b>Your Country</b>
                        <br>
                        <p class="txt-child"><?= $lulus['negara']; ?></p>
                    </div>
                    <div class="col-md-12 bt-bl mt-4">
                        <b>Place Of Bird</b>
                        <br>
                        <p class="txt-child"><?= $lulus['tempat_lahir']; ?></p>
                    </div>

                    <h3>Completion Documents</h3>

                    <div class="d-flex mb-4 pr-5 mt-4" style="padding-top:5px;">
                        <div class="row ml-3" style="width:100%">
                            <div class="col-md-12">
                                <div class="row mb-3 list_file" style="border: solid 1px #1f2855;padding: 10px;margin: 0px;border-radius: 25px;">
                                    <div class="col-md-6 my-auto">
                                        <label class="m-0">
                                            <strong>
                                                <a href="<?= base_url('assets/document/'); ?><?= $lulus['ijazah']; ?>">Diploma or academic translation</a>
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3 list_file" style="border: solid 1px #1f2855;padding: 10px;margin: 0px;border-radius: 25px;">
                                    <div class="col-md-10 my-auto">
                                        <label class="m-0">
                                            <strong>
                                                <a href="<?= base_url('assets/document/'); ?><?= $lulus['penanggung_jawab']; ?>">Statement Letter from the guarantor or person in charge during study.</a>
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3 list_file" style="border: solid 1px #1f2855;padding: 10px;margin: 0px;border-radius: 25px;">
                                    <div class="col-md-10 my-auto">
                                        <label class="m-0">
                                            <strong>
                                                <a href="<?= base_url('assets/document/'); ?><?= $lulus['passport']; ?>">Passport</a>
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3 list_file" style="border: solid 1px #1f2855;padding: 10px;margin: 0px;border-radius: 25px;">
                                    <div class="col-md-10 my-auto">
                                        <label class="m-0">
                                            <strong>
                                                <a href="<?= base_url('assets/document/'); ?><?= $lulus['pernyataan_tidak_bekerja']; ?>">Statement letter will not work while studying in Indonesia</a>
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3 list_file" style="border: solid 1px #1f2855;padding: 10px;margin: 0px;border-radius: 25px;">
                                    <div class="col-md-10 my-auto">
                                        <label class="m-0">
                                            <strong>
                                                <a href="<?= base_url('assets/document/'); ?><?= $lulus['pernyataan_tidak_berpolitik']; ?>">Affidavit of not participating in political activities</a>
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3 list_file" style="border: solid 1px #1f2855;padding: 10px;margin: 0px;border-radius: 25px;">
                                    <div class="col-md-10 my-auto">
                                        <label class="m-0">
                                            <strong>
                                                <a href="<?= base_url('assets/document/'); ?><?= $lulus['pernyataan_undang']; ?>">Statement letter Complying with the existing laws and regulations in Indonesia</a>
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3 list_file" style="border: solid 1px #1f2855;padding: 10px;margin: 0px;border-radius: 25px;">
                                    <div class="col-md-10 my-auto">
                                        <label class="m-0">
                                            <strong>
                                                <a href="<?= base_url('assets/document/'); ?><?= $lulus['jaminan_biaya']; ?>">Certificate of Financing Guarantee</a>
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3 list_file" style="border: solid 1px #1f2855;padding: 10px;margin: 0px;border-radius: 25px;">
                                    <div class="col-md-10 my-auto">
                                        <label class="m-0">
                                            <strong>
                                                <a href="<?= base_url('assets/document/'); ?><?= $lulus['surat_kesehatan']; ?>">Healthy Certificate</a>
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row-last">
                        <a class=" btn register" href="<?= base_url('user/edit'); ?>" role="button">Edit Profile</a>
                    </div>
                <?php } ?>
                <?= form_close(); ?>
            </div>
        </div>
    </div>