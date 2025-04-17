<?php
require 'Class/events.php';
require 'Class/participants.php';
require 'Class/eventsparticipants.php';

$events = new Events();
$tampil_events = $events->tampil_events();

$participants = new Participants();
$tampil_participants = $participants->tampil_participants();

$eventsparticipants = new EventsParticipants();
$tampil_eventsparticipants = $eventsparticipants->tampil_eventsparticipants();

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM MANAJEMEN EVENT</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>

    <div class="container mt-4">
        <h2 class="text-center mb-4">SISTEM MANAJEMEN EVENT</h2>
        <h2 class="text-center mb-4">BY Alfan Fauzan Ridlo</h2>
        <br>
        <h2 class="text-center mb-4">Data Event</h2>
        <a class="btn btn-info" href="Events/add.php">Tambah Event</a>
        <hr>
        <table class="table table-bordered table-striped table-hover" id="eventsTable">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>ID Event</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Event</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; // Inisialisasi nomor urut
                foreach ($tampil_events as $value) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['id_events'] ?></td>
                        <td><?= $value['title'] ?></td>
                        <td><?= $value['description'] ?></td>
                        <td><?= $value['event_date'] ?></td>
                        <td><?= $value['location'] ?></td>
                        <td>
                            <a href="Events/edit.php?id=<?= $value['id_events'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="Events/controller.php?id=<?= $value['id_events'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Data Partisipan</h2>
        <a class="btn btn-info" href="Participants/add.php">Tambah Partisipan</a>
        <hr>
        <table class="table table-bordered table-striped table-hover" id="participantsTable">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>ID Partisipan</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; // Inisialisasi nomor urut
                foreach ($tampil_participants as $value) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['id_participants'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td>
                            <a href="Participants/edit.php?id=<?= $value['id_participants'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="Participants/controller.php?id=<?= $value['id_participants'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Data Event-Partisipan</h2>
        <hr>
        <table class="table table-bordered table-striped table-hover" id="eventsparticipansTable">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>ID Event</th>
                    <th>ID Partisipan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; // Inisialisasi nomor urut
                foreach ($tampil_eventsparticipants as $value) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['id_events'] ?></td>
                        <td><?= $value['id_participants'] ?></td>
                        <td>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#eventsTable').DataTable();
            $('#participantsTable').DataTable();
            $('#eventsparticipansTable').DataTable();
        });
    </script>
</body>

</html>