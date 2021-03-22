<?php

class User extends CI_Controller {
	
	public function get_settings() {
		echo json_encode($this->db->query("SELECT * FROM `settings` LIMIT 1")->row_array());
	}
}
