<?php
function get_projects()
{
   $return = array();
   $dir_list = directory_map('./content/projects/', 1);
   
   foreach ($dir_list as $project)
   {
      $temp = array();

      if (read_file('./content/projects/'.$project.'/index.html') === FALSE) continue;
         
      if (read_file('./content/projects/'.$project.'/thumb.png') === FALSE)
         $temp['thumbnail'] = '/content/default_thumb.png';
      else
         $temp['thumbnail'] = '/content/projects/'.$project.'/thumb.png';
         
      $temp['filename'] = $project;

      $project = str_replace(array('_'), " ", $project);
      $project = ucwords($project);

      $temp['title'] = $project;
         
      $return[] = $temp;
   }
   return $return;
}
?>
