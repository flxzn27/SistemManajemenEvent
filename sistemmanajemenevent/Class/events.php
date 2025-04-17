<?php

class Events
{

    private $db;

    public function __construct()
    {
        include 'koneksi.php';
    }

    function tampil_events()
    {
        return $this->db->query("select * from events");
    }

    function tambah_events($id_events, $title, $description, $event_date, $location)
    {
        $this->db->query("insert into events(id_events, title, description, event_date, location) values('$id_events','$title','$description', '$event_date','$location')");
    }

    function hapus_events($id_events)
    {
        $this->db->query("delete from events where id_events='$id_events'");
    }

    function lihat_events($id_events)
    {
        $stmt = $this->db->prepare("SELECT * FROM events WHERE id_events = :id_events");
        $stmt->bindParam(':id_events', $id_events, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function edit_events($id_events, $title, $description, $event_date, $location)
    {
        $stmt = $this->db->prepare("update events set title=:title, description=:description, event_date=:event_date, location=:location where id_events=:id_events");
        $stmt->bindParam(':id_events', $id_events, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':event_date', $event_date, PDO::PARAM_STR);
        $stmt->bindParam(':location', $location, PDO::PARAM_STR);
        $stmt->execute();
    }
}
