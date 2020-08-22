<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 	public function __construct()
		{
			/*call CodeIgniter's default Constructor*/
			parent::__construct();

			/*load database libray manually*/
			$this->load->database();

			/*load Model*/
			$this->load->model('Common_model');
		}
	public function index()
	{
		$result['data']=$this->Common_model->fetch_business_category_records();
		$this->load->view('welcome_message',$result);
	}
}
