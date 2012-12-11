/** Custom splashbox settings **/

$(function() {
  $('#splashbox1').carouFredSel({
    width: '100%',
    items: {
      visible: 1,
      start: -1
    },
    scroll: {
      items: 1,
      duration: 1000,
      timeoutDuration: 3000
    },
    prev: '#prev',
    next: '#next'
  });
});