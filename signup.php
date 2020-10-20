<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nyewao</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<!-- code htmlnya dipakein bootstrap ini-->
<body>
    <div id="container" class="container-lg">
        <div class="main_content">            
            <div class="title text-center mt-5 mb-5">
                <h1>Sign Up</h1>
            </div>
            <div id="content" class="text-center">
                <label class="" for="namaLengkap">Nama Lengkap</label><br>
                <input id="namaLengkap" type="text" placeholder="Masukkan nama lengkap"><br>
                <label for="email">E-mail</label><br>
                <input id="email" type="email" placeholder="Masukkan E-mail"><br>
                <label for="password">Password</label><br>
                <input id="password" type="password" name="password" placeholder="Masukkan password"><br>
                <label for="tanggalLahir">Tanggal Lahir</label><br>
                <input id="tanggalLahir" type="date" name="tanggalLahir"><br>
                <label for="img">Masukkan Foto KTP</label><br>
                <input id="img" type="file" accept="image/*"><br>
                <input type="submit" class="btn btn-outline-primary"><br>
                <div class="img">
                    <img src="fb.jpg" alt="Facebook" class="img-circle">
                    <img src="fb.png" alt="Google" class="img-circle">
                    <img src="fb.png" alt="Twitter" class="img-circle">
                </div>                
            </div>
        </div>                
    </div>
    <footer class="text-center mt-5">
        <p>Copyright &copy; <a href="nyewao.com">nyewao.com</a></p>
    </footer>
    <!-- Jangan diubah -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>