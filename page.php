<?php
get_header();
?>
<main>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article>
				<?php
				the_title( '<h1>', '</h1>' );
				the_content();
				?>
			</article>
			<?php
		endwhile;
	endif;
	?>
</main>
<?php
get_footer();
