<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 shadow-lg bg-light" style="max-width: 450px; width: 100%; border-radius: 10px;">
            <h2 class="text-center text-primary mb-4">Login Akun</h2>
            <form action="./backend/login.php" method="post">
                <!-- Input Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email anda" required>
                </div>
                <!-- Input Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password anda" required>
                </div>
                <!-- Tombol Login -->
                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-success">Login</button>
                </div>
            </form>
            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="./register.php" class="text-decoration-none">Daftar di sini</a></p>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
