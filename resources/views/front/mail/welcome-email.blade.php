<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        p{
            text-align: justify;
            color: rgb(0, 0, 0);
        
        }
        h1{
            text-align: center;
            color: rgb(71, 60, 60);
        
        }

    </style>
</head>
<body style="background: rgb(182, 148, 148)">
   <center> <img src="{{ asset('front/images/logo.png') }}" alt="logo"></center>
    <h1>Welcome {{ $name }}</h1>
    <p >{{ $emailmessage }}</p>
</body>
</html>