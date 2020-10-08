<?php

class Cookie
{
    public $upload;

    public function update(){
        if(isset($_COOKIE['upload'])){
            $this->upload = $_COOKIE['upload'];
        }else{
            $this->upload=0;
        }

        $this->upload += 1;

        setcookie('upload',$this->upload);
    }

}