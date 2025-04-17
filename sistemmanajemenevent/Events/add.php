<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Events</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Events</h2>
        <div class="card">
            <div class="card-body">
                <form action="controller.php" method="POST">
                    <div class="form-group">
                        <label for="id_events">ID Event</label>
                        <input type="text" class="form-control" id="id_events" name="id_events" placeholder="Masukkan ID Event" required maxlength="5">
                    </div>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <input class="form-control" id="description" name="description" rows="3" placeholder="Masukkan Deskripsi" required>
                    </div>
                    <div class="form-group">
                        <label for="event_date">Tanggal Event</label>
                        <input type="datetime-local" class="form-control" id="event_date" name="event_date" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Masukkan Lokasi" required>
                    </div>

                    <button type="submit" name="tambah_events" class="btn btn-primary">Simpan</button>
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