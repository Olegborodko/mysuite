<div class="map">
  <div class="map_left">
    <div id="map"></div>
    <script>
        var map_map, map_marker;
        function initMap() {
            map_map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 27.7, lng: 85.3},
                zoom: 16
            });

            map_marker = new google.maps.Marker({
                position: {
                    lat: 27.7,
                    lng: 85.3
                },
                map: map_map
            });
        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?=fw_get_db_settings_option('set_google_key')?>&callback=initMap"
            type="text/javascript"></script>
  </div>
  <div class="map_right">
    <div class="swiper-button-prev map-button-prev">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <div class="swiper-container map-swiper-container">
      <div class="swiper-wrapper map-swiper-wrapper">
        <div class="swiper-slide map-swiper-slide">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/property/map4.png">
        </div>
        <div class="swiper-slide map-swiper-slide">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/property/map2.png">
        </div>
        <div class="swiper-slide map-swiper-slide">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/property/map3.png">
        </div>
        <div class="swiper-slide map-swiper-slide">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/property/map2.png">
        </div>
        <div class="swiper-slide map-swiper-slide">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/property/map4.png">
        </div>
        <div class="swiper-slide map-swiper-slide">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/property/map2.png">
        </div>
        <div class="swiper-slide map-swiper-slide">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/property/map3.png">
        </div>
        <div class="swiper-slide map-swiper-slide">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/property/map2.png">
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination map-swiper-pagination"></div>
    </div>
    <div class="swiper-button-next map-button-next">
      <i class="fa fa-angle-down" aria-hidden="true"></i>
    </div>
  </div>
</div>

<div class="map__bottom">
  <div class="map__bottom_left">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.
    <br><br>
    Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi.
  </div>
  <div class="map__bottom_right">
    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.
    <br><br>
    Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi.
  </div>
</div>