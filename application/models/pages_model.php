<?php
class Pages_model extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('file');
   }

   public function get_page_title($page)
   {
      if ($page == 'index') return 'Home';

      $title = str_replace(array('_'), " ", $filename);
      $title = ucwords($title);

      return $title;
   }

   public function get_page($page)
   {
      if (get_file_info('./content/pages/'.$page.'.html') === FALSE)
         return false;
      else
         return nl2br(read_file('./content/pages/'.$page.'.html'));
   }
}
?>
