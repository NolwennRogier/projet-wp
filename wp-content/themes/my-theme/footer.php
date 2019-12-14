<footer class="footer">
<!--  <p>&copy; <?php echo __('Tous droits réservés'); ?></p>-->
  
  <nav id="pied">
      <?php 
    wp_nav_menu( array('theme_location' => 'nav_main') );
        ?>
    </nav>
  
</footer>
<?php wp_footer(); ?>
</body>
</html>