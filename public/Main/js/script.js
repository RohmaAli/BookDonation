$(document).ready(function(){

    $('.nav-button').click(function(){
        $('.nav-button').toggleClass('change');
        });

        $(window).scroll(function(){
        let position = $(this).scrollTop();

        if(position >= 200){
          $('.nav-menu').addClass('custom-navbar')
        }else{
          $('.nav-menu').removeClass('custom-navbar')
        }
        });





    $('#slides').superslides({
      animation: 'fade',
      play: 5000,
      pagination: false
    });

    var typed = new Typed('.typed', {
      strings: ['Need Book Donation.', 'Bless Others With Your Gift.', 'Give A Hand.',],
      typeSpeed: 70,
      loop: true,
      startDelay: 1000,
      showCursor: false
    });

});
