<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial.scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>CARS APP</title>
</head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route("cars.update",["car"=>$car])}}" method="post">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <label form="">Make:</label>
                        <input type="text" name="make" class="form-control" value="{{$car->make}}" />
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label form="">Model:</label>
                        <input type="text" name="model" class="form-control" value="{{$car->model}}" />
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label form="">Produced on:</label>
                        <input type="date" name="produced_on" class="form-control" value="{{$car->produced_on}}" />
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-block btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
