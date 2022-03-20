<?php
if($_POST){
 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $message = pow($num1 , 1/$num2);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
                  Root
              </div>
              <div class="col-4 offset-4 mt-5 text-center">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="num"> first number</label>
                          <input type="number" name="num1" id="name" class="form-control" placeholder="please enter number" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="num">second number</label>
                          <input type="number" name="num2" id="name" class="form-control" placeholder="please enter number" aria-describedby="helpId">
                        </div>
                       
                        <div class="form-group">
                           <button class="btn btn-outline-primary">GET DATA </button>
                        </div>
                        <?php  if(isset($message)){
                            echo $message;
                        } ?>
                    </form>
              </div>
          </div>
      </div
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>