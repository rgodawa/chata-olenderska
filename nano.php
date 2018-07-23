<!DOCTYPE html>
<html lang='pl-PL'>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<head>
	<title>Chata Olenderska - galeria</title>
	<meta name='description' content='Gospodarstwo przynależy do Poznańskiego Towarzystwa Agroturystyki'/>
	<?php include 'include/head.html'; ?>
  
  <link href="https://unpkg.com/nanogallery2@1.3.0/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="https://unpkg.com/nanogallery2@1.3.0/dist/jquery.nanogallery2.min.js"></script>
    
  <link href="css/gallery-style.css?v=<?php echo filemtime("css/gallery-style.css")?>" rel="stylesheet" type="text/css">
</head>
  <body>
  <div id='wrapper'>
	<header id='header'><?php include 'include/menu.html'; ?></header>
	<section class="margintop20" id='gallery-content'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
        <div id="nanogallery2" data-nanogallery2='{ 
                    "kind":             "flickr",
                    "userID":           "149317099@N03",
                    "blackList": "slider",
                                        
                    "thumbnailHeight":  195,
                    "thumbnailWidth":   260,
                     
                    "thumbnailStacks":  4,
                    "thumbnailStacksRotateZ":  0.4,
                    "thumbnailBorderVertical": 1,
                    "thumbnailBorderHorizontal": 1,
                    "galleryFilterTags": "title1",
                    "thumbnailLevelUp":  false,
                    "displayBreadcrumb": true,
                    "thumbnailGutterWidth": 8,
                    "thumbnailGutterHeight": 8,
                    "viewerToolbar": {"display": false},
                    "locationHash": false,
                    "touchAnimation": false,
                    "colorScheme": {
                      "thumbnail": {"background": "transparent"},
                      "navigationBreadcrumb": {"background": "#600505"}
                    },
                    "thumbnailBuildInit2":     "title_translateY_10px",
                    "galleryBuildInit2":       "perspective_1000px",
                    "thumbnailHoverEffect2":   "thumbnail_rotateY_0deg_30deg_easeOutQuad_150_hoverin|thumbnail_rotateY_30deg_-30deg_delay160_keyframe_hoverin_easeOutQuad_200|thumbnail_rotateY_-30deg_0deg_delay320_keyframe_hoverin_easeOutQuad_150|title_translateX_0px_20px_easeOutQuad_150_hoverin|title_translateX_20px_-20px_delay160_keyframe_hoverin_easeOutQuad_200|title_translateX_-20px_0px_delay320_keyframe_hoverin_easeOutQuad_150|description_translateX_0px_12px_easeOutQuad_150_hoverin|description_translateX_12px_-12px_delay160_keyframe_hoverin_easeOutQuad_200|description_translateX_-12px_0px_delay320_keyframe_hoverin_easeOutQuad_150"
                  }'>      
        </div>
      </div>
    </div>
  </div>
  </section>
  <footer id='footer'><?php include 'include/footer.html'; ?></footer>
  </div>             
  </body>
</html>
