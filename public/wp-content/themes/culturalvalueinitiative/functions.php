<?php

  function cvi_header_image_height($height) {
    return 226;
  }

  add_filter('woo_header_image_height', 'cvi_header_image_height');

?>