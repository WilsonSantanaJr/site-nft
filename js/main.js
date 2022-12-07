// carousel glider
new Glider(document.querySelector('.glider'), {
    slidesToShow: 5,
    slidesToScroll: 1,
    draggable: true,
    dots: '.dots',
  });


//abrir e fechar o menu 'ipenMenu'
function openMenu() {
  document.body.classList.add('menu-expanded')
}

function closeMenu() {
  document.body.classList.remove('menu-expanded')
}

// Filtro
$('.filter-btn').on('click', function() {
  let type = $(this).attr('id');
  let boxes = $('.project-box');

  $('.main-btn').removeClass('active');
  $(this).addClass('active');

  if(type == 'art-btn') {
    eachBoxes('art', boxes);
  } else if(type == 'music-btn') {
    eachBoxes('music', boxes);
  } else if(type == 'photography-btn') {
    eachBoxes('photography', boxes);
  } else if(type == 'collectibles-btn') {
    eachBoxes('collectibles', boxes);
  }  else if(type == 'domain-btn') {
    eachBoxes('domain', boxes);
  } else if(type == 'added-btn') {
    eachBoxes('added', boxes);
  } else {
    eachBoxes('all', boxes)
  }
});

function eachBoxes(type, boxes) {
  if(type == 'all') {
    $(boxes).fadeIn();
  } else {
    $(boxes).each(function() {
      if(!$(this).hasClass(type)) {
        $(this).fadeOut('slow');
      } else {
        $(this).fadeIn();
      }
    });
  }
}