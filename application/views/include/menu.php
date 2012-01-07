<div class="header_img">
   <?php if (get_title()): ?>
      <img src="<?= base_url('content/header.png'); ?>" />
   <?php endif; ?>
</div>

<?php $active = get_active(); ?>
<div class="nav_container horizontal">
   <div class="<?= ($active['controller'] == 'pages' && $active['variable'] == 'index')  ? 'nav_active' : 'page_link' ?>"><a href="<?= base_url() ?>">Home</a></div>
   <?php foreach(get_pages() as $page): ?>
      <div class="<?=  ($active['controller'] == 'pages' && $active['variable'] == $page['filename'])  ? 'nav_active' : 'page_link' ?>">
         <a href="<?= site_url() ?>/pages/view/<?= $page['filename'] ?>"><?= $page['title'] ?></a>
      </div>
   <?php endforeach; ?>
   
   <?php foreach(get_links() as $link): ?>
      <div class="link_link"><a href="<?= $link['url'] ?>" target="_new"><?= $link['title'] ?></a></div>
   <?php endforeach; ?>
</div>
