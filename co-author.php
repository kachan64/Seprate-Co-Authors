<?php
//** Custom code to separate multiple co-authors based on http://www.orochilabs.com/2015/03/display-a-comma-separated-list-of-categories-for-a-post-in-wordpress/
global $post;
$author_list = '';
$author_id=$post->post_author;
foreach( get_coauthors(',') as $coauthor ) {
	$author_link = home_url( '/members/' . $coauthor->user_nicename  . '/posts/' );
	if(!empty($author_list)) {
		$author_list .= ', ';
	}
	$author_list .= '<a href="'.author_link.'">'.$coauthor->display_name.'</a>';
}
echo $author_list;
?>
