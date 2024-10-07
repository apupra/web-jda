<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        JDA Account
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            background-image: url('assets/img/bg.jpeg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-96 relative">
        <!--
        <div class="absolute -top-6 left-1/4 transform -translate-x-1/2">  Adjusted the top value 
            <img alt="Logo" class="w-16 h-16 rounded bg-green-600 p-2" height="64" src="assets/img/logo.png"
                width="64" />
        </div> -->
        <div class="absolute -top-3 left-1/4 transform -translate-x-1/2">
            <img alt="Logo" class="h-16 w-16 rounded bg-green-600 p-2" height="64" src="assets/img/logo.png"
                width="64" />
        </div>
        <div class="text-center mt-10 mb-2">
            <h2 class="text-green-700 font-bold text-2xl">
                akun dakwah
                <span class="text-green-900">
                    JDA
                </span>
            </h2>
        </div>
        <form>
            <div class="mb-4">
                <input
                    class="w-full px-4 py-2 border rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="Username" type="text" />
            </div>
            <div class="mb-6">
                <input
                    class="w-full px-4 py-2 border rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="Email" type="email" />
            </div>
            <div class="text-right mb-4">
                <a class="text-green-600 text-sm" href="#">
                    Lupa password?
                </a>
            </div>
            <button
                class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500"
                type="submit">
                Masuk
            </button>
        </form>
        <div class="text-center mt-4">
            <a class="text-gray-700" href="#">
                Belum Punya Akun?
                <span class="text-green-500">
                    Registrasi di sini
                </span>
            </a>
        </div>
    </div>
</body>

</html>