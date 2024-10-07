<?php
$title = "login";
require "layout/heeder-login.blade.php";

?>

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
            <div class="mb-3">
                <input class="form-control bg-light" type="text" placeholder="Username" />
            </div>
            <div class="mb-3">
                <input class="form-control bg-light" type="email" placeholder="Email" />
            </div>
            <div class="mb-3 forgot-password">
                <a href="#" class="text-success small">Lupa password?</a>
            </div>
            <div class="text-center"> <!-- Added this div for centering the button -->
                <button type="submit" class="btn btn-success">Masuk</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <p class="text-muted">
                Belum Punya Akun?
                <a href="#" class="text-success">Registrasi di sini</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>