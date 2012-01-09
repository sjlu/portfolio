<?php
class Projects_model extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('file');
      $this->load->helper('directory');
   }

   public function get_project_name($proj)
   {
      if (read_file('./content/projects/'.$proj.'/index.html') === FALSE)
         return false;

      $proj = str_replace(array('_'), " ", $proj);
      $proj = ucwords($proj);

      return $proj;
   }

   public function get_project_text($proj)
   {
      $file = read_file('./content/projects/'.$proj.'/index.html');
      if ($file === FALSE)
         return '';
     
      $file = nl2br($file);
 
      return $file;
   }

   public function get_project_photos($proj)
   {
      $dir_list = directory_map('./content/projects/'.$proj, 1);

      foreach ($dir_list as $key => $photo)
      {
         if (preg_match('(.html|thumb)',$photo))
            unset($dir_list[$key]);
      }

      sort($dir_list);
      return $dir_list;
   }
}
?>
