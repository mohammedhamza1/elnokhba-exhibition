(function ($) {
     //------------------------------ xs navbar open close 
    $('.xs-navbar-btn').click(function(){
        var right = $('.xs-navbar').css('right');
        $('.xs-navbar').animate({right: '0px'});
    });
    $('.xs-navbar-content > i').click(function(){
        $('.xs-navbar').animate({right: '-100%'});
    });
    $('.xs-navbar').click(function(e){
        if( e.target.id == 'xs-navbar-id'){
            $('.xs-navbar').animate({right: '-100%'});
        }
    });
    $('.xs-navbar-content > ul > li > a').click(function(){
        $('.xs-navbar').animate({right: '-100%'});
    });
    //------------------------ end xs navbar
    //---------------------------------------------------------- start board -----------------------------------------------------*/
    //----------------- reset form when page load
    $('#BoardForm')[0].reset();
    //----------------- get places data
    var placeData = [];
    // send ajax
    $.ajax({
        type: 'GET',
        url: 'https://ter.sa/wp-json/wp/v2/spaces?per_page=100',
        success: function(responseText){
            //var res = JSON.parse(responseText);
            for(var i=0; i < responseText.length; i++){
                placeData.push(responseText[i].acf);
                //-- convert price to number
                placeData[i].price = parseInt(placeData[i].price);
            }
            //console.log(placeData);
            //----------------- set disable places and vip places
            disablePlaces(placeData);
            //console.log(placeData);
            //show Board section 
            $('.BoardSection').slideDown();
        },
        error: function(error){
            alert("حدث خطأ اثناء جلب المعلومات ، برجاء المحاوله مره اخرى");
        }
    });
    
    
    //------------------- when submit board form 
    $('#BoardSubmitBtn').click(function(e){
        // prevent defult submit
        e.preventDefault();
        //get selected fields
        var selected_objects = getSelected();
        // if user select fields
        var total_cost = 0;
        var places_names = '';
        if( selected_objects.length > 0 ){
            //console.log(selected_objects);
            for(var m=0;m<selected_objects.length;m++){
                total_cost += selected_objects[m].price;
                places_names += selected_objects[m].name + ',';
                $('.places-table tbody').append("<tr><td class='hidden-xs'>" + selected_objects[m].type + "</td><td>" + selected_objects[m].name + "</td><td>" + selected_objects[m].price + "</td></tr>");
                //$('#full-form').prepend("<input type='hidden' name='selectedField' value='" + selected_objects[m].name + "'>");
            }
            //print table last row
            $('.places-table').append("<thead id='cost-row-id'><tr><th>التكلفة الكلية بالريال</th><th class='hidden-xs'></th><th>" + total_cost + "</th></tr></thead>");
            //set inputs valuse for paypal --> item name and cost
            console.log(places_names);
            console.log(total_cost);
            $('#places').val("" + places_names + "");
            var totalInRial = total_cost / 3.7499 ; 
            console.log(totalInRial);
            $('#total').val(totalInRial);
            //show the popup
            $('#form-popup').fadeIn();
        }
        // if user doesn't select any fields
        else{
            alert("يجب تحديد مساحة او اكثر لاستكمال الحجز");
        }
        
    });
    /*--- start set disable places function ---*/
    function disablePlaces( placeData ){
        for(var n = 0; n < placeData.length; n++){
            if( placeData[n].status == 'off' ){
                var inputId = placeData[n].name;
                //set disable attr
                $("#"+ inputId).attr("disabled", true);
                //set disable style
                $("#"+ inputId).prev().css('cursor','not-allowed');
                $("#"+ inputId).prev().css('background-color','red');
                $("#"+ inputId).prev().css('border-color','red');
                $("#"+ inputId).prev().css('opacity','0.6');
                $("#"+ inputId).prev().css('color','#fff');
            }
            else if( placeData[n].class == 'vip' ){
                var vipInputId = placeData[n].name;
                $("#"+ vipInputId).addClass('vip-input');
                $("#"+ vipInputId).prev().append('<i class="fa fa-star vip-place-icone" aria-hidden="true"></i>');
                $("#"+ vipInputId).prev().css('border-color','#F7E200');
                $("#"+ vipInputId).prev().css('background-color','#F96D00');
            }
        }
    }
    /*--- end set disable places function ---*/
    /*---- start get selected function ---*/
    function getSelected(){
        var form_data = $('#BoardForm').serialize();
        var places_arr = form_data.split('&');
        var selected_arr = [];
        if( places_arr[0] != ""){
            for( var i = 0 ; i < places_arr.length ; i++){
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
    function getFieldsObjects( fields_arr ){
        var fields_objects = [];
        for(var x=0; x < fields_arr.length; x++){
            var name = fields_arr[x];
            //console.log(name);
            for(var i=0; i < placeData.length; i++){
                if( name == placeData[i].name){
                    fields_objects.push(placeData[i]);
                }
            }
        }
        return fields_objects;
    }
    /*--- end get field object function ---*/
    //---------------- change colors when check place
    $('.form-ele > input').change(function(){
        if( $(this).is(':checked') ){
            $(this).prev().css('background','#2ECC71');
            $(this).prev().css('border-color','#27AE60');
        }
        else{
            var input_class = $(this).attr('class');
            var place_class = $(this).prev().attr('class');
            if( place_class == 'main-place' ){
                $(this).prev().css('background','#445968');
                $(this).prev().css('border-color','#445968');
            }else if( place_class == 'glory-place' ){
                $(this).prev().css('background','#004a80');
                $(this).prev().css('border-color','#004a80');
            }else if( place_class == 'goldA-place' ){
                $(this).prev().css('background','#fed142');
                $(this).prev().css('border-color','#414346');
            }else if( place_class == 'goldB-place' ){
                $(this).prev().css('background','#252b2f');
                $(this).prev().css('border-color','#4b4a49');
            }else if( place_class == 'silver-place' ){
                $(this).prev().css('background','#b7b7b7');
                $(this).prev().css('border-color','#454545');
            }else if( place_class == 'bronze-place' ){
                $(this).prev().css('background','#754c24');
                $(this).prev().css('border-color','#454545');
            }else if( place_class == 'green-place' ){
                $(this).prev().css('background','#007236');
                $(this).prev().css('border-color','#252525');
            }else if( place_class == 'nokhbaV-place' ){
                $(this).prev().css('background','#b3a443');
                $(this).prev().css('border-color','#252525');
            }else if( place_class == 'nokhbaH-place' ){
                $(this).prev().css('background','#b3a443');
                $(this).prev().css('border-color','#252525');
            }
            if( input_class == 'vip-input'){
                $(this).prev().css('border-color','#F7E200');
                $(this).prev().css('background-color','#F96D00');
            }
        }
    });
    //------------------- open conditions-popup
    $('#conditions-btn').click(function(){
        $('#conditions-popup').fadeIn();
    })
    //------------------- close form-popup
    $('#form-popup .close-btn i').click(function(){
        $('#form-popup').fadeOut(function(){
            $('.places-table tbody').html('');
            $('#cost-row-id').remove();
        });
    });
    //------------------- close conditions-popup   
    $('#conditions-popup .close-btn i').click(function(){
        $('#conditions-popup').fadeOut();
    });
    //------------------- close all popups from out div
    $(document).click(function(e){
        if( $(e.target).attr('id') == "form-popup" ){
            $('#form-popup').fadeOut(function(){
                $('.places-table tbody').html('');
                $('#cost-row-id').remove();
            });
        }else if($(e.target).attr('id') == "conditions-popup"){
            $('#conditions-popup').fadeOut();
        }
    });
    //------------------ when type in input in popup form ---- set custom field value
    $('#full-form input , #full-form select').change(function(){
        var popupFormData = '';
        popupFormData += 'adminName=' + $('#adminName').val() + ',';
        popupFormData += 'userName=' + $('#userName').val() + ',';
        popupFormData += 'job=' + $('#job').val() + ',';
        popupFormData += 'email=' + $('#email').val() + ',';
        popupFormData += 'tel=' + $('#tel').val() + ',';
        popupFormData += 'phone=' + $('#phone').val() + ',';
        popupFormData += 'userType=' + $('#userType').val();
        $('#otherData').val(popupFormData);
        //console.log( popupFormData );
    });
    /*----------------------------------------------------- end board --------------------------------------------------------------*/
    /*---------------------------------------------------- start tickets reservation ----------------------------------------------*/
    // send ticket info to paypal
    $('#ticket_type , #ticketsNumber').change(function(){
        ticketNamePrice();
    });
function ticketNamePrice(){
        var ticketname = $("#ticket_type option:selected").text();
        var ticketsNumber = $('#ticketsNumber').val();
        var ticketsTotalRIAL = $('#ticket_type').val() * ticketsNumber;
        var ticketsTotalUSD = (ticketsTotalRIAL/3.7499).toFixed(2);
        $('#ticketsTotalRIAL').html(ticketsTotalRIAL);
        $('#ticketsTotalUSD').html(ticketsTotalUSD);
        $('#ticket_price').val(ticketsTotalUSD);
        $('#ticket_name').val( ticketname +',' + ticketsNumber);
    }
    ticketNamePrice();
    //------------------ when type in input in popup form ---- set custom field value
    $('#ticketForm input').change(function(){
        var ticketFormData = '';
        ticketFormData += 'ticketOwnerName=' + $('#ticketOwnerName').val() + '<br>';
        ticketFormData += 'ticketOwnerMail=' + $('#ticketOwnerMail').val();
        $('#ticketCustomData').val(ticketFormData);
        //console.log( ticketFormData );
    });
    
    /*-------------------------------------------------- end tickets reservation --------------------------------------------------*/
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
        animateOut: 'fadeOutLeft',
        animateIn: 'fadeInLeft',
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

    $('#media .owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        autoplaySpeed: 500,
        rtl: true,
        nav: false,
        dots: true,
        navText: ["<i class='fa fa-angle-right'></i> ", "<i class='fa fa-angle-left'></i>"],
        margin: 10,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            767: {
                items: 3,
            },
            900: {
                items: 6,
            },
            1000: {
                items: 4,
                loop: true
            }
        }
    });


    $('#halls .owl-carousel').owlCarousel({
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
            },
            600: {
                items: 1,
            },
            767: {
                items: 1,
            },
            900: {
                items: 1,
            },
            1000: {
                items: 1,
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
            scrollTop: $("#who_us").offset().top
        }, 2000);
    });
    $(".vision").click(function () {
        $('html, body').animate({
            scrollTop: $("#vision").offset().top
        }, 2000);
    });
    $(".whyp").click(function () {
        $('html, body').animate({
            scrollTop: $("#why").offset().top
        }, 2000);
    });
    $(".parteners").click(function () {
        $('html, body').animate({
            scrollTop: $("#parteners").offset().top
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


    new WOW().init();
    

    
})(jQuery);
