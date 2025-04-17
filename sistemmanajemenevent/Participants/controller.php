<?php
require '../Class/participants.php';
$participants = new Participants();

if (isset($_POST['tambah_participants'])) {
    $id_participants = $_POST['id_participants'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $participants->tambah_participants($id_participants, $name, $email);
    header('location:../index.php');
}

if (isset($_POST['edit_participants'])) {
    $id_participants = $_POST['id_participants'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $participants->edit_participants($id_participants, $name, $email);
    header('location:../index.php');
}

if (isset($_GET['id'])) {
    $id_participants = $_GET['id'];
    $participants->hapus_participants($id_participants);
    header('location:../index.php');
}
