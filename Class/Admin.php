<?php
include 'User.php';

class Admin extends User{
    public function talk(){
        $this->sayHello();
    }

    public function sayName(){
        echo $this->name;
    }
}

?>