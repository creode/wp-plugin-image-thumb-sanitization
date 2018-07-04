<?php
/*
Plugin name: Creode image thumb sanitization
Description: Removes sections of thumb path within attachment metadata when updated, if path attempts to access another directory.
Author: Creode
Version: 0.1
*/


add_filter('wp_update_attachment_metadata', 'creode_sanitize_thumb');

function creode_sanitize_thumb($data) {
	if(isset($data['thumb'])) {
		$data['thumb'] = basename($data['thumb']);
	}

	return $data;
}
