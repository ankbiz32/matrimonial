<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login controller
 * @author Ankur Agrawal
 */

class UserLogin extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model', 'auth');
        $this->load->model('GetModel', 'fetch');
    }

    public function index(){
        $this->redirectUserLoggedIn();
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
    }

    //========== For registration ================

	public function Register()
	{
        $this->redirectUserLoggedIn();
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
    }
    
	public function submitRegister()
	{
        $this->form_validation->set_rules('fname', 'Name', 'required');
        $this->form_validation->set_rules('lname', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_message('is_unique', 'Email already registered. Please use a different e-mail address.');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        if($this->form_validation->run() == FALSE){
            $error=preg_replace( "/\r|\n/", "<br>", strip_tags(trim(validation_errors())) );;
            $this->session->set_flashdata('error',$error );
            redirect('/register');
        }
        else{
            $this->load->model('AddModel', 'add');
            $data['fname'] = $this->input->post('fname');
            $data['lname'] = $this->input->post('lname');
            $data['email'] = $this->input->post('email');
            $data['pwd'] = password_hash( $this->input->post('pwd'), PASSWORD_DEFAULT );
            $data['role'] = 'user';
            $uid=$this->add->create_user($data);
            if($uid){
                $response=array();
                $data2['user_id'] = $uid;
                $uid2=$this->add->create_user_profile($data2);
                $this->session->set_flashdata('success','Thank you for registering with <strong>Matrimony</strong>. Please login to continue.' );
                redirect('/login');
            }
            else{
                $this->session->set_flashdata('error','Failed to register. Please try again.' );
                redirect('/register');
            }
        }
	}
    

    //========== For Login authentication ================

    public function authenticate($return=NULL){
        $this->redirectUserLoggedIn();
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error','Invalid inputs');
            redirect('login');
        }
        else{
            if($user = $this->auth->authenticateUser($this->input->post()) ){
                $this->session->set_userdata(['reg' =>  $user]);
                $this->session->set_flashdata('success','You are now logged in !');
                redirect('/');
            }else{
                $this->session->set_flashdata('error','Invalid email or password');
                redirect('login');
            }
        }
    }

    public function changePwd(){
        $this->form_validation->set_rules('oldp', 'Current Password', 'required');
        $this->form_validation->set_rules('newp', 'New Password', 'required');
        $this->form_validation->set_rules('cnfp', 'Confirm Password', 'required|matches[newp]');
        if($this->form_validation->run() == TRUE){
            $data=$this->input->post();
            if( password_verify($data['oldp'], $this->session->reg->pwd) ){
                $hash['pwd'] = password_hash( $this->input->post('cnfp'), PASSWORD_DEFAULT );
                $status=$this->auth->changeLoginPassword($hash, $admProfile->user_id);
                if($status){
                    $this->session->reg->pwd=$hash['pwd'];
                    $this->session->set_flashdata('success','Password changed.' );
                    redirect('/profile');
                }
                else{
                    $this->session->set_flashdata('error','Some error occured. Please try again.' );
                    redirect('/profile');
                }
            }
            else{
                $this->session->set_flashdata('error','Wrong current password' );
                redirect('/profile');
            }
        }
        else{
            $error=preg_replace( "/\r|\n/", "<br>", strip_tags(trim(validation_errors())) );;
            $this->session->set_flashdata('error',$error );
            redirect('/profile');
        }
    }

    public function logout(){
        $this->session->unset_userdata(['reg']);
        $this->session->sess_destroy();
        $this->redirectUserNotLoggedIn();
    }


}

