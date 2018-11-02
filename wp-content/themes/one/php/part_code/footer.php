<?php
?>
<!-- #footer -->
<div class="footer">
  <div class="fw-container">
    <div class="fw-row">
      <div class="fw-col-xs-12">
        <div class="footer_block">
          <div class="footer_part_1">
            <?php
            if (is_active_sidebar('footer_left')){
              dynamic_sidebar('footer_left');
            }
            ?>
            <div class="footer_copyright_desktop">
              <?=fw_get_db_settings_option('copyright')?>
            </div>
          </div>
          <div class="footer_part_2">
            <?php
            if (is_active_sidebar('footer_center')){
              dynamic_sidebar('footer_center');
            }
            ?>
          </div>
          <div class="footer_part_3">
            <?php
            if (is_active_sidebar('footer_right')){
              dynamic_sidebar('footer_right');
            }
            ?>
          </div>
          <div class="footer_part_4">
            <h2 class="widget-title">CONTACT</h2>

            <div class="footer_flex_part_4">
              <div class="footer_test_1">
                <?=fw_get_db_settings_option('footer_text_1')?>
              </div>

              <div class="between_block">
                <div class="footer_phone">
                  <i class="fa fa-phone" aria-hidden="true"></i> <?=fw_get_db_settings_option('telephone')?>
                </div>
                <div class="footer_social">
                  <a class="footer_facebook" href="<?=fw_get_db_settings_option('facebook_link')?>">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="<?=fw_get_db_settings_option('instagram_link')?>">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
              <div class="footer_mobile_logo">
                <?php if ($logo_black){ ?>
                  <a href="/">
                    <img src="<?=fw_get_db_settings_option('logo_scroll')['url']?>"/>
                  </a>
                <?php } else { ?>
                  <a href="/">
                    <img src="<?=fw_get_db_settings_option('logo_default')['url']?>"/>
                  </a>
                <?php } ?>
              </div>

            </div>

            <div class="footer_text_2">
              <?=fw_get_db_settings_option('footer_text_2')?>
            </div>
            <div class="footer_copyright_ipad">
              <?=fw_get_db_settings_option('copyright')?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- #end footer -->