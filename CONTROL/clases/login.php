<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class login {
        private String $mailLogin;
        private String $passLogin;
        
        public function getmailLogin(): String {
            return $this->mailLogin;
        }
    
        public function getPassLogin(): String {
            return $this->passLogin;
        }
    
        public function setMailLogin(String $mailLogin): void {
            $this->mailLogin = $mailLogin;
        }
    
        public function setPassLogin(String $passLogin): void {
            $this->passLogin = $passLogin;
        }
    
    }
    