<!DOCTYPE html>
<html lang="en">
    <head>
        <title>login</title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form method='POST' action='login'>
    {{ csrf_field() }}

    {{ $errors->first('username') }}
    <input type="text" name="username" >
    <input type="password" name="pass" >
    <input type="submit" name="submit" value="Login">
        
    </form>
    
    </body>
</html>