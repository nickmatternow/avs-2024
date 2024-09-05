
<div class="c-carousel-wrap">
  <div class="swiper">
        <div class="swiper-wrapper">
  
  
  <?php
  
  $repeater_array = $a['repeater'];
  
  if($repeater_array) {
  foreach($repeater_array as $key => $value) { ?>
          <div class="swiper-slide swiper-slide-3f38">
            <div class="swiper-slide-content swiper-slide-content-cd26">
              <div class="swiper-slide-content-inner">
                <div class="swiper-slide-quote">”</div>
                <div class="swiper-slide-image">
                <?php
                  $file = $value['authorImage'];
                  $attachment_id = $file['ID'];
                  if ($file) {
                      $image_html = wp_get_attachment_image($attachment_id, 'thumbnail');
                      if ($image_html) {
                          echo $image_html; // Ensure the image is echoed
                      }
                  }
                  ?>
                  <?php echo $value['author']; ?>
                </div>
                <div class="swiper-slide-text">
                <?php echo $value['quote']; ?>
                </div>
              </div>
            </div>
          </div>
  <?php }
  }
  ; ?>
  
  
  
  </div>
      </div>
  
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev">
      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
    <rect x="37.25" y="37.25" width="36.5" height="36.5" rx="6.25" transform="rotate(-180 37.25 37.25)" fill="#1C1C1B" stroke="#E3E4D2" stroke-width="1.5"/>
    <path d="M21 26L13.5 18.5L21 11" stroke="#FF5800" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
      </div>
      <div class="swiper-button-next">
      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
  <rect x="0.75" y="0.75" width="36.5" height="36.5" rx="6.25" fill="#1C1C1B" stroke="#E3E4D2" stroke-width="1.5"/>
  <path d="M17 12L24.5 19.5L17 27" stroke="#FF5800" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
      </div>
</div>

