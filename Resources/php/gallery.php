<?php
    $type = $_GET['tp'];
    $gallery = $_GET['gl'];
?>
            <div class="container">
                <div class="main">
                    <header class="clearfix">
                    </header>
                    <div class="gamma-container gamma-loading" id="gamma-container">
                        <ul class="gamma-gallery">
         <?php
         
            if (empty($gallery))
            {
                $gallery = "SOL";
            }
         
            if (empty($type))
            {
                $pth = "./Resources/Gallery/".$gallery."/";
            }
            else
            {
                $pth = "./../Gallery/".$gallery."/";
            }
            
            //echo $pth;
            
            if (is_dir($pth))
            {
                //echo $pth;
            }
            else
            {
                //echo "Error!";
                $pth = str_replace($gallery,"SOL",$pth);
            }
            
            $pth .= "*.*";
            
            $files = glob($pth);
            //print_r ($files);
            
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