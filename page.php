<?php get_header(); ?>
  <section class="s-content s-content--top-padding s-content--narrow">
        <article class="row entry format-standard">
            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <img src="<?php echo get_theme_file_uri('images/thumbs/single/standard/standard-1000.jpg')?>"
                         srcset="echo get_theme_file_uri('images/thumbs/single/standard/standard-2000.jpg 2000w'),
                                 echo get_theme_file_uri('images/thumbs/single/standard/standard-1000.jpg 1000w'),
                                 echo get_theme_file_uri('images/thumbs/single/standard/standard-500.jpg 500w')"
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div>
			<?php while (have_posts()) {
				  the_post(); ?>
            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   <?php the_title(); ?>
                </h1>
                <ul class="entry__header-meta">
                    <li class="date"><?php the_date(); ?></li>
                    <li class="byline">
                        By
                        <a href="#0"><?php the_author(); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-full entry__main">
			<p>
			<?php the_content(); ?> 
			</p>
		</div>
	</article>
</section>
	<?php }
	get_footer();
?>