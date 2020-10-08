<?php

class Cookie
{
    public $upload;

    public function __construct(){
        if(isset($_COOKIE['upload'])){
            $this->upload = $_COOKIE['upload'];
        }else{
            $this->upload=0;
        }
    }

    public function increase(){

        $this->upload += 1;

        setcookie('upload',$this->upload);
    }

}