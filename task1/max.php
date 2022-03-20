<?php 
if($_POST){
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];
if(($number1 > $number2) && ($number1 > $number3) && ($number2 > $number3) ){
  $message = "<h2>the max numder $number1 <br> the min number $number3</h2>";
}elseif(($number1 > $number2) && ($number1 > $number3) && ($number3 > $number2) ){
   $message = "<h2>the max numder $number1 <br> the min number $number2 </h2>";
 }

elseif(($number2 > $number1) && ($number2 > $number3) && ($number1 > $number3) ) {
  $message ="<h2>the max numder $number2 <br> the min number $number3</h2>";
}elseif(($number2 > $number1) && ($number2 > $number3) && ($number3 > $number1) ) {
   $message ="<h2>the max numder $number2 <br> the min number $number1</h2>";
 }

elseif(($number3 > $number1) && ($number3 > $number2) && ($number1 > $number2)){
  $message = "<h2>the max numder $number3 <br> the min number $number2</h2>";
}
elseif(($number3 > $number1) && ($number3 > $number2) && ($number2 > $number1)){
   $message = "<h2>the max numder $number3 <br> the min number $number1</h2>";
 }
 else{
   $message ="please enter number";
 }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>max</title>
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
        max and min
       </div>
       <div class="col-4 offset-4 mt-5">
          <form action="" method="post">
             
              <div class="form-group">
               <input type="number" name="number1" id="num1" class="form-control" placeholder="Enter Your num1" aria-describedby="helpId">
              </div>
              <div class="form-group">
               <input type="number" name="number2" id="num2" class="form-control" placeholder="Enter Your num2" aria-describedby="helpId">
              </div>
              <div class="form-group">
               <input type="number" name="number3" id="num3" class="form-control" placeholder="Enter Your num3" aria-describedby="helpId">
              </div>
              <?php  if(isset($message)){
                            echo $message;
                        } ?>
              <div class="form-group">
                    <button class="btn btn-outline-primary"> send data </button>
              </div>
              
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