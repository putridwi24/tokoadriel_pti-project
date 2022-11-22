<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-2">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"  style="background: #254F43;">
                    <img src="<?= base_url('assets/img/profile/logo.png')?>" style=" height:300px; width:300px; display : block; margin-left :auto; margin-right : auto; margin-top : 25%;">
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Silahkan Buat Akun</h1>
                            <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Terlebih Dahulu</h1>
                        </div>
                        <hr>
                        <form class="user" method="post" action="<?= base_url('auth/registration')?>">
                            <div class="form-group">
                            <td>Nama Lengkap</td>
                                <input type="text" class="form-control form-control-user" id="name" name="name"
                                    value="<?= set_value('name')?>" style="border-radius: 8px;">
                                <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?></small>
                            </div>
                            <div class="form-group">
                            <td>Email</td>
                                <input type="text" class="form-control form-control-user" id="email" name="email"
                                    style="border-radius: 8px;" value="<?= set_value('email')?>">
                                <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?></small>
                            </div>
                            <td>Password</td>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1"
                                        name="password1"  style="border-radius: 8px;">
                                    <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?></small>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2"
                                        name="password2"  style="border-radius: 8px;">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block"
                            style="background: #469176; border:#57AD9E; color:white; border-radius: 8px; font-size: 15px; padding:8px;">
                                Buat Akun
                            </button>
                        </form>
                        <br>
                            <a href="<?= base_url('auth')?>"><button type="submit" class="btn btn-user btn-block"
                                style="background: #469176; border:#57AD9E; color:white; border-radius: 8px; font-size: 15px; padding:8px;">
                                Log In
                            </button></a>
                        <hr>
                        <!-- <div class="text-center">
                            <a class="small" href="forgot-password.html">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Sudah Punya Akun? Login!</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>