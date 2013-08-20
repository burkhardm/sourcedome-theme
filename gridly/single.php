<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
           
       
   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail() ) { ?>			
				<div class="gridly-image"><?php the_post_thumbnail( 'detail-image' );  ?></div>
                <div class="gridly-category"><p><?php the_category(', ') ?></p></div>
             <?php } ?>                   

       			<div class="gridly-copy gridly-singlepost">
                <h1><?php the_title(); ?></h1>
           		 <?php the_content(); ?>
		 
		 <h4>Summary</h4>
<div id="content">
    <div id="mainwrap" style="float:left; width:100%; min-height: 150px; height:auto !important">
        <div id="main" style="margin-right:300px;">

	<!-- table -->
            <div style="display: table; border-spacing: 4px;">
        	 <?php if(get_field('project_page')) { ?>
			<div style="display: table-row;">
            			<div style="display: table-cell;">Project Page:</div>
            			<div style="display: table-cell;"><a href='<?php the_field('project_page'); ?>' target="_blank"><?php the_field('project_page'); ?></a></div>
        		</div>
		 <?php } ?>
        	 <?php if(get_field('project_status')) { ?>
			<div style="display: table-row;">
            			<div style="display: table-cell;">Project Status:</div>
            			<div style="display: table-cell;"><?php if(strcmp(get_field('project_status'),'open')==0) { echo 'In Progress'; } else if(strcmp(get_field('project_status'),'publish')==0) { echo 'Publishing Source Code'; } else if(strcmp(get_field('project_status'),'closed')==0) { echo 'Closed'; } ?></div>
        		</div>
		<?php } ?>
		<?php if(get_field('technology')) { ?>
			<div style="display: table-row;">
            			<div style="display: table-cell;">Technology:</div>
            			<div style="display: table-cell;"><?php the_field('technology'); ?></div>
        		</div>
		<?php } ?>
				<?php if(get_field('repository_type') && get_field('repository')) { ?>
			<div style="display: table-row;">
            			<div style="display: table-cell; "><?php if(strcmp(get_field('repository_type'),'github')==0) { echo 'Github'; } else if(strcmp(get_field('repository_type'),'sf')==0) { echo 'Source Forge'; } else if(strcmp(get_field('repository_type'),'svn')==0) { echo 'Subversion'; } ?>:</div>
            			<div style="display: table-cell;"><a href='<?php the_field('repository'); ?>' target="_blank"><?php the_field('repository'); ?></a></div>
        		</div>
		<?php } ?>
		<?php if(get_field('license')) { ?>
			<div style="display: table-row;">
            			<div style="display: table-cell;">License:</div>
            			<div style="display: table-cell;"><?php the_field('license'); ?></div>
        		</div>
		<?php } ?>
    		</div>
        </div>
    </div>
    
    <div id="leftnav" style="float:left; width:250px; margin-left: -300px;">
	<?php if(get_field('project_logo')) { ?>
        <?php if(get_field('project_logo_link')) { ?><a href="<?php the_field('project_logo_link') ?>" target="_blank"><?php } ?>
		<img src="<?php the_field('project_logo') ?>" />
	<?php if(get_field('project_logo_link')) { ?></a><?php } ?>
	<?php } ?>
    </div>
    

</div>
		
		 <?php if(get_field('acknowledgements')) { ?>
		 <p><h4>Acknowledgements</h4>
		 <?php the_field('acknowledgements'); ?></p>
		 <?php } ?>

	         <?php if(get_field('credits')) { ?>
		 <p><h4>Credits</h4>
		 <?php the_field('credits'); ?></p>
		 <?php } ?>

		 
                 <p><h4>Tags</h4><?php the_tags('', ', ', '<br />'); ?></p>

		 <?php if(get_field('featured_image_copyright')) { ?>
		 <p><h4>Copyright</h4>
		 <?php if(get_field('featured_image_link')) { ?>
		 Featured Image&nbsp;<a href='<?php the_field('featured_image_link'); ?>' target="_blank"><?php the_field('featured_image_copyright'); ?></a></p>
		 <?php } else { ?>
		 Featured Image&nbsp;<?php the_field('featured_image_copyright'); ?>
		 <?php } ?>
		 <?php } ?>

                
                <div class="clear"></div>
				<?php comments_template(); ?> 
                </div>


                
                
       </div>
       
		<?php endwhile; endif; ?>
       
       <div class="post-nav">
               <div class="post-prev"><?php previous_post_link('%link'); ?> </div>
			   <div class="post-next"><?php next_post_link('%link'); ?></div>
        </div>      
   
       
       
       
  
 

<?php get_footer(); ?>