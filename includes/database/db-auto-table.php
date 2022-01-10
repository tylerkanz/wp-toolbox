<?php
//Maybe create table upon activation
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
global $wpdb;
$sql = "CREATE TABLE  " . $wpdb->prefix . "auto_table (
			meta_id bigint(20) NOT NULL auto_increment,
			meta_key varchar(255) default NULL,
			user varchar(255) default NULL,
			repo varchar(255) default NULL,
			meta_value longtext,
			PRIMARY KEY  (`meta_id`)
		  )";

maybe_create_table($wpdb->prefix . 'auto_table', $sql);
