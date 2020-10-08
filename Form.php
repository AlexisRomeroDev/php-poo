<?php

class Form {

    public function input($name, $type){
        return '<input name="'.$name.'"  type="'.$type.'">';
    }

}