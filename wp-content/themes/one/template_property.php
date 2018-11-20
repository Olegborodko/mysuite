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

          <div class="pr__description">
            <div class="pr__arrow_back">

            </div>
            <div class="pr__top_title">
              Mayfield Avenue, Los Angeles
            </div>
            <div class="pr__title">
              11649 Mayfield
            </div>
            <div class="pr__price">
              $200 per day
            </div>
            <div class="pr__text_block">
              <div class="pr__text_left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.
                <br><br>
                Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi.
              </div>
              <div class="pr__text_right">
                Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.
                <br><br>
                Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi.
              </div>
            </div>

            <div class="pr__view_gallery">
              <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_2.png"/>
              <div class="pr__view_gallery_title">
                VIEW GALLERY
              </div>
            </div>
            <div class="pr__virtual_tour">
              <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_7.png"/>
              <div class="pr__virtual_tour_title">
                Virtual Tour
              </div>
            </div>
            <div class="pr__one_month_free">
              <img src="<?= get_stylesheet_directory_uri() ?>/img/star_white.png">
              <div class="pr__one_month_free_title">
                One Month free!
              </div>
            </div>
            <div class="pr__semi_private">
              Semi-private
            </div>
          </div>

        </div>
        <div class="fw-col-xs-12 fw-col-lg-3">
          <div class="pr__available_block">
            <div class="pr__available_top_title">
              11649 Mayfield
            </div>
            <div class="pr__available_title">
              Only 2 out of 10 apartments are available!
            </div>
            <a class="pr__browse_available">
              Browse Available
            </a>
            <div class="pr__available_text">
              For leasing and other inquiries, please complete the contact form
              or give us a call.
            </div>
            <div class="pr__available_bottom_block">
              <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_6.png">
              <div class="pr__available_bottom_form">Form</div>
              <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_5.png">
              <div class="pr__available_bottom_number">424 222 7733</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fw-container">
      <div class="fw-row">
        <div class="fw-col-xs-12 fw-col-lg-9">
          <div class="apartments">
            <div class="apartments__title">
              Apartments
            </div>
            <div class="apartments__top js_apartments__top">
              0 Bedroom <i class="fa fa-angle-down js_apartments__arrow_down" aria-hidden="true"></i>
              <i class="fa fa-angle-up js_apartments__arrow_up" aria-hidden="true"></i>
            </div>
            <table class="apartments__table js_apartments__table">
              <tr class="apartments__table_title">
                <td class="apartments__table_one">
                  Floor Plan
                </td>
                <td>
                  Bed / Bath
                </td>
                <td>
                  Rent
                </td>
                <td>
                  Deposit
                </td>
                <td>
                </td>
              </tr>
              <tr>
                <td class="apartments__table_one">
                  <a href="">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/path.png">  Suite 4C
                    <div class="apartments__table_view">View</div>
                  </a>
                </td>
                <td class="apartments__table_two">
                  1/1
                </td>
                <td class="apartments__table_three">
                  $2,795 – $3,795
                </td>
                <td class="apartments__table_four">
                  $1,000
                </td>
                <td class="apartments__table_contact">
                  Contact
                </td>
              </tr>
              <tr>
                <td class="apartments__table_one">
                  <a href="">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/path.png">  Suite 4C
                    <div class="apartments__table_view">View</div>
                  </a>
                </td>
                <td class="apartments__table_two">
                  1/1
                </td>
                <td class="apartments__table_three">
                  $2,795 – $3,795
                </td>
                <td class="apartments__table_four">
                  $1,000
                </td>
                <td class="apartments__table_contact">
                  Contact
                </td>
              </tr>
              <tr>
                <td class="apartments__table_one">
                  <a href="">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/path.png">  Suite 4C
                    <div class="apartments__table_view">View</div>
                  </a>
                </td>
                <td class="apartments__table_two">
                  1/1
                </td>
                <td class="apartments__table_three">
                  $2,795 – $3,795
                </td>
                <td class="apartments__table_four">
                  $1,000
                </td>
                <td class="apartments__table_avaliable">
                  Available
                </td>
              </tr>
            </table>

            <div class="apartments__top js_apartments__top">
              0 Bedroom <i class="fa fa-angle-down js_apartments__arrow_down" aria-hidden="true"></i>
              <i class="fa fa-angle-up js_apartments__arrow_up" aria-hidden="true"></i>
            </div>
            <table class="apartments__table js_apartments__table">
              <tr class="apartments__table_title">
                <td class="apartments__table_one">
                  Floor Plan
                </td>
                <td>
                  Bed / Bath
                </td>
                <td>
                  Rent
                </td>
                <td>
                  Deposit
                </td>
                <td>
                </td>
              </tr>
              <tr>
                <td class="apartments__table_one">
                  <a href="">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/path.png">  Suite 4C
                    <div class="apartments__table_view">View</div>
                  </a>
                </td>
                <td class="apartments__table_two">
                  1/1
                </td>
                <td class="apartments__table_three">
                  $2,795 – $3,795
                </td>
                <td class="apartments__table_four">
                  $1,000
                </td>
                <td class="apartments__table_contact">
                  Contact
                </td>
              </tr>
              <tr>
                <td class="apartments__table_one">
                  <a href="">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/path.png">  Suite 4C
                    <div class="apartments__table_view">View</div>
                  </a>
                </td>
                <td class="apartments__table_two">
                  1/1
                </td>
                <td class="apartments__table_three">
                  $2,795 – $3,795
                </td>
                <td class="apartments__table_four">
                  $1,000
                </td>
                <td class="apartments__table_contact">
                  Contact
                </td>
              </tr>
              <tr>
                <td class="apartments__table_one">
                  <a href="">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/property/path.png">  Suite 4C
                    <div class="apartments__table_view">View</div>
                  </a>
                </td>
                <td class="apartments__table_two">
                  1/1
                </td>
                <td class="apartments__table_three">
                  $2,795 – $3,795
                </td>
                <td class="apartments__table_four">
                  $1,000
                </td>
                <td class="apartments__table_avaliable">
                  Available
                </td>
              </tr>
            </table>
          </div>

          <div class="apartments__quote">
            <div class="apartments__quote_center">
            <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_3.png">
              Square footage is approximate. Pictures featured may not be of exact unit or furnishings. Pricing and availability subject to change.
            </div>
          </div>

          <div class="apartments__free">
            <div class="apartments__free_top">
              <img src="<?= get_stylesheet_directory_uri() ?>/img/star_white.png">
              One Month free!
            </div>
            <div class="apartments__free_center">
              <div class="apartments__free_left">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/property/pr_12.png">
              </div>
              <div class="apartments__free_right">
                <div class="apartments__free_right_top">
                  Mayfield Avenue, Los Angeles
                </div>
                <div class="apartments__free_right_title">
                  <img src="<?= get_stylesheet_directory_uri() ?>/img/star.png">
                  Nemo enim ipsam voluptatem, quia voluptas sit.
                </div>
                <div class="apartments__free_right_description">
                  Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi.
                </div>
              </div>
            </div>
          </div>

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
                    <li>On-Site Maintenance</li>
                    <li>24-Hour Concierge</li>
                    <li>Valet Dry Cleaning Service</li>
                    <li>Controlled Access Parking</li>
                    <li>Executive Business Center</li>
                    <li>Furnished Rentals Available</li>
                    <li>Grande Porte-Cochère</li>
                    <li>Upgraded Fitness Center Including Restrooms</li>
                    <li>with Full Showers</li>
                  </ul>
                </div>
                <div class="building__item_r">
                  <ul>
                    <li>On-Site Storage</li>
                    <li>Resident Media Lounge</li>
                    <li>Resident Rooftop Lounge + Fireplace</li>
                    <li>Dry Sauna</li>
                    <li>Wi-Fi in Common Areas</li>
                    <li>Package Acceptance</li>
                    <li>Electric Vehicle Charging</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php
get_footer();
