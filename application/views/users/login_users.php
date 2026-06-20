<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Pelanggan - Harznet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-8 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">

                <div class="card-body p-0">

                    <div class="p-5">

                        <div class="text-center">

                            <img src="<?= base_url('assets/images/harznet.png'); ?>"
                                 alt="Logo Harznet"
                                 class="img-fluid mb-4"
                                 style="max-height: 40px;">

                            <h1 class="h4 text-gray-900 mb-3 font-weight-bold">
                                LOGIN PELANGGAN
                            </h1>

                        </div>

                        <?= $this->session->flashdata('pesan') ?>

                        <form method="post"
                              action="<?= base_url('user_auth/login') ?>"
                              class="user">

                            <input type="hidden"
                                   name="<?= $this->security->get_csrf_token_name() ?>"
                                   value="<?= $this->security->get_csrf_hash() ?>"/>

                            <div class="form-group">

                                <input type="text"
                                       class="form-control form-control-user"
                                       placeholder="Masukkan Username Anda"
                                       name="username">

                                <?= form_error(
                                    'username',
                                    '<div class="text-danger small ml-2">',
                                    '</div>'
                                ); ?>

                            </div>

                            <div class="form-group">

                                <input type="password"
                                       class="form-control form-control-user"
                                       placeholder="Masukkan Password Anda"
                                       name="password">

                                <?= form_error(
                                    'password',
                                    '<div class="text-danger small ml-2">',
                                    '</div>'
                                ); ?>

                            </div>

                            <button type="submit"
                                    class="btn btn-primary form-control">
                                Login
                            </button>

                        </form>

                        <div class="mt-3 text-center small text-muted">
                            <em>Silakan login menggunakan akun pelanggan Anda.</em>
                        </div>

                        <div class="text-center mt-3">

                            <a class="btn btn-outline-secondary btn-sm"
                               href="<?= base_url(); ?>">
                                ← Kembali ke Beranda
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function () {
    setTimeout(function () {
        $(".alert").alert('close');
    }, 4000);
});
</script>

</body>
</html>