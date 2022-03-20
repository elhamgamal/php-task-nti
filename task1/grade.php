<?php
if($_POST){
$physics = $_POST['degree1'];
$chemistry = $_POST['degree2'];
$biology = $_POST['degree3'];
$mathemactics = $_POST['degree4'];
$computer= $_POST['degree5'];
    $TotalGrade = $physics + $chemistry + $biology + $mathemactics + $computer;
$studentGrade = ($TotalGrade/250)*100;

  define('MAXGRADE',50);
 if($studentGrade >= 90){
     $message = "Grade A"; 
     $message1 ="<h1>$TotalGrade/250  => Percentage : $studentGrade  => $message</h1>";
 }elseif($studentGrade >= 80){
     $message = "Grade B";
     $message1 ="<h1>$TotalGrade/250  => Percentage : $studentGrade  => $message</h1>";
 }elseif($studentGrade >= 70){
     $message = "Grade C";
     $message1 ="<h1>$TotalGrade/250  => Percentage : $studentGrade  => $message</h1>";
 }elseif($studentGrade >= 60){
    $message = "Grade D";
     $message1 ="<h1>$TotalGrade/250  => Percentage : $studentGrade  => $message</h1>";
 }elseif($studentGrade >= 40){
    $message = "Grade E";
     $message1 ="<h1>$TotalGrade/250  => Percentage : $studentGrade  => $message</h1>";
 }else{$message = "Grade F";
     $message1 ="<h1>$TotalGrade/250  => Percentage : $studentGrade  => $message</h1>";
 }
}
 



?>
<!doctype html>
<html lang="en">
  <head>
    <title>grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                  Grade
              </div>
              <div class="col-4 offset-4 mt-5">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name" class="fw-blod">physics</label>
                          <input type="number" name="degree1" id="name" placeholder="Enter Your degree" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="name" class="fw-blod">chemistry</label>
                          <input type="number" name="degree2" id="name" placeholder="Enter Your degree" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="name" class="fw-blod">biology</label>
                          <input type="number" name="degree3" id="name" placeholder="Enter Your degree" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="name" class="fw-blod">mathemactics</label>
                          <input type="number" name="degree4" id="name" placeholder="Enter Your degree" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="name" class="fw-blod">computer</label>
                          <input type="number" name="degree5" id="name" placeholder="Enter Your degree" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                           <button class="btn btn-outline-primary"> clac </button>
                        </div>
                        <?php  if(isset($message1)){
                            echo $message1;
                        } ?>
                    </form>
                    
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>