<?php
function get_meta()
{
   $return = array();
   $json_string = read_file('./content/header.json');
   $return = json_decode($json_string, TRUE);

   if (empty($return['meta_desc'])) $return['meta_desc'] = '';
   if (empty($return['meta_keywords'])) $return['meta_keywords'] = '';
   if (empty($return['title'])) $return['title'] = 'Portfolio';

   return $return;
}
?>
