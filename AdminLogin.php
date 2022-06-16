<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
</head>
<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-20">
           
          <div class="row d-flex justify-content-center align-items-center h-100">
            
            <div class="col-12 col-md-1 col-lg-6 col-xl-5">
                <h2>Accounts Management System</h2>
                <br/>
              <div class="card bg-info text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-1 mt-md-1 pb-1">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Admin Login</h2>
                    <p class="text-white-50 mb-2">Please enter your login and password!</p>













                    <form method="POST" action="login.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required="required"/>
                </div>
 
                <button name="login" class="btn btn-primary">Login</button>
                <br/>
                <br/>
                <p class="small mb-2 pb-lg-2"><u><a class="text-white-50" href="ForgotPassword.php
                " >Forgot Password?</a></u></p>
            </form>
            <p class="small mb-2 pb-lg-2"><u><a class="text-white-50" href="UserLogin.php
                " >Back to user login</a></u></p>
           
                   
                   

      
                  </div>
      

      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    <script src=”https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js” integrity=”sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo” crossorigin=”anonymous”></script>

<script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integrity=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script>
</body>

</html>


