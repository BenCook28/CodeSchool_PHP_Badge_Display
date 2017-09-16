<?php 
    $data = file_get_contents('https://www.codeschool.com/users/ben_cook28.json');
    $json_data = json_decode($data, true);
    var_dump($json_data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>