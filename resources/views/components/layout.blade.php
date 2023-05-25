<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="{{asset('css/layout.css') }}">

    <title>Postes</title>
</head>
<body>
    <header>
        <h1>POSTES</h1>
        <form action="#" class="login-form">
            <input type="text" name="name" id="name" placeholder="name">
            <input type="password" name="password" id="password" placeholder="password">
            <button type="submit" class="loginbtn">login</button>

        </form>
    </header>
    {{$slot}}
    <footer>
            <h4 style="text-align: center">copy right HAssAN</h4>
    </footer>
</body>
</html>