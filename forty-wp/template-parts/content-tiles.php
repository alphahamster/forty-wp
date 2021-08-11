<?php
/**
* 
* Tiles Section
* Port from https://html5up.net/forty
* 2021/08/11 https://github.com/alphahamster
* 
* $thumbnail_url = ( has_post_thumbnail() && ! post_password_required() ) ?  get_the_post_thumbnail_url( $post->ID, 'post-thumb' ) : ''; 
* $style_attr = $thumbnail_url ? ' style="background-image: url( ' . $thumbnail_url . ' );"' : ''; */
?>

<!-- Blog Posts -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url(<?php if (has_post_thumbnail()):$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?> <?php echo $featured_image[0]; ?>;"<?php endif; ?>>
		<span class="image">
			<?php if ( has_post_thumbnail() ) :
				$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<img src="<?php echo $featured_image[0]; ?>" alt='' />
			<?php endif; ?>
		</span>
		<header class="major">
			<h3>
				<a href="<?php the_permalink(); ?>" class="link">
					<?php the_title(); ?>
				</a>
			</h3>
			<p>
			<?php
				// $search_text = the_excerpt();
				$search_text = get_the_excerpt();
				// Strip the <p> tag by replacing it empty string
				$tags = array("<p>", "</p>");
				$search_content = str_replace($tags, "", $search_text);
				// Echo the content
				echo $search_content;
			?>
			</p>
		</header>
		<a href="<?php the_permalink(); ?>" class="link primary"></a>
	</article>