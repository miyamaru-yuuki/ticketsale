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
        $tankageneral = array(null,2500,1800,1500,1000);
        $tankastudent = array(null,1250,900,750,500);
        $seatId = $this->seatId;
        $generalstudent = $this->generalstudent;
        if($generalstudent== 1) {
            $tanka = $tankageneral[$seatId];
        }elseif($generalstudent== 2) {
            $tanka = $tankastudent[$seatId];;
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
