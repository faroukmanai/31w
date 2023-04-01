<?php get_header() ?>
<main class="site_main">
        <?php
        if (in_category('cours'))
        {
            get_template_part("template-parts/single-cours");
        }
        ?>
</main>
<?php get_footer(); ?>
        
        
        
        
