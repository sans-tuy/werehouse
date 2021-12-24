<?php
	class Cetak extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("product_model");
			$this->load->model("user_model");
			if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
		}
		public function index(){
			$data["products"] = $this->product_model->getAll();
			$this->load->view("admin/print.php", $data);
		}
	}
	
?>
