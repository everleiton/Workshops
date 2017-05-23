<?php
class User_model extends CI_Model {

  function authenticate($user, $pass) {
    $query = $this->db->get_where('usuario',
      array('username' => $user, 'pass' => $pass));

	  return $query->result_object();
  }

  function save($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }

  function all()
  {
    $query = $this->db->get('users');

    return $query->result_object();
  }

}
