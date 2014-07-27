<div class="col-lg-8">
    <fieldset>
        <legend>Detail Files</legend>
        
        <?php foreach($seluruh as $row){?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title"><?= $row->nama ?> - <?= $row->tanggal ?></div>
                </div>
        
                <div class="panel-body">
                    <?= $row->deskripsi ?>
                </div>
                
                <div class="panel-footer">
                    <a href="<?= $this->uri->getBaseUri().$row->path?>" class="btn btn-success"> Download</a>
                </div>
            </div>
        <?php } ?>
        
    </fieldset>
</div>