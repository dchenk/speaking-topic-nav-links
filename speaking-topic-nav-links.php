<?php
/*
Plugin Name: Speaking Topic Nav Links
Plugin URI: https://widerwebs.com
Description: Adds "previous" and "next" links for "speaking_topic" posts with shortcode [topic_nav_links]
Version: 1.0
Author: Wider Webs
Author URI: https://widerwebs.com
License: Private
*/

// Create a shortcode for displaying the previous/next links on testimonial posts.
function speaking_topic_post_nav_links() {
	return '<div class="topic-nav"><span class="nav-next">' .
		get_next_post_link('%link', 'Next Topic <span style="font-family: ETmodules;">&#x3d;</span>', true, [], 'speaking_topic_category') .
		'</span><span class="nav-previous">' .
		get_previous_post_link('%link', '<span style="font-family: ETmodules;">&#x3c;</span> Previous Topic', true, [], 'speaking_topic_category') .
		'</span></div>';
}
add_shortcode('topic_nav_links', 'speaking_topic_post_nav_links');
