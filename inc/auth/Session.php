<?php 

class Session{
    // Session Start
    public static function init(){
        if(version_compare(phpversion(),'5.4.0','<')){
            if(session_id() == ''){
                session_start();
            }
        }else{
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
        }
    }
    // Session Set Value
    public static function set($key,$val){
        $_SESSION[$key] = $val;
    }
    // Session get Value
    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }

    public static function checkLogin(){
            if(self::get("login") == true){                
                return true;
            }else{
                return false;
            }
    }


    // Session Destroy
    public static function destroy($path = "yslogin.php"){
            session_destroy();
            session_unset();            
            header("Location: $path");
    }




}