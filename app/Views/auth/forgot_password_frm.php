<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i><?= APP_NAME ?></h3>
                        </a>
                        <h3>Recovery password</h3>
                    </div>

                    <p class="text-center my-5">Insert you e-mail to recover you password</p>

                    <?= form_open('/auth/forgot_password_submit') ?>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Recover</button>

                    <?= form_close() ?>

                    <p class="text-center mb-0">Don't have an Account? <a href="<?= site_url('/auth/new_account') ?>">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>


<?= $this->endSection() ?>