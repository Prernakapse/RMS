<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function Index()
	{
		$this->load->view('index');
	}

    public function About()
	{
		$this->load->view('about');
	}


    public function Menu()
	{
		$this->load->view('menu');
	}

     public function Contact()
	{
		$this->load->view('contact');
	}

      public function Reservation()
	{
		$this->load->view('reservation');
	}
}
