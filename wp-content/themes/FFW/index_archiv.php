<?php
    /* Template Name: Archiv */ 
?>
<?php get_header(); ?>
<div class="wrapper">
    <div class="mainFlex" style="margin-top: -10px;">
        <div class="mainFlex-left"><?php  get_sidebar(); ?></div>
        <div class="mainFlex-right">
            <?php       
                $args = array( 'posts_per_page' => 1000, 'order'=> 'DESC', post_type =>  array( 'post', 'page'));
                $postslist = get_posts( $args );
                foreach ( $postslist as $post ) {
                     setup_postdata( $post ); ?> 
                    <?php if(types_render_field("archiv", array("output"=>"raw")) == 1){ ?>
                        <div class="postBox scan">
                            <div class="postBox-img">
                                <img src="<?php
                                        $bild = types_render_field("start-bild", array("output"=>"raw"));
                                        if($bild!=""){
                                            echo $bild;                            
                                        }else{
                                            echo "/wp-content/themes/FFW/imgs/img_bild_folgt.png";
                                        }
                                      ?>">
                            </div>
                            <div class="postBox-content">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <div class="btn"><a href="<?php echo get_permalink();?>">Weiter lesen</a></div>
                            </div>            
                        </div>        
                <?php  
                    }
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php  get_footer(); ?> 


       
