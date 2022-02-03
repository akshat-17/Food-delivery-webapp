/*sticky navi*/
$(document).ready(function() {

    /* For the sticky navigation */
    $('.js--section-features , .js--meal-plans').waypoint(function(direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
        
    },{
        
        offset:'60px;'
    });
    
 /*scroll down*/ 
    
    
    
    
    
    
    
    /*animations on scroll*/
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn');
        },{
        offset: '50%'
    });
        
     $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated fadeInLeft');
        },{
        offset: '2%'
    });
    
    $('.js--wp-6').waypoint(function(direction) {
        $('.js--wp-6').addClass('animated fadeInUp');
        },{
        offset: '50%'
        
    });
    
     $('.js--wp-7').waypoint(function(direction) {
        $('.js--wp-7').addClass('animated fadeInUp');
        },{
        offset: '50%'
        
    });
    
    $('.js--wp-9').waypoint(function(direction) {
        $('.js--wp-9').addClass('animated fadeInRight');
        },{
        offset: '50%'
        
    });
        
        
                           
                        
       /* navigation scroll*/  
     $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            console.log('test');
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
              console.log('test2');
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
              console.log('test3');
            return false;
          }
        }
      });
    });
                           
       
    
    
});
    