<?php 
require('../../../wp-blog-header.php');
$target = $_POST["id"]; 
$id = $target;
$post = get_post($id); //assuming $id has been initialized
setup_postdata($post); ?>
<div class="inzserjdl"><?php the_title(); ?></div>
<div class="inzser">
<?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail(); ?><?php } else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /><?php } ?>
<div class="rapi">
<span><b>Japanese</b>: <?php $meta = get_post_meta( get_the_ID(), 'smoke_japanese', true ); echo $meta; ?></span>
<span><b>Type</b>: <?php $meta = get_post_meta( get_the_ID(), 'smoke_type', true ); echo $meta; ?></span>
<span><b>Episodes</b>: <?php $meta = get_post_meta( get_the_ID(), 'smoke_total', true ); echo $meta; ?></span>
<span><b>Status</b>: <?php $meta = get_post_meta( get_the_ID(), 'smoke_status', true ); echo $meta; ?></span>
<span><b>Aired</b>: <?php $meta = get_post_meta( get_the_ID(), 'smoke_date', true ); echo $meta; ?></span>
<span><?php echo get_the_term_list( $post->ID, 'genres', '<b>Genres</b>: ', ', ', '' ); ?></span>
<span><b>Duration</b>: <?php $meta = get_post_meta( get_the_ID(), 'smoke_duration', true ); echo $meta; ?></span>
<div class="sinz"><?php the_excerpt(); ?></div>
</div>
</div>
<?php wp_reset_postdata(); ?>