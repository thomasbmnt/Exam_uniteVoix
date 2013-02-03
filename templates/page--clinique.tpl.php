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
        		<?php print render($page['menu']); ?>
        	</nav>
        </header>
        <section id="content">
        	<section id="main">
				<?php print render($page['clinique']); ?>
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
