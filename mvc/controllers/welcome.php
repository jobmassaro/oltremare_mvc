<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Frontend_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->helper(array('form','url'));
            $this->load->library(array('session', 'form_validation', 'email'));
            $this->load->database();
            $this->load->model('user_model');
        }
	
	public function index()
	{
            var_dump($this->data);
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */