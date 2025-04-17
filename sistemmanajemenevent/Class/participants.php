<?php

class Participants
{

    private $db;

    public function __construct()
    {
        include 'koneksi.php';
    }

    function tampil_participants()
    {
        return $this->db->query("select * from participants");
    }

    function tambah_participants($id_participants, $name, $email)
    {
        $this->db->query("insert into Participants (id_participants,name,email) values('$id_participants','$name','$email')");
    }

    function hapus_participants($id_participants)
    {
        $this->db->query("delete from participants where id_participants='$id_participants'");
    }

    function lihat_participants($id_participants)
    {
        $stmt = $this->db->prepare("SELECT * FROM participants WHERE id_participants = :id_participants");
        $stmt->bindParam(':id_participants', $id_participants, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function edit_participants($id_participants, $name, $email)
    {
        $stmt = $this->db->prepare("update participants set name=:name,email=:email where id_participants=:id_participants");
        $stmt->bindParam(':id_participants', $id_participants, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
    }
}
