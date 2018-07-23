<?php
header('content-type: application/x-javascript');
ob_start("compress");

    function compress( $minify )
    {
	    /* remove comments */  	
      $minify = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $minify);
      // Remove space after colons
      $minify = str_replace(': ', ':', $minify);
      /* remove tabs, spaces, newlines, etc. */
    	//$minify = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minify);

      return $minify;
    }

    /* css files for combining */
    include('jquery.flexslider.min.js');
    include('jquery.fancybox.pack.js');
    include('jquery.fancybox-media.js');
    include('animate.min.js');
    include('custom.3.js');
    include('rgod_whcookies.js');
ob_end_flush();