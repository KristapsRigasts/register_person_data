<?php

class RegisterContr extends Register{

    private string $name;
    private string $surname;
    private $personalCode;


    public function __construct($name, $surname, $personalCode){
        $this->name = $name;
        $this->surname = $surname;
        $this->personalCode = $personalCode;

    }

    public function registerUser() {
        if ($this->emptyInput() == false) {
            //echo "Empty input!";
            header("location: ../index.php?error=empyinput");
            exit();
        }
        if ($this->invalidName() == false) {
            //echo "Invalid username!";
            header("location: ../index.php?error=username");
            exit();
        }
        if ($this->personalCodeTakenCheck() == false) {
            //echo "Personal code is already used taken!";
            header("location: ../index.php?error=personalcodetaken");
            exit();
        }

        $this->setUser($this->name, $this->surname, $this->personalCode);
    }

    private function emptyInput() {
        $result=true;
        if(empty($this->name) || empty($this->surname) || empty($this->personalCode)) {
            $result = false;
        }
        return $result;
    }

    private function invalidName() {
        $result= true;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->name))
        {
            $result = false;
        }

        return $result;
    }

    private function personalCodeTakenCheck() {
        $result=true;
        if(!$this->checkUser($this->personalCode))
        {
            $result = false;
        }

        return $result;
    }

}
