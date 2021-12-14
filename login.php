<link rel="stylesheet" href="css/login.css">
<title>หน้าแรก</title>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body class="main-bg">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
    <h1 class="p-5">HOME CARE</h1>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-t1itle text-center border-bottom">
            <h2 class="p-3">Admin</h2>
          </div>
          <div class="card-body">
            <form class="form-1" action="checklogin.php" method="post">
              <div class="mb-4">
                <label for="username" class="form-label">Email</label>
                <input type="text" name="admin_user" class="form-control" id="username" required/>
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="admin_pass" class="form-control" id="password" required/>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-light main-bg">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


</body>

</html>
