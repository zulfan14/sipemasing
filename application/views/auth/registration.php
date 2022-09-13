<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Small Apps | Bootstrap App Landing Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/small-apps-free-app-landing-page-template/
DEMO: https://demo.themefisher.com/small-apps/
GITHUB: https://github.com/themefisher/Small-Apps-Bootstrap-App-Landing-Template

Get HUGO Version : https://themefisher.com/products/small-apps-hugo-app-landing-theme/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

    <!--=============================
=            Sign Up            =
==============================-->

    <section class="section gradient-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="block">
                        <!-- Image -->
                        <!-- <d class="image align-self-center"><img class="img-fluid" <img src="<?= base_url('assets/'); ?>images/Login/sign-up.jpg" alt="desk-image">
                        </d
                        iv> -->
                        <!-- Content -->
                        <div class="content text-center">
                            <div class="logo">
                                <a href="index.html"><img <img src="<?= base_url('assets/'); ?>images/logo_uui.png" alt=""></a>
                            </div>
                            <div class="title-text">
                                <h3>Sign Up for New Account</h3>
                            </div>
                            <form method="POST" action="<?= base_url('auth/registration'); ?>">
                                <!-- Username -->
                                <div class="form-group">
                                    <?php foreach ($gelombang as $gl) : ?>
                                        <input class="form-control main" type="hidden" id="gelombang" name="gelombang" placeholder="Your Name" value="<?= $gl['id']; ?>">
                                    <?php endforeach; ?>
                                    <div class="form-group">
                                        <input class="form-control main" type="text" id="nama" name="nama" placeholder="Your Name" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<small class="text-warning pl-3">', '</small>') ?>
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <input class="form-control main" type="text" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-warning p-0">', '</small>') ?>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <input class="form-control main" type="password" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                        <?= form_error('password', '<small class="text-warning p-0">', '</small>') ?>
                                    </div>
                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-main-md">sign up</button>
                            </form>
                            <div class="new-acount">
                                <p>By clicking “Sign Up” I agree to <a href="privacy-policy.html">Terms of Conditions.</a></p>
                                <p>Anready have an account? <a href="<?= base_url('auth/login'); ?>">SIGN IN</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Sign Up  ====-->


    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>