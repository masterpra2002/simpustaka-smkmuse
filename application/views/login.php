<!DOCTYPE html>
<html>
<head>
    <title>Login Perpustakaan</title>
</head>
<body>
    <h2>Login Sistem Informasi Perpustakaan</h2>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <?php echo form_open('auth/login'); ?>
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    <?php echo form_close(); ?>
</body>
</html>
