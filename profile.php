<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Admin</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="max-width: 500px; width: 100%;">
            <h3 class="text-center text-primary mb-4">Selamat Datang, Admin!</h3>
            <p class="text-center text-secondary">Anda telah berhasil masuk ke sistem.</p>
            <div class="d-grid gap-2">
                <a href="create.php" class="btn btn-primary">Masuk ke Dashboard</a>
                <a href="index.php" class="btn btn-outline-danger">Logout</a>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
