<?php
    /* Template Name: Technik */ 
    $postid = $_GET["p"];
	get_post( $postid );    
    $pageid = $_GET["page_id"]; get_page( pageid );
    get_header();?>

<?php get_header(); ?>
<div style="padding-top:9px"></div>
<div class="wrapper">
    <div class="mainFlex">  
        <div class="mainFlex-left"><?php  get_sidebar(); ?></div>
        <div class="mainFlex-right technik">
            <div class="singlePost">
                <div class="singlePost-titelBar">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="singlePost-content">
                    <h2 style="margin-left: 40px;">Fahrzeuge</h2><br>
                    <div class="first">
                        <div class="roundBox">
                            <img src="/wp-content/themes/FFW/imgs/cars/kdow.jpg" />
                        </div>
                        <div class="entry">
                            <span class="headLine"><a href="/kdow" style="text-decoration: none">KdoW</a></span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div>
                    <div class="second">
                        <div class="roundBox">
                            <img src="/wp-content/themes/FFW/imgs/cars/mtf.jpg" />
                        </div>
                        <div class="entry">
                            <span class="headLine">MTF</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div>
                    <div class="first">
                        <div class="roundBox">
                            <img src="/wp-content/themes/FFW/imgs/cars/lf106.jpg" />
                        </div>
                        <div class="entry">
                            <span class="headLine">LF 10/6</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div>
                    <div class="second">
                        <div class="roundBox">
                            <img src="/wp-content/themes/FFW/imgs/cars/lf86.jpg" />
                        </div>
                        <div class="entry">
                            <span class="headLine">LF 8/6</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div>
                    <div class="static">
                        <div class="roundBox">
                            <img src="/wp-content/themes/FFW/imgs/cars/anhaenger.jpg" />
                        </div>
                        <div class="entry">
                            <span class="headLine">Anhänger</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div><br><br><br><br>
                    <h2 style="margin-left: 40px;">Sondergeräte</h2><br>
                    <div class="first">
                        <div class="smallRoundBox">
                            <img src="/wp-content/themes/FFW/imgs/sonder/warmebildkam2.jpg" />
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Wärmebildkamera</span><br>

                        </div>
                    </div>
                    <div class="second">
                        <div class="smallRoundBox">
                            <img src="/wp-content/themes/FFW/imgs/sonder/asuberwach.jpg" style="height: 70px;"/>
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Atemschutzüberwachung</span><br>

                        </div>
                    </div>
                    <div class="first">
                        <div class="smallRoundBox">
                            <img src="/wp-content/themes/FFW/imgs/sonder/hohensich.jpg" />
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Höhensicherungssatz</span><br>

                        </div>
                    </div>
                    <div class="second">
                        <div class="smallRoundBox">
                            <img src="/wp-content/themes/FFW/imgs/sonder/trage.jpg" />
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Schleifkorbtrage</span><br>

                        </div>
                    </div>
                    <div class="first">
                        <div class="smallRoundBox">
                            <img src="/wp-content/themes/FFW/imgs/sonder/spineboard.jpg" />
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Spineboard</span><br>

                        </div>
                    </div>
                    <div class="second">
                        <div class="smallRoundBox">
                            <img src="/wp-content/themes/FFW/imgs/sonder/feuerlocher.jpg" style="height: 70px;"/>
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Hochdruckfeuerlöschgerät</span><br>

                        </div>
                    </div>
                    <div class="first">
                        <div class="smallRoundBox">
                            <img src="/wp-content/themes/FFW/imgs/sonder/kaminkehr.jpg" />
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Kaminkehrwerkzeug</span><br>

                        </div>
                    </div>
                    <div class="second">
                        <div class="smallRoundBox">
                            
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Rettungsrucksack</span><br>

                        </div>
                    </div>
                    <div class="static">
                        <div class="smallRoundBox">
                            <img src="/wp-content/themes/FFW/imgs/sonder/sprung.jpg" />
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Sprungretter</span></span><br>

                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
        

<?php get_footer();?>