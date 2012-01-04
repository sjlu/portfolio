<?php
class Pages_model extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('file');
   }

   public function get_page($page)
   {
      if (get_file_info('./pages/'.$page.'.html') === FALSE)
         return false;
      else
         return nl2br(read_file('./pages/'.$page.'.html'));
   }
}
?>
