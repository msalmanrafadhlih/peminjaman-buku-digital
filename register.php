<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Page</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['register'])) {
                                                $nama = $_POST['nama'];
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $no_telepon = $_POST['no_telepon'];
                                                $username = $_POST['username'];
                                                $password = md5($_POST['password']);
                                                $level = $_POST['level'];
                                                

                                                $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                                if($insert){
                                                    echo '<script>alert("Selamat, akun anda telah terdaftar. Silahkan Login Kembali!"); location.href="login.php"</script>';
                                                }else{
                                                    echo '<script>alert("Gagal mendaftar. Silahkan Ulangi Kembali!")</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control py-4" type="text" required name="nama" placeholder="Masukkan Nama Lengkap" />
                                                <label class="small mb-1" >Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control py-4" type="text" required name="email" placeholder="Masukkan Email" />
                                                <label class="small mb-1" >Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control py-4" type="text" required name="no_telepon" placeholder="Masukkan Nomor Telepon" />
                                                <label class="small mb-1" >No. Telepon</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="alamat" rows="5" required class="form form-control py-4"></textarea>
                                                <label class="small mb-1" >Alamat</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control py-4" id="inputEmail" type="username" required name="username" placeholder="Masukkan Username" />
                                                <label class="small mb-1">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control py-4" id="inputPassword" name="password" type="password" required placeholder="Password" />
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                            </div>
                                            <div class=""> 
                                                <label class="small mb-1">Level</label>
                                                <select name = "level" required class="form-control">
                                                    <option value="Admin">Admin</option>
                                                    <option value="Peminjam">Peminjam</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn" href="login.php" style="color: blue;">Kembali</a>
                                                <button class="btn btn-primary" type="submit" name="register" value="">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
