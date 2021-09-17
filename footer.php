<?php
$left_column = get_field('left_column', 113);
$middle_column = get_field('middle_column', 113);
$right_column = get_field('right_column', 113);

?>
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						
						<h4><?= $left_column['title']; ?></h4>
						<?= $left_column['text']; ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<h4><?= $middle_column['title']; ?></h4>
						<?= $middle_column['info']; ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<h4><?= $right_column['title']; ?></h4>
						<?= $right_column['links']; ?>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
            
		</footer>

	</div>

	<script src="js/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>