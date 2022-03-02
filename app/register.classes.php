<?php
session_start();
class Register extends Dbh
{

    protected function setUser($name, $surname, $personalCode)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (name, surname, personalcode) VALUES (?, ?, ?);');

        if (!$stmt->execute(array($name, $surname, $personalCode))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed1");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($personalCode) {
        $stmt = $this->connect()->prepare('SELECT personalcode FROM users WHERE personalcode = ? ;');

        if(!$stmt->execute(array($personalCode))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed2");
            exit();
        }
        $resultCheck = true;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        return $resultCheck;

    }

}
