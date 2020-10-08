<?php

require "./Cookie.php";

class UploadedFile {

    public $files;
    public $cookie;
    public $count;

    public function __construct($files){
        $this->files = $files;
        $this->cookie = new Cookie();
    }

    public function save(){
        $upFile = "uploads/".date("Y_m_d_H_i_s").$this->files["avatar"]["name"];
        if(is_uploaded_file($this->files["avatar"]["tmp_name"])) {

            move_uploaded_file($this->files["avatar"]["tmp_name"], $upFile);

            // Ajout de cookie
            $this->cookie->increase();
        }

    }

    public function getValue(){
            return $this->cookie->upload;

    }
}