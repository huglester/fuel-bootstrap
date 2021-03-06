<div <?php echo $attributes ?>>
	<a href="javascript:void(0);" class="close" data-dismiss="alert">&times;</a>
	
	<?php if (count($alert) == 1) : ?>
		<?php if ($type == 'success') : ?>
			<strong class="alert-heading">Success!</strong>
		<?php elseif ($type == 'error') : ?>
			<strong class="alert-heading">Problem!</strong>
		<?php endif; ?>
		
		<p>
			<?php echo implode('</p><p>', $alert) ?>
		</p>
	<?php else : ?>
		<?php if ($type == 'error') : ?>
			<p>
				<strong>The following errors occured:</strong>
			</p>
		<?php endif; ?>
		
		<ul>
			<li>
				<?php echo implode('</li><li>', $alert) ?>
			</li>
		</ul>
	<?php endif; ?>
</div>