<?php
include 'connection.php';
include 'admin-auth.php';
include 'header.php';

$msg = '';

if (isset($_POST['tambah'])) {
    $id = trim($_POST['Id_Pelajar']);
    $nama = trim($_POST['Nama_Pelajar']);
    $password = password_hash($_POST['Kata_Laluan'], PASSWORD_DEFAULT);
    $status = 'belum';
    $gambar = 'default.png';

    $stmt = $conn->prepare("INSERT INTO pelajar (Id_Pelajar, Kata_Laluan, Nama_Pelajar, Status_Pelajar, Gambar_Pelajar) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $id, $password, $nama, $status, $gambar);

    if ($stmt->execute()) {
        $msg = "<div class='alert success'>Pelajar berjaya ditambah.</div>";
    } else {
        $msg = "<div class='alert error'>Ralat: " . htmlspecialchars($stmt->error) . "</div>";
    }
}

$data = $conn->query("SELECT * FROM pelajar ORDER BY Nama_Pelajar ASC");
?>

<div class="card">
    <h2>Tambah Pelajar</h2>
    <?= $msg ?>
    <form method="post">
        <div class="grid">
            <div class="form-group">
                <label>ID Pelajar</label>
                <input type="text" name="Id_Pelajar" required>
            </div>
            <div class="form-group">
                <label>Nama Pelajar</label>
                <input type="text" name="Nama_Pelajar" required>
            </div>
            <div class="form-group">
                <label>Kata Laluan</label>
                <input type="text" name="Kata_Laluan" required>
            </div>
        </div>
        <button type="submit" name="tambah" class="btn">Tambah Pelajar</button>
    </form>
</div>

<div class="card">
    <h2>Senarai Pelajar</h2>
    <table class="table">
        <tr>
            <th>ID Pelajar</th>
            <th>Nama</th>
            <th>Status Mengundi</th>
            <th>Tindakan</th>
        </tr>
        <?php while($row = $data->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['Id_Pelajar']) ?></td>
            <td><?= htmlspecialchars($row['Nama_Pelajar']) ?></td>
            <td><?= htmlspecialchars($row['Status_Pelajar']) ?></td>
            <td>
                <a href="pelajar-edit.php?id=<?= urlencode($row['Id_Pelajar']) ?>">Edit</a> |
                <a href="pelajar-delete.php?id=<?= urlencode($row['Id_Pelajar']) ?>" onclick="return confirm('Padam pelajar ini?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php include 'footer.php'; ?>d