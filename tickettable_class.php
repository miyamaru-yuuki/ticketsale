<?php
require_once ('ticket_class.php');
class ticketTable
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTicketAll()
    {
        $sql = $this->db->prepare("SELECT * FROM ticket");
        $sql->execute();
        $all = $sql->fetchAll();
        $ticketary = array();
        foreach ($all as $data) {
            $ticket = new Ticket($data['seatId'], $data['seatType'], $data['general'], $data['student']);
            $ticketary[] = $ticket;
        }
        return $ticketary;
    }

    public function getTicket($seatId)
    {
        $sql = $this->db->prepare("SELECT * FROM ticket WHERE seatId=?");
        $sql->bindValue(1,$seatId);
        $sql->execute();
        $data = $sql->fetch();
        $ticket = new Ticket($data['seatId'], $data['seatType'], $data['general'], $data['student']);
        return $ticket;
    }

    public function getSeatKbun($generalstudent)
    {
        $seatKbun = null;
        if($generalstudent == 0){
            $seatKbun = "一般";
        }elseif($generalstudent == 1){
            $seatKbun = "小中高";
        }
        return $seatKbun;
    }
}