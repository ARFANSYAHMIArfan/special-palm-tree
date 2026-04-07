<?php

$pageTitle = "Log Masuk Pelajar";

include 'connection.php';
include 'header.php';

$msg = "";
if (isset($_POST['login'])) {
    $id = trim($_POST['Id_Pelajar']);
    $pass = $_POST['Kata_Laluan'];

    $stmt = $conn->prepare("SELECT * FROM pelajar WHERE Id_Pelajar = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['Kata_Laluan'])) {
            session_regenerate_id(true);
            $_SESSION['Id_Pelajar'] = $row['Id_Pelajar'];
            $_SESSION['Nama_Pelajar'] = $row['Nama_Pelajar'];
            header('Location: dashboard.php');
            exit;
        }
    }
    $msg = "<div class='alert error'>Login gagal. Sila semak ID atau kata laluan.</div>";
}
?>
<div class="card" style="max-width:500px; margin:auto;">
    <h2>Login Pelajar</h2>
    <?= $msg ?>
    <form method="post">
        <div class="form-group">
            <label>ID Pelajar</label>
            <input type="text" name="Id_Pelajar" required>
        </div>
        <div class="form-group">
            <label>Kata Laluan</label>
            <input type="password" name="Kata_Laluan" required>
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>
