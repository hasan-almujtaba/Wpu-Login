<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_model {

	public function dataLogin($email) {
		return $this->db->get_where('user', ['email' => $email ])->row_array();
	}

	public function getUserMenu() {
		return $this->db->get('user_menu')->result_array();
	}

	public function addMenu() {
		$data = $this->input->post('menu');
		$this->db->insert('user_menu', ['menu' => $data ] );
	}

	public function getSubMenu() {

		$query = "SELECT `user_sub_menu` .*, `user_menu` . `menu` FROM `user_sub_menu` JOIN `user_menu` 
					ON `user_sub_menu` . `menu_id` = `user_menu` . `id`  ";
		return $this->db->query($query)->result_array();
	}

	public function addSubMenu() {
		$data = [
			'title' => $this->input->post('title'),
			'menu_id' => $this->input->post('menu_id'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon'),
			'is_active' => $this->input->post('is_active')
		];

		$this->db->insert('user_sub_menu', $data);
	}
}
 ?>