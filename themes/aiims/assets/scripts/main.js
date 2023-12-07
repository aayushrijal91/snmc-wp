// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                $(window).on('scroll', () => {
                    if ($(this).scrollTop() >= 600) {
                        $('#return-to-top').fadeIn(300);
                    } else {
                        $('#return-to-top').fadeOut(300);
                    }
                });

                $('#return-to-top').on('click', () => {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 500);
                });

                $('#mission-cards-slider').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                centerMode: true,
                                centerPadding: '40px'
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                centerMode: true,
                                centerPadding: '40px'
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                centerPadding: '40px'
                            }
                        }
                    ]
                });

                $('.membershipTypeSelect').on('click', function () {
                    $("#membership-type-input").val($(this).data('val'));
                    $("#membership-type-input").trigger('change');
                })

                $("#organisation-name-input").prop("disabled", true);
                $("#spouse-full-name-input").prop("disabled", true);
                $("#spouse-email-address-input").prop("disabled", true);
                $("#spouse-phone-number-input").prop("disabled", true);
                $("#organisation-name-input").hide();
                $("#spouse-full-name-input").hide();
                $("#spouse-email-address-input").hide();
                $("#spouse-phone-number-input").hide();

                $("#membership-type-input").on('change', function () {
                    $("#organisation-name-input, #spouse-full-name-input, #spouse-email-address-input, #spouse-phone-number-input").val("");

                    const membershipType = $(this).val();

                    if (membershipType === "Organisational Membership") {
                        $("#organisation-name-input").prop("disabled", false).show();
                    } else {
                        $("#organisation-name-input").prop("disabled", true).hide();
                    }

                    if (membershipType === "Family Life Member") {
                        $("#spouse-full-name-input, #spouse-email-address-input, #spouse-phone-number-input").prop("disabled", false).show();
                    } else {
                        $("#spouse-full-name-input, #spouse-email-address-input, #spouse-phone-number-input").prop("disabled", true).hide();
                    }
                });



                function validatePhoneNumber() {
                    var phoneNumber = $('#phone-number').val();
                    var phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

                    if (!phoneRegex.test(phoneNumber)) {
                        $("#phone-number-error").fadeIn();
                        return false;
                    }

                    $('#phone-number-error').fadeOut();

                    return true;
                }

                $('#wpcf7-f80-o1').on('submit', function () {
                    return validatePhoneNumber();
                });
            },
        },
    };
    Engine.ui.misc();
});

document.querySelectorAll('a[href="#localForm"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});