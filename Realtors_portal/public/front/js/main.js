$(document).ready(function() {
	jQuery('#mainSlider').nivoSlider({
    	directionNav: true,
    	animSpeed: 500,
    	effect: 'random',
    	slices: 18,
    	pauseTime: 5000,
    	pauseOnHover: false,
    	controlNav: false,
    	prevText: '<img src="pre-bn.png"/*tpa=http://demo02.123corp.com.vn/thanhhan/js/img/pre-bn.png*/>',
    	nextText: '<img src="next-bn.png"/*tpa=http://demo02.123corp.com.vn/thanhhan/js/img/next-bn.png*/>'
    });
    /*----------------------------------*/
    $(".slider-partner").lightSlider({
        item:5,
        loop:true,
        auto:true,
        pause: 5000,
        controls: false,
        pager: false,
        responsive : [
            {
                breakpoint:991,
                settings: {
                    item: 4,
                  }
            },
            {
                breakpoint:767,
                settings: {
                    item:3,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                  }
            }
        ]
    }); 
    /*------------------------------------------------*/
    $('.sp-cn').hide();
    $(".sp-sn").click(function(){
        $(this).hide();
        $('.sp-cn').show();
        $("body").addClass("push-left");
    });
    $(".sp-cn").click(function(){
        $(this).hide();
        $('.sp-sn').show();
        $("body").removeClass("push-left");
    });
    /*------------------------------------------------*/
    $('#back-to-top').hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').show();
        } else {
            $('#back-to-top').hide();
        }
    });
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    $('#back-to-top').tooltip('show');
});

function openNav() {
    document.getElementById("mySidenav").style.width = "280px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}