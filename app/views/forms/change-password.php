<?php if(isset($message) && $message == 'password_lama'){?>
    <div class="alert alert-danger">
        <strong>Password lama yang anda masukkan tidak cocok</strong>
    </div>
<?php unset($message); }?>
            

<?php if(isset($message) && $message == 'password_beda'){?>
    <div class="alert alert-danger">
        <strong>Verifikasi password harus cocok</strong>
    </div>
<?php unset($message); }?>

<?php if(isset($message) && $message == 'update_password'){?>
    <div class="alert alert-success">
        <strong>Berhasil memperbarui password</strong>
    </div>
<?php unset($message); }?>

<form class="form-horizontal" role="form" method="post">
  
  <div class="form-group">
    <label class="col-sm-2 control-label">Password Lama</label>
    <div class="col-sm-10">
      <input type="password" name="oldpassword" class="form-control" />
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password Baru</label>
    <div class="col-sm-10">
      <input type="password" name="newpassword" class="form-control" />
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Verifikasi Password</label>
    <div class="col-sm-10">
      <input type="password" name="renewpassword" class="form-control" />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="change" class="btn btn-default">Change password</button>
    </div> 
  </div>
  
</form>