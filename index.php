<!doctype html>
<html lang="en">

    <head>

        <style>

            #logo {
                width:30%;
                height:30%;
            }

            .centered{
                display:flex;
                justify-content: center;
            }

            #img_container {
                padding-top: 25px;
            }

            .jumbotron {
                margin-top: 25px;
            }

            #submit-btn {
                margin-right: 50px;
            }

            .input-container {
                display: flex;
                width: 100%;
                margin-bottom: 15px;
            }

            .icon {
                padding: 10px;
                background-color: #b331ce;
                border-radius: .25rem;
                border: 1px solid #ced4da;
                min-width: 50px;
                text-align: center;
            }

            #form-box {
                background-color: #a2171b;
            }


        </style>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Login</title> 
    </head>

    <body style="background-color:#f6dbbd">

        <div class="container">

            <div class="container" id='img_container'>
                <div class='centered'>
                    <img src="mes logo.jpg" alt="MES Logo" id='logo' class="img-fluid">
                </div>
            </div>

            <div class="jumbotron" id='form-box'>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input type="email" class="form-control" id="emailID" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>  
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <div class='input-container'>
                            <i class="fa fa-key icon"></i>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>

                    <div class="centered">
                        <button type="submit" class="btn btn-primary" id='submit-btn'>Submit</button>
                        <button type="submit" class="btn btn-primary">Register New User</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>