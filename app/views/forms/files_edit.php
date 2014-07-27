<?php if(isset($message) && $message == 'sukses_upload'){?>
                <div class="alert alert-success">
                    <strong>Berhasil menambahkan file baru, lihat <a href="<?php $this->location('profile/myfiles') ?>">disini</a> </strong>
                </div>
<?php unset($message); }?>


    <form role="form" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Title </label>
            <input type="text" class="form-control" name="nama" value="<?= $seluruh->nama  ?>" placeholder="Ex: Tutorial memasak masakan padang"/>
          </div>
          
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea id="edit" name="deskripsi" class="form-control" rows="50"><?= $seluruh->deskripsi  ?></textarea>
          </div>
          
          <div class="form-group">
            <label>File Upload</label>
            <input type="file" name="files" accept="application/pdf" value="<?= $seluruh->path ?>"/>
            <p class="help-block">max size: 3MB.</p>
          </div>
          
          <button type="submit" class="btn btn-default" name="upload"><i class="glyphicon glyphicon-cloud-upload"></i> Update</button>
        </form>


<script>
    $(function() {
        $('#edit').editable({
            inlineMode: false
            })
    });
</script>