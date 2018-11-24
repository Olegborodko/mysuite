<?php
/*
Template Name: Property
*/
get_header('property');
?>

<?php
while ( have_posts() ) :
  the_post();

  get_template_part( 'template-parts/zero', 'page' );

  // If comments are open or we have at least one comment, load up the comment template.
//  if ( comments_open() || get_comments_number() ) :
//    comments_template();
//  endif;

endwhile; // End of the loop.
?>

  <div class="property">
    <div class="property__top_image">
    </div>

    <div class="fw-container fw-big-container">
      <div class="fw-row">
        <div class="fw-col-xs-12 fw-col-lg-9">
          <?php
          require( get_stylesheet_directory() . '/php/property/description.php' );
          ?>
        </div>
        <div class="fw-col-xs-12 fw-col-lg-3">
          <?php
          require( get_stylesheet_directory() . '/php/property/pr__available_block.php' );
          ?>
        </div>
      </div>
    </div>

    <div class="fw-container">
      <div class="fw-row">
        <div class="fw-col-xs-12 fw-col-lg-9">
          <?php
          require( get_stylesheet_directory() . '/php/property/apartments.php' );
          ?>

          <?php
          require( get_stylesheet_directory() . '/php/property/apartments__quote.php' );
          ?>

          <?php
          require( get_stylesheet_directory() . '/php/property/apartments__free.php' );
          ?>

          <div class="building">
            <div class="building__title">
              Building Amenities and Apartment Features
            </div>

            <div class="building__item">
              <div class="building__item_title">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_9.png">
                Community Amenities
              </div>
              <div class="building__item_c">
                <div class="building__item_l">
                  <ul>
                    <li><div class="building__check"></div><div class="building__check_text">On-Site Maintenance</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">24-Hour Concierge</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Valet Dry Cleaning Service</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Controlled Access Parking</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Executive Business Center</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Furnished Rentals Available</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Grande Porte-Cochère</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Upgraded Fitness Center Including Restrooms with Full Showers</div></li>
                  </ul>
                </div>
                <div class="building__item_r">
                  <ul>
                    <li><div class="building__check"></div>On-Site Storage</li>
                    <li><div class="building__check"></div>Resident Media Lounge</li>
                    <li><div class="building__check"></div>Resident Rooftop Lounge + Fireplace</li>
                    <li><div class="building__check"></div>Dry Sauna</li>
                    <li><div class="building__check"></div>Wi-Fi in Common Areas</li>
                    <li><div class="building__check"></div>Package Acceptance</li>
                    <li><div class="building__check"></div>Electric Vehicle Charging</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="building__item apartment_amenities">
              <div class="building__item_title">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_10.png">
                Apartment Amenities
              </div>
              <div class="building__item_c">
                <div class="building__item_l">
                  <ul>
                    <li><div class="building__check"></div><div class="building__check_text">Furnished</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">9 ft. Ceilings</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Berber Carpet</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Cable/Internet Ready</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Central Air and Heat</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Controlled Access Entry</div></li>
                    <li><div class="building__check"></div><div class="building__check_text">Custom-Designed Kitchen Cabinetry</div></li>
                  </ul>
                </div>
                <div class="building__item_r">
                  <ul>
                    <li><div class="building__check"></div>Expansive Glass Dual Pane Windows</li>
                    <li><div class="building__check"></div>Granite Counter Tops</li>
                    <li><div class="building__check"></div>Individual Utility Metering</li>
                    <li><div class="building__check"></div>Washer/Dryer in Unit</li>
                    <li><div class="building__check"></div>Premium Frigidaire Professional Series Appliances</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="building__item pet_policy">
              <div class="building__item_title">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_8.png">
                Pet Policy
              </div>
              <div class="building__item_c pet_policy__description">
                Pets are not allowed in co-living suites, however, they are allowed in private MySuite apartments.<br>
                Maximum of two pets allowed with a deposit of $350 each and $50/month pet rent. Breed restrictions apply.
              </div>
            </div>

            <div class="partnership_benefits__title">
              Local Partnership & Benefits
            </div>

            <div class="best_coffee__free">
              <div class="best_coffee__free_top">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_14_w.png">
                The Best coffee in town!
              </div>
              <div class="best_coffee__free_center">
                <div class="best_coffee__free_left">
                  <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_15.png">
                </div>
                <div class="best_coffee__free_right">
                  <div class="best_coffee__free_right_top">
                    Menotti's Coffee Stop
                  </div>
                  <div class="best_coffee__free_right_title">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_4.png">
                    Nemo enim ipsam voluptatem, quia voluptas sit.
                  </div>
                  <div class="best_coffee__free_right_description">
                    Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
                  </div>
                  <div class="best_coffee__bottom_info">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_5.png">
                    <div class="best_coffee__bottom_phone">
                      424 222 7733
                    </div>
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_1.png">
                    <div class="best_coffee__bottom_email">
                      coffeeveniceca.com
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="best_coffee__free best_coffee__free_two">
              <div class="best_coffee__free_top">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_14_w.png">
                The Best coffee in town!
              </div>
              <div class="best_coffee__free_center">
                <div class="best_coffee__free_left">
                  <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_15.png">
                </div>
                <div class="best_coffee__free_right">
                  <div class="best_coffee__free_right_top">
                    Menotti's Coffee Stop
                  </div>
                  <div class="best_coffee__free_right_title">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_4.png">
                    Nemo enim ipsam voluptatem, quia voluptas sit.
                  </div>
                  <div class="best_coffee__free_right_description">
                    Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
                  </div>
                  <div class="best_coffee__bottom_info">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_5.png">
                    <div class="best_coffee__bottom_phone">
                      424 222 7733
                    </div>
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_1.png">
                    <div class="best_coffee__bottom_email">
                      coffeeveniceca.com
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="location__title">
              Location
            </div>
            <div class="building__item location__description">
              <div class="building__item_title">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/property/shape.png">
                11640 Mayfield Avenue  Los Angeles CA 90025
              </div>
            </div>
            <?php
            require( get_stylesheet_directory() . '/php/property/map_slider.php' );
            ?>
          </div>


        </div>
      </div>
    </div>

  </div>

<?php
get_footer();
