<?php
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
?>