$(document).ready(
    function()
    {
        $('#owl-service').affix(
            {
                offset: { top: 100 }
            }
        );
        if ($('.owl-service-link')) {

            $('.owl-service-link').css('width', $(window).width());


            $('.owl-service-link').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    }
                }
            });
        }

        if ($('.owl-sub-service-items')) {
            $('.owl-sub-service-items').owlCarousel({
                margin: 10,
                responsiveClass: true,
                loop: false,
                dots: false,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3500,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        }

        $('.carousel-slide').flexisel(
            {
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            }
        );

        $('.carousel-service-1').flexisel(
            {
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            }
        );

        $('.carousel-service-2').flexisel(
            {
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            }
        );

        $('.carousel-service-3').flexisel(
            {
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            }
        );

        $('.carousel-service-4').flexisel(
            {
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            }
        );

        $('.carousel-service-5').flexisel(
            {
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            }
        );

        $('.carousel-service-6').flexisel(
            {
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            }
        );

        $('.carousel-service-7').flexisel(
            {
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            }
        );

        $('.carousel-service-8').flexisel(
            {
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            }
        );

        $('#menu2').affix(
            {
                offset: { top: 100 }
            }
        );

        $('.treeview').mouseover(function() {
            $(this).addClass('open');
        }).mouseout(function() {
            $(this).removeClass('open');
        });

        $('.btn-toggle-menu').click(function (e) {
            e.preventDefault();
            $('.btn-toggle-menu').toggleClass('opened');
            $('.set-menu').toggleClass('collapsed');
        });

        $('#form-contact').validate({
            submitHandler: function (form) {
                var data = new FormData(form);

                $.ajax({
                    url: 'api/contact', type: 'post',
                    data: data,
                    contentType: false, processData: false,
                    success: function(ret) {
                        console.log(ret);
                        if (ret != 1) {
                            alert('ERROR, intentelo más tarde.');
                            return;
                        }

                        alert('ÉXITO, su mensaje se envió correctamente.');
                        $('#form-contact').trigger('reset');
                    }
                });


            }
        });

        if ($('#formModalContact')) {
            $('#formModalContact').validate({
                submitHandler: function (form) {
                    var data = new FormData(form);

                    $.ajax({
                        url: 'api/contact',
                        type: 'post',
                        data: data,
                        contentType: false, processData: false,
                        success: function(ret) {
                            console.log(ret);
                            if (ret != 1) {
                                alert('ERROR, intentelo más tarde.');
                                return;
                            }

                            alert('ÉXITO, su mensaje se envió correctamente.');
                            $('#modalContact').modal('hide');
                            $('#formModalContact').trigger('reset');
                        }
                    });


                }
            });
        }



        $('#select-lang').on('changed.bs.select', function (e) {
            var lang = $(this).val();
            if(lang == 'es') {
                $(location).attr('href', 'es');
            } else if(lang == 'en') {
                $(location).attr('href', 'en');
            }
            $(this).selectpicker('refresh');
        });

        $('#form-cv').validate();

        $('#uploadifive').uploadifive({
            'buttonClass'       : 'btn btn-primary',
            'buttonText'        : 'Adjuntar CV',
            'auto'              : true,
            'checkScript'       : 'api/checkUpload',
            'queueID'           : 'queue',
            'uploadScript'      : 'api/upload',

            'fileType': ['application\/pdf'],

            'onUploadComplete'  : function(file, data) {
              var json = jQuery.parseJSON(data);
              console.log(json);
              if (json.success) $('#uploadifive-input').val(json.filename);
            }
        });

        ////////-------------


        $('#btnClose').click(function (e) {
            e.preventDefault();

            var timer = $(this).data('timer');

            add_cookie(timer)
        });

    }
);


///cookie

function add_cookie(t) {
    $('#main-popup').modal('hide');
    $('#btn-popup').removeClass('hidden')

    if (Cookies.get('marco-popup')) {
        console.log(Cookies.get('marco-popup'));
    } else {
        console.log('crear cookie', t);

        Cookies.set('marco-popup', 'marcookie', { expires: parseFloat(t) });
    }
}

function openModalContact(item, img) {
    $('#formModalContact .text-product').html(item);
    $('#formModalContact #product').val(item);
    $('#formModalContact #image img').attr('src', 'uploads/' + img);
    $('#formModalContact #product_url').val(img);
    $('#modalContact').modal('show');
}


function iniMap(lat, lng) {
    if ($('#map')) {
        var locations, center_lat, center_lng;

        locations = [['<p><b>MARCO</b><br><small>Soluciones Integrales</small></p>', lat, lng, 1]];
        center_lat = lat;
        center_lng = lng;

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            disableDefaultUI: true,
            scrollwheel: false,
            draggable: false,
            center: new google.maps.LatLng(center_lat, center_lng),
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        });

        var infowindow = new google.maps.InfoWindow();
        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                //icon: 'dist/images/marker.png'
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
}

function show_map(id) {
    // $('.country-map > .paint').addClass('hidden');
    // $('.country-map > #' + id).removeClass('hidden');
    $('#cover-office').attr('src', 'uploads/' + id);
}
