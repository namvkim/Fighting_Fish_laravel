<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
</head>

<body>
    @if (session('message'))
        <h2 style="color:green">{{ session('message') }}</h2>
    @endif
    <form action="{{url('sendEmailDonate')}}" method="POST" role="form">
        @csrf
        <div class="container">
        <div class="form-group">
            <h1>Donate Contact</h1>
            <input type="text" name="email" class="form-control" id="" placeholder="Input email">
            <input type="text" name="name" class="form-control" id="" placeholder="Input name">
            <input type="text" name="money" class="form-control" id="" placeholder="Input money">
            <input type="text" name="message" class="form-control" id="" placeholder="Input message">
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </form>
</body>

</html>