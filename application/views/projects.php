<div class="content_container">
   <div id="text_container">
      <h1><?= $name ?></h1>
      <?= $text ?>
   </div>

   <script type="text/javascript">
      $(document).ready(function(){
         var slider = $('#photos_container').bxSlider({
            <? if (count($photos) > 3): ?>auto: true,<? else: ?>auto: false,<? endif; ?>
            controls: false
         });
      
         $('#slider_control_left').click(function(){
            slider.goToPreviousSlide();
            return false;
         });

         $('#slider_control_right').click(function(){
            slider.goToNextSlide();
            return false;
         });

         $("a.modal_elements").fancybox();
      });
   </script>

   <?php if (count($photos) != 0): ?>
      <table border="0" cellpadding="0" cellspacing="0"><tr>
         <? if (count($photos) > 3): ?><td><div id="slider_control_left"></div></td><? endif; ?>
         <td><div id="photos_container">
            <?php $c = 0; foreach($photos as $photo): ?>
               <?php if (($c%3) == 0): ?>
                  <div>
               <?php endif; ?>   
                  <a class="modal_elements" rel="photos" href="<?= base_url('content/projects/'.$page.'/'.$photo) ?>">   
                     <img src="<?= base_url('content/projects/'.$page.'/'.$photo) ?>" />
                  </a>
               <?php if (($c%3) == 2 || count($photos)-1 == $c): ?>
                  </div>
               <?php endif; $c++; ?>
            <?php endforeach; ?>
         </div></td>
         <? if (count($photos) > 3): ?><td><div id="slider_control_right"></div></td><? endif; ?>
      </tr></table>
   <?php endif; ?>
</div>
