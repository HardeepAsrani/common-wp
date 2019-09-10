<?php
/*
Template Name: Hompage
*/
?>

<?php get_header(); ?>

	<div id="content">
		<div class="sdsa-2017-frontispiece">

		  <article class="essay">
		    <div class="grid-container">
		    	<?php get_template_part( 'parts/content', 'dsaAlertBox' ); ?> <!-- see "DSA Alert Box" metabox in the Page Editor or customize in /parts/content-dsaAlertBox.php -->
		      <div class="grid-x grid-margin-x">
		        <div class="plate card cell large-offset-6 large-6 medium-offset-3 medium-9 small-12"><!-- Begin Main Content-->
		        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'parts/loop', 'pagealt' ); ?>
					<?php endwhile; endif; ?>
		        </div>
		      </div>
		    </div>
		  </article><!-- end article -->

		  <div class="diptych">
		    <div class="grid-container">
		      <div class="grid-x grid-margin-x">
		        <div class="card cell large-6 medium-6 small-12 beliefs-cycle">
		        	<?php get_template_part( 'parts/content', 'beliefs' ); ?> <!-- see /parts/content-beliefs.php -->
				</div>
		        <div class="card cell large-6 medium-6 small-12 newsletter-signup">
		            <div class="grid-x grid-margin-x">
		              <figure class="cell large-4 medium-3 small-6">
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" loading="lazy" alt="" />
		              </figure>
		              <div class="form cell large-8 medium-9 small-6">
		                <div class="fields">
		                    <?php echo apply_filters('the_content', get_post_meta($post->ID, '_email_signup', true)); ?> <!-- see "Email Signup Box (use Mailchimp embed code)" metabox in Page Editor -->
		                </div>
		              </div>
		            </div>
		        </div><!-- newsletter signup -->

		      </div><!-- end cards -->
		    </div><!-- end bound -->
		  </div><!-- end diptych -->
		</div><!-- end sdsa-2017-frontispiece -->

		<div id="dsa-home-row-3" class="bg-DSAred">
			<?php get_template_part( 'parts/content', 'events' ); ?> <!-- see /parts/content-events.php -->
		</div>

		<div id="dsa-home-row-4" class="bg-dark-1">
			<?php get_template_part( 'parts/content', 'dispatches' ); ?> <!-- see /parts/content-dispatches.php -->
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
