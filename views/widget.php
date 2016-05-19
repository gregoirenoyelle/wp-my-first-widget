<?php
// Affichier le résultat des widgets
if ('above' == $instance['position'] ) {
	printf( '<h4 class="widget-title">%s</h4>', $instance['name'] );
	printf( '<p>%s</p>', $instance['bio'] );
} else {
	printf( '<p>%s</p>', $instance['bio'] );
	printf( '<h4 class="widget-title">%s</h4>', $instance['name'] );
}
