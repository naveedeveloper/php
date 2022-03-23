<?php

    // class
    class Person{
        private $name;
        private $email;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo 'Email for '.$this->name.' has been created. <br> <h1>Thank You </h1><br>';
        }

        
        public function __destruct(){
            echo __CLASS__.' Destructor <br>';
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email.'<br>';
        }
    } 


    $person1 = new Person('Faisal Iqbal', 'iqbalFaisal@gmail.com');

    // Inheritance
    class Customer extends Person{
        private $balance;
        public static $var = 40;
        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created <br>';
        }
        public function setBalance($balance){
            $ths->balance = $balance;
        }

        public function getBalance(){
            return $this->balance;
        }

        public static function getVar(){
            return self::$var;
        }
    }

    $tayyub = new Customer('Tayyub Naveed', 'Naveedeveloper@gmail.com', 500000);

    echo 'Static variable : '.Customer::$var.'<br>'; //We dont need to create class object for static variable
?>
