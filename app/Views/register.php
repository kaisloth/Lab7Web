<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form method="post" action="<?=env('app_url').'/api/register'  ?>">
        <input type="text" name="username" placeholder="username" id="">
        <input type="email" name="email" placeholder="email" id="">
        <input type="password" name="password" placeholder="password" id="">
        <input type="submit" value="register" id="">
    </form>
    
</body>
</html>