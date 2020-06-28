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
        $seatNameAry = array("S","A","B","C");
        $seatId = $this->seatId;
        $seatName = $seatNameAry[$seatId];
        return $seatName;
    }

    public function getTanka(){
        $tanka = 0;
        $tankageneral = array(2500,1800,1500,1000);
        $tankastudent = array(1250,900,750,500);
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
        $paymentId = $this->paymentId;
        $paymentAry = array("カード","銀行");
        $payment = $paymentAry[$paymentId];
        return $payment;
    }
}
