<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5 w-25 m-auto">
        <h3>Log in</h3>
        <form class="card border-0 mt-3" method="post" action="<?= $BASE_URL ?>/login/signin">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="text" class="mt-1 form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="mt-1 form-control" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </div>
</body>

</html>