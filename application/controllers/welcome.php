<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('home');
	}

    public function cari()
    {
        $this->load->view('home');
    }

    public function pembicara($name=NULL)
    {
        $this->load->view('home');
    }

    public function acara($name=NULL)
    {
        $this->load->view('home');
    }

    public function usulpembicara()
    {
        $this->load->view('home');
    }

    public function usulacara()
    {
        $this->load->view('home');
    }

    public function kontak()
    {
        $this->load->view('home');
    }

    public function faq()
    {
        $this->load->view('home');
    }

    public function blog()
    {
        $this->load->view('home');
    }

    public function tentang()
    {
        $this->load->view('home');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */