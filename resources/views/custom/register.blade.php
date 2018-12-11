
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg">
        @if(count($errors) >0 )
        @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
        @endforeach
        @endif
        <form action="{{ route('custom-register') }}" method="post">
        {{ csrf_field() }}
  <fieldset>
  
    <div class="form-group" >
    
    <label for="First Name">FirstName</label>
      <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="First Name">
    </div>
    <div class="form-group">
      <label for="text">LastName</label>
      <input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Last Name">
    </div>
 
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
    </div>

<div class="form-group">
      <label for="InputPassword">Password</label>
      <input id="inputPassword" type="password" class="form-control" name="password" >

    </div>
    <div class="form-group">
      <label for="InputPassword">Confirm Password</label>
      <input id="inputPassword" type="password" class="form-control" name="password_confirmation" >
    </div>
   
    <!--<button type="reset" class="btn btn-primary">Cancel</button>-->
    <button type="submit" class="btn btn-primary btn-block">Register</button>
  </fieldset>
</form>

        </div>
    </div>
</div>


<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
  </script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>
</html>

