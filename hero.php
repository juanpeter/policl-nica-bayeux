<?php if ( get_header_image() ) : ?>
    <div id="hero" class="hero">
        <img class='img-fluid' src="<?php header_image(); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <button data-aos="fade-down" id="button-white">CONHEÇA-NOS</button>
    </div>
<?php endif; ?>
