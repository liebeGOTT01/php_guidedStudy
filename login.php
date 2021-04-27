<!-- <?php
    require_once("store.php");

    $mystore->login();
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
    <title>My Store | login</title>
</head>

<style>
    body {
        background: #c9ccd1;
    }
    
    .form-style input {
        border: 0;
        height: 50px;
        border-radius: 0;
        border-bottom: 1px solid #ebebeb;
    }
    
    .form-style input:focus {
        border-bottom: 1px solid #007bff;
        box-shadow: none;
        outline: 0;
        background-color: #ebebeb;
    }
    
    .sideline {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #ccc;
    }
    
    button {
        height: 50px;
    }
    
    .sideline:before,
    .sideline:after {
        content: '';
        border-top: 1px solid #ebebeb;
        margin: 0 20px 0 0;
        flex: 1 0 20px;
    }
    
    .sideline:after {
        margin: 0 0 0 20px;
    }
</style>

<body>
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFJR64YXH7wvySs_4oNSA2EFVPeldwiIYY8g&usqp=CAU" alt="" class="img-fluid" style="min-height:100%;">
                <!-- <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" /> -->
            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3">Login Form</h3>
                <div class="form-style">
                    <form>
                        <div class="form-group pb-3">
                            <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold">Remember Me</span></div>
                            <div><a href="#">Forget Password?</a></div>
                        </div>
                        <div class="pb-2">
                            <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Submit</button>
                        </div>
                    </form>
                    <div class="sideline">OR</div>
                    <div>
                        <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-2"><i class="fa fa-facebook" aria-hidden="true"></i> Login With Facebook</button>
                    </div>
                    <div class="pt-4 text-center">
                        Get Members Benefit. <a href="#">Sign Up</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="card p-2 w-50">
            <form action="" method="post">
                <div class="form-group">
                    <label id="icon" for="username"><i class="fa fa-user"></i></label>
                    <input type="text" name="username" id="username" class="w-100" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password"> Password</label>
                    <br>
                    <input type="password" name="password" id="password" class="w-100" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary float-right">LOGIN</button>
            </form>
        </div>
    </div> -->

    <!-- <form action="" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit" name="submit">LOGIN</button>
        </form> -->

</body>

</html>