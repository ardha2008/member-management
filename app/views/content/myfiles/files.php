<div class="col-lg-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <?php   if($pages=='myfiles/edit'){
                    echo 'Edit File';
                }else{
                    echo 'New File';
                } ?>
            </div>
        </div>
        
        <div class="panel-body">
            <?php   if($pages=='myfiles/edit'){
                    $this->output('forms/files_edit');
                }else{
                    $this->output('forms/files');
                } ?>

        </div>
    </div>
</div>