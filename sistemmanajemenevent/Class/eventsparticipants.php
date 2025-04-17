<?php

class EventsParticipants
{

    private $db;

    public function __construct()
    {
        include 'koneksi.php';
    }

    function tampil_eventsparticipants()
    {
        return $this->db->query("select * from event_participants");
    }

    function tambah_eventsparticipants($events_id, $participants_id)
    {
        $this->db->query("insert into eventsparticipants (events_id,participants_id) values('$events_id','$participants_id')");
    }

    function hapus_eventsparticipants($events_id)
    {
        $this->db->query("delete from eventsparticipants where events_id='$events_id'");
    }

    function lihat_eventsparticipants($events_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM eventsparticipants WHERE events_id = :events_id");
        $stmt->bindParam(':events_id', $events_id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function edit_eventsparticipants($events_id, $participants_id)
    {
        $stmt = $this->db->prepare("update eventsparticipants set participants_id=:participants_id where events_id=:events_id");
        $stmt->bindParam(':events_id', $events_id, PDO::PARAM_STR);
        $stmt->bindParam(':participants_id', PDO::PARAM_STR);
        $stmt->execute();
    }

}
