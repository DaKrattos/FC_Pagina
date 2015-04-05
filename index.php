<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cari&ntilde;o Floristeria</title>

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
                    <div class="cus-MGroup">
                    	<div style="height: 70px; width: 100%;">
                        </div>
                        <div>
                            <a>
                                <div class="cus-Item">
                                    <img gl-id="SOL" class="cus-MItem" src="Resources/img/Flor_labels_solitarios.png" onclick="ChoseGal(this);" />
                                </div>
                            </a>
                            <a>
                                <div class="cus-Item">
                                    <img gl-id="CAN" class="cus-MItem" src="Resources/img/Flor_labels_canastas.png" onclick="ChoseGal(this);" />
                                </div>
                            </a>
                            <a>
                                <div class="cus-Item">
                                    <img gl-id="CTM" class="cus-MItem" src="Resources/img/Flor_labels_centromesa.png" onclick="ChoseGal(this);" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cus-LogoWrapper">
                        <img class="cus-Logo" src="Resources/img/Header_form_v2.png" />
                    </div>
                    <div class="cus-MGroup">
                    	<div style="height: 70px; width: 100%;">
                        </div>
                        <div>
                            <a>
                                <div class="cus-Item">
                                    <img gl-id="ESP" class="cus-MItem" src="Resources/img/Flor_labels_especiales.png" onclick="ChoseGal(this);" />
                                </div>
                            </a>
                            <a>
                                <div class="cus-Item">
                                    <img gl-id="EXO" class="cus-MItem" src="Resources/img/Flor_labels_exoticos.png" onclick="ChoseGal(this);" />
                                </div>
                            </a>
                            <a>
                                <div class="cus-Item">
                                    <img gl-id="FRU" class="cus-MItem" src="Resources/img/Flor_labels_fruteros.png" onclick="ChoseGal(this);" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cus-Body">
            
            <?php
            
                include("./Resources/php/gallery.php");
            ?>
            
        </div>
        <div class="cus-Footer">
        	<div class="cus-Separator"></div>
            <div class="cus-Table-Wrapper cus-FooTable-Wrapper">
                <div class="cus-Table cus-FooTable">
                    <div class="cus-Table-Row">
                        <div class="cus-Table-Cell cus-Table-Rowspanned cus-Footer-Logo cus-FooTable-Cell">
                            <img src="Resources/img/Flor_logo_footer_v2.png" />
                        </div>
                        <div class="cus-Table-Cell cus-FooTable-Cell">
                            <span><img src="Resources/img/Flor_Icon_address.png" />&nbsp;<strong>Direccion:</strong> Calle 61 # 37-72, Barranquilla, Atl, CO</span>
                        </div>
                    </div>
                    <div class="cus-Table-Row">
                        <div class="cus-Table-Cell cus-Table-Empty cus-Footer-Logo cus-FooTable-Cell"></div>
                        <div class="cus-Table-Cell cus-FooTable-Cell">
                            <span><img src="Resources/img/Flor_Icon_phone.png" />&nbsp;<strong>Telefonos:</strong> (+57 5) 3404788 - 3515872</span>
                        </div>
                    </div>
                    <div class="cus-Table-Row">
                        <div class="cus-Table-Cell cus-Table-Empty cus-Footer-Logo cus-FooTable-Cell"></div>
                        <div class="cus-Table-Cell cus-FooTable-Cell">
                            <span><img src="Resources/img/Flor_Icon_message.png" />&nbsp;<strong>Email:</strong> info@floristeriacarino.com</span>
                        </div>
                    </div>
                </div>
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
		
        function ChoseGal(mt) {
            var gl = mt.getAttribute('gl-id');
            
            if(gl!="" && gl!=null)
            {
                //alert('Hola!'+gl);
                window.location.search = "?gl="+gl;
            }
        }
		
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