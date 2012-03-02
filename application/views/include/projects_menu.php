<div class="content_container">
   <div id="container_bottom"></div>
</div>

<?php $active = get_active(); ?>

<div class="content_container">
   <?php foreach (get_projects() as $project): ?>
      <div class="project_thumb">
         <?php if ($active['controller'] == 'projects' && $active['variable'] == $project['filename']): ?>
            <a href="<?= site_url('/projects/view/'.$project['filename']) ?>" class="hover" title="<?= $project['title'] ?>">
         <?php else: ?>
            <a href="<?= site_url('/projects/view/'.$project['filename']) ?>" onmouseover="this.className='hover';" onmouseout="this.className='nohover';" class="nohover" onfocus="this.blur()" title="<?= $project['title'] ?>">
         <?php endif; ?>
               <div class="cardimgcrop" name="<?= $project['title'] ?>">
                  <img src="<?= base_url($project['thumbnail']) ?>" border="0">
               </div>
               <div class="thumb_title">
                  <span class="text"><?= $project['title'] ?></span>
                  &nbsp;
               </div>
            </a>
      </div>
   <?php endforeach; ?>
</div>
