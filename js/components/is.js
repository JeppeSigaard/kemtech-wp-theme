function is_mobile(){
    return $('body').hasClass('is-mobile');
};

function is_touch_device() {
  return 'ontouchstart' in window || navigator.maxTouchPoints;
};