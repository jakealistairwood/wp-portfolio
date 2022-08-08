<?php get_header(); ?>
<section class="portfolio container" id="portfolio-projects">
    <h2 class="section-header">Portfolio</h2>
    <div class="tabs">
        <button class="tab tab--development">Development</button>
        <span>/</span>
        <button class="tab tab--design">Design</button>
    </div>
    <?php
        $args = array ( 
            'category_name' => 'development',
        );

        $the_query = new WP_Query($args);
        if(have_posts()) {
        while($the_query -> have_posts()) {
            $the_query -> the_post(); ?>
    <div class="project">
        <div class="project__content">
            <h3 class="project__title"><?php the_title(); ?></h3>
            <p class="project__description"><?php echo get_the_excerpt(); ?></p>
            <div class="project__add-info">
                <div class="project__lang-tags">
                    <?php 
                        $post_tags = get_the_tags();
                        if($post_tags) {
                            foreach($post_tags as $tag) { ?>
                    <span class="project__tag skill-tag">
                        <?php echo $tag -> name; ?>
                    </span>
                    <?php }
                        } 
                    ?>
                </div>
                <div class="project__links">
                    <a href="">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eye.jpg"
                            alt="preview icon" />
                        <span>Preview</span>
                    </a>
                    <a href="">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/code.jpg" alt="code icon" />
                        <span>Code</span>
                    </a>
                </div>
            </div>
        </div>
        <a class=" project__img" href="">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
        </a>
    </div>
    <?php }
    } ?>
</section>
<?php get_footer(); ?>