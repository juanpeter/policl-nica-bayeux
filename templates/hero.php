<?php if ( get_header_image() ) : ?>
    <div id="hero" class="hero">
            <img class='img-fluid' src="<?php header_image(); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <div class="hero-text" data-aos="fade-down">
            <?php
                $my_postid = 428;//This is page id or post id
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
            ?>
            <?php echo $content; ?>
        </div>
    </div>
<?php endif; ?>
