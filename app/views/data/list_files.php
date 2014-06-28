<?php foreach($hasil as $row){?>
        <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $row->nama ?></h3>
  </div>
  <div class="panel-body">
    <?php echo $row->deskripsi ?>
  </div>
  
  <div class="panel-footer">
    <button class="btn btn-primary">Download</button>
  </div>
</div>
    <?php }?>