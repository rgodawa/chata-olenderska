<?php
header('Cache-Control: public');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
header('Content-type: text/css');
ob_start("compress");

    function compress( $minify )
    {
	    /* remove comments */  	
      $minify = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $minify);
      // Remove space after colons
      $minify = str_replace(': ', ':', $minify);
      /* remove tabs, spaces, newlines, etc. */
    	$minify = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minify);

      return $minify;
    }

    /* css files for combining */
    include('fancybox/jquery.fancybox.min.css');
    include('flexslider.min.2.css');
    include('font-awesome.min.css');
    include('custom-fonts.css');
    include('overwrite.1.css');
    include('animate.css');
    include('skins/default.css');
    include('style.2.css');
ob_end_flush();