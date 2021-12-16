<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        p
        {
            font-size:20px;
        }
    </style>
</head>
<body>
     <div class="container-fluid text-center">
         <h1 style="font-size:50px; padding:30px; font-weight:bold">Book Store</h1>
         <h1 style="padding:20px; font-weight:bold">Order Results</h1>
         
         

          <?php
          $altoqty =$_POST['altoqty'];
          $mehranqty =$_POST['mehranqty'];
          $civicqty =$_POST['civicqty'];
          $address = $_POST['address'];
          $hear = $_POST['hear'];


          $items=$altoqty+$civicqty;
          
          define('Alto', 200);
          define('Mehran', 800);
          define('Civic', 400);

          
          $subtotal = $altoqty * Alto 
                    + $mehranqty * Mehran
                    + $civicqty  * Civic;   
                    
                    $taxrate = 0.10;
                   $totalamount = $subtotal *(1+$taxrate);
                   
                   
           $d=date('H.i jS F Y');
           $date = "<p>Order Processed at $d</p>";
          ?>
          <div class="container bg-danger text-white"">
              <?php echo $date?>
          </div>

          <div class="container " >
              <?php echo "<h1>Ordered BY Customer Find Us $hear</h1>"?>
          </div>

               
          <div class="row">
              <div class="col-md-5">
                  <h1>Order Details</h1>
              <table class="table table-striped">
              <tr class="bg-danger text-white" style="font-size:25px; font-family:arial">
                  <th>Sno</th>
                  <th>Book Name</th>
                  <th>Quantity</th>

                </tr>

              <tr class=""  style="font-size:23px;">
                  <td>01</td>
                  <td>English Grammer</td>
                  <td><?php echo $altoqty?></td>
                  
              </tr>
              <tr class=""  style="font-size:23px;">
                  <td>02</td>
                  <td>Sindhi Book</td>
                  <td><?php echo $mehranqty?></td>
                  
              </tr>

              <tr class=""  style="font-size:23px;">
                  <td>03</td>
                  <td>Computer</td>
                  <td><?php echo $civicqty?></td>
                  
              </tr>


          </table>

              </div>
              
              <div class="col-md-5 offset-2">
                  <h1>Total Order and Total Price</h1>
              <table class="table table-striped">
              <tr class="bg-danger text-white" >
                  <th>Items</th>
                  <th>Subtotal</th>
                  <th>Total Including Tax</th>

                </tr>

              <tr  style="font-size:23px;">
                  <td><?php echo $items?></td>
                  <td><?php echo $subtotal?></td>
                  <td><?php echo $totalamount;?></td>
                  
              </tr>
          </table>
       

          </div>

          </div>
          
        </div>
</body>
</html>