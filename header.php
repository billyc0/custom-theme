<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title><?php echo get_bloginfo( 'name' ); ?>—<?php echo get_bloginfo( 'description' ); ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/default-styles.css" />
<link rel="stylesheet" type="text/css" herf="style.css" />
<?php wp_head() ?>
</head>

<body>
	<div id="wrapper">
        <div id="container-fluid">
            <div id="header">
                <div class="row">
                  <div id="title" class="col-md-12">
			<a href="<?php echo get_bloginfo( 'wpurl' );?>">
                  	<h3><?php echo get_bloginfo( 'name' ); ?></a><br /><small><?php echo get_bloginfo( 'description' ); ?></small></h3>
                  </div>
                 </div>
                 <div class="row">
                      <div id="menu" class="col-md-12">
                        <span><!--
                            <ul>
                                <li><h4>About</h4></li>
                                <li><h4>Fun Stuff</h4></li>
                                <li><h4>Archive</h4></li>
                                <li><h4>Links</h4></li>
                            </ul>-->
                            <ul>
                            <h4><?php wp_list_pages( '&title_li=' ); ?></h4>
                            </ul>
                        </span>
                      </div>
                  </div>
            </div>