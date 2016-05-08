<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	public function index()
	{
        $data['navigasi']='home';
        $this->load->view('home', $data);
    }

    public function cari()
    {
        $data['navigasi']='cari';
        $this->load->view('cari', $data);
    }

    public function pembicara($name=NULL)
    {
        $data['navigasi']='pembicara';
        $this->load->view('pembicara', $data);
    }

    public function acara($name=NULL)
    {
        $data['navigasi']='acara';
        $this->load->view('acara', $data);
    }

    public function usulpembicara()
    {
        $data['navigasi']='usulpembicara';
        $this->load->view('usulpembicara', $data);
    }

    public function usulacara()
    {
        $data['navigasi']='usulacara';
        $this->load->view('usulacara', $data);
    }

    public function kontak()
    {
        $data['navigasi']='kontak';
        $this->load->view('kontak', $data);
    }

    public function faq()
    {
        $data['navigasi']='faq';
        $this->load->view('faq', $data);
    }

    public function blog()
    {
        $data['navigasi']='blog';
        $this->load->view('blog', $data);
    }

    public function tentang()
    {
        $data['navigasi']='tentang';
        $this->load->view('tentang', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */