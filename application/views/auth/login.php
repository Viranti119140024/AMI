<!-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Halaman Masuk
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?> vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/login.css" rel="stylesheet">
</head>

<body>

    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" method="post" action="<?= base_url('auth/index'); ?>">
                    <h4 class="text-center font-weight-bold"> Audit Mutu Internal <br> Institut Teknologi Sumatera</h4>
                    <div class="form-group">
                        <label for="name" style="color: white; font-weight:bold;">Username</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword" style="color: white; font-weight:bold;">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <span class="password-icon" style="color: black;" id="togglePassword">&#128065;</span>
                    </div>
                    <button type="submit" class="btn btn-masuk btn-block">Masuk</button>
                    <div class="form-footer mt-2">
                        <!-- <p style="color: white;"> Belum punya account? <a href="<?= base_url('auth/registrasi') ?>">Daftar</a></p> -->

                    </div>
                </form>
            </section>
        </section>
    </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.textContent = type === 'password' ? '\u{1F441}' : '\u{1F441}\u{1F5E0}';
    });
  </script>
</body>

</html> -->

