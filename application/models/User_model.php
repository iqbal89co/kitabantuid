<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function getUser($email)
	{
		$query = "SELECT * FROM `user` WHERE `email`='$email'";
		return $this->db->query($query)->row_array();
	}
}
