        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="language">
        		<a href="<?php echo base_path(); ?>en/"><img src="<?php echo base_path() . path_to_theme(); ?>/img/english.gif" alt="Choisir l'anglais comme langue" /></a> - 
        		<a href="<?php echo base_path(); ?>fr/"><img src="<?php echo base_path() . path_to_theme(); ?>/img/french.gif" alt="Choisir le français comme langue" /></a>
        	</div>
        <header>
        	<h1 id="nom">Unité Logopédie de la voix</h1>
        	<a href="index.php"><img src="<?php echo $logo; ?>" alt="" /></a>
        	<form>
        		<input type="search" />
        		<input type="submit" />
        	</form>
        	
        	<nav>
        		<h1>Menu de navigation</h1>
        		<?php print render($page['menu']); ?>
        	</nav>
        </header>
        <section id="content">
        	<h1>Contenu du site</h1>
        	<section id="main">
        		<h1>Page principale</h1>
				<?php if( $is_front ) { ?>
				<section id="description">
		        	<?php print render($page['description']); ?>
		        </section>
		        
		        <section id="objectifs">
		        	<h3>3 Objectifs</h3>
		        	<?php print render($page['objectifs']); ?>
		        </section>
				<?php } else { ?>
					<?php print render($page['content']); ?>
				<?php } ?>
		    </section>
		    
	        
	        <section id="aside">
		       	<h2>Évènement</h2>
		       	<ul>
		       		<li><a href="">L'amnésie de la voix un vrai fardeau <span>22/09/2012</span></a></li>
		       		<li><a href="">Logopédie ou logopédie <span>22/09/2012</span></a></li>
		       		<li><a href="">Logopédie ou logopédie <span>22/09/2012</span></a></li>
		       		<li><a href="">Logopédie ou logopédie <span>22/09/2012</span></a></li>
		       		<li><a href="">Logopédie ou logopédie <span>22/09/2012</span></a></li>
		       	</ul>
		        
	        </section>    
	        <div class="clear"></div>
        </section>
        
        <footer>
	         <div>
	        	<?php print render($page['address']); ?>
	        </div>
	        
	    
	        
        	<div class="last">
	        	<img src="<?php echo base_path() . path_to_theme(); ?>/img/logoulg.png" alt="logotype de l'ulg" />
        	</div>
        	
        </footer>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
-->
