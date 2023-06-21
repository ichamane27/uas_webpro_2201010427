<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Edit tb_ktp</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">nik:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="nik" value="<?php echo $row->nik; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">nama:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="nama" value="<?php echo $row->nama; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">tempat_lahir:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row->tempat_lahir; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">tgl_lahir:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="tgl_lahir" value="<?php echo $row->tgl_lahir; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">jekel:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="jekel" value="<?php echo $row->jekel; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">alamat:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat; ?>">
					</div>
				</div>
				<<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">agama:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="agama" value="<?php echo $row->agama; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">status_perkawinan:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="status_perkawinan" value="<?php echo $row->status_perkawinan; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">pekerjaan:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="pekerjaan" value="<?php echo $row->pekerjaan; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">kewarganegaraan:</label>
					</div>
					<div class="col-sm-10<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">kewarganegaraan:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="kewarganegaraan" value="<?php echo $row->status_berlaku; ?>">
					</div>
				</div>
">
<input type="text" class="form-control" name="status_berlaku" value="<?php echo $row->status_berlaku; ?>">
					</div>
				</div>


            </div> 
			</div>
            <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
 
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Delete tb_ktp</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Apakah anda ingin menghapus</p>
				<h2 class="text-center"><?php echo $row->nama; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>
 
        </div>
    </div>
</div>