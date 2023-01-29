<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div>
            <h1 class="text-center">Registration Form</h1>
            <form>
                @csrf
                <div class="form-row col-md-6" >
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name">
                        @if($errors->any())
                            @foreach ($errors->any() as $item)
                                <span>{{$item}}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-gruop">
                        <label for="l_name">Last Name</label>
                        <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name">
                        @if($errors->any())
                            @foreach ($errors->any() as $item)
                                <span>{{$item}}</span>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    @if($errors->any())
                        @foreach ($errors->any() as $item)
                            <span>{{$item}}</span>
                        @endforeach
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                  @if($errors->any())
                  @foreach ($errors->any() as $item)
                      <span>{{$item}}</span>
                  @endforeach
              @endif
                  <div class="form-group col-md-6">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="c_password" id="c_password" placeholder="Confirm Password">
                  </div>
                </div>
                @if($errors->any())
                @foreach ($errors->any() as $item)
                    <span>{{$item}}</span>
                @endforeach
            @endif
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City">
                  </div>
                  @if($errors->any())
                  @foreach ($errors->any() as $item)
                      <span>{{$item}}</span>
                  @endforeach
              @endif
                  <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="State">
                  </div>
                  @if($errors->any())
                  @foreach ($errors->any() as $item)
                      <span>{{$item}}</span>
                  @endforeach
              @endif
                  <div class="form-group col-md-4">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control"  name="phone" id="phone" placeholder="Enter Your Phone">
                  </div>
                  @if($errors->any())
                  @foreach ($errors->any() as $item)
                      <span>{{$item}}</span>
                  @endforeach
              @endif
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
                  </div>
                </div>
                @if($errors->any())
                @foreach ($errors->any() as $item)
                    <span>{{$item}}</span>
                @endforeach
            @endif
                <button type="submit" class="btn btn-primary mt-2">Sign in</button>
              </form>
        </div>
    </div>

</body>
</html>
