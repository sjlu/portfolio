<?php

function get_active()
{
   $uri = uri_string(); // this is a code igniter function  
   $params = array();

   if (!empty($uri))
      list($params['controller'], $params['action'], $params['variable']) = preg_split("/\//", $uri, 3);

   if (empty($params['controller'])) $params['controller'] = 'pages';
   if (empty($params['action'])) $params['action'] = 'view';
   if (empty($params['variable'])) $params['variable'] = 'index';

   return $params;
}

function get_pages()
{
   $return = array();
   $dir_listing = get_filenames('./content/pages/'); // this is a code igniter function
   sort($dir_listing);
   foreach ($dir_listing as $filename)
   {
      if ($filename == 'index.html') continue;
      $filename = str_replace(array(".html", ".htm",".txt"), "", $filename); // get rid of extensions
      $title = str_replace(array('_'), " ", $filename); // replace underscores with spaces
      $title = ucwords($title); // uppercase these words
 
      $return[] = array('title' => $title, 'filename' => $filename);
   }

   return $return;
}

function get_links()
{
   $return = array();
   $link_json = read_file('./content/links.json');
   foreach (json_decode($link_json, TRUE) as $title => $url) // true param makes sure its an assoc. array
      $return[] = array('title' => $title, 'url' => $url);

   return $return;
}

function get_title()
{
   if (read_file('./content/header.png') === FALSE)
      return false;
   else
      return true;
}
?>
