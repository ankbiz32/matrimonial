<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}

	public function index()
	{
		$data=array();
		$data['people']=$this->fetch->getPeople();
		// var_dump('<pre>',$data);exit;
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer'); 
	}

	public function Profile()
	{
        $this->redirectUserNotLoggedIn();
		$data=array();
		$data['profile']=$this->fetch->getInfoCondsId('user_info', ['user_id'=>$this->session->reg->id]);
		$this->load->view('header',$data);
		$this->load->view('profile');
		$this->load->view('footer');
	}

	public function About()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function Subscribe()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[subscriptions.email]');
        $this->form_validation->set_message('is_unique', 'Email is already in the newsletter subscription list. Please use a different e-mail address.');
		if($this->form_validation->run() == true){
			$data=array();
			$data['email']=trim(strip_tags($this->input->post('email')));
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo('subscriptions',$data);
			if($status){
				$this->session->set_flashdata('success','Thank you for subscribing to our newsletter.' );
				redirect('/');
			}
			else{
				$this->session->set_flashdata('error','Some error occured. Please try again.');
				redirect('/');
			}
		}
		else{
            $error=preg_replace( "/\r|\n/", "<br>", strip_tags(trim(validation_errors())) );;
			$this->session->set_flashdata('error',$error);
			redirect('/');
		} 
	}

	public function updateProfile()
	{
		// var_dump('<pre>',$_POST,$_FILES);exit;
		$this->form_validation->set_rules('fname', 'First name', 'required');
		$this->form_validation->set_rules('lname', 'Last name', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('occupation', 'Occupation', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		if($this->form_validation->run() == true){

			$data=array();
			$data2=array();
			$data2=$this->input->post();
			if($_FILES['img']['name']!=null){
                $path ='assets/images/blog';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 1024
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
					$error=preg_replace( "/\r|\n/", "<br>", strip_tags(trim($this->upload->display_errors())) );;
					$this->session->set_flashdata('error',$error);
                    redirect('/profile');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data2['img_src'] = $imgdata['file_name'];

					$this->load->library('image_lib');
					$conf =  array(
						'image_library'   => 'gd2',
						'source_image'    =>  $imgdata['full_path'],
						'maintain_ratio'  =>  TRUE,
						'width'           =>  183,
						'height'          =>  183,
					  );
					  $this->image_lib->clear();
					  $this->image_lib->initialize($conf);
					  $this->image_lib->resize();

                    $d= $this->fetch->getInfoCondsId('user_info',['user_id'=>$this->session->reg->id]);
                    $unlink= 'assets/images/blog/'.$d->img_src;
                }
            }

			$data['fname']=$this->input->post('fname');
			$data['lname']=$this->input->post('lname');
			unset($data2['fname']);
			unset($data2['lname']);
			$data2['address']=substr(trim(strip_tags($this->input->post('address'))),0,100);
			$this->load->model('EditModel','edit');
			$status= $this->edit->updateInfo($data,'id',$this->session->reg->id,'users');
			if($status){
				$status= $this->edit->updateInfo($data2,'user_id',$this->session->reg->id,'user_info');
				if($unlink){
					unlink($unlink);
				}
				$this->session->set_flashdata('success','Account details updated.' );
				redirect('/profile');
			}
			else{
				$this->session->set_flashdata('error','Some error occured. Please try again.');
				redirect('/profile');
			}
		}
		else{
            $error=preg_replace( "/\r|\n/", "<br>", strip_tags(trim(validation_errors())) );;
			$this->session->set_flashdata('error',$error);
			redirect('/profile');
		} 
	}

	


}
