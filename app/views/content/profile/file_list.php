<div class="col-lg-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">MyFiles</div>
        </div>
        
        <div class="panel-body">
        <a href="<?= $this->location('myfiles/upload') ?>" class="btn btn-default"><i class="glyphicon glyphicon-cloud-upload"></i> Upload</a>
        <hr />
            <table id="myTable" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th class="danger">#</th>
                        <th class="danger">Title</th>
                        <th class="danger">Deskripsi</th>
                        <th class="danger">Tanggal</th>
                        <th class="danger"></th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $i=1;foreach($seluruh as $row){?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row->nama ?></td>
                            <td><?= $this->limiter->word_limiter($row->deskripsi,5) ?> ... </td>
                            <td><?= $row->tanggal ?></td>
                            <td>
                                <!-- Single button -->
                                <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= $this->uri->getBaseUri().$row->path  ?>"><i class="glyphicon glyphicon-cloud-download"></i> Download</a></li>
                                    <li><a href="<?= $this->location('myfiles/delete/').$row->id ?>"><i class="glyphicon glyphicon-remove"></i> Delete</a></li>
                                  </ul>
                                </div>
                            </td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>$(document).ready(function(){
    $('#myTable').dataTable();
});</script>