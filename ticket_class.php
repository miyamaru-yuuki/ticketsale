<?php
class Ticket
{
    // プロパティの宣言
    private $seatId;
    private $seatType;
    private $general;
    private $student;

    public function __construct($seatId,$seatType,$general,$student)
    {
        $this->seatId = $seatId;
        $this->seatType = $seatType;
        $this->general = $general;
        $this->student = $student;
    }

    public function getSeatId()
    {
        return $this->seatId;
    }

    public function getSeatType()
    {
        return $this->seatType;
    }

    public function getGeneral()
    {
        return $this->general;
    }

    public function getStudent()
    {
        return $this->student;
    }
}
