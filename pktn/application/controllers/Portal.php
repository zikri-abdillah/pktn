<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

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
	public function index()
	{
		//$this->load->view('portal/index');
		$this->menu($p='home');
	}

	public function menu($p="")
	{
		if($p=='home')
		{
			$data['tampil'] = 'portal/home/home';
		}
		elseif($p=='faq')
		{
			$data['tampil'] = 'portal/faq/faq';
		}
		elseif($p=='peraturan')
		{
			$data['tampil'] = 'portal/peraturan/peraturan';
		}
		else
		{
			$data['tampil'] = '';
		}

		$this->load->view('portal/index',$data);
	}

	public function pemerdaya($p="")
	{
		if($p=='2')
		{
			$data['tampil'] = 'portal/home/dit_pemerdayaan';

			$data['part'] = $p;
		}
		if($p=='3')
		{
			$data['tampil'] = 'portal/home/dit_pemerdayaan';
			$data['part'] = $p;
		}
		


		$this->load->view('portal/index',$data);
	}
	
}
