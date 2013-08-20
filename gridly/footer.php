	

<?php if ( is_active_sidebar( 'gridly_footer')) { ?>     
   <div id="footer-area">
			<?php dynamic_sidebar( 'gridly_footer' ); ?>
        </div><!-- // footer area -->   
<?php }  ?>     
      


 <div id="copyright">
 <p>&copy; <?php echo date("Y");?>&nbsp;<a href="/about/">Martin Burkhard</a> | <a href="/imprint/">Imprint</a> | Theme adapted from&nbsp;<a href="<?php echo esc_url( __('http://www.eleventhemes.com/', 'eleventhemes') ); ?>" title="Eleven WordPress Themes" target="_blank">Eleven Themes </a></p>
 </div><!-- // copyright -->   
     
</div><!-- // wrap -->   

	<?php wp_footer(); ?>
	
</body>
</html>