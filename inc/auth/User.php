<?php 
require_once "Db.php";
require_once "Session.php";
class User{
    private $db;
    public $succesMsg;
   
    

    public function __construct(){
        $this->db = new DB();     
    }

    public function userLogin($data){
        $usremail = $data['usremail'];
        $pass = md5($data['pass']);
        
        if(empty($usremail) || empty($pass)){
            $msg = "Fields must not be empty";
            return $msg;
        }      
       
       $sql = null;
        if(filter_var($usremail,FILTER_VALIDATE_EMAIL) === false){   
                if(!$this->checkUname($usremail)){
                    $msg = "Username dosen't Exists";
                    return $msg;
                }
                $sql = "SELECT * FROM ys_users WHERE uname = '$usremail' AND pass = '$pass'";
        }else{   
            if(!$this->checkEmail($usremail)){
                $msg = "Email dosen't Exists";
                return $msg;
            }         
            $sql = "SELECT * FROM ys_users WHERE email = '$usremail' AND pass = '$pass'";
        }     

      if($this->getLoginUser($sql)){
            $result = $this->getLoginUser($sql);
            Session::init();
            Session::set("login",true);
            Session::set("usrid",$result->id);
            Session::set("flname",$result->flname);
            Session::set("ysemail",$result->email);
            Session::set("ysuname",$result->uname);
            Session::set("primg",$result->images);
            header("Location:http://localhost/YSHospital/");
           
            
      
        }else{
            $msg = "Something is wrong Please check username or password";
            return $msg;
        } 

        

        
       
       


    }

    //Get Login Data

    public function getLoginUser($sql){        
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    // User Registration
    public function userRegistration($data){
        $flname = $data['flname'];
        $uname = $data['uname'];
        $email = $data['email'];
        $pass = (int) $data['pass'];  
        $encpass = md5($pass);
        $cnf_pass = (int) $data['cnf_pass'];      
        
        $ckemail = $this->checkEmail($email);
        $ckuname = $this->checkUname($uname);

        if(empty($flname) || empty($uname) || empty($email) || empty($pass)){
            $msg = "Field must not be empty";
            return $msg;
        }
        if($pass != $cnf_pass){
            $msg = "Password must be same!";
            return $msg;
        }
        if(strlen($pass) < 6){
            $msg = "Password is too short!";
            return $msg;
        }
        if(strlen($uname) < 5){
            $msg = "Username is too short!";
            return $msg;
        }elseif(preg_match('/^a-z0-9_-/i',$uname)){
            $msg = "You can't use spacial Symbol";
            return $msg;
        }
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            $msg = "The email address is not valid!";
            return $msg;
        }
        if($ckemail == true){
            $msg = "The Email address already exist!";
            return $msg;
        }
        if($ckuname == true){
            $msg = "The Username already exist!";
            return $msg;
        }

        $sql = "INSERT INTO ys_users(flname,uname,email,pass)VALUES('$flname','$uname','$email','$encpass');";
        $query = $this->db->pdo->prepare($sql);
        $result = $query->execute();
        if($result){
            $this->succesMsg = "You have been registered";
        }else{
            $msg = "There is some problem";
        }
    }
// Checking Email Exists or Not
    public function checkEmail($email){
        $sql = "SELECT email FROM ys_users WHERE email = '$email'";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
// Checking Username Exists or Not
    public function checkUname($uname){
        $sql = "SELECT uname FROM ys_users WHERE uname = '$uname'";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    } 





}
