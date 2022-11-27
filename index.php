<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voting System</title>
    <link rel="stylesheet" href="one.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
<header>
 <nav class="navbar navbar-dark bg-dark text-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="vote.jpg" alt="" width="60" height="32" class="d-inline-block align-text-top">
                    Voting System
                </a>
              
            </div>
        </nav>

</header>

 
<div class="section bg-secondary" >
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6> <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" /> <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-2 pb-2 text-white">Log In</h4>
                                        
                                        <form action="./actions/login.php" method="POST">
            
                
                <input class="mb-3" type="text" class="form-control" name="username" placeholder="User Name"
                    require="required" name="logemail" id="logemail">

           

           
                
                <input class="mb-3" type="text" class="form-control" name="mobile" placeholder="Mobile"
                    require="required" minLength="10" maxLength="10">

           

            
                
                <input class="mb-3" type="password" class="form-control" name="password" placeholder=" Password"
                    require="required">
        
            <div class="mb-3 col text-center"><button type="submit" class="btn btn-primary">Login</button></div>
           
        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                         <h4 class="text-white text-center mb-3">Register </h4>
        <form action="./actions/register.php" method="POST" enctype="multipart/form-data">
            
                
                <input class="mb-3"type="text" class="form-control" name="username" placeholder="User Name"
                    require="required" />

           
            
                
                <input class="mb-3"type="email" class="form-control" name="email" placeholder="Email"
                    require="required" />

          
            
                
                <input class="mb-3"type="text" class="form-control" name="mobile" placeholder=" Mobile Number"
                    require="required" minLength="10" maxLength="10" />

            


            
                
                <input class="mb-3 " type="password" class="form-control" name="password" placeholder="Password"
                    require="required" />
           

                <input class="mb-3 w-60" type="password" class="form-control" name="cpassword" placeholder="Confirm Password"
                    require="required" />
                <br>

            
                <label class="form-label text-white mb-2 w-60">Select Photo</label>

                <input type="file" class="form-control w-60 m-auto mb-3" name="photo" multiple placeholder="Select Photo" />

         
            <div class="col text-center mb3"><button type="Register" class="btn btn-primary">Register</button></div>
           
        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



 <footer>


        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                
            </div>
        </nav>
    </footer>
  </body>
</html>