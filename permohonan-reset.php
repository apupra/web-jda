<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JDA Account</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            background-image: url('assets/img/bg.jpeg');
            background-size: cover;
            background-position: center;
        }

        .form-container {
            width: 24rem;
        }

        .logo {
            width: 64px;
            height: 64px;
        }

        .logo-bg {
            background-color: #28a745;
            padding: 0.5rem;
        }

        .logo-container {
            position: absolute;
            top: -10px;
            left: 20%;
            transform: translateX(-50%);
        }

        .title-container {
            position: absolute;
            top: 10px;
            right: 13%;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .title-container h2 {
            margin: 0;
            font-size: 1rem;
        }

        .jda-text {
            font-size: 2.3rem;
            color: #28a745;
            font-weight: bold;
        }

        .form-control,
        .btn {
            width: 90%;
            /* Ensures both inputs and button are the same width */
            margin: 0 auto;
            /* Centers the elements */
        }

        .text-end {
            text-align: right;
            /* Aligns text to the right */
        }

        .forgot-password {
            text-align: right;
            /* Tetap sejajar ke kanan */
            margin-top: -5px;
            /* Penyesuaian vertikal */
            padding-right: 17px;
            /* Menyesuaikan jarak ke sisi kanan input */
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="bg-white rounded shadow-lg p-4 position-relative form-container">

        <div class="logo-container">
            <img alt="Logo" class="logo logo-bg" src="assets/img/logo.png" />
        </div>

        <!-- Title with akun dakwah and JDA aligned horizontally -->
        <div class="title-container text-end">
            <h2 class="text-success fw-bold">
                akun
                <br>
                dakwah
            </h2>
            <span class="jda-text">
                JDA
            </span>
        </div>

        <form class="mt-5">
            <!-- Description -->
            <p class="text-center mb-4">
                Dapatkan link untuk ubah password dengan kirim permohonan:
            </p>
            <div class="mb-3">
                <input class="form-control bg-light" type="text" placeholder="Username" />
            </div>
            <div class="mb-3">
                <input class="form-control bg-light" type="email" placeholder="Email" />
            </div>
            <div class="text-center"> <!-- Added this div for centering the button -->
                <button type="submit" class="btn btn-success">Kirim Permohonan</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <p class="text-muted">
                Kembali
                <a href="#" class="text-success">Ke Halaman</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>