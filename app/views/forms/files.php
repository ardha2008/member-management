<form role="form">
  <div class="form-group">
    <label>Title </label>
    <input type="text" class="form-control" placeholder="Ex: Tutorial memasak masakan padang"/>
  </div>
  
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control"></textarea>
  </div>
  
  <div class="form-group">
    <label>File Upload</label>
    <input type="file" name="files"/>
    <p class="help-block">max size: 1MB.</p>
  </div>
  
  <button type="submit" class="btn btn-default" name="upload"><i class="glyphicon glyphicon-cloud-upload"></i> Upload</button>
</form>