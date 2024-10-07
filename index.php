<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Signin Template · Bootstrap v5.3</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link href="assets/css/bootstrap/sign-in.css" rel="stylesheet">
    <style>

        body {
            background-image: url('assets/img/bg.jpeg'); /* Ganti dengan URL gambar */
            background-size: cover; /* Memastikan gambar menutupi seluruh latar belakang */
            background-position: center; /* Memposisikan gambar di tengah */
        }
        .logo-container {
            position: relative;
            display: flex;
            justify-content: center; /* Pusatkan logo dalam rectangle */
            align-items: center;
            width: 100px; /* Sesuaikan ukuran rectangle */
            height: 100px; /* Sesuaikan ukuran rectangle */
            background-color: green;
            border-radius: 0 0 10px 10px;
            margin-bottom: 20px; /* Ruang antara rectangle dan teks */
        }

        .logo-container img {
            width: 72px; /* Ukuran logo */
            height: 57px; /* Ukuran logo */
            z-index: 1; /* Pastikan gambar tetap di depan */
        }

         .form-signin {
            background-color: white; /* Mengatur latar belakang form menjadi putih */
            padding: 20px; /* Menambahkan padding di dalam form */
            border-radius: 10px; /* Mengatur sudut form */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
            max-width: 400px; /* Maksimum lebar form */
            width: 100%; /* Lebar form 100% hingga batas maksimum */
        }
    </style>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
    <form action="" method="POST">
        <!-- Container untuk logo dan rectangle -->
        <div class="logo-container">
            <img src="assets/img/logo.png" alt="Logo">
        </div>

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <!-- Tampilkan pesan kesalahan jika ada -->
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">
                Invalid email or password.
            </div>
        <?php endif; ?>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button class="btn btn-primary w-100" type="submit" name="login">Sign in</button>
    </form>
</main>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
