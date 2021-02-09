<?php include "perfect_function.php";
include "header.php"
?>
<div align=center>
<div class="card mb-4 w-90 bg-gradient-dark">
<div class="card-header bg-gradient-dark">
    <b><h1 class="m-0 font-weight-bold text-light">ADD NEW STUDENT</h1></b>
</div>



<form method="post" action="stud_add_proc.php">

<input type="text" name="id" class="form-control form-control-user" autocomplete=off placeholder="School ID" required style="width:80%; margin-left:5%; margin-top:3%">

<div class="input-group" style="width:80%; margin-left:5%; margin-top: 2%;">
    <div class="input-group-prepend">
    </div>
      <input type="text" name="firstname" class="form-control form-control-user" autocomplete=off placeholder="First Name" required class="form-control">
      <input type="text" name="middlename" class="form-control form-control-user" autocomplete=off placeholder="Middle Name" class="form-control">
      <input type="text" name="lastname" class="form-control form-control-user" autocomplete=off placeholder="Last Name" required class="form-control">
  </div>

  <div class="" style="margin-left:8%;">

    <select type="text" name="program" class="form-control form-control-user" autocomplete=off required style="width:27%; margin-left:5%; margin-top:2%; float:left;">
      <option value="">Program:</option>
      <option value="BLIS">BLIS</option>
      <option value="BSIT">BSIT</option>
      <option value="BSCE">BSCE</option>
      <option value="BSCpE">BSCpE</option>
      <option value="BSEnSE">BSEnSE</option>
    </select>

    <select type="text" name="year_level" class="form-control form-control-user" autocomplete=off required style="width:27%; margin-left:3%; margin-top:2%; float:left;">
      <option value="">Year:</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>

    <input type="text" name="section" class="form-control form-control-user" autocomplete=off placeholder="Section" required style="width:27%; margin-left:3%; margin-top:2%; float:left;">

  </div>

 
  <br>


  
  <div class="" style="margin-left:8%;">
    <input type="email" name="email" class="form-control form-control-user" autocomplete=off placeholder="Email address" required style="width:41%; margin-left:5%; margin-top:2%; float:left;">
    <input type="number" name="contact" class="form-control form-control-user" autocomplete=off placeholder="Contact" required style="width:42%; margin-left:4%; margin-top:2%; float:left;">
  </div>

  <div class="" style="margin-left:8%;">
   
      
  </div>
    <br>
    <br>
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