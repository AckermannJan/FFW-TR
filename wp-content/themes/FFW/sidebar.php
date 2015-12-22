


<div class="sideBar ">
    <div class="sideBar-titel">
        <h3>Wetter</h3>
    </div>
    <div class="sideBar-content" style="height: 196px;">
        <div id="weather">
          
        </div>
        <div class="sideBar-unwetter">
            <p>Keine Unwetterwarung</p>
        </div>
    </div>
</div>
<div class="sideBar " style="height: 100px;">
    <div class="sideBar-titel">
        <h3>Letzter Einsatz</h3>
    </div>
    <div class="sideBar-content" style="height: 0px;min-height: 50px;position:relative;overflow:hidden;">
        <div id="letzterEinsatz">
            <?php  
                $args = array( 'posts_per_page' => 1, 'order'=> 'DESC',post_type =>  array( 'einsatz' ) );
                $postslist = get_posts( $args );
                foreach ( $postslist as $post ) {
                    $timestamp = types_render_field("alarmierungszeitpunkt", array("output"=>"raw"));
                    $month =  date( m, $timestamp  );
                    $day =  date( d, $timestamp  );
                    $year =  date( Y, $timestamp  );
                    $minute =  date( i, $timestamp  );
                    $hour =  date( g, $timestamp  );
                    echo '<div class="scroll-box" style="width: 270px;height: 20px;position: absolute;top: 16px;left: 10px;"><a href="'. get_permalink() .'" style="font-size:16px">'.get_the_title().' ';				
                    echo '</a></div>'; 
                }
            ?>
        </div>
    </div>
</div>
<div class="sideBar ">
    <div class="sideBar-titel">
        <h3>Termine</h3>
    </div>
    <div class="sideBar-content" style="height: 147px;">
        <div>          
        </div>
    </div>
</div>
<?php 
$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title',post_type =>  'SideBar' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) {
        setup_postdata( $post ); 
?> 
<div class="sideBar ">
    <div class="sideBar-titel">
        <h3><?php the_title(); ?></h3>
    </div>
    <div class="sideBar-content">
        <?php if(types_render_field("sideimg", array("output"=>"raw"))!=" "){?>
            <a href="<?php echo types_render_field("goto", array("output"=>"raw")); ?>"><img class="sideBar-content--imgBanner" src="<?php echo types_render_field("sideimg", array("output"=>"raw"));?>" alt="<?php echo types_render_field("sideimgalt", array("output"=>"raw"));?>" /></a>
        <?php }?>
		<a href="<?php echo types_render_field("goto", array("output"=>"raw")); ?>"><?php the_excerpt(); ?></a>
    </div>
</div>
<?php
}
wp_reset_postdata();
?>
<script src="https://gist.githubusercontent.com/remy/2484402/raw/50eb9541d959c842b7ad4f3d7f7346a2f49ff8cb/gistfile1.js"></script> 

<script>
    // Docs at http://simpleweatherjs.com
$(document).ready(function() {
  $.simpleWeather({
    location: '64283',
    woeid: '',
    unit: 'c',
    success: function(weather) {  
      var start = weather.sunrise.split(" ")[0];
      var end = weather.sunset.split(" ")[0];
      var diff = Date.parse("Aug 08 2012 " + end + " PM") - Date.parse("Aug 08 2012 " + start + " AM");
			var diff_time = Math.round(diff/(60*60*1000));
      html = '<div class="leftWrapper"><div class="temp"><img src="/wp-content/themes/FFW/imgs/temp.png" /><p>'+weather.temp+'&deg;'+weather.units.temp+'</p></div>';
      html += '<div class="wind"><img src="/wp-content/themes/FFW/imgs/wind.png" /><p>'+weather.wind.speed+' '+weather.units.speed+'</p></div>';
      html += '<div class="sun"><img src="/wp-content/themes/FFW/imgs/suntime.png" /><p>' + diff_time + ' Std</p></div></div>';
  		html += '<div class="img"><i class="icon-'+weather.code+'"></i></div>';
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});
</script>
