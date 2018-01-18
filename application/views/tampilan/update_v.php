<div class="col-md-6">
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Form Add</h3>
    </div>
    <!-- /.box-header -->
    
    <!-- form start -->
    <form method="post" action="<?php echo base_url('index.php/secondcontroller/updatefunction') ?>">
        <div class="box-body">
        <?php foreach ($dataupdate->result() as $key){ ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input type="text" class="form-control" id="id" name='id' value="<?php echo $key->no; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="idname" name='idname' placeholder="Your Name" value="<?php echo $key->name; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" id="idaddress" name='idaddress' placeholder="Your Address" value="<?php echo $key->address; ?>">
            </div>

<!-- tombol browse 
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">

            <p class="help-block">Example block-level help text here.</p>
        </div>
-->
<!-- tombol checkbox
        <div class="checkbox">
            <label>
            <input type="checkbox"> Check me out
            </label>
        </div>
-->
        <?php } ?>       
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>