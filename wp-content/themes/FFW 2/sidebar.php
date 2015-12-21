


<div class="sideBar ">
    <div class="sideBar-titel">
        <h3>Wetter</h3>
    </div>
    <div class="sideBar-content" style="height: 147px;">
        <div id="weather">
          
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
