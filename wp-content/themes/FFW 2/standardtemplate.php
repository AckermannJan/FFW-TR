<?php /* Template Name: Standardtemplate 
@package WordPress
@subpackage Twenty_Fourteen
@since Twenty Fourteen 1.0 */ ?>

<?php get_header();?>
<div class="wrapper">
    <div class="mainFlex" style="margin-top: -11px;">
        <div class="mainFlex-left"><?php  get_sidebar(); ?></div>
        <div class="mainFlex-right">
            <div class="singlePost">              
                <?php $pageid = $_GET["page_id"]; get_page( pageid );  ?>
                <div class="singlePost-titelBar">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="singlePost-content singlePost-content--topPadding singlePost-content--bottomPadding">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>            
</div>
<?php get_footer();?>