<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="name"><br>
        <input type="email" name="email" id="" placeholder="email"><br>
        <input type="password" name="password" id="" placeholder="password"><br>
        <input type="submit" value="login">
    </form>
</body>
</html>
