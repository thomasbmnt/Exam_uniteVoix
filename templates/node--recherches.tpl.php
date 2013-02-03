 <article class="publication">
 	<?php if (!$page) { ?>
	    <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
	  <?php } else { ?>
	  	<h3><?php print $title; ?></h3>
	  <?php } ?>
	  <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
 </article>