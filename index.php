<?php get_header(); ?>
        <section id="features" class="features top-section">
            <div class="container">
                <div class="row">

                <h2>Blog</h2>
    <?php if(have_posts()) : ?>    
    <?php while(have_posts()) : the_post(); ?>
    <div class="blogpost">
    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    <p>Posted On <?php the_time('F j, Y'); ?></p>
    <p><?php the_excerpt(); ?></p>
    <div class="blogInfo">
      <p class="blogReadMore"><a class="readMore" href="<?php the_permalink() ?>">Read More</a></p>
    </div>
</div>
    <?php endwhile; ?>
    <?php endif; ?>

                    
                </div>
            </div>
        </section>
<?php get_footer(); ?>