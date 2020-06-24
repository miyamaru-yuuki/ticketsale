<?php
class Ticket
{
    // プロパティの宣言
    private $seatId;
    private $generalstudent;

    public function __construct($seatId,$generalstudent,$paymentId)
    {
        $this->seatId = $seatId;
        $this->generalstudent = $generalstudent;
        $this->paymentId = $paymentId;
    }

    public function getSeatId()
    {
        return $this->seatId;
    }

    public function getGeneralStudent()
    {
        return $this->generalstudent;
    }

    public function getPaymentId()
    {
        return $this->paymentId;
    }

    public function getSeatName(){
        $seatName = "";
        if($this->seatId == 1){
            $seatName = "S";
        }elseif($this->seatId == 2){
            $seatName = "A";
        }elseif($this->seatId == 3){
            $seatName = "B";
        }elseif($this->seatId == 4){
            $seatName = "C";
        }
        return $seatName;
    }

    public function getTanka(){
        $tanka = 0;
        if($this->seatId == 1){
            if($this->generalstudent == 1){
                $tanka = 2500;
            }elseif($this->generalstudent == 2) {
                $tanka = 1250;
            }
        }elseif($this->seatId == 2){
            if($this->generalstudent == 1){
                $tanka = 1800;
            }elseif($this->generalstudent == 2) {
                $tanka = 900;
            }
        }elseif($this->seatId == 3){
            if($this->generalstudent == 1){
                $tanka = 1500;
            }elseif($this->generalstudent == 2) {
                $tanka = 750;
            }
        }elseif($this->seatId == 4){
            if($this->generalstudent == 1){
                $tanka = 1000;
            }elseif($this->generalstudent == 2) {
                $tanka = 500;
            }
        }
        return $tanka;
    }

    public function getPayment(){
        $payment = "";
        if($this->paymentId == 1){
            $payment = "カード";
        }elseif($this->paymentId == 2){
            $payment = "銀行";
        }
        return $payment;
    }
}
