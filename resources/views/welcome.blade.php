<!DOCTYPE html>
<html lang="en">
    <body style="background-color: rgb(243, 240, 237)">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4" style="background-color: rgb(240, 234, 227)">
            <h2 class="text-center"><b>LOGIN DULU HEH!!</b><br></h3>
                <form action="/user" method="get">
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="/auth" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
               <a href="/user"> <button type="submit" class="btn btn-primary btn-block">Log In</button></a>
                <hr>
                <p class="text-center">Belum punya akun? <a href="#">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>
</body>
</html>
