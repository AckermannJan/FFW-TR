<?php
$pageid = $_GET["page_id"]; get_page( pageid );
echo $pageid;



?>
<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo "Feuerwehr Mühltal Traisa | ".get_the_title( $pageid )?></title>
        <?php echo '<meta name="description" content="Feuerwehr Traisa | '.get_the_title( $pageid ).' | '.types_render_field("metadesc", array("output"=>"raw")).'">'; ?>
        <?php echo '<meta name="keywords" content="Feuerwehr, Traisa, '.get_the_title( $pageid ).', '.types_render_field("keywords", array("output"=>"raw")).'"/>'; ?>   
		<meta http-equiv="content-language" content="<?php language_attributes( $doctype );?>">
		<link type="text/css" href="/wp-content/themes/FFW/style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="/wp-content/themes/FFW/js/menu.js" type="text/javascript"></script>
        <script src="/wp-content/themes/FFW/js/TopBarNav.js" type="text/javascript"></script>
        <script src="/wp-content/themes/FFW/js/details.js" type="text/javascript"></script>
        <script src="/wp-content/themes/FFW/js/simpleWeather.min.js" type="text/javascript"></script>
        <script src="/wp-content/themes/FFW/plugins/Slides-SlidesJS-3/source/jquery.slides.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    </head>
    <body>    
        <header>            
            <div class="stage">
                <img alt="Feuerwehr-Traisa Gerätehaus"src="http://img.webme.com/pic/f/feuer-aua/header-zeichnung-linksbun.jpg" /></a>
            </div>
            <div class="mainNav fullscreen">
                <div class="mainNav-header">
                    <ul class="mainNav-header--item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li></li></a>
                        <li><a id="tab1" href="<?php echo esc_url( home_url( '/?p=58' ) ); ?>">Einsatzabteilung</a></li>
                        <li><a id="tab2" href="<?php echo esc_url( home_url( '/?p=59' ) ); ?>">Verein</a></li>
                        <li><a id="tab3" href="<?php echo esc_url( home_url( '/?p=60' ) ); ?>">Kindergruppen</a></li>
                        <li><a id="tab4" href="<?php echo esc_url( home_url( '/?p=21' ) ); ?>">Technik</a></li>
                    </ul>
                </div>                
                <div class="mainNav-tab" id="mainNav-tab1">
                    <div class="mainNav-tab--content" >
                        <ul class="linkList linkList-arrowRight linkList-arrowRight--mainNav">
                            <?php wp_list_pages("title_li=&child_of=58");  ?>
                        </ul>
                    </div>
                    <div class="mainNav-tab--divider">
                        <div class="btn"><a><img src="/wp-content/themes/FFW/imgs/img-arrow-menu.png" style="height: 20px;"></a></div>
                    </div>
                </div>
                <div class="mainNav-tab" id="mainNav-tab2">
                    <div class="mainNav-tab--content" >
                        <ul class="linkList linkList-arrowRight linkList-arrowRight--mainNav">
                            <?php wp_list_pages("title_li=&child_of=59");  ?>
                        </ul>
                    </div>
                    <div class="mainNav-tab--divider">
                        <div class="btn"><a><img src="/wp-content/themes/FFW/imgs/img-arrow-menu.png" style="height: 20px;"></a></div>
                    </div>
                </div>
                <div class="mainNav-tab" id="mainNav-tab3">
                    <div class="mainNav-tab--content" >
                        <ul class="linkList linkList-arrowRight linkList-arrowRight--mainNav">
                            <?php wp_list_pages("title_li=&child_of=60");  ?>
                        </ul>
                    </div>
                    <div class="mainNav-tab--divider">
                        <div class="btn"><a><img src="/wp-content/themes/FFW/imgs/img-arrow-menu.png" style="height: 20px;"></a></div>
                    </div>
                </div>
                <div class="mainNav-tab" id="mainNav-tab4">
                    <div class="mainNav-tab--content">
                        <ul class="linkList linkList-arrowRight linkList-arrowRight--mainNav">
                            <?php wp_list_pages("title_li=&child_of=21");  ?>
                        </ul>
                    </div>
                    <div class="mainNav-tab--divider">
                        <div class="btn"><a><img src="/wp-content/themes/FFW/imgs/img-arrow-menu.png" style="height: 20px;"></a></div>
                    </div>
                </div>
            </div>
			<div class="mainNav mobile">
                <div class="mainNav-header">
                    <a id="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/themes/FFW/imgs/HOME.png" style="position: relative;top: 13px;left: 15px;"></a>
                    <div  class="mainNav-header--dropperIcon">»</div>
                    <ul class="mainNav-dropDown" style="display:none">                        
                        <li class="mainNav-dropDown--item">
                            <a id="tab1" href="<?php echo esc_url( home_url( '/?p=59' ) ); ?>">Einsatzabteilung</a>
                            <ul>
                                <?php wp_list_pages("title_li=&child_of=58");  ?>
                            </ul>
                        </li>
                        <li class="mainNav-dropDown--item">
                            <a id="tab2" href="<?php echo esc_url( home_url( '/?p=59' ) ); ?>">Verein</a>
                            <ul>
                                <?php wp_list_pages("title_li=&child_of=59");  ?>
                            </ul>
                        </li>
                        <li class="mainNav-dropDown--item">
                            <a id="tab3">Kindergruppen</a>
                            <ul>
                                <?php wp_list_pages("title_li=&child_of=60");  ?>
                            </ul>
                        </li>
                        <li class="mainNav-dropDown--item">
                            <a id="tab4">Technik</a>
                            <ul>
                                <?php wp_list_pages("title_li=&child_of=21");  ?>
                            </ul>
                        </li>
                    </ul>
                </div>  
            </div>
        </header>
        <br>
