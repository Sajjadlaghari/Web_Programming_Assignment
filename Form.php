
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body >

    <div class="container-fluid">
        <div class="container text-center">
            <h1 class="pt-5 pb-5" style="font-family:sans; font-size:60px;">Welcome to the Book Store</h1>
        </div>
        <form action="process.php" method="post">
            
<table  class="table table-bordered table-striped">
    
<td  class='bg-warning text-center text-white ' >SNO</td>
<td class='bg-warning  text-center text-white' >Book Name</td>
<td class='bg-warning  text-center text-white' >Quantity</td>
</tr>
<tr>
<td class="col-md-1 " >01</td>
<td >English Grammer</td>
<td><input type="text" class="form-control" name="altoqty" id="alto" style="font-size:20px;" size="4"  /></td>
</tr>
<tr>
    
<td  class="col-md-1  " >02</td>
<td >Sindhi Book</td>
<td><input type="text" class="form-control"  id="mehran" name="mehranqty" size="2"/></td>
</tr>
<tr>
    
<td  class="col-md-1 " >03</td>
<td >Computer Book</td>
<td><input type="text" class="form-control" style="font-size:20px;" id="civic" name="civicqty" size="4"  /></td>
</tr>
<tr>
    
<tr>
    
<td class="col-md-1  " colspan="2">How did you find our Book Store</td>
<td >
<select name="hear" class="form-control">
 <option value="Regular Customer">Iam Regular Customer</option>
 <option value="TV Advertising">TV Advertising</option>
 <option value="Phone Directory">Phone Directory</option>
 <option value="Word of Mouth">Word of Mouth</option>
</select></td>
</tr>

<tr>
    
<td  class="col-md-1  " ></td>
<td >Shipping Address</td>
<td><input type="text" class="form-control" style="font-size:20px;" id="address" name="address" size="4" placeholder="Enter Your Shipping Address"/></td>
</tr>

<tr>
<td colspan="3"><input type="submit" style="color:white; font-weight:bold; height:50px; font-size:23px; font-family:sans"  class="form-control bg-warning col-md-d" value="Submit 
Order" /></td>
</tr>
</table>
</form>
    </div>

</body>
</html>


    