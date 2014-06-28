<table class="table table-condensed table-hover table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Alamat</th>
                                <th>Level</th>
                                <th>Aksi</th>
							</tr>
						</thead>
						<tbody>
                            <form method="post">
                                <?php if(isset($edit)){?>
                                <tr>
                                    <td>#</td>
                                    <td><input type="text" name="nama" value="<?php echo $edit[0]->nama ?>" class="form-control" /></td>
                                    <td><input type="text" name="email" value="<?php echo $edit[0]->email ?>" class="form-control" /></td>
                                    <td><input type="text" name="alamat" value="<?php echo $edit[0]->alamat ?>" class="form-control" /></td>
                                    <td><select class="form-control" name="level">
                                        <option value="1">Register</option>
                                        <option value="2">Member</option>
                                        <option value="3">VIP</option>
                                        <option value="4">Admin</option>
                                        </select>
                                    </td>
                                    <td><button class="btn btn-success" name="update">Update</button></a></td>
                                </tr>
                                <?php } ?>
                                
                                <?php if(!isset($edit)){?>
                                <tr>
                                    <td>#</td>
                                    <td><input type="text" name="nama" value="" class="form-control" /></td>
                                    <td><input type="text" name="email" value="" class="form-control" /></td>
                                    <td><input type="text" name="alamat" value="" class="form-control" /></td>
                                    <td><select class="form-control" name="level">
                                        <option value="1">Register</option>
                                        <option value="2">Member</option>
                                        <option value="3">VIP</option>
                                        <option value="4">Admin</option>
                                        </select>
                                    </td>
                                    <td><button class="btn btn-default btn-block" name="simpan"><i class="glyphicon glyphicon-floppy-save"></i></button></td>
                                </tr>
                                <?php } ?>
                            </form>
                            
							<?php $i=1;foreach($hasil as $row){?>     
                                 <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->nama ?></td>
                                    <td><?php echo $row->email ?></td>
                                    <td><?php echo $row->alamat ?></td>
                                    <td><?php echo $row->level ?></td>
                                    <td>
                                        <a href="<?php echo $this->location('profile/edit/'.$row->id) ?>" class="btn btn-primary" title="EDIT"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="<?php echo $this->location('profile/delete/'.$row->id) ?>" class="btn btn-danger" title="DELETE"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                 </tr>
                                 
							<?php $i++; } ?>
						</tbody>
                        
                        <thead>
                        
							<tfoot>
                                <th>#</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Alamat</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tfoot>
                            
						</thead>
					</table>
                    