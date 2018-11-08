<div class="filter__block_right">

  <div class="filter__bedrooms">
    <div class="filter__block_title">
      Bedrooms
    </div>
    <input type="text" class="filter__bedrooms_slider" value="" />
    <div class="filter__bedrooms_start"></div>&nbsp;-&nbsp;<div class="filter__bedrooms_end"></div>
  </div>

  <div class="filter__bathrooms">
    <div class="filter__block_title">
      Bathrooms
    </div>
    <input type="text" class="filter__bathrooms_slider" value="" />
    <div class="filter__bathrooms_start"></div>&nbsp;-&nbsp;<div class="filter__bathrooms_end"></div>
  </div>

  <div class="filter__price_range">
    <div class="filter__block_title">
      Price Range
    </div>
    <input type="text" class="filter__price_slider" value="" />
    <div class="filter__price_start"></div>&nbsp;-&nbsp;<div class="filter__price_end"></div>
  </div>

  <div class="filter__special_offers_only">
  <img src="<?= get_stylesheet_directory_uri() ?>/img/star.png"/>
    <div class="filter__special_offers_text">Show Special Offers only</div>
    <div class="filter__special_offers_tumbler">
      <label class="switch">
        <input type="checkbox" class="primary">
        <span class="slider-checkbox round"></span>
      </label>
    </div>
  </div>

</div>


<style>

 #slider12c .slider-track-high {
    background: green;
  }

  #slider12c .slider-track-low {
    background: red;
  }

  #slider12c .slider-selection {
    background: yellow;
  }
</style>