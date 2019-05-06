<?php if(isset($includes_for_layout['css']) AND count($includes_for_layout['css']) > 0): ?>
	<?php foreach($includes_for_layout['css'] as $css): ?>
		<?php if($css['script'] == FALSE): ?>
			<link rel="stylesheet" type="text/css" href="<?php echo $css['file']; ?>"<?php echo ($css['options'] === NULL ? '' : ' media="' . $css['options'] . '"'); ?>>
		<?php endif; ?>
		<?php if($css['script'] == TRUE): ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>
<?php if(isset($includes_for_layout['js']) AND count($includes_for_layout['js']) > 0): ?>
	<?php foreach($includes_for_layout['js'] as $js): ?>
		<?php if($js['script'] == FALSE AND $js['options'] == 'header'): ?>
			<script type="text/javascript" src="<?php echo $js['file']; ?>"></script>
		<?php endif; ?>
		<?php if($js['script'] == TRUE AND $js['options'] == 'header'): ?>
			<script type="text/javascript"><?php echo $js['file']; ?>

			</script>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>							