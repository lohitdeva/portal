<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tiro+Telugu&display=swap" rel="stylesheet">

    <style>

        body {
            background-color: #ECDBAB;
            font-family: 'Tiro Telugu', serif;
        }

        .jumbotron {
            background-color: #9C231B;
        }

        #heading {
            margin-top: 25px;
            margin-bottom: 30px;
        }

        #heading-text {
            font-size: 2.5rem;
        }

        .form-control {
                border: 1px solid black;
            }

            .form-text {
                font-family: 'Tiro Telugu', serif;
                color: white;
                font-size: 20px;
            }


    </style>

    <title>New User Registration</title>
  </head>
  <body>

    <div class='container'>

        <div id='heading'>
            <h1 id='heading-text'>Register</h1>
        </div>

        <div class='jumbotron'>

            <form action="">

                <div class='form-group'>
                <label for="FName" class='form-text'>First Name</label>
                <input type="text" class="form-control" required>
                </div>

                <div class='form-group'>
                <label for="LName" class='form-text'>Last Name</label>
                <input type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="EmailAddress" class='form-text'>Email address</label>
                    <input type="email" class="form-control" id="emailID" aria-describedby="emailHelp" required>
                </div>
                
                <div class="form-group">
                    <label for="Password" class='form-text'>Password</label>
                    <input type="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Re-Password" class='form-text'>Re-Enter Password</label>
                    <input type="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Re-Password" class='form-text'>Re-Enter Password</label>
                    <input type="password" class="form-control" required>
                </div>

                <div class='form-group'>                
                    <label for="Date" class='form-text'>Date of Birth</label>
                    <input type="date" class='form-control' required>
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