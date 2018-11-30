<div class="filter__result_blocks">

  <?php
  $url = 'https://api.rentcafe.com/rentcafeapi.aspx?apiToken=8a203610-123f-4105-ad17-b6ff666f22af&requestType=searchJSON';
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_TIMEOUT, 5);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $data = curl_exec($ch);
  curl_close($ch);
  // echo $data;

//  echo "<pre>";
//  var_dump(json_decode($data, true));
//  echo "</pre>";
  $result = json_decode($data, true);
  ?>

  <?php
  foreach ( $result as $key => $value ) {
    //var_dump( $value["PropertyName"] );
    //propertyShortName
    //Address
    //City
    //State
    //ZipCode
    //SiteUrl
    //minbed
    //maxbed
    //minbath
    //maxbath
    //minrent
    //maxrent
    //MinArea
    //MaxArea
    //MarketingType 1
    //Amenity
    //                        ImageURL
    //bSpecialsAvailable
    //PublishOnPortal -1
    //availability -1
    //AvailabilityOrdering 0
  //UseCallForPricing false
    //Specials 0

    $img = fw_get_db_settings_option('set_site_donor')."/".$value["ImageURL"];
    $link_to_property = fw_get_db_settings_option('set_property_page').'?slug='.$value["propertyShortName"];
  ?>

    <div class="filter__r_item">
      <div class="filter__r_item_block_hover">
        <div class="filter__r_premium">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/star_white.png"> One Month free!
        </div>
        <img class="filter__r_item_img_block_hover" src="<?=$img?>">
        <div class="filter__r_item_a_hover_link_background"></div>
        <a href="<?=$link_to_property?>" class="filter__r_item_a_hover_center">
          Learn More
          <div class="filter__r_item_a_hover_arrow"></div>
          <div class="filter__r_item_a_hover_bath">
            <img src="<?= get_stylesheet_directory_uri() ?>/img/bathtub.png">
            <?=$value["maxbath"]?>
          </div>
          <div class="filter__r_item_a_hover_bed">
            <img src="<?= get_stylesheet_directory_uri() ?>/img/bed.png">
            <?=$value["maxbed"]?>
          </div>
        </a>
      </div>
      <div class="filter__r_description">
        <div class="filter__r_description_left">
          <div class="filter__r_item_location">
            <?=$value["State"]?>, <?=$value["City"]?>
          </div>
          <div class="filter__r_item_title">
            <?=$value["PropertyName"]?>
          </div>
          <div class="filter__r_item_price">
            <?=$value["minrent"]?>$ - <?=$value["maxrent"]?>$ per day
          </div>
        </div>
        <div class="filter__r_description_right">
          <a href="<?=$link_to_property?>" class="filter__r_button">
            Semi-private
          </a>
        </div>
      </div>
    </div>

  <?php } ?>

</div>