<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller 
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('projects_model');
   }

   public function view($page)
   {
      $data = array();
      $data['name'] = $this->projects_model->get_project_name($page); 
      $header['title'] = $data['name'];     
 
      if ($data['name'] === FALSE)
         show_404();

      $data['text'] = $this->projects_model->get_project_text($page);
      $data['photos'] = $this->projects_model->get_project_photos($page);

      $this->load->view("include/header", $header);
      $this->load->view("include/menu");
      $this->load->view("projects", $data);
      $this->load->view("include/projects_menu");
      $this->load->view("include/footer");
   }
}
