            <?php if(isset($message) && $message == 'login_failed'){?>
                <div class="alert alert-danger">
                    <strong>Email dan password tidak cocok</strong>
                </div>
            <?php unset($message); } ?>
            
            <?php if(isset($message) && $message == 'register'){?>
                <div class="alert alert-success">
                    <strong>Registrasi berhasil</strong>
                </div>
            <?php unset($message); } ?>
            
            <?php if(isset($message) && $message == 'password_beda'){?>
                <div class="alert alert-danger">
                    <strong>Password dan verifikasi password harus sama</strong>
                </div>
            <?php unset($message); }?>
            
