(function ($) {

    //---------------------------------------------------------- start board -----------------------------------------------------*/
    //----------------- reset form when page load
    $('#board-form')[0].reset();
    //----------------- get places data
    var placeData = [
        {
            'name': 'a1',
            'status': 'off',
            'price': 20000,
            'type': 'راعى ماسى'
        },
        {
            'name': 'b2',
            'status': 'off',
            'price': 15000,
            'type': 'راعى ذهبى'
        },
        {
            'name': 'b3',
            'status': 'on',
            'price': 15000,
            'type': 'راعى ذهبى'
        },
        {
            'name': 'b4',
            'status': 'on',
            'price': 15000,
            'type': 'راعى ذهبى'
        },
        {
            'name': 'b5',
            'status': 'on',
            'price': 15000,
            'type': 'راعى ذهبى'
        },
        {
            'name': 'c6',
            'status': 'off',
            'price': 10000,
            'type': 'راعى فضى'
        },
        {
            'name': 'c7',
            'status': 'on',
            'price': 10000,
            'type': 'راعى فضى'
        },
        {
            'name': 'c8',
            'status': 'on',
            'price': 10000,
            'type': 'راعى فضى'
        },
        {
            'name': 'c9',
            'status': 'on',
            'price': 10000,
            'type': 'راعى فضى'
        },
        {
            'name': 'd10',
            'status': 'on',
            'price': 5000,
            'type': 'راعى برونزى'
        },
        {
            'name': 'd11',
            'status': 'on',
            'price': 5000,
            'type': 'راعى برونزى'
        },
        {
            'name': 'd12',
            'status': 'on',
            'price': 5000,
            'type': 'راعى برونزى'
        },
        {
            'name': 'd13',
            'status': 'on',
            'price': 5000,
            'type': 'راعى برونزى'
        },
        {
            'name': 'e14',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e15',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e16',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e17',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e18',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e19',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e20',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e21',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e22',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e23',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e24',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e25',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e26',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e27',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e28',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e29',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e30',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e31',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e32',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e33',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e34',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e35',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e36',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e37',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e38',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e39',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'f40',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'e41',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e42',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e43',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e44',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e45',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e46',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'f48',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'e49',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e50',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e51',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'f52',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'e53',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e54',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e55',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e56',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e57',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'e58',
            'status': 'on',
            'price': 3000,
            'type': 'مشارك'
        },
        {
            'name': 'f59',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f60',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f61',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f62',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f63',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f64',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f65',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f66',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f67',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f68',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f69',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f70',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f71',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f72',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f73',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f74',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
        {
            'name': 'f75',
            'status': 'on',
            'price': 1500,
            'type': 'مشارك'
        },
    ];
    //----------------- set disable places
    disablePlaces(placeData);
    //------------------- when submit board form 
    $('#board-submit-btn').click(function (e) {
        // prevent defult submit
        e.preventDefault();
        //get selected fields
        var selected_objects = getSelected();
        // if user select fields
        var total_cost = 0;
        if (selected_objects.length > 0) {
            //console.log(selected_objects);
            for (var m = 0; m < selected_objects.length; m++) {
                total_cost += selected_objects[m].price;
                $('.places-table tbody').append("<tr><td class='hidden-xs'>" + selected_objects[m].type + "</td><td>" + selected_objects[m].name + "</td><td>" + selected_objects[m].price + "</td></tr>");
                $('#full-form').prepend("<input type='hidden' name='selectedField' value='" + selected_objects[m].name + "'>");
            }
            $('.places-table').append("<thead id='cost-row-id'><tr><th>التكلفة الكلية</th><th class='hidden-xs'></th><th>" + total_cost + "</th></tr></thead>");
            $('#form-popup').fadeIn();
        }
        // if user doesn't select any fields
        else {
            alert("يجب تحديد مساحة او اكثر لاستكمال الحجز");
        }

    });
    /*--- start set disable places function ---*/
    function disablePlaces(placeData) {
        for (var n = 0; n < placeData.length; n++) {
            if (placeData[n].status == 'off') {
                var inputId = placeData[n].name;
                //set disable attr
                $("#" + inputId).attr("disabled", true);
                //set disable style
                $("#" + inputId).prev().css('cursor', 'not-allowed');
            }
        }
    }
    /*--- end set disable places function ---*/
    /*---- start get selected function ---*/
    function getSelected() {
        var form_data = $('#board-form').serialize();
        var places_arr = form_data.split('&');
        var selected_arr = [];
        if (places_arr[0] != "") {
            for (var i = 0; i < places_arr.length; i++) {
                var current_place = places_arr[i].split('=')[1];
                selected_arr.push(current_place);
            }
        }
        // get objects of selected names
        var selected_Objects = getFieldsObjects(selected_arr);

        return selected_Objects;
    }
    /*---- end get selected function --*/
    /*--- start get field object function ---*/
    function getFieldsObjects(fields_arr) {
        var fields_objects = [];
        for (var x = 0; x < fields_arr.length; x++) {
            var name = fields_arr[x];
            //console.log(name);
            for (var i = 0; i < placeData.length; i++) {
                if (name == placeData[i].name) {
                    fields_objects.push(placeData[i]);
                }
            }
        }
        return fields_objects;
    }
    /*--- end get field object function ---*/
    //---------------- change colors when check place
    $('.form-ele > input').change(function () {
        if ($(this).is(':checked')) {
            $(this).prev().css('background', '#2ECC71');
            $(this).prev().css('border-color', '#27AE60');
        } else {
            var place_class = $(this).prev().attr('class');
            if (place_class == 'd') {
                $(this).prev().css('background', '#003d61');
                $(this).prev().css('border-color', '#03113a');
            } else if (place_class == 'c') {
                $(this).prev().css('background', '#b5b9ba');
                $(this).prev().css('border-color', '#03113a');
            } else if (place_class == 'b') {
                $(this).prev().css('background', '#080145');
                $(this).prev().css('border-color', '#03113a');
            } else if (place_class == 'e') {
                $(this).prev().css('background', '#529ea4');
                $(this).prev().css('border-color', '#03113a');
            } else if (place_class == 'f') {
                $(this).prev().css('background', '#060134');
                $(this).prev().css('border-color', '#03113a');
            } else if (place_class == 'a') {
                $(this).prev().css('background', '#b00002');
                $(this).prev().css('border-color', '#e5afae');
            }
        }
    });
    //------------------- close form-popup
    $('.close-btn i').click(function () {
        $('#form-popup').fadeOut(function () {
            $('.places-table tbody').html('');
            $('#cost-row-id').remove();
        });
    });
    $(document).click(function (e) {
        if ($(e.target).attr('id') == "form-popup") {
            $('#form-popup').fadeOut(function () {
                $('.places-table tbody').html('');
                $('#cost-row-id').remove();
            });
        }
    });
    /*----------------------------------------------------- end board --------------------------------------------------------------*/









    //------------------------------ xs navbar open close 
    $('.xs-navbar-btn').click(function () {
        var right = $('.xs-navbar').css('right');
        $('.xs-navbar').animate({
            right: '0px'
        });
    });
    $('.xs-navbar-content > i').click(function () {
        $('.xs-navbar').animate({
            right: '-100%'
        });
    });
    $('.xs-navbar').click(function (e) {
        if (e.target.id == 'xs-navbar-id') {
            $('.xs-navbar').animate({
                right: '-100%'
            });
        }
    });
    $('.xs-navbar-content > ul > li > a').click(function () {
        $('.xs-navbar').animate({
            right: '-100%'
        });
    });
    //------------------------ end xs navbar
})(jQuery);
(function ($) {
    $(".small_menu").hide();

    $(".click").mouseover(function () {
        $(".small_menu").slideDown('slow');
    });

    $(".hoverli").mouseleave(function () {
        $(".small_menu").slideUp('slow');
    });

    $('#first_carousal .owl-carousel').owlCarousel({
        loop: true,
        rtl: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-chevron-right"></i>', '<i class="fa fa-chevron-left"></i>'],
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            900: {
                items: 1,
                nav: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });

    $('#parteners .owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        autoplaySpeed: 500,
        rtl: true,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-right'></i> ", "<i class='fa fa-angle-left'></i>"],
        margin: 10,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            767: {
                items: 3,
                nav: false
            },
            900: {
                items: 6,
                nav: true
            },
            1000: {
                items: 4,
                nav: true,
                loop: true
            }
        }
    });

    $('#sponsers_carousal .owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 1500,
        autoplayHoverPause: false,
        autoplaySpeed: 1000,
        rtl: true,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-right'></i> ", "<i class='fa fa-angle-left'></i>"],
        margin: 170,
        loop: true,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            767: {
                items: 3,
                nav: false
            },
            900: {
                items: 3,
                nav: true
            },
            1000: {
                items: 4,
                nav: true,
                loop: true
            }
        }
    });

    $('#sponser_program .owl-carousel').owlCarousel({
        loop: true,
        rtl: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-chevron-right"></i>', '<i class="fa fa-chevron-left"></i>'],
        margin: 40,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            400: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });

    $(".home").click(function () {
        $('html, body').animate({
            scrollTop: $("#nav_bar").offset().top
        }, 2000);
    });
    $(".intro").click(function () {
        $('html, body').animate({
            scrollTop: $("#first_carousal").offset().top
        }, 2000);
    });
    $(".who_us").click(function () {
        $('html, body').animate({
            scrollTop: $("#sec_section").offset().top
        }, 2000);
    });
    $(".vision").click(function () {
        $('html, body').animate({
            scrollTop: $("").offset().top
        }, 2000);
    });
    $(".goals").click(function () {
        $('html, body').animate({
            scrollTop: $("#nav_bar").offset().top
        }, 2000);
    });
    $(".home").click(function () {
        $('html, body').animate({
            scrollTop: $("").offset().top
        }, 2000);
    });
    $(".locationn").click(function () {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 2000);
    });
    $(".mapp").click(function () {
        $('html, body').animate({
            scrollTop: $("#map").offset().top
        }, 2000);
    });
    $(".whyp").click(function () {
        $('html, body').animate({
            scrollTop: $("#why").offset().top
        }, 2000);
    });

    new WOW().init();
})(jQuery);
