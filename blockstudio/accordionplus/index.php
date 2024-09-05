<div class="c-accordion-wrapper">
        <div class="c-accordion-column c-accordion-column-left">
            <div class="accordion">





<?php
            $repeater_array = $a['items'];
  
  if($repeater_array) {
  foreach($repeater_array as $key => $value) { 
    $active_class = $key === 0 ? 'active' : '';
    $file = $value['accordionimage'];
                    $attachment_id = $file['ID'];
                    $image_url = wp_get_attachment_url($attachment_id);
        ?>
        
        <div class="c-accordion-item <?php echo $active_class; ?>" data-image="<?php echo esc_url($image_url); ?>">
            <div class="c-accordion-item-inner">
                <h4 class="c-accordion-header"><?php echo esc_html($value['title']); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M8 10L12 14L16 10" stroke="#FF5B00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                        </h4>
                <div class="c-accordion-content">
                    <p><?php echo esc_html($value['details']); ?></p>
                </div>
            </div>
        </div>

            <?php }
  }
  ; ?>


      

            </div>
        </div>

        <div class="c-accordion-column c-accordion-column-right">
            <?php 
            
            if($repeater_array) {
                foreach($repeater_array as $key => $value) { 
                    if ($key === 0) { // Only process the first item
                    $file = $value['accordionimage'];
                    $attachment_id = $file['ID'];
                    $image_url = wp_get_attachment_url($attachment_id);
                    if ($file) {
                        $image_html = wp_get_attachment_image($attachment_id, 'large');
                        if ($image_html) {
                            echo '<img id="c-accordion-image" src="' . esc_url($image_url) . '" alt="Accordion Image">';
                        }
                    }
                    break;
                }
            }
            }
            ; ?>
            
        </div>



    </div>

