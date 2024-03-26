<footer class="nav_footer">
<div class="footer_separator"></div>
        <div class="footer_grid">
            <div class="footer_menu"><?php wp_nav_menu ( array ('theme_location' => 'footer-menu' ) ); ?></div>
            
            <div class="footer_link">
                <a href="https://www.behance.net/emmawettle1"><?php echo wp_get_attachment_image(13, 'small'); ?></a>
                <a href="https://www.linkedin.com/in/emma-wettle-608259256/"><?php echo wp_get_attachment_image(14, 'small'); ?></a>
            </div>
        </div>
        <?php wp_footer(); ?>
     </footer>
   </div>

 </body>
</html>
