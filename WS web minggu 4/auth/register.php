<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" >
  </head>
  <body>
    <div class = "container">
      <div class= "row margin_top">
        <div class ="col-md-6 gambar">
          <img src="gambar/register.png" alt="register" class = "img-fluid">
        </div>
        
        <div class = "col-md-6 card custom-card">
          <div class= "card-header">
            Buat Akun
          </div>

          <div class = "card-body">
            <form action="proses_register.php" method="post" enctype="multipart/form-data">
              <div>
                <label for="" class="form-label mb-1">Masukkan Username</label>
                <input type="text" class= "form-control mb-3" name="username" placeholder= "Masukkan Username">
              </div>
              <div>
                <label for="" class="form-label mb-1">Masukkan Password</label>
                <input type="password" class= "form-control mb-3" name = "password" placeholder= "Masukkkan Password">
              </div>
              <div>
                <label class ="form-label mb-1">Konfirmasi Password</label>
                <input type ="password" class= "form-control mb-3" name="konfirm_password" placeholder= "Masukkan Kembali Password">
              </div>
              <div class="d-grid gap-2">
                <button type="submit" name = "registrasi" class="btn btn-primary mb-3">
                  Registrasi
                </button>
              </div>
                <div class="form-group mt-3">
                    <div class="text-center">
                        <span>Sudah memiliki akun?</span>
                        <a href="login.php">Login Disini</a>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>