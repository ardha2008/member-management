<div class="col-lg-8">
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Referall</div>
        </div>
        
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Referal</th>
                        <th>Date</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $i=1;foreach($seluruh as $row){?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row->username ?></td>
                            <td><?= $row->date ?></td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>