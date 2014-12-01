<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random extends CI_Controller {

	public function index()
	{
		$this->process_random_word();
	}

	public function process_random_word()
	{
 		// incremental counter
 		$counter = $this->session->userdata('count');
 		
		($counter === FALSE) ? $counter = 1 : $counter++;

		$this->session->set_userdata('count',$counter);
		// $this->session->unset_userdata('count');
 		// random word
 		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 		$random_word = NULL;

 		for($i=0;$i<=14;$i++)
 		{
 			$random_word .= $characters[rand(0,strlen($characters)-1)];
 		}

 		$this->session->set_flashdata('random_word',$random_word);
		
		$this->display_random_word();
	}

	public function display_random_word()
	{
		$this->load->view('random_view');
	}

}

/* End of file random.php */
/* Location: ./application/controllers/random.php */