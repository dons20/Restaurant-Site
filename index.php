<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Asia's Cafe</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css"></link>
    </head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="">Asia's Cafe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a id="login" href="#loginForm" class="nav-link" data-toggle="modal">Login</a>
            </li>
            <li class="nav-item">
                <a id="reg" href="#registrationForm" class="nav-link" data-toggle="modal">Register</a>
            </li>
            <li class="nav-item" style="display: none;">
                <a id="uname" href="javascript:void(0)" class="nav-link" data-toggle="modal">Username</a>
            </li>
            <li class="nav-item" style="display: none;">
                <a id="logout" href="javascript:void(0)" class="nav-link" data-toggle="modal">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div id="main-page" class="container mx-auto my-5">

      <div class="row">
        <div class="col-4">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Breakfast</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Sample Content</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Content 2</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Content 3</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Content 4</div>
          </div>
        </div>
      </div>

    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Keno Clayton 2018</p>
      </div>
    </footer>

    <!-- Login Form -->
    <div id="loginForm" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="images/avatar.png" alt="Avatar">
                    </div>				
                    <h4 class="modal-title">Member Login</h4>	
                    <button id="loginClose" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required pattern="\S.*\S">		
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="on" required pattern="\S.*\S">	
                        </div>        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)">Forgot Password?</a>
                    <a href="javascript:void(0)" onclick="$('#loginForm').one('hidden.bs.modal', function() { $('#registrationForm').modal('show'); }).modal('hide');">Don't have an account?</a>
                </div>
            </div>
        </div>
    </div>

    <div id="registrationForm" class="modal fade">
        <div class="modal-dialog modal-login modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="images/avatar.png" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Register an account</h4>	
                    <button id="regClose" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" required>		
                            <!-- <span class="help-block"></span> -->
                            <label>Username</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" autocomplete="on" required>
                            <label>Password</label>	
                        </div>      
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" autocomplete="on" required>	
                            <label>Confirm Password</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" required>		
                            <label>First Name</label>
                        </div>      
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" required>	
                            <label>Last Name</label>
                        </div>      
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p>Already have an account? <a href="javascript:void(0)" onclick="$('#registrationForm').one('hidden.bs.modal', function() { $('#loginForm').modal('show'); }).modal('hide');">Login here</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>                            