<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time</title>
<style>
    body{
    background: #000;
}

p{
    color: #fff;
    font-size: 68px;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
}

p2{
    color: #fff;
    font-size: 68px;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
}

h1{
    color: #fff;
    font-size: 60px;
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translate(-50%, -50%); 
}
</style>
</head>
<body>
<h1>Date & Time</h1>
   <p><?php echo date("m/d/Y");?></p> 
   <p2><?php echo date("h:i:s A");?></p2>
</body>
</html>