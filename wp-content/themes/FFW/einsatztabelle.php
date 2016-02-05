<?php
    $postid = $_GET["p"];
	get_post( $postid );    
    /* Template Name: EinsatzTabelle */ 
    get_header();

?>

<div class="wrapper">
    <div class="mainFlex einsatzTabelle" style="margin-top: -10px;">
        <div class="mainFlex-left"><?php  get_sidebar(); ?></div>
        <div class="mainFlex-right">
            <div class="singlePost">   
                <div class="singlePost-titelBar">
                    <h1><?php the_title();?></h1>
                    <div class="yearNav">
                        <div class="yearNav-item" id="nav2013">
                             <div class="topball"></div>
                             <div class="connector"></div>
                             <div class="bottomball"></div>
                             <div class="year">2013</div>
                        </div>
                        <div class="yearNav-item" id="nav2014">
                             <div class="topball"></div>
                             <div class="connector"></div>
                             <div class="bottomball"></div>
                             <div class="year">2014</div>
                        </div>
                        <div class="yearNav-item" id="nav2015">
                            <div class="topball"></div>
                            <div class="connector"></div>
                            <div class="bottomball"></div>
                            <div class="year">2015</div>
                        </div>
                        <div class="yearNav-item" id="nav2016">
                            <div class="topball"></div>
                            <div class="connector"></div>
                            <div class="bottomball"></div>
                            <div class="year">2016</div>
                        </div>
                    </div>
                </div>
                <div class="singlePost-content singlePost-content--topPadding">
                    <table id="2016" class="tableYearNav" >
                        <?php  
                            $args = array( 'posts_per_page' => 100, 'order'=> 'DESC',post_type =>  array( 'einsatz' ) );
                            $postslist = get_posts( $args );
                            foreach ( $postslist as $post ) {
                                $timestamp = types_render_field("alarmierungszeitpunkt", array("output"=>"raw"));
                                $month =  date( m, $timestamp  );
                                $day =  date( d, $timestamp  );
                                $year =  date( Y, $timestamp  );
                                $minute =  date( i, $timestamp  );
                                $hour =  date( g, $timestamp  );
                                if($year==2016){
                                    echo'<tr>
                                            <td style="width: 80px;">
                                                <div class="smallRoundBox">';
                                                    if(types_render_field("einsatzicon", array("output"=>"raw")) == 1){
                                                        echo "<img src='/wp-content/themes/FFW/imgs/fire.png' ";
                                                    }else if(types_render_field("einsatzicon", array("output"=>"raw")) == 2){
                                                        echo "<img src='/wp-content/themes/FFW/imgs/tools.png' >";
                                                    }else{
                                                        echo "<img src='/wp-content/themes/FFW/imgs/alarm.png'>";
                                                    }  
                                                echo'</div>
                                            </td>
                                            <td><a href="'. get_permalink() .'" style="font-size:16px">'.get_the_title().'</a></td>
                                            <td>'; 
                                                echo  $day,'.',$month,'.',$year ;
                                            echo'</td>
                                        </tr>';   
                                    }                                
                            }
                        ?>
                    </table>
                    <table id="2015" class="tableYearNav" style="display: none">
                        <?php  
                            $args = array( 'posts_per_page' => 100, 'order'=> 'DESC',post_type =>  array( 'einsatz' ) );
                            $postslist = get_posts( $args );
                            foreach ( $postslist as $post ) {
                                $timestamp = types_render_field("alarmierungszeitpunkt", array("output"=>"raw"));
                                $month =  date( m, $timestamp  );
                                $day =  date( d, $timestamp  );
                                $year =  date( Y, $timestamp  );
                                $minute =  date( i, $timestamp  );
                                $hour =  date( g, $timestamp  );
                                if($year==2015){
                                    echo'<tr>
                                            <td style="width: 80px;">
                                                <div class="smallRoundBox">';
                                                    if(types_render_field("einsatzicon", array("output"=>"raw")) == 1){
                                                        echo "<img src='/wp-content/themes/FFW/imgs/fire.png' ";
                                                    }else if(types_render_field("einsatzicon", array("output"=>"raw")) == 2){
                                                        echo "<img src='/wp-content/themes/FFW/imgs/tools.png' >";
                                                    }else{
                                                        echo "<img src='/wp-content/themes/FFW/imgs/alarm.png'>";
                                                    }  
                                                echo'</div>
                                            </td>
                                            <td><a href="'. get_permalink() .'" style="font-size:16px">'.get_the_title().'</a></td>
                                            <td>'; 
                                                echo  $day,'.',$month,'.',$year ;
                                            echo'</td>
                                        </tr>';   
                                    }                                
                            }
                        ?>
                    </table>
                    <table id="2014" class="tableYearNav" style="display: none">
                        <?php  
                            $args = array( 'posts_per_page' => 100, 'order'=> 'DESC',post_type =>  array( 'einsatz' ) );
                            $postslist = get_posts( $args );
                            foreach ( $postslist as $post ) {
                                $timestamp = types_render_field("alarmierungszeitpunkt", array("output"=>"raw"));
                                $month =  date( m, $timestamp  );
                                $day =  date( d, $timestamp  );
                                $year =  date( Y, $timestamp  );
                                $minute =  date( i, $timestamp  );
                                $hour =  date( g, $timestamp  );
                                if($year==2014){
                                    echo'<tr>
                                            <td style="width: 80px;">                                   
                                                <div class="smallRoundBox">';
                                                    if(types_render_field("einsatzicon", array("output"=>"raw")) == 1){
                                                        echo "<img src='/wp-content/themes/FFW/imgs/fire.png' >";
                                                    }else if(types_render_field("einsatzicon", array("output"=>"raw")) == 2){
                                                        echo "<img src='/wp-content/themes/FFW/imgs/tools.png'>";
                                                    }else{
                                                        echo "<img src='/wp-content/themes/FFW/imgs/alarm.png'>";
                                                    }  
                                                echo'</div>
                                            </td>
                                            <td><a href="'. get_permalink() .'" style="font-size:16px">'.get_the_title().'</a></td>
                                            <td>';
                                                echo  $day,'.',$month,'.',$year ;
                                            echo'</td>
                                        </tr>';   
                                    }                                
                            }
                        ?>
                    </table>
                    <table id="2013" class="tableYearNav" style="display: none">
                        <?php  
                            $args = array( 'posts_per_page' => 100, 'order'=> 'DESC',post_type =>  array( 'einsatz' ) );
                            $postslist = get_posts( $args );
                            foreach ( $postslist as $post ) {
                                $timestamp = types_render_field("alarmierungszeitpunkt", array("output"=>"raw"));
                                $month =  date( m, $timestamp  );
                                $day =  date( d, $timestamp  );
                                $year =  date( Y, $timestamp  );
                                $minute =  date( i, $timestamp  );
                                $hour =  date( g, $timestamp  );
                                if($year==2013){
                                    echo'<tr>
                                            <td style="width: 80px;">                                   
                                                <div class="smallRoundBox">';
                                                    if(types_render_field("einsatzicon", array("output"=>"raw")) == 1){
                                                        echo "<img src='/wp-content/themes/FFW/imgs/fire.png' >";
                                                    }else if(types_render_field("einsatzicon", array("output"=>"raw")) == 2){
                                                        echo "<img src='/wp-content/themes/FFW/imgs/tools.png' >";
                                                    }else{
                                                        echo "<img src='/wp-content/themes/FFW/imgs/alarm.png'>";
                                                    }  
                                                echo'</div>
                                            </td>
                                            <td><a href="'. get_permalink() .'" style="font-size:16px">'.get_the_title().'</a></td>
                                            <td>';
                                                echo  $day,'.',$month,'.',$year ;
                                            echo'</td>
                                        </tr>';   
                                    }                                
                           }
                       ?>
                   </table>
                </div>             
            </div>
        </div>
    </div>
</div>
<div id="SideBar"> 
    <?php get_sidebar(); ?>
</div>
<?php get_footer();?>