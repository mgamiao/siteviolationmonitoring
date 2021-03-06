<?php

include "perfect_function.php";
include "header.php";
//get s ID from URL
$id = $_GET['id'];
$form_location = "violation_add_proc.php?id=".$id;

$table_name = "students";
$get_userData = get_where($table_name, $id);
//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
    $id = $row['id'];
    $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
    
}
?>
<div align=center>
<div class="card mb-4 bg-gradient-dark"  style="width:50%; border:none;">
<div class="card-header bg-secondary text-light" style="border:none;">
    <h1>ADD NEW VIOLATION</h1>
</div>

<form method="post" action="<?= $form_location ?>">

	<input type="number" name="id" value="<?= $id ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;" readonly> 

    <input type="text" name="name" value="<?= $name ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;" readonly> 

	<input type="text" name="description" placeholder="Violation description" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 

	<input type="date" name="date_committed" placeholder="Date committed" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 
    

	<!-- <select name="status" class="form-control" required style="width:80%; margin-left:5%; margin-top:5%;">
<option value="">Select Student Status:</option>
<option value="1">Regular</option>
<option value="0">Irregular</option>
</select> -->
<br><br>

	<button type="submit" class="btn btn-success btn-icon-split" style="margin-left:5%;">
	<span class="icon text-white-50">
	<i class="fas fa-check"></i>
		</span>
		<span class="text">
			Continue
		</span>
	</button>
&nbsp;&nbsp;
	<a href="violation_view.php?id=<?= $id?>" class="btn btn-danger btn-icon-split">
    <span class="icon text-white-50">
	<i class="fas fa-times"></i>
</span>
<span class="text">
    Cancel
</span>
</a>

	<br><br><br>
</form>

</div>
</div>
</div>
</div>

<?php include "footer.php"; ?>
