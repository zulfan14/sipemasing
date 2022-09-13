<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


    <section class="section gradient-banner">
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="block">
                        <!-- Image -->
                        <!-- Content -->
                        <div class="content text-center">
                            <div class="logo">
                                <a href="index.html"><img src="<?= base_url('assets/'); ?>images/logo_uui.png" alt=""></a>
                            </div>
                            <div class="title-text">
                                <h3>Sign in to To Your Account</h3>
                            </div>
                            <?= $this->session->flashdata('message');
                            ?>
                            <form action="<?= base_url('auth/login'); ?>" method="POST">
                                <!-- Username -->
                                <input class="form-control main" type="text" id="email" name="email" placeholder="Enter Email Address" value="<?= set_value('email'); ?>" required>
                                <?= form_error('email', '<small class="text-warning pl-3">', '</small>') ?>
                                <!-- Password -->
                                <input class="form-control main" type="password" id="password" name="password" placeholder="Password" required>
                                <?= form_error('password', '<small class="text-warning pl-3">', '</small>') ?>
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-main-md">sign in</button>
                            </form>
                            <div class="new-acount">
                                <a href="contact.html">Forget your password?</a>
                                <p>Don't Have an account? <a href="<?= base_url('auth/registration'); ?>"> SIGN UP</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>