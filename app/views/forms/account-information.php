<?php if(isset($message) && $message == 'sukses_update'){?>
    <div class="alert alert-success">
        <strong>Berhasil memperbarui informasi</strong>
    </div>
<?php unset($message); } ?>

<?php foreach($detail as $row){?>
    <form class="form-horizontal" role="form" method="post">
      
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" name="nama" value="<?= $row->nama ?>" class="form-control" />
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="email" class="form-control" value="<?= $row->email ?>" />
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" placeholder="Tulis alamat lengkap disini" name="alamat"><?= $row->alamat ?></textarea>
        </div>
      </div>
      
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="update" class="btn btn-default">Perbarui</button>
        </div> 
      </div>
      
    </form>
<?php } ?>