<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Perpustakaan SMK Muhammadiyah Seyegan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            margin-bottom: 25px;
            text-align: center;
            color: #2c3e50;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #2471a3;
        }

        .error-message {
            color: #e74c3c;
            margin-bottom: 15px;
            font-size: 14px;
            text-align: center;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Perpustakaan</h2>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="error-message">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <?php echo form_open('auth/login'); ?>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Masuk</button>
        <?php echo form_close(); ?>

        <div class="footer">
            &copy; <?php echo date('Y'); ?> SMK Muhammadiyah Seyegan - Sistem Informasi Perpustakaan
        </div>
    </div>
</body>
</html>
