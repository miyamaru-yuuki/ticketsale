<?php
class Ticket
{
    // プロパティの宣言
    private $seatId;
    private $generalstudent;
    private $paymentId;

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
        $seatId = $this->seatId;
        if($seatId == 1){
            $seatName = "S";
        }elseif($seatId == 2){
            $seatName = "A";
        }elseif($seatId== 3){
            $seatName = "B";
        }elseif($seatId == 4){
            $seatName = "C";
        }
        return $seatName;
    }

    public function getTanka(){
        $tanka = 0;
        $seatId = $this->seatId;
        $generalstudent = $this->generalstudent;
        if($seatId == 1){
            $tanka = 2500;
        }elseif($seatId == 2){
            $tanka = 1800;
        }elseif($seatId == 3){
            $tanka = 1500;
        }elseif($seatId == 4){
            $tanka = 1000;
        }
        if($generalstudent == 2){
            $tanka = $tanka/2;
        }
        return $tanka;
    }

    public function getPayment(){
        $payment = "";
        $paymentId = $this->paymentId;
        if($paymentId == 1){
            $payment = "カード";
        }elseif($paymentId == 2){
            $payment = "銀行";
        }
        return $payment;
    }
}
