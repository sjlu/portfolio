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

   public function get_project_thumbnail($proj)
   {
      $cache = 'assets/cache/projects/thumbnails/'.proj.'.png';

      $dir_list = get_file_info($cache);
      if ($dir_list === FALSE)
      {
         $config = array(
            'image_library' => 'imagemagick',
            'source_image' => './content/projects/'.$proj.'/thumb.png',
            'new_image' => './assets/cache/projects/thumbnails/'.proj.'.png',
            'maintain_ratio' => TRUE,
            'height' => 134,
            'width' => 200
         );

         $this->load->library('image_lib', $config);
         $this->image_lib->resize();
      }

      return $cache;
   }

}
?>
