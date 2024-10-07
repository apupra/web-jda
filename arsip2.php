<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>JDA Account</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            background-image: url('assets/img/bg.jpeg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-white rounded shadow-lg p-4 p-md-5 w-100" style="max-width: 400px; position: relative;">
        <!-- Logo -->
        <div class="position-absolute" style="top: -50px; left: 50%; transform: translateX(-50%);">
            <img src="assets/img/logo.png" alt="Logo" class="rounded bg-success p-2" style="width: 64px; height: 64px;" />
        </div>

        <!-- Title -->
        <div class="text-center mt-5 mb-3">
            <h2 class="fw-bold text-success">
                akun dakwah
                <span class="text-dark">JDA</span>
            </h2>
        </div>

        <!-- Description -->
        <p class="text-center text-secondary mb-4">
            Dapatkan link untuk ubah password dengan kirim permohonan:
        </p>

        <!-- Form -->
        <form>
            <div class="mb-3">
                <input type="text" class="form-control bg-light border-secondary rounded" placeholder="Username" />
            </div>
            <div class="mb-4">
                <input type="email" class="form-control bg-light border-secondary rounded" placeholder="Email" />
            </div>
            <button type="submit" class="btn btn-success w-100 rounded-pill">
                Kirim Permohonan
            </button>
        </form>

        <!-- Back to Login Link -->
        <div class="text-center mt-4">
            <a href="#" class="text-secondary">
                Kembali ke
                <span class="text-success">Halaman Masuk</span>
            </a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
