<?php
$pageid = $_GET["page_id"]; get_page( pageid );
echo $pageid;

$tageShort = array("SO", "MO", "DI", "MI", "DO", "FRg", "SA");
$monate = array(1=>"Januar",
                2=>"Februar",
                3=>"M&auml;rz",
                4=>"April",
                5=>"Mai",
                6=>"Juni",
                7=>"Juli",
                8=>"August",
                9=>"September",
                10=>"Oktober",
                11=>"November",
                12=>"Dezember");


?>
<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="de">    
    <head>
        <meta charset="utf-8" />
        <title><?php echo "Feuerwehr Mühltal Traisa | ".get_the_title( $pageid )?></title>
        <?php echo '<meta name="description" content="Feuerwehr Traisa | '.get_the_title( $pageid ).' | '.types_render_field("metadesc", array("output"=>"raw")).'">'; ?>
        <?php echo '<meta name="keywords" content="Feuerwehr, Traisa, '.get_the_title( $pageid ).', '.types_render_field("keywords", array("output"=>"raw")).'"/>'; ?>   
		<meta http-equiv="content-language" content="<?php language_attributes( $doctype );?>">
		<link type="text/css" href="/wp-content/themes/FFW/style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="/wp-content/themes/FFW/plugins/Slides-SlidesJS-3/source/jquery.slides.js"></script>        
        <script src="/wp-content/themes/FFW/js/TopBarNav.js" type="text/javascript"></script>
        <script src="/wp-content/themes/FFW/plugins/simpleWeather/jquery.simpleWeather.js" type="text/javascript"></script>        
        <script src="/wp-content/themes/FFW/plugins/WordScanner/WordScanner.js"></script>
        <script src="/wp-content/themes/FFW/js/menu.js" type="text/javascript"></script>
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
                        <li><a id="tab4" href="<?php echo esc_url( home_url( '/termine' ) ); ?>">Termine</a></li>
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
                            <li><a href="/jugendfeuerwehr">Jugendfeuerwehr</a></li>
                            <div style="margin-left: 10px;"><?php wp_list_pages("title_li=&child_of=185");  ?>
                            <?php query_posts('category_name=jugend&showposts=20'); ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink()?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                            <?php endif; wp_reset_query();  ?></div>
                        </ul>
                        <ul class="linkList linkList-arrowRight linkList-arrowRight--mainNav">
                            <li><a href="/wichtelwehr">Wichtelwehr</a></li>
                            <div style="margin-left: 10px;"><?php wp_list_pages("title_li=&child_of=188");  ?>
                            <?php query_posts('category_name=wichtel&showposts=20'); ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li><a href="<?php the_permalink()?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                            <?php endif; wp_reset_query();  ?></div>
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
