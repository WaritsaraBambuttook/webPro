<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <form name="des_insert" action="des_db.php" method="post">
            <h4>DESSERT</h4>

            <div class="form-group row">
                <label for="name" class="col-md-1 col-form-label">Dessert name</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="dname" required>
                    <label for="Price" class="col-md-1 col-form-label">Price</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="price" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sing in</button>
            </div>
        </form>
    </div>
    
</body>
</html>