<div class="col-md-6">
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Form Add</h3>
    </div>
    <!-- /.box-header -->
    
    <!-- form start -->
    <form method="post" action="<?php echo base_url('index.php/secondcontroller/addfunction') ?>">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="idname" name='idname' placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" id="idaddress" name='idaddress' placeholder="Your Address">
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

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>