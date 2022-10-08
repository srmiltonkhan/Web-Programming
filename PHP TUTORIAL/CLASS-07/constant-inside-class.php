<?php
 class Students {
    const RECEIVE_MSG = "Thank you for your participation";

    public function message(){
        echo self::RECEIVE_MSG;
    }
 }

 $obj = new Students();
 $obj->message();
