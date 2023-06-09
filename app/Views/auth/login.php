<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center" style="font-weight: bold;">LOGIN</h4>
                    <hr>

                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url(); ?>/login/process" method="POST" id="create-form">
                        <div class="form-group my-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group my-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group my-4">
                            <button class="btn btn-primary bg-gradient">Login</button>
                        </div>
                    </form>

                </div>

            </div>
            <div class="text-center mt-2">
                Belum punya akun? <a href="<?php echo base_url('register'); ?>">Silakan daftar.</a>
            </div>
        </div>
    </div>
</div>