<div class="col-lg-8">
    <div class="panel panel-default">
        <div class="panel-heading"> Members List</div>
        
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Date Registration</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $i=1;foreach($seluruh as $row){?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row->username ?></td>
                            <td><?= $row->tgl_register ?></td>
                            <td><?= $row->banned ?></td>
                            <td>
                                <!-- Single button -->
                                <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href=""><i class="glyphicon glyphicon-cloud-download"></i> Download</a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-pencil"></i> Edit</a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-remove"></i> Delete</a></li>
                                  </ul>
                                </div>
                            </td>
                        </tr>
                    <?php $i++;} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>