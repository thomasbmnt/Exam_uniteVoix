


 <article class="intervenant">
 	<h3><?php echo $title; ?></h3>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
 </article>