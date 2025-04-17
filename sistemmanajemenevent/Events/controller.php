<?php
require '../Class/events.php';
$events = new Events();

if (isset($_POST['tambah_events'])) {
    $id_events = $_POST['id_events'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];
    $location = $_POST['location'];
    $events->tambah_events($id_events, $title, $description, $event_date, $location);
    header('location:../index.php');
}

if (isset($_POST['edit_events'])) {
    $id_events = $_POST['id_events'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];
    $location = $_POST['location'];
    $events->edit_events($id_events, $title, $description, $event_date, $location);
    header('location:../index.php');
}

if (isset($_GET['id'])) {
    $id_events = $_GET['id'];
    $events->hapus_events($id_events);
    header('location:../index.php');
}
