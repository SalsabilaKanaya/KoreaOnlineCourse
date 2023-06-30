<?php
    include('connectdb.php');

    if (isset($_POST['daftar'])) {
        $namaLengkap = $_POST['namaLengkap'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];
        
        $sql = "INSERT INTO registrasi (Nama_Lengkap, Pass, Email, No_Hp, Alamat) VALUES 
        ('$namaLengkap', '$pass', '$email', '$hp', '$alamat')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<p>Data Berhasil Di tambahkan </p>";
            echo "<p><a href='index.html'>Kembali ke Home</a></p>";
        }else{
            die('Invalid query: ' . mysqli_error($conn));
        }

        mysqli_close($conn);
        header("Location: profile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/c00ab1dcee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css" />
    <title>Online Korean Language Course and School</title>
  </head>
  <body id="page-top">

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="'mainNav">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="" width="80" height="40">
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course.html">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booknow.html">Book Now!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->

    <!-- REGISTRASI AKUN -->
    <div class="container">
      <form class="form-container mt-5" action="signup.php" method="POST">
        <h3 class="text-judul mt-2">Daftar Akun</h3>
        <div class="row">
          <!--Nama-->
          <div class="col-md-7">
            <div class="mb-3">
              <label for="exampleInputNama1" class="form-label">Nama Lengkap</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user">
                </i></span>
                <input type="text" class="form-control" name="namaLengkap" id="exampleInputNama1" aria-describedby="namaHelp" placeholder="Nama Lengkap" />
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Password" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="Email" />
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-3">
              <label for="exampleInputNohp1" class="form-label">No.Hp</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                <input type="text" class="form-control" name="hp" id="exampleInputNohp1" aria-describedby="NohpHelp" placeholder="No.Hp" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label for="exampleInputAlamat1" class="form-label">Alamat</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-address-card"></i></span>
                <input type="text" class="form-control" name="alamat" id="exampleInputAlamat1" aria-describedby="AlamatHelp" placeholder="Alamat" />
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1">Saya Menyetujui Syarat & Ketentuan Yang Berlaku *</label>
        </div>
        <div>
          <div class="row mt-3">
            <div class="col-md-6 d-grid">
              <button type="submit" name="daftar" class="btn btn-outline-primary">Daftar</button>
            </div>
          </div>
        </div>
        <div class="mt-2">
          <label>Kamu Sudah Punya Akun? Login Disini</label>
        </div>
      </form>
    </div>
    <!-- AKHIR REGISTRASI AKUN-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
