Purpose
=======

Well, I constantly rewrote my portfolio website all the time and I got tired of doing so. Instead, I decided to go to other websites that actually have a CMS to control it all, services like Cargo Collective and and Carbon Made. But then, they either had all these limitations and you have to pay to get these limitations removed.

So instead I decided to create my own, as a open source project. The gerat thing about it is that it has no administrator interface, you interact directly with it using a file and folder system and the system automatically generates pages based on the content you place in.

Documentation
=============

Requirements
------------
Any proper web server that runs PHP 5 or greater.

Installation
------------
Simply install this into a web directory onto your web server. No other installation procedure is required.

Content
-------

### Adding links
`/content/links.json`

This file should be in proper JSON format, where it should have `"title":"link"` keypair.

Example:

	{
		"title 1":"http://url1",
		"title 2":"https://url2"
	}
	
### Adding pages
`/content/pages/`

This is a directory that contains HTML files that will automatically be included in the header. When a link is clicked, it will be included into the page and will accept all HTML syntax.

For example if you have `/content/pages/about.html` will have a link on your site as **About**. `/content/pages/index.html` is a required page or will not render.

### Modifying the styles

All you need to do is modify `style.css` to change any of the colors or anything else. Modify `/application/view/` files to change anything else you want, the code is well commented.