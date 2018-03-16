<?php
    // CURRENTLY CODED TO USE FOUNDATION FRAMEWORK, PLEASE CHANGE TO FIT YOUR FRAMEWORK/LIBRARY - LOVE JONATHON :D
    if( have_rows('content') ):
    
    while ( have_rows('content') ) : the_row();
    
        if( get_row_layout() == '100%_full_width' ): ?>
            <div class="
                <?php 
                 the_sub_field('background_color');
                 echo ' ';
                 if (get_sub_field('background_overlay')){
                    the_sub_field('background_overlay');
                    echo ' ';
                 }
                 if (get_sub_field('section_spacing')){
                    the_sub_field('section_spacing');
                    echo ' ';
                 }
                 if (get_sub_field('section_classes')){
                    the_sub_field('section_classes');
                    echo ' ';
                }?> 
            " 
            style="background-image: url(<?php if (get_sub_field('background_image')) { the_sub_field('background_image'); } ?>)">
                <?php the_sub_field('input'); ?>
            </div>
        
       <?php elseif( get_row_layout() == 'generic_full_width' ): ?>
            
             <div class="row <?php 
                 the_sub_field('background_color');
                 echo ' ';
                 if (get_sub_field('background_overlay')){
                    the_sub_field('background_overlay');
                    echo ' ';
                 }
                 if (get_sub_field('section_spacing')){
                    the_sub_field('section_spacing');
                    echo ' ';
                 }
                 if (get_sub_field('section_classes')){
                    the_sub_field('section_classes');
                    echo ' ';
                }?> 
            " 
            style="background-image: url(<?php if (get_sub_field('background_image')) { the_sub_field('background_image'); } ?>)">
                <div class="columns small-12">
                    <?php the_sub_field('input'); ?>
                </div>
            </div>
            
        <?php elseif( get_row_layout() == 'two-third__one-third' ): ?>
             <div class="row <?php 
                 the_sub_field('background_color');
                 echo ' ';
                 if (get_sub_field('background_overlay')){
                    the_sub_field('background_overlay');
                    echo ' ';
                 }
                 if (get_sub_field('section_spacing')){
                    the_sub_field('section_spacing');
                    echo ' ';
                 }
                 if (get_sub_field('section_classes')){
                    the_sub_field('section_classes');
                    echo ' ';
                }?> 
            " 
            style="background-image: url(<?php if (get_sub_field('background_image')) { the_sub_field('background_image'); } ?>)">
                <div class="columns medium-8 <?php
                        if(get_sub_field('swap_column_position')){
                            echo 'medium-push-4';
                        }
                    ?>
                ">
                    <?php the_sub_field('left_input'); ?>
                </div>
                <div class="columns medium-4 <?php
                        if(get_sub_field('swap_column_position')){
                            echo 'medium-pull-8';
                        }
                    ?>
                ">
                    <?php the_sub_field('right_input'); ?>
                </div>
            </div>
        
        <?php endif;
    
    endwhile;
    
    else :
    
    endif;

?>