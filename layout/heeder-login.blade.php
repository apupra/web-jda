
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>

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