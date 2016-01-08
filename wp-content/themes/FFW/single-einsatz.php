 <?php
    $postid = $_GET["p"];
	get_post( $postid );    
    $pageid = $_GET["page_id"]; get_page( pageid );
    /* Template Name: impressum */ 

    $farzeuge = (explode(",", types_render_field("einsatzfahrzeuge")));
    get_header();?>        

<style>

.bjqs-wrapper {
    width: 750px!important;
    height: 492px!important;
    left: -5px;
}
</style>



<div class="wrapper">
    <div class="mainFlex mainFlex--smallMargin">
        <div class="mainFlex-left"><?php  get_sidebar(); ?></div>
        <div class="mainFlex-right einsatz">
            <div class="singlePost scan">
                <div class="singlePost-titelBar">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="singlePost-content">
                    <div class="einsatzInfo">
                        <div class="wrapper">
                            <div class="roundBox">
                                <?php 
                                    if(types_render_field("einsatzicon", array("output"=>"raw")) == 1){
                                        echo "<img src='/wp-content/themes/FFW/imgs/fire.png' style='height: 60px;margin-left: 11px;margin-top: 7px;'>";
                                    }else if(types_render_field("einsatzicon", array("output"=>"raw")) == 2){
                                        echo "<img src='/wp-content/themes/FFW/imgs/tools.png' style='height: 60px;margin-left: 11px;margin-top: 7px;'>";
                                    }else{
                                        echo "<img src='/wp-content/themes/FFW/imgs/alarm.png' style='height: 60px;margin-left: 15px;margin-top: 7px;'>";
                                    }                                
                                ?>
                            </div>
                            <div class="entry">
                                <h3>Einsatzart</h3>
                                <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                            </div>                            
                            <div class="entry">
                                <h3>Einsatzort</h3>
                                <span class="subLine"><?php echo types_render_field("einsatzort", array("output"=>"raw"));?></span>
                            </div>
                            <div class="entry">
                                <h3>Alarmierungsart</h3>
                                <span class="subLine"><?php echo types_render_field("alarmierungsart", array("output"=>"raw"));?></span>
                            </div>
                            <div class="entry">
                                <h3>Alarmierungszeitpunkt</h3>
                                <span class="subLine"><?php $timestamp = types_render_field("alarmierungszeitpunkt", array("output"=>"raw"));
                                            $month =  date( m, $timestamp  );
                                            $day =  date( d, $timestamp  );
                                            $year =  date( Y, $timestamp  );
                                            $minute =  date( i, $timestamp  );
                                            $hour =  date( H, $timestamp  );
                                            echo $day,".",$month,".",$year," um ", $hour,":",$minute,"Uhr" ; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="einsatzFahrzeuge">
                        <div class="wrapper">
                            <div class="roundBox">
                                <img src='/wp-content/themes/FFW/imgs/cars/carheader.png' alt='Logo' style="height: 64px;left: 23px;position: relative;top: 16px;">
                            </div>
                            <?php $cars = explode(',', types_render_field("fahrzeuge", array("output"=>"raw")));
                                    if(in_array("1", $cars)){ echo "<div class='smallRoundBox'><img src='/wp-content/themes/FFW/imgs/cars/mtf.jpg' alt='MTF'></div>";}
                                    if(in_array("2", $cars)){ echo "<div class='smallRoundBox'><img src='/wp-content/themes/FFW/imgs/cars/lf86.jpg' alt='LF/8'></div>";}
                                    if(in_array("3", $cars)){ echo "<div class='smallRoundBox'><img src='/wp-content/themes/FFW/imgs/cars/lf106.jpg' alt='LF/10'></div>";}
                                    if(in_array("4", $cars)){ echo "<div class='smallRoundBox'><img src='/wp-content/themes/FFW/imgs/cars/anhaenger.jpg' alt='Anhänger'></div>";}
                                    if(in_array("5", $cars)){ echo "<div class='smallRoundBox'><img src='/wp-content/themes/FFW/imgs/cars/kdow.jpg' alt='Kdow'></div>";}
                            ?>
                            <br><br><br><br>
                            <div class="entry">                                
                                <h3 class="blue">Einsatzpersonal</h3>
                                <span class="subLine"><?php echo types_render_field("einsatzpersonal", array("output"=>"raw"));?></span>
                            </div>
                            <div class="entry">                                
                                <h3 class="blue">Weitere Kräfte</h3>
                                <div class="subLine"><?php 
                                $kraefte = types_render_field("weitere-kraefte", array("output"=>"raw"));
                                echo str_replace(";", "<br />", $kraefte);     
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="einsatzBericht">
                        <div class="wrapper">
                            <div class="roundBox">
                                <img src='/wp-content/themes/FFW/imgs/logos/textLogo.png' alt='Logo' style="height: 54px;left: 30px;position: relative;top: 24px;"> 
                            </div>
                            <div class="report">
                                    <?php echo get_post_field('post_content', $postid); ?>
                            </div>
                        </div>
                    </div>
                    <div class="imgGalerie">
                        <?php if(types_render_field("medienverfugbar", array("output"=>"raw")) == "1"){?>
                        <div id="slides">
                            <?php echo types_render_field("medienbilder", array("output"=>"html"));?>
                        </div>  
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
     $(function(){
      $("#slides").slidesjs();
    });
</script>
<?php  get_footer(); ?> 








<!--

<div id="maincontent" >
    <div class="mainpostcontent einsatz">
        <div id="PostBox">
            <div class="SingleHead">
                <div id="TopBarTitel" >
                    <h2><?php /*the_title();?></h2>
                </div>
            </div>
            <div class="SingleContent">
                <div id="main">
                    <div class="einsatzInfo">
                        <div class="wrapper">
                            <div class="roundBox">
                                asd
                            </div>
                            <div class="entry">
                                <h3>Einsatzart</h3>
                                <span class="subLine"><?php echo types_render_field("einsatzart", array("output"=>"raw"));?></span>
                            </div>
                            <div class="entry">
                                <h3>Einsatzort</h3>
                                <span class="subLine"><?php echo types_render_field("einsatzort", array("output"=>"raw"));?></span>
                            </div>
                            <div class="entry">
                                <h3>Alarmierungszeitpunkt</h3>
                                <span class="subLine"><?php $timestamp = types_render_field("alarmierungszeitpunkt", array("output"=>"raw"));
                                            $month =  date( m, $timestamp  );
                                            $day =  date( d, $timestamp  );
                                            $year =  date( Y, $timestamp  );
                                            $minute =  date( i, $timestamp  );
                                            $hour =  date( g, $timestamp  );
                                            echo $day,".",$month,".",$year," um ", $hour,":",$minute,"Uhr" ; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="einsatzFahrzeuge">
                        <div class="wrapper">
                            <div class="roundBox">
                                asd
                            </div>
                            <?php $cars = explode(',', types_render_field("fahrzeuge", array("output"=>"raw")));
                                    if($cars[0]!=" "){ echo "<div class='smallRoundBox'><img src='' alt='MTF'></div>";}
                                    if($cars[1]!=" "){ echo "<div class='smallRoundBox'><img src='' alt='LF/8'></div>";}
                                    if($cars[2]!=" "){ echo "<div class='smallRoundBox'><img src='' alt='LF/10'></div>";}
                                    if($cars[3]!=" "){ echo "<div class='smallRoundBox'><img src='' alt='Anhänger'></div>";}

                                
                            ?>
                            <br><br><br><br>
                            <div class="entry">                                
                                <h3 class="blue">Einsatzpersonal</h3>
                                <span class="subLine"><?php echo types_render_field("einsatzpersonal", array("output"=>"raw"));?></span>
                            </div>
                            <div class="entry">                                
                                <h3 class="blue">Weitere Kräfte</h3>
                                <div class="subLine"><?php echo types_render_field("weitere-kraefte", array("output"=>"raw"));?></div>
                            </div>
                        </div>
                    </div>
                    <div class="einsatzBericht">
                        <div class="wrapper">
                            <div class="roundBox">
                                
                            </div>
                            <div class="report">
                                    <?php echo get_post_field('post_content', $postid); ?>
                            </div>
                        </div>
                    </div>
                    <div class="einsatzBilder">
                        <div class="wrapper">
                            <div id="slides">
                                <img src="http://placehold.it/750x500">
                                <img src="http://placehold.it/750x500">
                                <img src="http://placehold.it/750x500">
                                <img src="http://placehold.it/750x500">
                                <img src="http://placehold.it/750x500">
                            </div>                            
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
<script>
     $(function(){
      $("#slides").slidesjs();
    });
</script>
<?php get_footer(); */ ?>-->