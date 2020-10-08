<?php

// ini_set('display_errors',1);
// ini_set('error_reporting', E_ALL);

require "./Cookie.php";

class UploadedFile
{

    public $files;
    public $cookie;
    public $count;

    public function __construct($files)
    {
        $this->files = $files;
        $this->cookie = new Cookie();
    }

    public function save($name)
    {
        $upFile = "upload/" . date("Y_m_d_H_i_s") . $this->files[$name]["name"];
        if (is_uploaded_file($this->files[$name]["tmp_name"])) {

            if (!move_uploaded_file($this->files[$name]["tmp_name"], $upFile)) {

                throw new Exception('Ce dossier n\'existe pas');

            }

            // Ajout de cookie
            $this->cookie->increase();
        }

    }

    public function getValue()
    {
        return $this->cookie->upload;

    }
}