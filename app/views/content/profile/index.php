<div class="col-lg-8">
    <?php foreach($seluruh as $row){?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    <?= $row->nama ?>
                </div>
            </div>
            
            <div class="panel-body">
                <div class="media">
    				 <a href="<?= $this->location('myfiles/detail/'.$row->id) ?>" class="pull-left"><img src="<?= $this->uri->getBaseUri() ?>assets/img/preview.png" class="media-object" alt='' /></a>
    				<div class="media-body">
    					 <?= $row->deskripsi ?>
    				</div>
    			</div>
            </div>
        </div>
    <?php } ?>
</div>