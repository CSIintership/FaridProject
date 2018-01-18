      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
              <a href="<?php echo base_url('index.php/secondcontroller/add') ?>" class="btn btn-primary btn-xs pull-right">Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $n=1;
                foreach ($show->result() as $misal){
                 ?>
                 <tr>
                    <td><?php echo $n ?></td>
                    <td><?php echo $misal->name ?></td>
                    <td><?php echo $misal->address ?></td>
                    <td>
                      <a href="#" class="btn btn-info btn-xs" onclick="updatejs('<?php echo $misal->no; ?>')">Edit</a>
                      <a href="#" class="btn btn-danger btn-xs" onclick="deleted('<?php echo $misal->no; ?>')">Delete</a>                 
                    </td>
                 </tr>   
                <?php $n++; } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<script type="text/javascript">
    function updatejs(param){
    document.location='<?php echo base_url(); ?>index.php/secondcontroller/update/'+param;
    }

    function deleted(param){
var proc = window.confirm('Are you sure delete this data?');
if(proc){
    document.location='<?php echo base_url(); ?>index.php/secondcontroller/deletedata/'+param;
}
}
</script>