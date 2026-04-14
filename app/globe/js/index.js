(function($) {
    'use strict';
    window.map_points = [];
    window.markers = L.markerClusterGroup({
        disableClusteringAtZoom: 16
    });
    window.street_basemap = '';
    window.satellite_basemap = '';
    window.init_globe_map = function() {
        var street_basemap_url = 'https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}&s=Gal&apistyle=s.t%3A3|s.e%3Al|p.v%3Aoff';
        var street_subdomain = 'mt0,mt1,mt2,mt3';
        var street_maxzoom = 20;
        var satellite_basemap_url = 'https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}';
        var satellite_subdomain = 'mt0,mt1,mt2,mt3';
        var satellite_maxzoom = 20;
        var openstreetmap_basemap_url = 'https://tile.openstreetmap.org/{z}/{x}/{y}.png';
        var openstreetmap_subdomain = 'mt0,mt1,mt2,mt3';
        var openstreetmap_maxzoom = 20;
/*
        var map4d_basemap_url = '../../vendor/maps/all/2d/{z}/{x}/{y}.png';
        var map4d_subdomain = 'mt0,mt1,mt2,mt3';
        var map4d_maxzoom = 19.9;
*/
        var street_subdomain_t = street_subdomain.split(",");
        var street_maxzoom_t = parseInt(street_maxzoom);
        if (street_subdomain != '') {
            var street_basemap = L.tileLayer(street_basemap_url, {
                maxZoom: street_maxzoom_t,
                minZoom: 10,
                subdomains: street_subdomain_t
            });
        } else {
            var street_basemap = L.tileLayer(street_basemap_url, {
                maxZoom: street_maxzoom_t,
                minZoom: 10,
            });
        }
        var satellite_subdomain_t = satellite_subdomain.split(",");
        var satellite_maxzoom_t = parseInt(satellite_maxzoom);
        if (satellite_subdomain != '') {
            var satellite_basemap = L.tileLayer(satellite_basemap_url, {
                maxZoom: satellite_maxzoom_t,
                minZoom: 10,
                subdomains: satellite_subdomain_t
            });
        } else {
            var satellite_basemap = L.tileLayer(satellite_basemap_url, {
                minZoom: 10,
                maxZoom: satellite_maxzoom_t
            });
        }

        var openstreetmap_subdomain_t = openstreetmap_subdomain.split(",");
        var openstreetmap_maxzoom_t = parseInt(openstreetmap_maxzoom);
        if (openstreetmap_subdomain != '') {
            var openstreetmap_basemap = L.tileLayer(openstreetmap_basemap_url, {
                maxZoom: openstreetmap_maxzoom_t,
                minZoom: 10,
                subdomains: openstreetmap_subdomain_t
            });
        } else {
            var openstreetmap_basemap = L.tileLayer(openstreetmap_basemap_url, {
                maxZoom: openstreetmap_maxzoom_t,
                minZoom: 10,
            });
        }

/*
        var map4d_subdomain_t = map4d_subdomain.split(",");
        var map4d_maxzoom_t = parseInt(map4d_maxzoom);
        if (map4d_subdomain != '') {
            var map4d_basemap = L.tileLayer(map4d_basemap_url, {
                maxZoom: map4d_maxzoom_t,
                minZoom: 10,
                subdomains: map4d_subdomain_t
            });
        } else {
            var map4d_basemap = L.tileLayer(map4d_basemap_url, {
                maxZoom: map4d_maxzoom_t,
                minZoom: 10,
            });
        }
*/

        var southWest = L.latLng(19.5, 105.0),
            northEast = L.latLng(21.5, 107.0),
            bounds = L.latLngBounds(southWest, northEast);

        window.street_basemap = street_basemap;
        window.satellite_basemap = satellite_basemap;
        window.openstreetmap_basemap = openstreetmap_basemap;
        // window.map4d_basemap = map4d_basemap;
        window.map_globe_l = L.map('map_globe_div', {
            maxBounds: bounds,
            layers: [street_basemap],
            zoomControl: false,
        }).setView([20.577531, 105.9120985], 13);


        $("a.all-project-button").on('click', function() {
            $('#imageDialog').show();
        });

        // init boundary districts
        if (window.districts) {

            jQuery.each(window.districts, function(index, district) {

                var feature = {
                    "type": "Feature",
                    "geometry": JSON.parse(district.boundary),
                    "properties": {
                        "fill": true, // Set fill to true for transparency
                        "fillColor": "#02b6ee", // Set fill color
                        "fillOpacity": 0.4, // Set fill opacity (0 to 1)
                        "color": "red",
                        "weight": 2,
                        "dashArray": "5, 5"
                    }
                };
                var featureCollection = {
                    "type": "FeatureCollection",
                    "features": [feature]
                };
                var boundary = L.geoJSON(featureCollection, {
                    style: function(feature) {
                        return {
                            fill: feature.properties.fill,
                            fillColor: feature.properties.fillColor,
                            fillOpacity: feature.properties.fillOpacity,
                            color: feature.properties.color || "blue", // Default border color
                            weight: feature.properties.weight || 2, // Default border weight
                            dashArray: feature.properties.dashArray || "" // Dashed stroke pattern
                        };
                    }
                });
                window.boundaries.push({
                    "id": district.id,
                    "boundary": boundary
                })
            })
        }


    }
    window.showBoundaries = function(district_id) {
        clearBoundaries();
        jQuery.each(window.boundaries, function(index, b) {

            if (b.id == district_id) {
                b.boundary.addTo(window.map_globe_l);
            }
        })
    }
    window.get_globe_map = function(id_globe) {
        $.ajax({
            url: "ajax/get_globe.php",
            type: "POST",
            data: {
                id_globe: id_globe
            },
            async: true,
            success: function(json) {
                var rsp = JSON.parse(json);
                window.map_points = rsp.map_points;
                parse_map_points_g(window.map_points);
            }
        });
    }

    window.parse_map_points_g = function(points) {
        var html_map_select = '';
        var bounds = new L.LatLngBounds();
        var points_exist = false;

        var count_point = 0;
        jQuery.each(points, function(index, point) {
            var id = point.id;
            var name = point.title;
            var lat = point.lat;
            var lon = point.lon;
            if (lat != null && lat != '') {
                points_exist = true;
                lat = parseFloat(lat);
                lon = parseFloat(lon);
                var icon = new L.Icon({
                    iconUrl: 'img/map_globe_icon.png',
                    // iconSize: [30, 30], // Adjust the width and height to match your image size
                    iconAnchor: [15, 15], // Adjust this to match the center of your image
                    popupAnchor: [0, -20] // Adjust as needed
                });
                var marker = L.marker([lat, lon], {
                    id: id,
                    icon: icon,
                    draggable: false,
                    autoPan: true,
                    // title: name,
                    label: name,
                });

                var customPopupContent = createCustomPopup(point);
                var customPopup = L.popup().setContent(customPopupContent);
                marker.bindPopup(customPopup, {
                    minWidth: 300,
                });

                marker.on('mouseover', function() {
                    marker.bindTooltip(name, {
                        permanent: true,
                        direction: 'right',
                        className: "my-labels"
                    });
                });

                marker.on('mouseout', function() {
                    marker.unbindTooltip();
                });

                marker.on('click', function() {
                    marker.openPopup();
                });

                window.markers.addLayer(marker);
                count_point++;
                bounds.extend(marker.getLatLng());


            } else {
                html_map_select += '<option id="' + id + '">' + name + '</option>';
            }

        });
        if (points_exist) {
            // window.map_globe_l.addLayer(markers);
            window.map_globe_l.setView([20.5810785, 105.8982121], 13);
        }

        function customTip(text, val) {
            return `<div class=""><div class="listItemIcon"><svg width="24" height="24" viewBox="0 0 24 24"><path d="M0,0H24V24H0Z" fill="none"></path><g transform="translate(-26.505 -138.504)"><circle cx="11" cy="11" r="11" transform="translate(27.505 139.504)" fill="#ebebeb"></circle><g transform="translate(31.504 143.504)"><pat d="M0,0H13.879V13.879H0Z" fill="none"></pat><path d="M7.783,13.566a5.783,5.783,0,1,1,5.783-5.783A5.783,5.783,0,0,1,7.783,13.566Zm0-1.157A4.626,4.626,0,1,0,3.157,7.783,4.626,4.626,0,0,0,7.783,12.409Zm.578-4.626h2.313V8.939H7.2V4.891H8.361Z" transform="translate(-0.843 -0.843)" fill="#1D5868"></path></g></g></svg></div><div class="listItemText" title="${text}"><span class="itemText">${text}</span></div><span class="MuiTouchRipple-root"></span></div>`;
        }

        window.map_globe_l.addLayer(window.markers);

    };
    window.focusOnMarker = function(markerId) {
        /*
        if (localStorage.getItem('view') && localStorage.getItem('view') == 'vr') {
            show_intro_map();
        }
        */
        window.markers.eachLayer(function(marker) {
            if (marker.options.id == markerId) {
                var latLng = marker.getLatLng();
                var lat = latLng.lat;
                var lng = latLng.lng;

                if (window.innerWidth < 580) {
                    lat += 0.004;
                }

                function onFlyEnd() {
                    marker.openPopup();
                    if (window.group_marker[markerId] && window.group_marker[markerId]._icon) {
                        window.group_marker[markerId]._icon.src = 'img/map_globe_icon_active.png';
                    }
                    for (let id in window.group_marker) {
                        if (id != markerId && window.group_marker[id]._icon) {
                            window.group_marker[id]._icon.src = 'img/map_globe_icon.png';
                        }
                    }
                    // Gỡ sự kiện sau khi hoàn thành để tránh lặp
                    window.map_globe_l.off('moveend', onFlyEnd);
                }

                window.map_globe_l.on('moveend', onFlyEnd);
                window.map_globe_l.flyTo([lat, lng], 16, {
                    animate: true
                });
                $('#searchResult').toggle();
            }
        });
    };

    window.click_map_point_g = function(id) {
        set_vt_target_map(id);
    };
    window.view_vt = function(id_vt) {
        var vt_code = $('#vt_card_' + id_vt).attr('data-code');
        var duration = 1000;
        flyto_vt(id_vt);
        $('#vt_viewer iframe').attr('src', window.APP_URL + '/app/viewer/index.php?code=' + vt_code);
        setTimeout(function() {
            $('#btn_return_globe').fadeIn(200);
            $('#vt_viewer iframe').css('opacity', 1);
            $('#vt_viewer').css('z-index', 99999);
            $('#vt_viewer').show();
        }, duration);

        setTimeout(function() {
            $('#btn_return_globe').css('z-index', 999999);
        }, 2000);
    };
    window.view_vt1 = function(id_vt) {
        var vt_code = $('#vt_card_' + id_vt).attr('data-code');
        $('#vt_viewer iframe').attr('src', window.APP_URL + '/app/viewer/index.php?code=' + vt_code);
        $('#vt_viewer iframe').css('opacity', 1);
        $('#vt_viewer').css('z-index', 99999);
        $('#vt_viewer').show();

        setTimeout(function() {
            $('#btn_return_globe').fadeIn(200);
            $('#btn_return_globe').css('z-index', 999999);
        }, 2000);
    };
    window.view_vt_vr = function(url) {
        $('#vt_viewer iframe').attr('src', url);

        $('#btn_return_globe').fadeIn(200);
        $('#vt_viewer iframe').css('opacity', 1);
        $('#vt_viewer').css('z-index', 99999);
        $('#vt_viewer').show();
        $('#btn_return_globe').css('z-index', 999999);
    };
    window.flyto_vt = function(id_vt) {
        var lat = $('#vt_card_' + id_vt).attr('data-lat');
        var lon = $('#vt_card_' + id_vt).attr('data-lon');
        window.map_globe_l.flyTo([lat, lon], 18, true);
        window.focusOnMarker(id_vt);
    };
    window.view_vt_from_popup = function(id_vt) {
        document.getElementById('imageDialog').style.display = 'none';
        view_vt(id_vt);
    }

    function clearBoundaries() {
        for (var i = 0; i < window.boundaries.length; i++) {
            boundaries[i].boundary.removeFrom(window.map_globe_l);
        }
    }
    window.createItemListHtml = function(data) {
        var html = "";
        $.each(data, function(index, item) {
            html += `<div class="image-item" onclick=view_vt_from_popup(${item.id});>
                    <img src="${item.image}" alt="${item.title}">
                    <p class="image-title">${item.title}</p>
                </div>`
        });

        return html;
    }

    function createCustomPopup(data) {
        return `
            <div id="vt_card_${data.id}" data-id="${data.id}" data-image="${data.image}" data-panorama="${data.panorama_image}" data-code="${data.code}" data-lat="${data.lat}" data-lon="${data.lon}" class="vt-card-n">
                <div class="card-img-block noselect">
                    <div class="position-relative">
                        <div id="panorama_preview_${data.id}" class="panorama_preview"></div>
                        ${data.image ? `<img draggable="false" class="card-img-top" src="${data.image}" alt="card image">` : `<div style="height: 180px; background-color: darkgrey" class="card-img-top"></div>`}
                        <div class="card-access noselect"><i class="far fa-eye text-white"></i> ${data.total_access}</div>
                        <div class="card-access noselect card_btn_copy" onclick="clipboard(${data.id})"><i class="fas fa-copy"></i></div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <h5 class="card-title noselect">${data.title}</h5>
                    <p class="card-text noselect">${data.description ? data.description : ''}</p>
                    <div class="row pt-2">
                        <div class="col-sm-6 col-6" style="padding: 0 10px;">
                            <button onclick="view_vt(${data.id});" id="btn_view_vt" class="btn btn-sm btn-block btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                                  <path d="M0.0493164 17.5V0.5L13.0493 9L0.0493164 17.5Z" fill="url(#paint0_linear_2250_36777)"/>
                                  <defs>
                                    <linearGradient id="paint0_linear_2250_36777" x1="-6.35977" y1="-6.0979" x2="37.6697" y2="18.3227" gradientUnits="userSpaceOnUse">
                                      <stop offset="0.32617" stop-color="#374783"/>
                                      <stop offset="0.68913" stop-color="#00B9F1"/>
                                      <stop offset="0.842882" stop-color="#2E5493"/>
                                    </linearGradient>
                                  </defs>
                                </svg>
                            </button>
                        </div>
                        <div class="col-sm-6 col-6" style="padding: 0 10px;">
                            <button onclick="flyto_vt(${data.id}, false, false);" id="btn_fly_vt" class="btn btn-sm btn-block btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                  <path d="M9.28271 18C8.0404 18 6.87181 17.7631 5.77694 17.2894C4.68207 16.8157 3.72951 16.1737 2.91924 15.3635C2.10899 14.5532 1.46701 13.6006 0.99329 12.5058C0.519573 11.4109 0.282715 10.2423 0.282715 9C0.282715 7.75768 0.519573 6.58909 0.99329 5.49422C1.46701 4.39936 2.10899 3.44679 2.91924 2.63652C3.72951 1.82627 4.68207 1.18429 5.77694 0.710574C6.87181 0.236858 8.0404 0 9.28271 0C11.6135 0 13.6241 0.768908 15.3144 2.30672C17.0048 3.84454 17.9725 5.74423 18.2173 8.00578H17.2058C17.0302 6.55833 16.5074 5.25928 15.6375 4.10865C14.7676 2.95802 13.6494 2.10898 12.2827 1.56155V2C12.2827 2.55 12.0869 3.02083 11.6952 3.4125C11.3035 3.80417 10.8327 4 10.2827 4H8.28271V6C8.28271 6.28333 8.18688 6.52083 7.99521 6.7125C7.80355 6.90417 7.56605 7 7.28271 7H5.28271V9H7.12887V12H6.28271L1.48271 7.2C1.43271 7.5 1.38688 7.8 1.34521 8.1C1.30355 8.4 1.28271 8.7 1.28271 9C1.28271 11.1833 2.04938 13.0583 3.58271 14.625C5.11605 16.1917 7.01605 16.9833 9.28271 17V18ZM18.3058 17.7308L14.8558 14.3192C14.5571 14.5321 14.2334 14.6987 13.8846 14.8192C13.5359 14.9397 13.1686 15 12.7827 15C11.8019 15 10.9734 14.6619 10.2971 13.9856C9.62086 13.3093 9.28271 12.4808 9.28271 11.5C9.28271 10.5192 9.62086 9.69071 10.2971 9.01443C10.9734 8.33814 11.8019 8 12.7827 8C13.7635 8 14.592 8.33814 15.2683 9.01443C15.9446 9.69071 16.2827 10.5192 16.2827 11.5C16.2827 11.8987 16.2193 12.2756 16.0923 12.6308C15.9654 12.9859 15.7891 13.3128 15.5635 13.6116L19.0135 17.0231L18.3058 17.7308ZM12.7827 14C13.4827 14 14.0744 13.7583 14.5577 13.275C15.041 12.7917 15.2827 12.2 15.2827 11.5C15.2827 10.8 15.041 10.2083 14.5577 9.725C14.0744 9.24167 13.4827 9 12.7827 9C12.0827 9 11.491 9.24167 11.0077 9.725C10.5244 10.2083 10.2827 10.8 10.2827 11.5C10.2827 12.2 10.5244 12.7917 11.0077 13.275C11.491 13.7583 12.0827 14 12.7827 14Z" fill="url(#paint0_linear_2250_36775)"/>
                                  <defs>
                                    <linearGradient id="paint0_linear_2250_36775" x1="-8.95169" y1="-6.98601" x2="43.8976" y2="32.9018" gradientUnits="userSpaceOnUse">
                                      <stop offset="0.32617" stop-color="#374783"/>
                                      <stop offset="0.68913" stop-color="#00B9F1"/>
                                      <stop offset="0.842882" stop-color="#2E5493"/>
                                    </linearGradient>
                                  </defs>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>`;
    }

    function initialize_panorama_preview(id, image) {
        try {
            panorama_preview.destroy();
        } catch (e) {}
        panorama_preview = pannellum.viewer('panorama_preview_' + id, {
            "type": "equirectangular",
            "autoLoad": true,
            "autoRotate": -20,
            "showControls": false,
            "compass": false,
            "panorama": window.APP_URL + "/app/viewer/panoramas/lowres/" + image
        });
        panorama_preview.on('load', function() {
            setTimeout(function() {
                $('#panorama_preview_' + id).css('opacity', 1);
            }, 50);
        });
        $('.panorama_preview').css('opacity', 0);
    }
    var panorama_preview = null,
        timeout_destroy;
    $(document).on("mouseenter", ".vt-card-n", function() {
        var id = $(this).attr('data-id');
        var image = $(this).attr('data-panorama');
        if (image != '') {
            clearTimeout(timeout_destroy);
            initialize_panorama_preview(id, image);
        }
    });


    $(document).on("mouseleave", ".vt-card-n", function() {
        $('.panorama_preview').css('opacity', 0);
        timeout_destroy = setTimeout(function() {
            try {
                panorama_preview.destroy();
            } catch (e) {}
        }, 300);
    });
    window.initContentBoxDateTime = function() {
        // Create a Date object for the current date and time
        const currentDate = new Date();
        // Extract the day, month, and year
        const dayOfWeek = currentDate.getDay();
        const dayOfMonth = currentDate.getDate();
        const month = currentDate.getMonth() + 1;
        const year = currentDate.getFullYear();

        // Format the date string
        const formattedDate = `${dayOfMonth}-${month}-${year}`;
        $("#new_datetime").html(formattedDate);
    }

    /*
    //Toggle chat and links
    window.toggleFab = function() {
        $('.prime').toggleClass('zmdi-comment-outline');
        $('#prime').toggleClass('btn-close');
        $('.prime').toggleClass('is-active');
        $('.prime').toggleClass('is-visible');
        $('#prime').toggleClass('is-float');
        $('.chat').toggleClass('is-visible');
        $('.fab').toggleClass('is-visible');
        $('#chatContainer').toggleClass('open_chat');
        $("#contentBox").hide();

    }
    window.hideChat = function(hide) {
        switch (hide) {
            case 0:
                $('#chat_converse').css('display', 'none');
                $('#chat_body').css('display', 'none');
                $('#chat_form').css('display', 'none');
                $('.chat_login').css('display', 'block');
                $('.chat_fullscreen_loader').css('display', 'none');
                $('#chat_fullscreen').css('display', 'none');
                break;
            case 1:
                $('#chat_converse').css('display', 'block');
                $('#chat_body').css('display', 'none');
                $('#chat_form').css('display', 'none');
                $('.chat_login').css('display', 'none');
                $('.chat_fullscreen_loader').css('display', 'block');
                break;
            case 2:
                $('#chat_converse').css('display', 'none');
                $('#chat_body').css('display', 'block');
                $('#chat_form').css('display', 'none');
                $('.chat_login').css('display', 'none');
                $('.chat_fullscreen_loader').css('display', 'block');
                break;
            case 3:
                $('#chat_converse').css('display', 'none');
                $('#chat_body').css('display', 'none');
                $('#chat_form').css('display', 'block');
                $('.chat_login').css('display', 'none');
                $('.chat_fullscreen_loader').css('display', 'block');
                break;
            case 4:
                $('#chat_converse').css('display', 'none');
                $('#chat_body').css('display', 'none');
                $('#chat_form').css('display', 'none');
                $('.chat_login').css('display', 'none');
                $('.chat_fullscreen_loader').css('display', 'block');
                $('#chat_fullscreen').css('display', 'block');
                break;
        }
    }
    */

    window.toggleSlider = function() {
        $('#vr360_sliders').toggle();
        /*
        var chatContainerNew = document.getElementById('chat-icon');
        chatContainerNew.style.bottom = chatContainerNew.style.bottom === '40px' ? '150px' : '40px';
        window.bottom_chat = chatContainerNew.style.bottom;
        */
    }

    window.join_globe = function(id_vt = 0) {
        if (id_vt > 0) {
            window.flyto_vt(id_vt);
            window.view_vt(id_vt);
        }
        $('#background_loading').animate({
            "opacity": "0"
        });
        $('#background_loading').remove();

        /*
        var chatContainerNew = document.getElementById('chat-icon');
        chatContainerNew.style.display = 'block';
        chatContainerNew.style.bottom = chatContainerNew.style.bottom === '40px' ? '40px' : '150px';
        */
    }

    window.renderListVr360 = function(data) {
        var html = "";
        $.each(data, function(index, item) {
            if (item.image !== '' && item.image !== null) {
                html += `<div onclick="view_vt(${item.id});" class="swiper-slide" style="margin-right: 12px;">
                        <div class="relative h-full cursor-pointer w-45"><img src="${item.image}" class="rounded-lg image-full-box">
                            <div class="absolute bottom-0 left-0 flex items-center w-full px-3 py-1 background-bg11">
                                <span class="mr-1 text-lg leading-0">
                                    <svg width="1em" height="1em" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.38668 16.7734C13.0185 16.7734 16.7734 13.0185 16.7734 8.38668C16.7734 3.75484 13.0185 0 8.38668 0C3.75484 0 0 3.75484 0 8.38668C0 13.0185 3.75484 16.7734 8.38668 16.7734ZM8.29299 8.11074V5.83615L10.6368 4.66419V6.93876L8.29299 8.11074ZM5.94919 9.93798V12.9991L7.70704 11.9888V9.05905L5.94919 9.93798ZM5.3632 6.93878V4.66419L7.70701 5.83609V8.11068L5.3632 6.93878ZM5.001 7.41417L3.31238 8.25849L5.65619 9.4304L7.34481 8.58608L5.001 7.41417ZM8.29299 11.9888V9.05905L10.0508 9.93798V12.9991L8.29299 11.9888ZM10.9989 7.41417L8.65518 8.58612L10.3438 9.43044L12.6875 8.25849L10.9989 7.41417ZM2.99987 11.5147V8.76606L5.34368 9.93796V12.9991L3.1618 11.7768C3.06253 11.727 2.99987 11.6257 2.99987 11.5147ZM10.6563 9.93802V12.9992L12.8382 11.7769C12.9375 11.7271 13.0001 11.6258 13.0001 11.5148V8.76606L10.6563 9.93802ZM7.86896 3.03089C7.95137 2.9897 8.04863 2.9897 8.13104 3.03089L10.3437 4.15678L8 5.32873L5.65619 4.15682L7.86896 3.03089Z" fill="white"></path>
                                    </svg>
                                </span>
                                <span class="text-xs truncate" custom-tooltip="true">${item.title}</span></div>
                        </div>
                    </div>`
            }
        });
        swiper.removeAllSlides();
        $('#list_vr360_slider').html(html);
        swiper.update();
    }

    window.open_game = function(id) {
        var list_game = [
            'https://vr360.com.vn/projects/games/2048/',
            'https://vr360.com.vn/projects/games/rubik/',
            'https://vr360.com.vn/projects/games/snake/',
            'https://vr360.com.vn/projects/games/tic-tac-toe/',
            'https://vr360.com.vn/projects/games/tower-blocks/'
        ];
        var name_game = [
            '2048',
            'Rubik',
            'Snake',
            'Tic tac toe',
            'Tower blocks'
        ];

        $('#game_modal .dialog-content').addClass('show_game');
        $('#list_game').hide();
        $('#play_game').show();
        $('#back_list_game').show();
        $('#play_game').attr('src', list_game[id - 1]);
        $('#title_game').html(name_game[id - 1]);
    }

    window.back_list_game = function() {
        $('#game_modal .dialog-content').removeClass('show_game');
        $('#list_game').show();
        $('#play_game').hide();
        $('#back_list_game').hide();
        $('#title_game').html('Danh sách trò chơi');
    }

    window.toggle_language = function() {
        var mapLayers = document.getElementsByClassName('map-layer-item');
        for (var i = 0; i < mapLayers.length; i++) {
            mapLayers[i].classList.add('hidden');
        }
        $('.active_map_layer').removeClass('hidden')
        if ($('.dropdown_language').hasClass('active_language')) {
            $('.dropdown_language').removeClass('active_language')
        } else {
            $('.dropdown_language').addClass('active_language')
            $('#map-layer-items').removeClass('open_map_layer');
        }
    }

    window.switch_language = function(lang) {
        $.ajax({
            url: "/app/backend/ajax/switch_language.php",
            type: "POST",
            data: {
                lang: lang
            },
            async: false,
            success: function() {
                location.reload();
            }
        });
    }

    window.clipboard = function(id_vt) {
        navigator.clipboard.writeText(window.location.origin + '?vt' + id_vt + 'vt');
        alert('Copied!')
    }

    /*
    window.show_intro_map = function() {
        view = 'map';
        toggleImg.src = "img/map.svg";
        toggleThemeButton.classList.remove("active");

        $('#iframe_overview').hide();
        $('.leaflet-map-pane').show();
        $('#map_control').show();
        $('#openweathermap-widget').css('top', '64px');
        $('#tongleButtonNews').css('margin-top', "");
        localStorage.setItem('view', 'map');
    }

    window.show_intro_vr = function() {
        view = 'vr';
        toggleImg.src = "img/vr.svg";
        toggleThemeButton.classList.toggle("active");

        $('#iframe_overview').show();
        $('.leaflet-map-pane').hide();
        $('#map_control').hide();
        $('#openweathermap-widget').css('top', '8px');
        $('#tongleButtonNews').css('cssText', "margin-top: 0 !important");
        localStorage.setItem('view', 'vr');
    }
    */

})(jQuery); // End of use strict
