<?php
require '../Class/participants.php';
$participants = new Participants();
if (isset($_GET['id'])) {
    $id_participants = $_GET['id'];
    $lihat_participants = $participants->lihat_participants($id_participants);
    if (!$lihat_participants) {
        header('location:../index.php');
    }
} else {
    header('location:../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Partisipan</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Partisipan</h2>
        <div class="card">
            <div class="card-body">
                <form action="controller.php" method="POST">
                    <div class="form-group">
                        <label for="id_participants">ID Partisipan</label>
                        <input type="text" class="form-control" id="id_participants" name="id_participants" placeholder="Masukkan ID Partisipin" value="<?= $lihat_participants['id_participants'] ?>" required maxlength="3">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="<?= $lihat_participants['name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= $lihat_participants['email'] ?>" required>
                    </div>                   
                    <button type="submit" name="edit_participants" class="btn btn-primary">Simpan</button>
                    <a href="../index.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>