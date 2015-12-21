<?php
    /* Template Name: Technik */ 
    $postid = $_GET["p"];
	wp_get_single_post( $postid );
    $pageid = $_GET["page_id"]; get_page( pageid );
    get_header();?>
<script src="wp-content/themes/FFW/js/details.js" type="text/javascript"></script>
<br><br>
<div id="maincontent">    
    <div class="mainpostcontent technik">
        <div id="PostBox">
            <div class="SingleHead">
                <div id="TopBarTitel">
                    <h2><?php the_title();?></h2>
                </div>
            </div>
            <div class="SingleContent">
                <div id="main"><br>
                    <h2>Fahrzeuge</h2><br>
                    <div class="first">
                        <div class="roundBox">
                            asd
                        </div>
                        <div class="entry">
                            <span class="headLine">KdoW</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div>
                    <div class="second">
                        <div class="roundBox">
                            asd
                        </div>
                        <div class="entry">
                            <span class="headLine">MTF</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div>
                    <div class="first">
                        <div class="roundBox">
                            asd
                        </div>
                        <div class="entry">
                            <span class="headLine">LF 10/6</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div>
                    <div class="second">
                        <div class="roundBox">
                            asd
                        </div>
                        <div class="entry">
                            <span class="headLine">LF 8/6</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div>
                    <div class="static">
                        <div class="roundBox">
                            asd
                        </div>
                        <div class="entry">
                            <span class="headLine">Anhänger</span><br>
                            <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                        </div>
                    </div><br><br><br><br>
                    <h2>Sondergeräte</h2><br>
                    <div class="first">
                        <div class="smallRoundBox">
                            asd
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Wärmebildkamera</span><br>
                             
                        </div>
                    </div>
                    <div class="second">
                        <div class="smallRoundBox">
                            asd
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Atemschutzüberwachung</span><br>
                             
                        </div>
                    </div>
                    <div class="first">
                        <div class="smallRoundBox">
                            asd
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Höhensicherungssatz</span><br>
                             
                        </div>
                    </div>
                    <div class="second">
                        <div class="smallRoundBox">
                            asd
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Schleifkorbtrage</span><br>
                             
                        </div>
                    </div>
                    <div class="first">
                        <div class="smallRoundBox">
                            asd
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Spineboard</span><br>
                             
                        </div>
                    </div>
                    <div class="second">
                        <div class="smallRoundBox">
                            asd
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Hochdruckfeuerlöschgerät</span><br>
                             
                        </div>
                    </div>
                    <div class="first">
                        <div class="smallRoundBox">
                            asd
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Kaminkehrwerkzeug</span><br>
                             
                        </div>
                    </div>
                    <div class="second">
                        <div class="smallRoundBox">
                            asd
                        </div>
                        <div class="entrysmall">
                            <span class="headLine">Rettungsrucksack</span><br>
                             
                        </div>
                    </div>
                    <div class="static">
                        <div class="smallRoundBox">
                            asd
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
<div id="SideBar"> 
    <?php get_sidebar(); ?>
</div>
<?php get_footer();?>