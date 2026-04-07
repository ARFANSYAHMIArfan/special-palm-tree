<?php
include 'connection.php';
include 'header.php';

$msg = '';
if (isset($_POST['login_admin'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            session_regenerate_id(true);
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_name'] = $admin['nama'];
            $_SESSION['admin_role'] = $admin['role'];
            header('Location: admin-dashboard.php');
            exit;
        }
    }
    $msg = "<div class='alert error'>Gagal Log Masuk Pentadbir.</div>";
}
?>
<div class="card" style="max-width:500px;margin:auto;">
    <h2>Login Admin</h2>
    <?= $msg ?>
    <form method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" name="login_admin" class="btn">Log Masuk Pentadbir</button>
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>
