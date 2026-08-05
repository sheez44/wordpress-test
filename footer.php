<?php
/**
 * Footer file.
 * 
 * @package Test
 */
?>
<footer class="container">
    <div class="row">
        <h3>Footer</h3>
        <?php if(is_active_sidebar('footer-sidebar-1')): ?>
            <aside>
                <?php dynamic_sidebar('footer-sidebar-1'); ?>
            </aside>
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>