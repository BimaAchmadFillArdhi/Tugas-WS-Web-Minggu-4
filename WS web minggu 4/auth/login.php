<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" >
  </head>
  <body class= "login-page">
    <div class = "container">
      
      <div class= "row margin_top">
        <div class ="col-md-6 gambar">
          <img src="gambar/3094352.jpg" alt="login" class = "img-fluid">
        </div>
        
        <div class = "col-md-6 card custom-card">
          <div class= "card-header">
            Login
          </div>
          
          <div class = "card-body">
            <form action="aksilogin.php" method="post" enctype="multipart/form-data">
              <div>
                <label for="" class="form-label mb-1">Masukkan Username</label>
                <input type="text" class= "form-control mb-3" name="username" placeholder= "Masukkan Username">
              </div>
              <div>
                <label for="" class="form-label mb-1">Masukkan Password</label>
                <input type="password" class= "form-control mb-3" name = "password" placeholder= "Masukkkan Password">
              </div>
              <div class="d-grid gap-2">
                <button type="submit" name = "login" class="btn btn-primary mb-3">
                  Login
                </button>
              </div>
            </form>

            <form action="register.php" method ="post">
              <div class="form-group d-grid gap-2">
                <button type="submit" name="registrasi" class ="btn btn-outline-primary mb-3">
                  Registrasi
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>