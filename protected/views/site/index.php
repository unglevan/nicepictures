<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<div class="buttons">

<form>
	<input type="text"  value"" placeholder="Searching..."  >
<form>
		<?php echo CHtml::submitButton('Enter'); ?>
</div>
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

