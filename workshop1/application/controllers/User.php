<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  /**
	 * This method will save a new user
	 */
	public function save() {
		// objener valores
    $username = $this->input->post('username');
		$first_name = $this->input->post('firstname');
		$last_name = $this->input->post('lastname');
		$pass = $this->input->post('password');

    $user = array(
			'username' => $username,
        'pass' => $pass,
        'first_name' => $first_name,
        'last_name' => $last_name
      );


    $r = $this->User_model->save($user);

		if(sizeof($r) > 0) {
			$this->session->set_userdata('user', $r[0]);

      echo "<div>My name is: <b>$first_name  $last_name</b></div>";
		} else {
      sleep(2);
      echo json_encode("There was an error");
		}
	}


  /**
	 * This method will list all existing users
	 */
	public function index() {

    $r = $this->User_model->all();

    $data['users'] = $r;
    $data['title'] = 'List of Users';

		$this->load->view('users/index', $data);
	}


}
