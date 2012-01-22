Purpose
=======

Well, I constantly rewrote my portfolio website all the time and I got tired of doing so. Instead, I decided to go to other websites that actually have a CMS to control it all, services like Cargo Collective and and Carbon Made. But then, they either had all these limitations and you have to pay to get these limitations removed.

So instead I decided to create my own, as a open source project. The gerat thing about it is that it has no administrator interface, you interact directly with it using a file and folder system and the system automatically generates pages based on the content you place in.

Documentation
=============

Requirements
------------
Any proper web server that can run PHP5 and CodeIgniter can run this portfolio website.

Installation
------------
Simply install this into a web directory onto your web server. No other installation procedure is required.

Content
-------

### Modifying the header
`/content/header.json`

You can edit the meta tags by editing what exists in the file. The three keys are `meta_desc, meta_keywords, and title` in the format like below

Example:

    {
        "meta_desc":"This is a website about a guy",
        "meta_keywords":"portfolio someone keyword3",
        "title":"Your Name"
    }

`/content/header.png`

If you want a title above the menu bar, just make sure this file is filled in. Something within 250px by 50px (width x height).

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

### Adding projects
`/content/projects/`

This directory will need to contain other directories named by your project name, like `/content/projects/Some_Project`

- This directory must contain `index.html` which will be parsed into the page itself.
- You can have a thumbnail to load `thumb.png` which should be 200x134 pixels.
- Photos will also load into the page, as long as they have `.png` at the end.

A sample directory would be:

    [Some_Project] => (loads name as "Some Project")
        [thumb.png] (loads into the menu)
        [index.html] (loads into the page when someone selects that project)
        [photo1.png]
        [photo2.png]
        [photo3.png]

### Modifying the styles
`/application/views/`
`/resources/css/style.css`

This part is for more advanced users who know their way with PHP, HTML, and CSS. When viewing the files, there are specific view files that will display different content. You can change the layout by modifying the div tags and their respective CSS classes or ids. 
