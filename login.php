<?php
require 'koneksi.php';

if(isset($_POST['login'])){
  $emailLogin = $_POST['emailLogin'];
  $paswordLogin = $_POST['passwordLogin'];

  $cekdatabase = mysqli_query($conn,"SELECT * FROM loginsiswa where emailLogin='$emailLogin' and passwordLogin='$paswordLogin'");

  if (mysqli_num_rows($cekdatabase)>0) {
    $_SESSION['log'] = 'True';
    header('location:user.html');
  } else {
    header('location:login.php');
  };
  
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Paud Al-Hikmah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="text-start mb-4">
		  <a href="index.php" class="navbar-brand">
			<h1 class="text-primary fw-bold"><i class="fa fa-book-reader me-2"></i>Paud Al-Hikmah</h1>
		  </a>
          <h4 class="text-danger fw-semibold">Account Siswa Paud Al Hikmah</h4>
          <p class="text-muted mt-3">Welcome back! Please login to your account.</p>
        </div>

        <form method="post">
          <div class="mb-3">
            <label for="email" class="form-label fw-bold text-purple">
              <i class="fas fa-building-columns me-1"></i>Email section
            </label>
            <input type="email" class="form-control" name="emailLogin" id="email" placeholder="Email Address" />
          </div>

          <div class="mb-3">
            <input type="password" class="form-control" name="passwordLogin" placeholder="Password" />
          </div>

          <div class="d-flex justify-content-between mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rememberMe">
              <label class="form-check-label" for="rememberMe">
                Remember Me
              </label>
            </div>
          </div>

          <div class="d-flex gap-3">
			<button href="user.html" class="btn btn-primary rounded-pill px-3 d-none d-lg-block" name="login">Login<i class="fa fa-arrow-right ms-3"></i></button>
          </div>
        </form>
      </div>

      <div class="col-md-6 text-center">
        <img src="img/children.png" class="img-fluid" alt="Illustration" />
      </div>
    </div>
  </div>
</body>
</html>
