<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism Registration Form</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 720px; /* Height increased to accommodate more inputs */
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 620px; /* Height increased to accommodate more inputs */
    width: 900px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 20px; /* Reduced margin to fit more inputs */
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 30px; /* Reduced margin to fit more inputs */
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 20px; /* Reduced margin to fit more inputs */
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

.error-border {
    border: 2px solid red !important; /* Red border for error */
}
.alert-danger {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
   <form method="POST" action="{{ route('register') }}">
        @csrf

        <h3>Register Here</h3>

        <!-- Full Name and Email in one row -->
        <div class="row">
            <div class="col-md-6">
                <label for="fullname">Full Name</label>
                <input type="text" name="name" placeholder="Enter Your Full Name" id="fullname" class="@error('name') error-border @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="" style="color: #d71400;">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" id="Email" class="@error('email') error-border @enderror" value="{{ old('email') }}">
                @error('email')
                    <div class="" style="color: #d71400;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Password and Confirm Password in one row -->
        <div class="row">
            <div class="col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" id="password" class="@error('password') error-border @enderror">
                @error('password')
                    <div class="" style="color: #d71400;">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="@error('name') error-border @enderror" placeholder="Confirm Password" id="password_confirmation">
                 @error('password_confirmation')
                    <div class="" style="color: #d71400;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Phone Number and Address in one row -->
        <div class="row">
            <div class="col-md-6">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" placeholder="Enter Your Phone Number" id="phone" class="@error('phone') error-border @enderror" value="{{ old('phone') }}">
                @error('phone')
                    <div class="" style="color: #d71400;">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Enter Your Address" id="address" class="@error('address') error-border @enderror" value="{{ old('address') }}">
                @error('address')
                    <div class="" style="color: #d71400;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button>Register</button>
        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>