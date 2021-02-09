<?php
include "perfect_function.php";
include "header.php";
//get s ID from URL
    $id = $_GET['id'];
    $form_location = "stud_edit_proc.php?id=".$id;

    $table_name = "students";
    $get_userData = get_where($table_name, $id);
    //fetch result and pass it  to an array
    foreach ($get_userData as $key => $row) {
        $id = $row['id'];
        $year_level = $row['year_level'];
        $section = $row['section'];
        $program = $row['program'];
        $firstname = $row['firstname'];
        $middlename = $row['middlename'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $contact = $row['contact'];
    }

        // echo $id. "<br>".
        // $program. "<br>".
        // $section. "<br>".
        // $firstname. "<br>".
        // $middlename. "<br>".
        // $lastname. "<br>".
        // $email. "<br>".
        // $contact . "<br>".
        // $officer . "<br>".
        // $gender;
?>

<div align=center>
<div class="card mb-4 w-75 bg-gradient-dark">
<div class="card-header bg-gradient-dark">
<h1 class="m-0 font-weight-bold text-light">UPDATE DETAILS</h1>
</div>

<form method="post" action="stud_edit_proc.php">

  <input type="number" name="id" class="form-control form-control-user" autocomplete=off value="<?= $id ?>" required style="width:80%; margin-left:5%; margin-top:3%; background-color: #D3D3D3" readonly>

  <div class="input-group" style="width:80%; margin-left:5%; margin-top: 2%;">

      <input type="text" name="firstname" placeholder="First Name" class="form-control form-control-user" autocomplete=off value="<?= $firstname ?>" class="form-control">
  
      <input type="text" name="middlename" placeholder="Middle Name" class="form-control form-control-user" autocomplete=off value="<?= $middlename ?>" class="form-control">
 
      <input type="text" name="lastname" placeholder="Last Name" class="form-control form-control-user" autocomplete=off value="<?= $lastname ?>" class="form-control">
  </div>
  <br>

  <div class="" style="margin-left:8%; ">

    <select type="text" name="program" class="form-control form-control-user" autocomplete=off value="<?= $program ?>" required style="width:27%; margin-left:5%; margin-top:1%; float:left;">
      <option value="">Program:</option>
      <option value="BLIS">BLIS</option>
      <option value="BSIT">BSIT</option>
      <option value="BSCE">BSCE</option>
      <option value="BSCpE">BSCpE</option>
      <option value="BSEnSE">BSEnSE</option>
    </select>

    <select type="text" name="year_level" class="form-control form-control-user" autocomplete=off value="<?= $year_level ?>" required style="width:27%; margin-left:3%; margin-top:1%; float:left;">
      <option value="">Year:</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>

    <input type="text" name="section" placeholder="Section" class="form-control form-control-user" autocomplete=off value="<?= $section ?>" style="width:27%; margin-left:3%; margin-top:1%; float:left;">

  </div>
  

  <div class="" style="margin-left:8%;">
    <input type="email" name="email" placeholder="Email" class="form-control form-control-user" autocomplete=off value="<?= $email ?>" required style="width:41%; margin-left:5%; margin-top:3%; float:left;">
    <input type="text" name="contact" placeholder="Contact" class="form-control form-control-user" autocomplete=off value="<?= $contact ?>" required style="width:42%; margin-left:4%; margin-top:3%; float:left;">
  </div>

        <!-- BUTTONS -->
        <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:5%">
      <span class="icon text-white-50">
      <i class="fas fa-check"></i>
        </span>
        <span class="text">
          Continue
        </span>
      </button>
    &nbsp;&nbsp;
      <a href="stud_manage.php" class="btn btn-danger btn-icon-split" style=" margin-top:5%">
        <span class="icon text-white-50">
      <i class="fas fa-times"></i>
    </span>
    <span class="text">
        Cancel
    </span>
    </a>
<br><br><br>


<form>
</div>
