<?php
    include 'template1.php';
?>
<style>
.stylish-input-group .input-group-addon{
background: white !important;
}
.stylish-input-group .form-control{
    border-right:0;
    box-shadow:0 0 0;
    border-color:#ccc;
}
.stylish-input-group button{
border:0;
background:transparent;
}
</style>

<div class="row">
<div class="col-lg-12">
<h1 class="page-header">CSULB Enrollment Verification</h1>
</div>

<div class="col-sm-8 col-sm-offset-2">
<div id="imaginary_container">
<div class="input-group stylish-input-group">
<input type="text" class="form-control"  placeholder="Search" >
<span class="input-group-addon">
<button type="submit">
<span class="glyphicon glyphicon-search"></span>
</button>
</span>
</div>
</div>
</div>

</div>
<!-- /.row -->
<br><br>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
</thead>
<tbody>
<tr class="odd gradeX">
<td>Certificate ID: 011ADDAFDFD01</td>
<td>Certificate Course: HMA 1</td>
</tr>
<tr class="odd gradeX">
<td>Name: Rushi Jash</td>
<td>Employer: Company Name</td>
</tr>

<tr class="odd gradeX">
<td>Cerficiate Issue Date: 11/04/2016</td>
<td>Valid till: 2/04/2017</td>
</tr>

</tbody>
</table>
<!-- /.table-responsive -->

        <!-- /#page-wrapper -->


<?php
    include 'template2.php';
?>
