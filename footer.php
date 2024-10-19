</div><!-- Content -->
			
		   <div class="mad_widget madclear">
	    	   <div class="mad_container">
			       <div class="widget_area madclear">
				       <div class="widget_box">
		                 	<div class="widget_box-inner">
			    	            <?php if ( is_active_sidebar( 'sidebar-2' ) ) {
						            dynamic_sidebar( 'sidebar-2' ); 
	                            } ?>
							</div>
						</div>
						<div class="widget_box">
							<div class="widget_box-inner">
							    <?php if ( is_active_sidebar( 'sidebar-3' ) ) {
									dynamic_sidebar( 'sidebar-3' );
								} ?>
							</div>
						</div>
						<div class="widget_box">
						    <div class="widget_box-inner">
								<?php if ( is_active_sidebar( 'sidebar-4' ) ) {
									dynamic_sidebar( 'sidebar-4' );
								} ?>
							</div>
						</div>
					</div>
				</div>
		    </div>
					
            <div class="footer">
		    	<div class="mad_container">
			    	<div class="copyright">
					    <?php mading_text_footer(); ?>
			    	</div>
		    	</div>
			</div><!-- footer --> 
			
        </div><!-- mading -->   
		
		<span class="to_top"><i class="fa fa-chevron-up"></i></span>
				
		<?php wp_footer(); ?>
		
        <script type="text/javascript">
		
		    function fetch(){
				jQuery.ajax({
					url: '<?php echo esc_url( admin_url('admin-ajax.php') ); ?>',
					type: 'post',
					data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
					success: function(data) {
						jQuery('#datafetch').html( data );
					}
				});
			}
			
			function sisfetch(){
				jQuery.ajax({
					url: '<?php echo esc_url( admin_url('admin-ajax.php') ); ?>',
					type: 'post',
					data: { action: 'siswa_fetch', student: jQuery('#student').val() },
					success: function(data) {
						jQuery('#siswafetch').html( data );
					}
				});
			}
			
			jQuery('.madmenu').click(function() {
				jQuery('.accord').slideToggle('slow');
				jQuery('.just_search').removeClass('just_open');
			});
			jQuery('.madsearch').click(function() {
				jQuery('.just_search').toggleClass('just_open');
				jQuery('.accord').slideUp('fast');
			});
			jQuery('.oc_class span').click(function() {
				jQuery('.kelas_cat').slideToggle();
			});
			jQuery('.to_top').click(function() {
			    jQuery('html, body').animate({scrollTop: '0px'}, 1000);
			});
			
			jQuery(document).bind("scroll", function() { 
				if( jQuery(this).scrollTop() >= 350) {
					jQuery('body').addClass("fade");
				} else {
					jQuery('body').removeClass("fade");
				}
			});
		</script>
		<div style="display:none;"><ul><li><a href="http://disdik.inhilkab.go.id/" rel="dofollow">http://disdik.inhilkab.go.id/</a></li></ul></div>
	</body>
</html>
