<div class="palettes">
	<?php if( isset($title) ){?> <h3> <?php echo esc_html( $title );?> </h3> <?php }?>
	<div class="teduca-palette-<?php echo esc_html( count($palette) ); ?>" <?php echo esc_attr( $height ); ?> >
	<?php foreach( $palette as $number => $color) { ?>
		<div class="color-<?php echo esc_html( $number ); ?>" style="background-color: #<?php echo esc_attr( $color ); ?>;" <?php echo esc_js( $onClick ); ?>>
			<span>#<?php echo esc_html( $color ); ?></span>
		</div>
	<?php } ?>
	</div>
</div>