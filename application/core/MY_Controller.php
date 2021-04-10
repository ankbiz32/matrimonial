<?php

/**
 * My_controller
 * @author Ankur Agrawal
 */

class MY_Controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }

    // ================ For Users =============================

    public function userLoggedIn(){
        if(isset($this->session->reg->id) AND $this->session->reg->role=="user"){
            return true;
        }
        else{
            return false;
        }
    }

    public function redirectUserLoggedIn($uri = 'profile'){
        if($this->userLoggedIn()){
            redirect($uri);
        }
    }

    public function redirectUserNotLoggedIn($uri = 'login'){
        if(!$this->userLoggedIn()){
            redirect($uri);
        }
    }

}