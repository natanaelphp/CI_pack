<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Arquivo extends CI_Controller {
    
    public function index()
	{
		$this->load->helper(array('url','html'));
		$this->load->view('exemplo');
	}
        
}

?>
