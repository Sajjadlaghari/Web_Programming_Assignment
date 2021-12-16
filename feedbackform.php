<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <style>
        div
        {
            margin:20px;
        }
        input[type="text"]
        {
            height:50px;
        }
        ::placeholder
        {
            font-size:20px;
        }
        
        h4
        {
            padding-top:5px;
            padding-bottom:5px;
            color:white;
        }
        input[type="submit"]
        {
            font-size:25px;
            font-family:sans;
        }
    </style>
</head>
<body class="bg-info">

<div class="container-fluid text-center">

<div class="row">
    <div class="col-md-6 offset-3">
        
    <form action="feedback.php" method="post">
    <h4>Customer Feedback For Laghari Motor's Showroom</h4>    
        
        <h4>Please tell us what you think?</h4>
        <div>
            <input type="text" class="form-control" name='name' placeholder="Please Enter Your Name">
        </div>

        <div>
            <input type="email" name='email' class="form-control" placeholder="Please Enter Your Email">
        </div>
        <div>
            <textarea name="feedback" id="" class="form-control"  cols="30" rows="10" placeholder="Enter Your Feedback abou our servicess"></textarea>
      </div>
        <div>
            <input type="submit" name='submit' value='Send Feedback' class="text-white bg-success form-control col-md-4 offset-4">
        </div>
    </form>
</div>
    </div>
</div>
    
</body>
</html>