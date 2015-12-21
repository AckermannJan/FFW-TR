<?php
    /* Template Name: Technik */ 
    $postid = $_GET["p"];
	get_post( $postid );    
    $pageid = $_GET["page_id"]; get_page( pageid );
    get_header();?>
<script src="wp-content/themes/FFW/js/details.js" type="text/javascript"></script>
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
        

<?php get_footer();?>