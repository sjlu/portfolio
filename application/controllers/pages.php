<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller 
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('pages_model');
   }

	public function index()
	{
	   $this->view('index');
   }

   public function view($page)
   {
      $data = array();
      $data['content'] = $this->pages_model->get_page($page); 

      if ($data['content'] === FALSE && $page == 'index')
         $data['content'] = '';
      else if ($data['content'] === FALSE)
         show_404();

      $this->load->view("include/header");
      $this->load->view("include/menu");
      $this->load->view("pages", $data);
      $this->load->view("include/projects_menu");
      $this->load->view("include/footer");
   }
}
