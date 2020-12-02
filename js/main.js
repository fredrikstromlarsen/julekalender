// Init MasonryLayout.js
var msnry = new Masonry('.cal', {
  itemSelector: '.cal-wrapper',
  columnWidth: 20
});

// Open Calendar Window on Mouse Enter
// unused -_- var calElements = document.querySelectorAll('.cal-wrapper');
var calOpened = document.querySelectorAll('.cal-opened');

function openCalendar(i) {
  i--;
  calOpened[i].style.filter = 'opacity(100%)';
  calOpened[i].style.transform = 'translateY(0%)';
}