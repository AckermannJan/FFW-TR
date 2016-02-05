<?php
    $postid = $_GET["p"];
    get_post( $postid );    
    get_header();
?>

<div class="wrapper">
    <div class="mainFlex" style="margin-top: -10px;">
        <div class="mainFlex-left"><?php  get_sidebar(); ?></div>
        <div class="mainFlex-right">
            <div class="singlePost scan text">                 
                <?php $pageid = $_GET["page_id"]; get_page( pageid );  ?>
                <div class="singlePost-titelBar">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="singlePost-content" style="padding-top:0px">
                    <div class="text" style="padding-top:15px;">
                        <?php  
                        if(have_posts()) : the_post(); 
                            the_content(); 
                            endif;?>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>



<?php get_footer();?>