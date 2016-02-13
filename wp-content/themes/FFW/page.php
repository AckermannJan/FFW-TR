
<?php get_header();?>
<div class="wrapper">
    <div class="mainFlex" style="margin-top: -11px;">
        <div class="mainFlex-left"><?php  get_sidebar(); ?></div>
        <div class="mainFlex-right ">
            <div class="singlePost ">                   
                <?php $pageid = $_GET["page_id"]; get_page( pageid );  ?>
                <div class="singlePost-titelBar">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
                <div class="singlePost-content singlePost-content--topPadding singlePost-content--bottomPadding scan">
                    <div class="text">
                        <?php the_content();?>                                             
                    </div>                      
                </div>
            </div>
            <div class="imgGalerie">
                <?php if(types_render_field("medienbilder", array("output"=>"raw")) != ""){?>
                <div id="slides">
                    <?php echo types_render_field("medienbilder", array("output"=>"img", "proportional"=>"true", "width" => "990"));?>
                </div>  
                <?php } ?>
            </div>             
        </div>
    </div>            
</div>
<script>
     $(function(){
      $("#slides").slidesjs();
    });
    $(document).ready(function () {
        i = 0;
        $('.slidesjs-control').children().each(function(){
            i++;
            console.log("Im here");
        });
        if(i === 1){
           $('.slidesjs-previous').hide();
           $('.slidesjs-next').hide();
        }
    });
</script>
<?php get_footer();?>