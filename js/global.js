$(window).ready(function(){





    //ship type
    $('#shiptype1').click(function(){
        $('.ship-type-box').removeClass('active');
        $(this).addClass('active');
        $('#shipping-type').val('ems')
    });

    $('#shiptype2').click(function(){
        $('.ship-type-box').removeClass('active');
        $(this).addClass('active');
        $('#shipping-type').val('kerry')
    });

    $('#shiptype3').click(function(){
        $('.ship-type-box').removeClass('active');
        $(this).addClass('active');
        $('#shipping-type').val('store')
    });

    //payment
    $('.pay-click').click(function(){
        $(this).parent().children('.pay-hide').slideToggle(200);
    })


    //cart qty
    var cartChange = $('.cart-config-number');
    $(cartChange).children('.cart-del-qty').click(function(e){
        e.preventDefault();
        var numnow = Number($(this).parent().children('input').val()) - 1;
        if(numnow < 1){

        }else {
            Number($(this).parent().children('input').val(numnow))
        }
    });

    $(cartChange).children('.cart-plus-qty').click(function(e){
        e.preventDefault();
        var numnow = Number($(this).parent().children('input').val()) + 1;
        Number($(this).parent().children('input').val(numnow))
    });


    //comment star
    var star1 = $('.star-1');
    var star2 = $('.star-2');
    var star3 = $('.star-3');
    var star4 = $('.star-4');
    var star5 = $('.star-5');

    function rate1(){
        star1.toggleClass('good');
    }

    function rate2(){
        star1.toggleClass('good');
        star2.toggleClass('good');
    }

    function rate3(){
        star1.toggleClass('good');
        star2.toggleClass('good');
        star3.toggleClass('good');
    }

    function rate4(){
        star1.toggleClass('good');
        star2.toggleClass('good');
        star3.toggleClass('good');
        star4.toggleClass('good');
    }

    function rate5(){
        star1.toggleClass('good');
        star2.toggleClass('good');
        star3.toggleClass('good');
        star4.toggleClass('good');
        star5.toggleClass('good');
    }

    function addRate1(){
        $('.add-comment .review-star i').removeClass('active');
        star1.addClass('active');
        $('#star-show').val('1');
    }

    function addRate2(){
        $('.add-comment .review-star i').removeClass('active');
        star1.addClass('active');
        star2.addClass('active');
        $('#star-show').val('2');
    }

    function addRate3(){
        $('.add-comment .review-star i').removeClass('active');
        star1.addClass('active');
        star2.addClass('active');
        star3.addClass('active');
        $('#star-show').val('3');
    }

    function addRate4(){
        $('.add-comment .review-star i').removeClass('active');
        star1.addClass('active');
        star2.addClass('active');
        star3.addClass('active');
        star4.addClass('active');
        $('#star-show').val('4');
    }

    function addRate5(){
        $('.add-comment .review-star i').removeClass('active');
        star1.addClass('active');
        star2.addClass('active');
        star3.addClass('active');
        star4.addClass('active');
        star5.addClass('active');
        $('#star-show').val('5');
    }

    $(star1).hover(function(){
        rate1();
    });

    $(star2).hover(function(){
        rate2();
    });

    $(star3).hover(function(){
        rate3();
    });

    $(star4).hover(function(){
        rate4();
    });

    $(star5).hover(function(){
        rate5();
    });

    $(star1).click(function(){
        addRate1();
    });

    $(star2).click(function(){
        addRate2();
    });

    $(star3).click(function(){
        addRate3();
    });

    $(star4).click(function(){
        addRate4();
    });

    $(star5).click(function(){
        addRate5();
    });


    $('.add-comment-btn').click(function(){
        $('.add-comment').slideToggle(200);
    });

    //pagination product
    var obj = $('#pagination').twbsPagination({
            totalPages: 9,
            visiblePages: 3,
            first : '<<',
            last : '>>',
            prev : '<',
            next : '>',
            onPageClick: function (event, page) {
                console.info(page);
            }
    });

    //plus minus
    $('.btn-number').click(function(e){
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {

                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                 // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

    $('.product-drop').click(function(){
        $('.product-drop-hide').slideToggle(200);
    });

    $('.like-btn').click(function(e){
        e.preventDefault();
        $(this).toggleClass('liked');
    })

    $('.show-full').click(function(){
        $('.hide-full-reciept').fadeIn(200);
    })

    $('.hide-full').click(function(){
        $('.hide-full-reciept').fadeOut(200);
    })

    $('#hide-menu-close-button').click(function(){
        $('.hide-menu').slideToggle(200);
        $('.open-hide-menu').parent('li').removeClass('active');
    });

    $('.open-hide-menu').click(function(e){
        e.preventDefault();
        $('.hide-menu').slideToggle(200);
        $(this).parent('li').toggleClass('active');
    });

    if($('.show-full').is(':checked')){
        $('.hide-full-reciept').fadeIn();
    }

    $('.front-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    });

    $('.show-slider').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
    navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        480:{
            items:1
        },
        600:{
            items:3
        },
        990:{
            items:3
        },
        1200:{
            items:4
        },
        1440:{
            items:4
        }
    }
    });

});

$(window).load(function(){
    //Gallery isotope
    var $grid = $('.grid-isotope').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        layoutMode: 'masonry',
        masonry: {
            columnWidth: '.grid-item.size1x1'
        },
        filter: '.iso-hilight'
    });

    // filter functions
    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
      },
      // show if name ends with -ium
      ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
      }
    };
    // bind filter button click
    $('.filters-button-group').on( 'click', 'button', function() {
      var filterValue = $( this ).attr('data-filter');
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      $grid.isotope({ filter: filterValue });
    });
    // change is-checked class on buttons
    $('.button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'button', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
      });
    });

    var maxHeight = $(window).height() - 350;
    $('.cover-tab').css('max-height',maxHeight)

    $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
    });

});

$(window).scroll(function(){
    if($(window).scrollTop() > 50){
        $('.header-logo').addClass('lessHeight');
        $('.top-social-menu, .off-scroll').addClass('hide');
        $('.near-logo').addClass('show-near-logo')
    }else{
        $('.header-logo').removeClass('lessHeight');
        $('.top-social-menu, .off-scroll').removeClass('hide');
        $('.near-logo').removeClass('show-near-logo')
    }
});





