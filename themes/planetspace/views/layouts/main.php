<!doctype html>
<html lang="en">
<head>
	<title><?php  echo $this->pageTitle ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/print.css" media="print" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

		<header>
			<h1><?php echo Yii::app()->name ?></h1>
		</header>
	<div id="content">
		<article class="articlecontent">
			<?php echo $content ?>
		</article>

		<?php 
		/*

		// Left these here for examples!
		<article class="articlecontent">
					<h2><a href="#">This is the title of your article</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. <a href="#">Cras enim nibh, sodales ultricies elementum vel</a>, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio. Curabitur in odio augue. Morbi congue auctor interdum. Phasellus sit amet metus justo. Phasellus vitae tellus orci, at elementum ipsum. In in quam eget diam adipiscing condimentum. Maecenas gravida diam vitae nisi convallis vulputate quis sit amet nibh. Nullam ut velit tortor. Curabitur ut elit id nisl volutpat consectetur ac ac lorem. Quisque non elit et elit lacinia lobortis nec a velit. Sed ac nisl sed enim consequat porttitor.</p>
					
						<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/space1.jpg" alt="space" class="alignleft" />	<p>Pellentesque ut sapien arcu, egestas mollis massa. Fusce lectus leo, fringilla at aliquet sit amet, volutpat non erat. Aenean molestie nibh vitae turpis venenatis vel accumsan nunc tincidunt. Suspendisse id purus vel felis auctor mattis non ac erat. Pellentesque sodales venenatis condimentum. Aliquam sit amet nibh nisi, ut pulvinar est. Donec hendrerit fringilla ligula, ac rutrum nulla bibendum id. Cras sapien ligula, tincidunt eget euismod nec, ultricies eu augue. Nulla vitae velit sollicitudin magna mattis eleifend. Nam enim justo, vulputate vitae pretium ac, rutrum at turpis. Aenean id magna neque. Sed rhoncus aliquet viverra.</p>

				</article>

				<article class="articlecontent">
					<h2><a href="#">Here's another article title</a></h2>
					<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/cosmos.jpg" alt="cosmos" class="alignright" /><p>Vivamus vitae nulla dolor. Suspendisse eu lacinia justo. Vestibulum a felis ante, non aliquam leo. Aliquam eleifend, est viverra semper luctus, metus purus commodo elit, a elementum nisi lectus vel magna. Praesent faucibus leo sit amet arcu vehicula sed facilisis eros aliquet. Etiam sodales, enim sit amet mollis vestibulum, ipsum sapien accumsan lectus, eget ultricies arcu velit ut diam. Aenean fermentum luctus nulla, eu malesuada urna consequat in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque massa lacus, sodales id facilisis ac, lobortis sed arcu. </p>
				</article>
			*/ ?>
		</div>
		
		<aside>
		
			<section>
				<h3>Menu</h3>
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>

			</section>

			<section>
				<h3>Local</h3>
				<ul>
					<li><a href="#">あいちけん</a></li>
					<li><a href="#">あきたけん</a></li>
					<li><a href="#">あおもりけん</a></li>
					<li><a href="#">ばけん</a></li>
					<li><a href="#">えひめけん</a></li>
					<li><a href="#">ふくいけん</a></li>
					<li><a href="#">ふくおかけん</a></li>
					<li><a href="#">ふくしまけん	</a></li>
					<li><a href="#">ぎふけん</a></li>
					<li><a href="#">ぐんまけん	</a></li>
				</ul>
			</section>
			
			 

		</aside>

	<footer>
		<br />
		<p>&copy; 2015 <a href="#" title="your site name">nicepictureforyou.com</a></p>
	</footer>
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
