<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Galeria - Solitarios</title>

	<link rel="stylesheet" type="text/css" href="Resources/GammaGallery/css/style.css"/>
    <script src="Resources/GammaGallery/js/modernizr.custom.70736.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="Resources/GammaGallery/css/noJS.css"/></noscript>
    
    <!-- CSS Portal -->
    <link href="Resources/Style.css" rel="stylesheet" type="text/css" />
</head>

<body class="cus-TagBody">

	<div class="cus-Main">
    	<div class="cus-Header">
            <div class="cus-Header-A">
                <div class="cus-LogoPattern"></div>
                <div class="cus-Menu"></div>
            </div>
            <div class="cus-Header-B">
            	<div>
                    <div class="cus-MGroup" style="border: solid red 1px; height: 20px; width: 20px;">
                    	<div style="height: 70px; width: 100%;">
                        </div>
                        <div>
                            <a>
                                <div class="cus-Item">
                                    <img class="cus-MItem" src="Resources/img/Flor_labels_solitarios.png" />
                                </div>
                            </a>
                            <a>
                                <div class="cus-Item">
                                    <img class="cus-MItem" src="Resources/img/Flor_labels_canastas.png" />
                                </div>
                            </a>
                            <a>
                                <div class="cus-Item">
                                    <img class="cus-MItem" src="Resources/img/Flor_labels_centromesa.png" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cus-LogoWrapper">
                        <img class="cus-Logo" src="Resources/img/Header_form_v2.png" />
                    </div>
                    <div class="cus-MGroup" style="border: solid red 1px; height: 20px; width: 20px;">
                    	<div style="height: 70px; width: 100%;">
                        </div>
                        <div>
                            <a>
                                <div class="cus-Item">
                                    <img class="cus-MItem" src="Resources/img/Flor_labels_especiales.png" />
                                </div>
                            </a>
                            <a>
                                <div class="cus-Item">
                                    <img class="cus-MItem" src="Resources/img/Flor_labels_exoticos.png" />
                                </div>
                            </a>
                            <a>
                                <div class="cus-Item">
                                    <img class="cus-MItem" src="Resources/img/Flor_labels_fruteros.png" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cus-Body">
            <!--
            <div class="container">
                <div class="main">
                    <header class="clearfix">
                    </header>
                    <div class="gamma-container gamma-loading" id="gamma-container">
                        <ul class="gamma-gallery">
         <?php
            
            $files = glob("Resources/Gallery/Solitarios/*.*");
            for ($i=0; $i<count($files); $i++)
            {
                $img 	= $files[$i];
                $name 	= basename($img,'.jpg');
            
        ?>
                        <li>
                            <div data-description="<h3><?php echo $name ?></h3>">
        <?php
                
                echo "<div data-src=\"$img\"  data-min-width=\"200\"></div>";
                
        ?>
                            </div>
                        </li>
        <?php
            
            }
            
         ?>
                        </ul>
                        <div class="gamma-overlay"></div>
                    </div>
                </div>
            </div>
            -->
            <?php
            
                include("./Resources/php/gallery.php");
            ?>
            
        </div>
        <div class="cus-Footer">
        	<div class="cus-Separator"></div>
            <div>
            	<img src="Resources/img/Flor_logo_footer_v2.png" /><span>&nbsp;&nbsp;&nbsp;<img src="Resources/img/Flor_Icon_phone.png" />&nbsp;<strong>Telefonos:</strong> (+57 5) 3404788 - 3515872&nbsp;&nbsp;&nbsp;<img src="Resources/img/Flor_Icon_message.png" />&nbsp;&nbsp;&nbsp;<strong>Email:</strong> info@floristeriacarino.com</span>
            </div>
            <div class="cus-Separator"></div>
        </div>
    </div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
	<script src="Resources/GammaGallery/js/jquery.masonry.min.js"></script>
    <script src="Resources/GammaGallery/js/jquery.history.js"></script>
    <script src="Resources/GammaGallery/js/js-url.min.js"></script>
    <script src="Resources/GammaGallery/js/jquerypp.custom.js"></script>
    <script src="Resources/GammaGallery/js/gamma.js"></script>
    <script type="text/javascript">
			
			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings);
			});
	</script>
    
</body>
</html>