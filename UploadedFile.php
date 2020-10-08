<?php

class UploadedFile {

    private $files;

    public function __construct($files){
        $this->files = $files;
    }

    public function save(){

        $upFile = "uploads/".date("Y_m_d_H_i_s").$this->files["avatar"]["name"];
        if(is_uploaded_file($this->files["avatar"]["tmp_name"])) {

            move_uploaded_file($this->files["avatar"]["tmp_name"], $upFile);
        }
    }
}