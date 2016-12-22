<?php
    include 'template1.php';
?>


<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Employee Details</h1>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
DataTables Advanced Tables
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
<th>Name</th>
<th>Status</th>
<th>Details</th>
</tr>
</thead>
<tbody>
<?php
    for($i=0;$i<10;$i++)
    {
?>
<tr class="odd gradeX">
<td>Rushi</td>
<td>Completed HMA1</td>
<td><a href="profile.php">Link</a></td>
</tr>
<?php
    }
?>
</tbody>
</table>
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>
<!-- /.row -->

<script>

$(document).ready(function() {
                  $('#dataTables-example').DataTable({
                                                     responsive: true
                                                     });
                  });
</script>




        <!-- /#page-wrapper -->


<?php
    include 'template2.php';
?>
