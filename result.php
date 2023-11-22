<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .container{
            margin-top: 100px;
            background-color: white;
            text-align: center;
            border: 1px dashed orange;
        }
    </style>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET['name'];
        $club = $_GET['club'];
        $time = $_GET['time'];
        $skills = $_GET['skills'];
        $listSkills = implode(" and ", $skills);
    }
    ?>
    <div class="container w-50 p-3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz0Il-i9eukZqpL52YmFNnRjJnsFU9uKK4Gw&usqp=CAU" alt="">
        <h1>Thank you, <?=$name ?>!!</h1>
        <p>We have received your application for <?=$club ?>.</p>
        <p>We will contact you on <?=$time ?>.</p>
        <p>You are a<?=$listSkills?>.</p>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>