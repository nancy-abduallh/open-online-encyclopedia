<?php 
 
class person{
    private $id;
    private $gender;
    private $password;
    private $email;
    
    public function __construct($id, $email, $gender, $password) {
        $this->id = $id;
        $this->email = $email;
        $this->gender = $gender;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function getGender(){
        return $this->gender;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setGender($gender){
        $this->gender=$gender;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function login($email,$password) {
        if ($this->email == $email && $this->password == $password) {
            echo "Login successful.\n";
            return true;
        } else {
            echo "Login failed. Invalid credentials.\n";
            return false;
        }
    }

    public function logout() {
        echo "Logout successful.\n";
    }
   
}
?>