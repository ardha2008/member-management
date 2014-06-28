<table class="table table-bordered table-hover table-responsive">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Files</th>
        <th>Level</th>
        <th></th>
    </thead>
    
    <tbody>
    
        <form method="post" enctype="multipart/form-data">
            <tr>
                <td>#</td>
                <td><input type="text" name="nama" class="form-control" /></td>
                <td><textarea name="deskripsi" class="form-control"></textarea></td>
                <td>
                    <select class="form-control" name="level">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td><input type="file" name="files" class="form-control" /></td>
                <td><button class="btn btn-primary btn-block" name="upload">Upload</button></td>
            </tr>
        </form>
        
        <?php foreach($hasil as $row){?>
            <tr>
                <td>1</td>
                <td><?= $row->nama ?></td>
                <td><?= substr($row->deskripsi,0,'20').'...' ?></td>
                <td><?= $row->level ?></td>
                <td><?= $row->path ?></td>
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>