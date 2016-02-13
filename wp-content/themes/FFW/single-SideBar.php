<?php
	$postid = $_GET["p"];
	get_post( $postid );    
	get_header();
?>
<br><br>
<div id="maincontent" >
    <div id="SideBar"> 
        <?php get_sidebar(); ?>
    </div>
    <div class="mainpostcontent">
        <div id="PostBox">
            
                <?php $pageid = $_GET["page_id"]; get_page( pageid );  ?>
                   <div class="SingleHead">
                        <div id="TopBarTitel" >
                            <div><?php the_title();?></div>
                        </div>
                    </div>
                    <div class="SingleContent">
                        <div id="main">
                            <?php  
                            if(have_posts()) : the_post(); 
                                the_content(); 
                            endif;?>
                        </div>
                    </div>
             
        </div>
    </div>
</div>
<?php get_footer();?>