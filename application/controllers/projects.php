<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller 
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('projects_model');
   }

	public function index()
	{
	   $this->view('index');
   }

   public function view($page)
   {
      // view should go here
   }
}
