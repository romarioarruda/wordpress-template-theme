<aside class="lateral">
    <!--?php get_search_form() ? --> 
    <?php
        if(is_active_sidebar('blog_sidebar')) {
            dynamic_sidebar('blog_sidebar');
        }
    ?>
</aside>