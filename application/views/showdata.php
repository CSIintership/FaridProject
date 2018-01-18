<!DOCTYPE html>
<html>
    <head>
        <title>BNHA</title>
</head>
<script src="<?php echo base_url(); ?>assets/jquery-3.2.1.min.js"></script>
<body>
    <a href="<?php echo site_url('firstcontroller/showinsert') ?>">Add Data</a>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Address</td>
                <td>Option</td>
</tr>
<?php
$n=1; 
foreach ($show->result() as $i){
?>
<tr>
    <td><?php echo $n; ?></td>
    <td><?php echo $i->name; ?></td>
    <td><?php echo $i->address; ?></td>
    <td>
    <a href="#" onclick="updatedata('<?php echo $i->no; ?>','<?php echo $i->name; ?>','<?php echo $i->address; ?>')">Update<a/>
    <a href="#" onclick="deleted('<?php echo $i->no; ?>')">Delete<a/>
    </td>
</tr>
<?php $n++; } ?>
</table>
<br>

<form method="post" id="updateform">
<table>
<tr>
<td>Id</td>
<td>Name</td>
<td>Address</td>
</tr>
<tr>
<td><input type="text" name="id" id="id" readonly></td>
<td><input type="text" name="name" id="name"></td>
<td><input type="text" name="address" id="address"></td>
</tr>
</table>
<button type="submit">Save</button>
</form>

<script type="text/javascript">
function updatedata(data1,data2,data3){
$("#id").val(data1);
$("#name").val(data2);
$("#address").val(data3);
$("#updateform").attr("action","<?php echo site_url('firstcontroller/updatedata') ?>");
}
function deleted(param){
var proc = window.confirm('Are you sure delete this data?');
if(proc){
    document.location='<?php echo base_url(); ?>index.php/firstcontroller/deletedata/'+param;
}
}
</script>
</body>
</html>