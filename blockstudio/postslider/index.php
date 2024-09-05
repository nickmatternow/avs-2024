<div class="splide c-post-slider" id="splide-carousel">
  <div class="carousel-text">
  <InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode(['core/heading', 'core/paragraph'])); ?>" template="<?php echo esc_attr( wp_json_encode([['core/heading', ['placeholder' => 'Title']], ['core/paragraph', ['placeholder' => 'Summary']]])); ?>"/>
  <a class="c-more-link" href="/news">See More News <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12" fill="none">
<path d="M1 6H9.35714H17.7143M13.8571 1L19 6L13.8571 11" stroke="#FF5800" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
</div>
        <div class="c-post-slider-slides">
          <div class="splide__track">
              <div class="splide__list">
                

                       <?php
                // Query the latest posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10, // Adjust the number of posts as needed
                );
                $query = new WP_Query($args);
                
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="splide__slide">
                            <div class="c-post-slider-inner">
                                <?php
                                // Get the categories of the post
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    // Get the first category
                                    $first_category = $categories[0];
                                    
                
                                    // Display SVG based on category name
                                    if ($first_category->name === 'News') {
                                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="46" height="47" viewBox="0 0 46 47" fill="none">
  <g clip-path="url(#clip0_622_22562)">
    <path d="M44.4431 19.4211H35.902V0.839286C35.902 0.377679 35.5383 0 35.0939 0H0.808056C0.363625 0 0 0.377679 0 0.839286V41.3013C0 44.4486 2.45649 46.9916 5.4867 47H39.7725C42.8028 47 45.2512 44.4486 45.2592 41.3013V20.2604C45.2592 19.7987 44.8956 19.4211 44.4512 19.4211H44.4431ZM5.4867 45.3214C3.35343 45.3214 1.62419 43.5254 1.61611 41.3013V1.67857H34.2858V41.3013C34.2858 42.8036 34.8596 44.2555 35.8858 45.3214H5.4867ZM43.635 41.3013C43.4734 46.6055 36.0636 46.6139 35.902 41.3013V21.0996H43.635V41.3013Z" fill="white"/>
    <path d="M28.8557 6.19385H7.03816C6.59373 6.19385 6.2301 6.57153 6.2301 7.03313V17.9103C6.2301 18.3719 6.59373 18.7496 7.03816 18.7496H28.8557C29.3001 18.7496 29.6637 18.3719 29.6637 17.9103V7.03313C29.6637 6.57153 29.3001 6.19385 28.8557 6.19385ZM28.0476 17.071H7.84622V7.87242H28.0476V17.071Z" fill="white"/>
    <path d="M28.8556 22.8118H20.9609C20.5165 22.8118 20.1528 23.1894 20.1528 23.6511V34.5282C20.1528 34.9898 20.5165 35.3675 20.9609 35.3675H28.8556C29.3 35.3675 29.6637 34.9898 29.6637 34.5282V23.6511C29.6637 23.1894 29.3 22.8118 28.8556 22.8118ZM28.0475 33.6889H21.7689V24.4903H28.0475V33.6889Z" fill="white"/>
    <path d="M6.46439 24.4903H16.1611C16.6055 24.4903 16.9691 24.1043 16.961 23.6427C16.961 23.1894 16.5974 22.8202 16.1611 22.8118H6.46439C6.01996 22.8202 5.66442 23.2062 5.6725 23.6678C5.68058 24.1211 6.02804 24.4819 6.46439 24.4903Z" fill="white"/>
    <path d="M6.46439 35.3675H16.1611C16.6055 35.3675 16.9691 34.9899 16.9691 34.5283C16.9691 34.0666 16.6055 33.689 16.1611 33.689H6.46439C6.01996 33.6974 5.66442 34.0834 5.6725 34.545C5.68058 34.9983 6.02804 35.3591 6.46439 35.3675Z" fill="white"/>
    <path d="M28.8556 39.1276H6.4644C6.01997 39.1276 5.66443 39.5136 5.66443 39.9752C5.66443 40.4285 6.01997 40.7977 6.4644 40.8061H28.8556C29.3001 40.8061 29.6556 40.4201 29.6556 39.9585C29.6556 39.5052 29.3001 39.136 28.8556 39.1276Z" fill="white"/>
    <path d="M6.46439 29.9289H16.1611C16.6055 29.9289 16.9691 29.5513 16.9691 29.0897C16.9691 28.628 16.6055 28.2504 16.1611 28.2504H6.46439C6.01996 28.2588 5.66442 28.6448 5.6725 29.1064C5.68058 29.5597 6.02804 29.9205 6.46439 29.9289Z" fill="white"/>
  </g>
  <defs>
    <clipPath id="clip0_622_22562">
      <rect width="45.2512" height="47" fill="white"/>
    </clipPath>
  </defs>
</svg>';
                                    } elseif ($first_category->name === 'Press Release') {
                                        echo '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10zm-1-15h2v6h-2zm0 8h2v2h-2z"/></svg>';
                                    }
                                    echo '<h5>' . esc_html($first_category->name) . '</h5>';
                                }
                                
                                ?>
                                
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo gdt_excerpt(25); ?></p>
                                <a class="c-more-link" href="<?php the_permalink(); ?>">Read More <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12" fill="none">
<path d="M1 6H9.35714H17.7143M13.8571 1L19 6L13.8571 11" stroke="#FF5800" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <div class="splide__slide">
                        <p><?php esc_html_e('No posts found.'); ?></p>
                    </div>
                <?php endif; ?>


              </div>
          </div>
          <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
  <rect x="37.25" y="37.25" width="36.5" height="36.5" rx="6.25" transform="rotate(-180 37.25 37.25)" fill="#1C1C1B" stroke="#E3E4D2" stroke-width="1.5"/>
  <path d="M21 26L13.5 18.5L21 11" stroke="#FF5800" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            </button>
            <button class="splide__arrow splide__arrow--next">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
  <rect x="0.75" y="0.75" width="36.5" height="36.5" rx="6.25" fill="#1C1C1B" stroke="#E3E4D2" stroke-width="1.5"/>
  <path d="M17 12L24.5 19.5L17 27" stroke="#FF5800" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            </button>
        </div>
        </div>
    </div>