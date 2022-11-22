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
                            <h1 class="h4 text-gray-900 mb-4 font-weight-bold">SELAMAT DATANG DI</h1>
                            <h1 class="h4 text-gray-900 mb-4 font-weight-bold">TOKO ADRIEL</h1>
                        </div>
                        <hr>

                        <?= $this->session->flashdata('message'); ?>
                        <form class="user" method="post" action="<?= base_url('auth'); ?>">
                            <div class="form-group">
                            <td>Email</td>
                                <input type="text" class="form-control form-control-user" id="email"
                                    name="email" style="border-radius: 8px;"
                                    value="<?= set_value('email')?>">
                                <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?></small>
                            </div>
                            <div class="form-group">
                            <td>Password</td>
                                <input type="password" class="form-control form-control-user" id="password"
                                    name="password" style="border-radius: 8px;">
                                <?= form_error('password', '<small class="text-danger pl-3">','</small>'); ?></small>
                            </div>
                            <button type="submit" class="btn btn-user btn-block"
                                style="background: #469176; border:#57AD9E; color:white; font-size: 15px; padding:8px; border-radius: 8px;">
                                Login
                            </button>
                        </form>
                        <br>
                            <a href="<?= base_url('auth/registration')?>"><button type="submit" class="btn btn-user btn-block"
                                style="background: #469176; border:#57AD9E; color:white; border-radius: 8px; font-size: 15px; padding:8px;">
                                Sign in
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