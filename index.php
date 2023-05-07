<?php
   include "connect.php";

   if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        mysqli_query($connect,"insert into login (`name`,`phone`) Values ('$name','$phone')");

   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
</head>

<body>
    <div class="col-lg-6 m-auto my-3">
        <h3 class="text-center">CRUD OPERATION</h3>
        <form  method="POST" >
            <div id="message"></div>
            <div class="mb-3">
                <label for="name" class="form-label">Email address</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
