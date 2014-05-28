<?php
/**
 * Property Detail page
 *
 * @package PSPWP
 */

// For schools lookup
$communityzip = types_render_field( "property-zip", array( "raw"=>"true" ) );
$communitystate = "CA"; // types_render_field( "community-state", array( "raw"=>"true" ) );
$nearby_schools = curl_schools( $communityzip, $communitystate );
if ( $nearby_schools )
    $schools_xml = new SimpleXMLElement( $nearby_schools );


get_header(); ?>

<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
		<?php get_sidebar('left'); ?>
		<?php while ( have_posts() ) : the_post(); ?>
        <div class="right_main_min">
            <!--div class="videocode">
                <?php echo(types_render_field("video-code", array())); ?>
            </div-->
            <div class="psp-slider">
                <?php 
                    $slideid = types_render_field( "slidedeck-id-property", array() );
                    $slider = "[SlideDeck2 id=" . $slideid . " iframe=1]";
                    echo do_shortcode( $slider );
                ?>
            </div>
            <div class="clearfix"></div>
            <br/>
            <?php /* Removed: Gallery link & fancybox
            <div style="display:none;">
                <?php
                $galleryimages = get_post_meta(get_the_ID(), 'wpcf-gallery-image');
                $firstimg = '#';
                if ($galleryimages):
                    foreach ($galleryimages as $galleryimage) {
                        if ($count = 1) {
                            $firstimg = $galleryimage;
                        }
                        $count += 1;
                        echo '<a class="fancybox" rel="gallery-'.get_the_ID().'" href="'.$galleryimage.'"><img src="'.$galleryimage.'" /></a>';
                    }
                endif;
                
                ?>
            </div>
            <?php if ($firstimg != '#'): ?>
            <a href="<?php echo $firstimg; ?>" class="fancybox" rel="gallery-<?php echo get_the_ID(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_photo_gallery.png" width="115" height="30" class="tab_search_mls_btn"></a>
            <?php endif; ?>
            */ ?>
            <div id="tabs">
                <ul>
                    <li>
                        <a href="#tabs-3">Overview</a>
                    </li>
					<li>
                        <a href="#tabs-1">Listing Details</a>
                    </li>
                    <li>
                        <a href="#tabs-2">Community Info</a>
                    </li>
                    <?php if ( $nearby_schools ) { ?><li><a href="#nearschools">Nearby Schools</a></li><?php } ?>
                    
                    <?php if ( types_render_field("address", array()) ) { ?>
                    <li>
                        <a href="#tabs-map">Map</a>
                    </li>
                    <?php } ?>

                </ul>
				<div id="tabs-3">
                    <?php echo types_render_field("overview", array()); ?>
                </div>
				<div id="tabs-1">

                    <?php
                        $mlsnum = types_render_field("mls-number", array());
                        $idxcode = '[idx-listing mlsnumber="' . $mlsnum . '" showall="true"]';

                        if ( !empty( $mlsnum) ) {
                            echo do_shortcode( $idxcode );
                        }
                        else {
                            ?>
                        	<div class="community_overview">
                        		<div id="mls_details_right" style="width: 100%;">
        			                	<div class="mls_details_details">
        			                    	<h2><?php the_title(); ?></h2>
        			            			<div class="compare_column_details_price"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_up_arrow.png" width="15" height="23">&nbsp;<span class="compare_column_details_price_txt">$<?php echo number_format(floatval(get_post_meta(get_the_ID(), 'wpcf-current-price', true))); ?></span></div>
        			      					<span class="compare_column_details_price_subtxt">Original Price: $<?php echo number_format(floatval(get_post_meta(get_the_ID(), 'wpcf-orginal-price', true))); ?></span>
        			                		<span class="compare_column_details_label">bed/bath</span>&nbsp;<span class="compare_column_details_txt"><?php echo types_render_field("bed", array()); ?> bedroom | <?php echo types_render_field("bath", array()); ?> bathroom</span><br>
        			      					<span class="compare_column_details_label">sq/ft</span>&nbsp;<span class="compare_column_details_txt"><?php echo types_render_field("square-feet", array()); ?></span><br>
        			            		</div>
        			                </div>
                        	</div>
        					<div class="clear"></div>
        					<hr/>
        					<div class="clear"></div>
                            <?php the_content(); ?>
                            <?php
                        }
                    ?>
                    
                </div>
                <div id="tabs-2">
                    <?php echo(types_render_field("community-info", array())); ?>
                </div>

                <div id="nearschools">
                    <div class="clearfix"></div>
                    <div id="schooltabs">
                        <ul>
                            <li><a href="#servinghome">Serving this Home</a></li>
                            <li><a href="#elementaryschool">Nearby Elementary</a></li>
                            <li><a href="#middleschool">Nearby Middle</a></li>
                            <li><a href="#highschool">Nearby High</a></li>
                        </ul>
                        <div id="servinghome">
                            <?php if ( $schools_xml ) { ?>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>School Name</th>
                                            <th>Type</th>
                                            <th>Grades</th>
                                            <th>Parent Rating</th>
                                            <th>Distance</th>
                                        </tr>
                                        <?php
                                            foreach ( $schools_xml->school as $school ) {
                                                $address = explode( ", ", $school->address );
                                                $grade_range = explode( "-", $school->gradeRange);
                                                $grades = $grade_range[0] . " to " . $grade_range[1];
                                                ?>
                                                <tr>
                                                    <td><p><b><?=$school->name; ?></b><br />
                                                        <?php
                                                            echo $address[0] . ',<br />';
                                                            echo $address[1] . ', ' . $address[2] . '<br />';
                                                            echo $school->phone;
                                                        ?>
                                                    </p></td>
                                                    <td><p><?php echo ucfirst( $school->type ); ?></p></td>
                                                    <td><p><?=$grades; ?></p></td>
                                                    <td>
                                                        <p>
                                                        <?php
                                                            for ( $i = 1; $i <= $school->parentRating; $i++ ) {
                                                                echo '<span class="bluestar">★</span>';
                                                            }
                                                            for ( $i = 5; $i > $school->parentRating; $i-- ) {
                                                                echo '<span class="whitestar">★</span>';
                                                            }
                                                        ?>
                                                    </p>
                                                    </td>
                                                    <td><p><?php echo $school->distance . " mi"; ?></p></td>
                                                </tr>
                                            <?php }
                                        ?>
                                    </tbody>
                                </table>

                                <?php
                                } else { ?>
                                    <h3>School data currently not available.</h3>
                            <?php } ?>
                        </div>
                        <div id="elementaryschool">
                            <?php if ( $schools_xml ) { ?>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>School Name</th>
                                            <th>Type</th>
                                            <th>Grades</th>
                                            <th>Parent Rating</th>
                                            <th>Distance</th>
                                        </tr>
                                        <?php
                                            foreach ( $schools_xml->school as $school ) {
                                                $address = explode( ", ", $school->address );
                                                $grade_range = explode( "-", $school->gradeRange);
                                                $grades = $grade_range[0] . " to " . $grade_range[1];
                                                if ( $grade_range[0] == "K" || $grade_range[0] == "PK" || $grade_range[0] < 6 ) {
                                                ?>
                                                <tr>
                                                    <td><p><b><?=$school->name; ?></b><br />
                                                        <?php
                                                            echo $address[0] . ',<br />';
                                                            echo $address[1] . ', ' . $address[2] . '<br />';
                                                            echo $school->phone;
                                                        ?>
                                                    </p></td>
                                                    <td><p><?php echo ucfirst( $school->type ); ?></p></td>
                                                    <td><p><?=$grades; ?></p></td>
                                                    <td>
                                                        <p>
                                                        <?php
                                                            for ( $i = 1; $i <= $school->parentRating; $i++ ) {
                                                                echo '<span class="bluestar">★</span>';
                                                            }
                                                            for ( $i = 5; $i > $school->parentRating; $i-- ) {
                                                                echo '<span class="whitestar">★</span>';
                                                            }
                                                        ?>
                                                    </p>
                                                    </td>
                                                    <td><p><?php echo $school->distance . " mi"; ?></p></td>
                                                </tr>
                                                <?php }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                } else { ?>
                                    <h3>School data currently not available.</h3>
                            <?php } ?>
                        </div>
                        <div id="middleschool">
                            <?php if ( $schools_xml ) { ?>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>School Name</th>
                                            <th>Type</th>
                                            <th>Grades</th>
                                            <th>Parent Rating</th>
                                            <th>Distance</th>
                                        </tr>
                                        <?php
                                            foreach ( $schools_xml->school as $school ) {
                                                $address = explode( ", ", $school->address );
                                                $grade_range = explode( "-", $school->gradeRange);
                                                $grades = $grade_range[0] . " to " . $grade_range[1];
                                                if ( ( $grade_range[0] <= 6 || $grade_range[0] == "K" || $grade_range[0] == "PK" ) && $grade_range[1] >= 8 ) {
                                                ?>
                                                <tr>
                                                    <td><p><b><?=$school->name; ?></b><br />
                                                        <?php
                                                            echo $address[0] . ',<br />';
                                                            echo $address[1] . ', ' . $address[2] . '<br />';
                                                            echo $school->phone;
                                                        ?>
                                                    </p></td>
                                                    <td><p><?php echo ucfirst( $school->type ); ?></p></td>
                                                    <td><p><?=$grades; ?></p></td>
                                                    <td>
                                                        <p>
                                                        <?php
                                                            for ( $i = 1; $i <= $school->parentRating; $i++ ) {
                                                                echo '<span class="bluestar">★</span>';
                                                            }
                                                            for ( $i = 5; $i > $school->parentRating; $i-- ) {
                                                                echo '<span class="whitestar">★</span>';
                                                            }
                                                        ?>
                                                    </p>
                                                    </td>
                                                    <td><p><?php echo $school->distance . " mi"; ?></p></td>
                                                </tr>
                                                <?php }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                } else { ?>
                                    <h3>School data currently not available.</h3>
                            <?php } ?>
                        </div>
                        <div id="highschool">
                            <?php if ( $schools_xml ) { ?>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>School Name</th>
                                            <th>Type</th>
                                            <th>Grades</th>
                                            <th>Parent Rating</th>
                                            <th>Distance</th>
                                        </tr>
                                        <?php
                                            foreach ( $schools_xml->school as $school ) {
                                                $address = explode( ", ", $school->address );
                                                $grade_range = explode( "-", $school->gradeRange);
                                                $grades = $grade_range[0] . " to " . $grade_range[1];
                                                if ( $grade_range[1] >= 9 ) {
                                                ?>
                                                <tr>
                                                    <td><p><b><?=$school->name; ?></b><br />
                                                        <?php
                                                            echo $address[0] . ',<br />';
                                                            echo $address[1] . ', ' . $address[2] . '<br />';
                                                            echo $school->phone;
                                                        ?>
                                                    </p></td>
                                                    <td><p><?php echo ucfirst( $school->type ); ?></p></td>
                                                    <td><p><?=$grades; ?></p></td>
                                                    <td>
                                                        <p>
                                                        <?php
                                                            for ( $i = 1; $i <= $school->parentRating; $i++ ) {
                                                                echo '<span class="bluestar">★</span>';
                                                            }
                                                            for ( $i = 5; $i > $school->parentRating; $i-- ) {
                                                                echo '<span class="whitestar">★</span>';
                                                            }
                                                        ?>
                                                    </p>
                                                    </td>
                                                    <td><p><?php echo $school->distance . " mi"; ?></p></td>
                                                </tr>
                                                <?php }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                } else { ?>
                                    <h3>School data currently not available.</h3>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <?php if ( types_render_field("address", array()) ) { ?>
                <div id="tabs-map">
                    <?php 

                    $gapi = 'AIzaSyBR9AGYPcpb_MgKB7rYru5qsa9Hw2f8jjo';
                    $gad = urlencode(types_render_field("address", array()));

                    ?>
                    <iframe
                      width="660"
                      height="500"
                      frameborder="0" style="border:0"
                      src="https://www.google.com/maps/embed/v1/place?key=<?php echo $gapi; ?>&amp;q=<?php echo $gad; ?>&amp;zoom=19&amp;maptype=satellite">
                    </iframe>
                </div>
                <?php } ?>

            </div>
        </div>
	<?php endwhile; // end of the loop. ?>	
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>
