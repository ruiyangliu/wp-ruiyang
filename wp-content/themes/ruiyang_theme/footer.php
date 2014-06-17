<?php 
  $template_url = get_template_directory_uri();
?>
      <div id="footer" class="white-bg">
        <div class="footer-text float-left" ><?php echo do_shortcode('[jmlt]'); ?></div>
        <div class="social-icons float-right">
          <ul>
            <li><a href="http://www.facebook.com/ruiyang.liu"><img src="<?php print($template_url."/images/social-icons/facebook.png") ?>" alt="facebook" /></a></li>
            <li><a href="https://twitter.com/RuiyangLiu"><img src="<?php print($template_url."/images/social-icons/twitter.png") ?>" alt="twitter" /></a></li>
            <li><a href="http://www.linkedin.com/pub/ruiyang-liu/49/439/9aa"><img src="<?php print($template_url."/images/social-icons/linkedin.png") ?>" alt="linkedin" /></a></li>
            <li><a href="http://stackoverflow.com/users/1100504/ruiyang"><img src="<?php print($template_url."/images/social-icons/stackoverflow.png") ?>" alt="stackoverflow" /></a></li>
            <li><a href="https://github.com/ruiyangliu"><img src="<?php print($template_url."/images/social-icons/github.png") ?>" alt="github" /></a></li>
          </ul>
        </div>
      </div>

    </div> <!-- end container -->
  </body>
</html>

<?php wp_footer(); ?>
