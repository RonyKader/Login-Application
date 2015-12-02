<?php 


class Home extends CI_Controller{

	public function index(){
		$data['main_view'] = "home_view";
		$this->load->view( 'layout/main',$data );
	}

	public function registation(){
		$data['main_view'] = "registation";
		$this->load->view('layout/main', $data );
	}

	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'trim|required' );
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]' );
		$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|min_length[5]|matches[password]' );

		if ($this->form_validation->run() == false ) {

			$data = array(
				'errors' => validation_errors(),
				);

			$this->session->set_flashdata( $data );
			redirect( 'home' );
		} else {

			$username = $this->input->post( 'username' );
			$password = $this->input->post( 'password' );

			$user_id = $this->user_model->search_user( $username, $password );

			if( $user_id ){
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true,
					);

				$this->session->set_userdata( $user_data );
				$this->session->set_userdata( 'logged_in', 'You are sucessfully Logged In' );
				$data['main_view'] = "registation";
				$this->load->view( 'layout/main',$data );
			}else{
				$this->session->set_flashdata( 'Failed' );
				$this->session->set_flashdata( 'Login_faild','Please try again right username and password' );
				redirect( 'home' );
			}
			
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect( 'home' );
	}

	public function register(){
		$this->form_validation->set_rules( 'username', 'Username', 'trim|required|min_length[5]' );
		$this->form_validation->set_rules( 'email', 'Email', 'trim|required' );
		$this->form_validation->set_rules( 'password', 'Password', 'trim|required|min_length[5]' );
		$this->form_validation->set_rules( 'con_password', 'Confirm Password', 'trim|required|min_length[5]|matches[password]' );
		$this->form_validation->set_rules( 'transport', 'Checkbox', 'required' );
		$this->form_validation->set_rules( 'chose', 'Radio button', 'required' );

		if ( $this->form_validation->run() == false ) {
			
			$data = array(
				'errors' => validation_errors(),
				);
			$this->session->set_flashdata( $data );
			$data['main_view'] = "registation";
			$this->load->view( 'layout/main',$data );
		}else{
			$this->session->set_flashdata( 'Reg', 'Registation Sucessfull' );
			$data['main_view'] = "registation";
			$this->load->view( 'layout/main',$data );
		}
	}
}


 ?>