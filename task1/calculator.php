<?php
if(isset($_POST["submit"])){
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $number3= $_POST['operators'];
    if($number1 != "" && $number2 !=""){
        switch($number3){
            case "+";
            $message = ($number1 + $number2);
              break;
              case "-";
              $message = ($number1 - $number2);
                break;
                case "*";
                $message =  ($number1 * $number2);
                break;
                case "%";
                $message =  ($number1 % $number2);
                break;
                case "/";
                $message =  ($number1 / $number2);
                  break;
              
        }
    }else{
      $message = "please type something";
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>calc</title>
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
                  calculater
              </div>
              <div class="col-4 offset-4 mt-5 text-center">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="num">number1</label>
                          <input type="number" name="num1" id="name" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="num">number2</label>
                          <input type="number" name="num2" id="name" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="product">Product</label>
                            <select name="operators" class="form-control" id="product">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                                <option value="%">%</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit">
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
