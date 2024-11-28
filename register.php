<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 shadow-lg bg-light" style="max-width: 450px; width: 100%; border-radius: 10px;">
            <h2 class="text-center text-primary mb-4">Form Registrasi</h2>
            <form action="./backend/register.php" method="post">
                <!-- Input Nama -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama lengkap anda" required>
                </div>
                <!-- Input Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example (nama@gmail.com)" required>
                </div>
                <!-- Input Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Buat Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <!-- Input Konfirmasi Password -->
                <div class="mb-3">
                    <label for="confirm" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Konfirmasi password" required>
                </div>
                <!-- Tombol Submit -->
                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-success">Daftar</button>
                </div>
            </form>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="index.php" class="text-decoration-none">Masuk di sini</a></p>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
