<?php

function get_analytics()
{
	$content = read_file('./content/analytics.html');
	if ($content === FALSE)
		return '';
		
	return $content;
}