<?php
    /* Template Name: Termine */ 

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
    
    get_header(); 
?>
<div class="wrapper">
    <div class="mainFlex" style="margin-top: -10px;">
        <div class="mainFlex-left"><?php  get_sidebar(); ?></div>
        <div class="mainFlex-right" >
            <?php  
            $args = array( 'posts_per_page' => 1000, 'order'=> 'DESC',post_type =>  array( 'termin' ) );
            $postslist = get_posts( $args );
            setlocale(LC_TIME,'de_DE');
            foreach ( $postslist as $post ) {
                     setup_postdata( $post ); 
                $timestamp = types_render_field("zeitpunkt", array("output"=>"raw"));
                $month =  date( F, $timestamp  );
                $monthGerman =  date( n, $timestamp  );
                $monthGerman = $monate[$monthGerman];
                $day =  date( d, $timestamp);
                $daySmall =  date( w, $timestamp  );
                $daySmall = $tageShort[$daySmall];
                $year =  date( Y, $timestamp  );
                $minute =  date( i, $timestamp  );
                $hour =  date( g, $timestamp  );
        ?>   
        <div class="terminBig" >
            <div class="datum">   
                <span><?php echo $daySmall; ?></span>
                <span><?php echo $day; ?></span>
            </div>
            <div class="titel">
                <span style="margin:0;height: auto;"><?php echo get_the_title(); ?></span>
                <span class="textTermin"><?php the_content(); ?></span>
                <span><?php echo $day .' '. $monthGerman. ' um ' . $hour . ':' . $minute; ?></span>
            </div>
            <?php if(types_render_field("berichtlinkcheck", array("output"=>"raw"))){ ?>
            <div class="btn" style="position: absolute;right: 0px;bottom: 20px;">
                <a href="<?php echo types_render_field("berichtlink", array("output"=>"raw")) ?>">Zum Bericht</a>
            </div>
            <?php } ?>
            <div class="divider"></div>
        </div>    
        <?php
        
            }
        ?>
        </div>
    </div>
</div>
<?php  get_footer(); ?> 



