<div class="sidebar"><div class="shadow d-lg-block d-none border-top-tertiary pt-lg-3 pb-lg-4  border_form order-lg-1 order-1">
    
    <span class="d-block pt-lg-1 text-center font_default text_normal text_26 line_height_31 pb-1"><?php echo $args['page_templates']['subpage']['sidebar']['request_service']['heading']; ?></span>
    <span class="d-block pb-lg-4 text-center font_default text_bold text_26 line_height_31"><?php echo $args['page_templates']['subpage']['sidebar']['request_service']['subheading']; ?></span>
  <?php 
                                    $form_id = $args['page_templates']['subpage']['sidebar']['request_service']['gravity_form_id']; 
                                    echo do_shortcode('[gravityforms id='.$form_id.' ajax=true]');?> 
</div></div>