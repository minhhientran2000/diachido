<?php require_once '../bootstrap.php'; ?>
<!DOCTYPE HTML>
<html lang="vi" style="background-color:#343434">

<head>
    <title>Toàn cảnh quận Hoàn Kiếm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1">
    <meta property="og:type" content="website">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="og:url" content="<?php echo env('APP_URL'); ?>/app/viewer/index.php?code=084b6fbb10729ed4da8c3d3f5a3ae7c9">
    <meta property="twitter:url" content="<?php echo env('APP_URL'); ?>/app/viewer/index.php?code=084b6fbb10729ed4da8c3d3f5a3ae7c9">
    <meta itemprop="name" content="Toàn cảnh quận Hoàn Kiếm">
    <meta property="og:title" content="Toàn cảnh quận Hoàn Kiếm">
    <meta property="twitter:title" content="Toàn cảnh quận Hoàn Kiếm">
    <meta property="og:locale" content="vi_VN">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png?v=1776001062">
    <link rel="icon" type="image/png" href="../viewer/content/">
    <link rel="manifest" href="../favicons/site.webmanifest?v=1776001062">
    <link rel="mask-icon" href="../favicons/safari-pinned-tab.svg?v=1776001062" color="#ffffff">
    <link rel="shortcut icon" href="../viewer/content/">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="../favicons/browserconfig.xml?v=1776001062">
    <meta name="theme-color" content="#ffffff">
    <script>
        window.CI360 = {
            notInitOnLoad: true
        };
        window.quality_viewer = 1;
        window.zoom_to_pointer = 0;
        window.ar_simulator = 0;
        window.ar_camera_align = 1;
    </script>
    <link rel='stylesheet' type="text/css" href="../../assets/fonts/google/css?family=Roboto">
    <link rel="stylesheet" type='text/css' href="css/jquery-ui.min.css?v=1.13.2" />
    <link rel="stylesheet" type='text/css' href="vendor/fontawesome-free/css/all.min.css?v=5.15.4">
    <link rel="stylesheet" type='text/css' href="css/pannellum.css" />
    <link rel="stylesheet" type='text/css' href="vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" type='text/css' href="css/progress.css">
    <link rel="stylesheet" type="text/css" href="vendor/tooltipster/css/tooltipster.bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/tooltipster/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-borderless.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/jquery-confirm/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-iso.css?v=2">
    <link rel="stylesheet" type="text/css" href="vendor/simplebar/simplebar.css">
    <link rel="stylesheet" type="text/css" href="css/index.css?v=7.2_5">
    <link rel="stylesheet" type="text/css" href="css/custom.css?v=1776001062">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js?v=1.13.2"></script>
    <script type="text/javascript" src="js/libpannellum.js?v=7.2_5"></script>
    <script type="text/javascript" src="js/pannellum.js?v=7.2_5"></script>
    <script type="text/javascript" src="js/progress.min.js"></script>
    <script type="text/javascript" src="vendor/fancybox/jquery.fancybox.min.js?v=2"></script>
    <script type="text/javascript" src="js/sly.min.js"></script>
    <script type="text/javascript" src="vendor/tooltipster/js/tooltipster.bundle.min.js"></script>
    <script type="text/javascript" src="js/mobile-detect.min.js"></script>
    <script type="text/javascript" src="vendor/jquery-confirm/jquery-confirm.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/numeric.min.js"></script>
    <script type="text/javascript" src="vendor/simplebar/simplebar.min.js"></script>
    <script type="text/javascript" src="js/lottie.min.js"></script>
    <script type="text/javascript" src="js/panzoom.min.js"></script>
    <script type="text/javascript" src="js/moment.js"></script>
</head>
<!--  body  -->

<body id="body">
    <link rel="stylesheet" href="themes/default/style.css">
    <link rel="stylesheet" href="themes/default/responsive.css">
    <style>
        *:not(i) {
            font-family: 'Roboto', sans-serif;
        }

        .controls_btn,
        .menu_controls,
        .list_alt_menu,
        .song_control,
        .map_control,
        .map_tour_control,
        .fullscreen_control,
        .title,
        .dropdown {
            font-family: sans-serif;
        }

        .header_vt,
        .header_vt_vr {
            height: 85px;
        }

        .comments_vt {
            color: rgba(255, 255, 255, 1);
        }

        .logo {
            height: 30px;
            width: 30px;
            left: 0%
        }

        @media (max-width: 540px) {
            .logo img {
                height: 26.666666666667px;
            }
            .logo {
                height: 26.666666666667px;
                width: 26.666666666667px;
                left: 30px
            }
        }

        .nav_control {
            background-color: rgba(0, 0, 0, 0.4);
        }

        .nav_control i {
            color: rgba(255, 255, 255, 0.6);
        }

        .nav_control i:hover,
        .nav_rotate.active_rotate {
            color: rgba(255, 255, 255, 1);
        }

        .fullscreen_control {
            color: rgba(255, 255, 255, 0.8);
        }

        .fullscreen_control:hover {
            color: rgba(255, 255, 255, 1);
        }

        .map_control {
            color: rgba(255, 255, 255, 0.8);
        }

        .map_control:hover {
            color: rgba(255, 255, 255, 1);
        }

        .map_tour_control {
            color: rgba(255, 255, 255, 0.8);
        }

        .map_tour_control:hover {
            color: rgba(255, 255, 255, 1);
        }

        .song_control {
            color: rgba(255, 255, 255, 0.8);
        }

        .song_control:hover {
            color: rgba(255, 255, 255, 1);
        }

        .list_alt_menu .title i {
            color: rgba(255, 255, 255, 0.8);
        }

        .list_alt_menu .title i:hover {
            color: rgba(255, 255, 255, 1);
        }

        .list_alt_menu .arrow {
            border-bottom: 10px solid rgba(255, 255, 255, 1);
        }

        .list_alt_menu .dropdown {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            ;
        }

        .list_alt_menu p:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            ;
        }

        .list_alt_menu p i {
            color: rgba(0, 0, 0, 1);
        }

        .list_alt_menu p:hover i {
            color: rgba(0, 0, 0, 1);
        }

        .menu_controls .title i {
            color: rgba(255, 255, 255, 0.8);
        }

        .menu_controls .title i:hover {
            color: rgba(255, 255, 255, 1);
        }

        .list_control {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 70%, rgba(0, 0, 0, 0.05) 85%, rgba(0, 0, 0, 0.1) 100%);
        }

        .list_control i {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 0.8);
        }

        .list_control:hover i {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .list_slider {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .list_slider #list_left,
        .list_slider #list_right {
            background-color: transparent;
            color: rgba(255, 255, 255, 0.8);
        }

        .list_slider #list_left:hover,
        .list_slider #list_right:hover {
            background-color: transparent;
            color: rgba(255, 255, 255, 1);
        }

        .list_slider .slidee li.active {
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.8);
        }

        .controls_arrows {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 0.8);
        }

        .controls_arrows .next_arrow:hover,
        .controls_arrows .prev_arrow:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .controls_arrows {
            background-color: transparent;
        }

        .list_control_alt {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 0.8);
        }

        .list_control_alt:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .arrows_nav .prev_arrow,
        .arrows_nav .next_arrow {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 0.8);
        }

        .arrows_nav .prev_arrow:hover,
        .arrows_nav .next_arrow:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .language_control {}

        .language_control:hover {}

        .custom_control {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 1);
        }

        .custom_control:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .custom2_control {}

        .custom2_control:hover {}

        .custom3_control {}

        .custom3_control:hover {}

        .location_control {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 1);
        }

        .location_control:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .audio_room_control {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .audio_room_control:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .info_control {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 1);
        }

        .info_control:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .dollhouse_control {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 1);
        }

        .dollhouse_control:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .gallery_control {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 1);
        }

        .gallery_control:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .presentation_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .presentation_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .facebook_control {
            background-color: rgba(66, 103, 178, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .facebook_control:hover {
            background-color: rgba(66, 103, 178, 0.9);
            color: rgba(255, 255, 255, 1);
        }

        .whatsapp_control {
            background-color: rgba(37, 211, 102, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .whatsapp_control:hover {
            background-color: rgba(37, 211, 102, 0.9);
            color: rgba(255, 255, 255, 1);
        }

        .zalo_control {
            background-color: rgba(37, 211, 102, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .zalo_control:hover {
            background-color: rgba(37, 211, 102, 0.9);
            color: rgba(255, 255, 255, 1);
        }

        .share_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .share_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .form_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .form_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .live_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .live_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .meeting_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .meeting_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .vr_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .vr_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .icons_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .icons_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .measures_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .measures_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .autorotate_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .autorotate_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .orient_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .orient_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .annotations_control {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .annotations_control:hover {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }

        .compass_control {
            background-color: rgba(0, 0, 0, 0.6);
            color: rgba(255, 255, 255, 1);
        }

        .compass_control:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: rgba(255, 255, 255, 1);
        }

        .annotation {
            background-color: rgba(0, 0, 0, 0.4);
            color: rgba(255, 255, 255, 1);
        }

        .annotation hr {
            color: rgba(255, 255, 255, 1);
            border-top: 1px solid rgba(255, 255, 255, 1);
        }

        .header_vt,
        .header_vt_vr {
            color: rgba(255, 255, 255, 1);
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.269) 14.3%, rgba(0, 0, 0, 0.24) 26.2%, rgba(0, 0, 0, 0.214) 36%, rgba(0, 0, 0, 0.19) 44.1%, rgba(0, 0, 0, 0.168) 50.6%, rgba(0, 0, 0, 0.148) 55.9%, rgba(0, 0, 0, 0.129) 60.4%, rgba(0, 0, 0, 0.111) 64.3%, rgba(0, 0, 0, 0.094) 67.8%, rgba(0, 0, 0, 0.078) 71.4%, rgba(0, 0, 0, 0.062) 75.3%, rgba(0, 0, 0, 0.047) 79.8%, rgba(0, 0, 0, 0.031) 85.2%, rgba(0, 0, 0, 0.016) 91.9%, rgba(0, 0, 0, 0) 100%);
        }

        .snipcart-add-item {
            opacity: 0.5;
            pointer-events: none;
        }

        .map_bar {
            background-color: rgba(255, 255, 255, 1);
        }

        .all_maps {
            border: 1px solid rgba(255, 255, 255, 1);
        }

        .map_name {
            color: rgba(50, 50, 50, 1)
        }

        .info_map_btn {
            color: rgba(50, 50, 50, 1)
        }

        .info_map_btn:hover {
            color: rgba(0, 0, 0, 1)
        }

        .map_selector_control i {
            color: rgba(50, 50, 50, 1)
        }

        .map_selector_control:hover i {
            color: rgba(0, 0, 0, 1)
        }

        .map_zoom_plus_control i {
            color: rgba(50, 50, 50, 1)
        }

        .map_zoom_plus_control:hover i {
            color: rgba(0, 0, 0, 1)
        }

        .map_zoom_minus_control i {
            color: rgba(50, 50, 50, 1)
        }

        .map_zoom_minus_control:hover i {
            color: rgba(0, 0, 0, 1)
        }

        .map_zoom_control i {
            color: rgba(50, 50, 50, 1)
        }

        .map_zoom_control:hover i {
            color: rgba(0, 0, 0, 1)
        }

        .map_close_control i {
            color: rgba(50, 50, 50, 1)
        }

        .map_close_control:hover i {
            color: rgba(0, 0, 0, 1)
        }

        /*.pnlm-hotspot-base>*:first-child{*/

        /*    transform: translate(-10px,-10px);*/

        /*}*/

        .alt_menu_bottom_control p {}

        .alt_menu_bottom_control p:hover,
        .alt_menu_bottom_control p.active {}

        .diagram_control {
            color: rgba(255, 255, 255, 0.8);
        }

        .diagram_control.active {
            border-image: linear-gradient(90deg, rgba(239, 236, 232, 0) 0%, rgba(255, 255, 255, 0.8) 55.2%, rgba(239, 236, 232, 0) 100%);
            border-image-slice: 1;
        }

        .diagram_control:hover {
            color: rgba(255, 255, 255, 1);
            border-image: linear-gradient(90deg, rgba(239, 236, 232, 0) 0%, rgba(255, 255, 255, 1) 55.2%, rgba(239, 236, 232, 0) 100%);
            border-image-slice: 1;
        }

        @media (max-width: 540px) {
            .setting_bottom_control {
                left: unset;
                right: -20px;
                bottom: 5px
            }
            .dropdown_tool {
                bottom: 80px;
                left: unset;
                right: 50%;
                transform: translateX(50%);
            }
        }
    </style>
    <div class="noselect" id="context_info"></div>
    <div id="vt_container">
        <div class="loading hidden" style="color:#ffffff">
            <i onclick="start_vt();" id="icon_play" class="fas fa-play"></i>
            <div class="protect">
                <span class="protect_title noselect"></span><br>
                <span class="protect_description noselect"></span>
            </div>
            <style>
                #vt_password::placeholder,
                #lead_email_vt::placeholder,
                #lead_name_vt::placeholder,
                #lead_phone_vt::placeholder {
                    color: #ffffff;
                    opacity: 1;
                }

                #vt_password:-ms-input-placeholder,
                #lead_email_vt:-ms-input-placeholder,
                #lead_name_vt:-ms-input-placeholder,
                #lead_phone_vt:-ms-input-placeholder {
                    color: #ffffff;
                }

                #vt_password::-ms-input-placeholder,
                #lead_email_vt::-ms-input-placeholder,
                #lead_name_vt::-ms-input-placeholder,
                #lead_phone_vt::-ms-input-placeholder {
                    color: #ffffff;
                }
            </style>
            <div class="progress-circle noselect"></div>
            <div class="progress">
                <h3 class="noselect" id="name_virtualtour">Toàn cảnh quận Hoàn Kiếm</h3>
                <h2 class="noselect " id="author_virtualtour">Tài trợ bởi vr360admin</h2>
            </div>
        </div>
        <div id="background_loading" class="background_opacity"></div>
        <div id="dialog">
            <div id="typed" class="noselect"></div>
        </div>
        <div class="live_call">
            <style>
                .video_background_my {
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JBMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JCMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MUM4N0ZDRkYwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MUM4N0ZEMDAwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                    border: 2px solid #00aced;
                }

                .video_background_remote {
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JFMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JGMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QzI3RURDQkMwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QzI3RURDQkQwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                    border: 2px solid #ffa90b;
                }

                .floating-chat .chat .messages li.self:before {
                    left: -45px;
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JBMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JCMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MUM4N0ZDRkYwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MUM4N0ZEMDAwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                }

                .floating-chat .chat .messages li.other:before {
                    right: -45px;
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JFMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JGMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QzI3RURDQkMwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QzI3RURDQkQwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgMEAwICAwQFBAQEBAQFBgUFBQUFBQYGBwcIBwcGCQkKCgkJDAwMDAwMDAwMDAwMDAwMAQMDAwUEBQkGBgkNCwkLDQ8ODg4ODw8MDAwMDA8PDAwMDAwMDwwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCACOAI0DAREAAhEBAxEB/8QAvwAAAQMFAQAAAAAAAAAAAAAAAAcICQECAwUGBAEAAQQDAQEAAAAAAAAAAAAAAAEDBgcCBAUICRAAAQMDAwMCAwUEBwMNAAAAAQIDBAARBSESBjFBB1ETYSIUcYEyFQiRsUIj8KFSYoIkF0MlFsHR4fFykqIzU5OjNDURAAEDAQUDCAgDBQYHAQAAAAEAEQIDITESBAVBUQZhcYGhIjITB/CRscHRQmIUUiMV4XKisjPxksJDcxaC0mODsyQlF//aAAwDAQACEQMRAD8An8oQihCKEKhNhehCwPSWY7Tj8hxDDLQKnHXFBKUgdSonQCmMxmaeXpyqVZRhCIcykQIgC8klgANqyjEyLRBJNzB0kme8z8cx5cYxDS87IbNlOtq9qOLEg/zVglX+FJB9aqDiHzr0rISNPKQlmJg3jsU7yCMZBkbnBjAwkCGmpZkeDs1WaVYimPXL1C7pL8iSjJ+YOYT1f5N9jENAkBuO0lZIPqp4L1+y1VDqfnLxBm5DwpwoxD2QgC7mzEamMvHfHDzbpVleEMjRHbBmeUt1RZcRL5NyGfdM3Oz5KXDf2nJDnt3+Cb7R+yoNmuKdXzQIq5utIEuQakyLfpdhzAMu1R0zK0e5SgG3RD+tagvPnUuKIvY3USP31wMMdy28EdyyNSZsRxLzMp+M4k3aeaWptY+wi1PZbMVMvUFSjIwmLjEsRssItCSdOnUDSiCNoIBC6iF5B5pAWVschlOXTtKZKhITYfB4Lt91qlmn+YPEGRJNPOVSTZ25eL6hVxiPQAuXW4fyFbvUo9HZ/lZKLhfN+Qa9tGbxTMxKdockxlFly3Qq2q3JUfQXT9tWTovntnaJEc/l4VIuO1AmEwPmkRIzjKTWgDww9jjZHc7wTSNtCZidxDj13jrS0YDnXGuSBCcdkEJlKFzj3/5UgHUkbFfitbqkkVd/DnH2j68AMtWAqH/Ln2KlzkAGybC8wMgN6h+f0TN5J/EgcP4hbH17Oll1iV7u1qmLrkAur6VKihCKEIoQihCoTYXoQqFVu2vpSOhJ5zPyNhuJoMU/5/MLALeObUPl6G7qhfaLagdT/XVb8beZmQ4cBpRArZmz8sFsLsXqSaWDs2xDGReNgicY7+j8PV9R7Xdpj5jt/d3+z2JrnI+W53k8gO5OWt2OklTMRB2MtdbANiwNgbXNz8a8pcRcX6nr9THnKpIdxAdmnG9sMLnGIjEXmRYZFWfp2k5fIxalFjtN5PT7hYuaUSbq3blDW56k9BqO+tqjQXSCqLqISAN17KSki4tcG9u9wdKLklyQnnHnnjfGXX8Xx5lHLM0wotyPbWUQ46xe4cdSDvULapR+3Q1YvDnlvntUgK1c+BSZxiDzmDtjDd9UmG51q18yIWbU3LKeXfJnJpbUZnPuQFz3ENQ8Zh0COlSlqCUoC0BTlrm11L+NWxkuBdA02kak6PiYImcpVJYi0YmRaIaAusEgXNi1fFq1C0bBvToMHmuDeM8WnH8i8gNZfkLu05ufImuTn1yALrShCPc9tCeg0F+p1qm8/p+qcRV/GyuRMKN0BCmIQERvk0cUjeSSdwYBluQngiMRVx89eL23FNjNzHCP9o3AkFs/YopH7qcj5Y8QTD/bgc84A+olJLNUwWcdfwW/w/lXx1nHEx4HLYSZTv8A5cWUVxXCemnvpQCfgDXHz/B2s5EGVbK1BEXkRxR9cXs5U+KgJstShJ3oW0tHyDRTbyTawt+JC026+t6jbtzrJxKJ2+m0JZeHeW8piltxeRlWUxqbpE0HdJbHa/T3APQ6+h7G6eDPOPPadONDUjKvQ/Eba0N3aJ7cb3E+3bZNoiBh2scJUa7zy3Ynu+U/D2e1OWx2VgZaIzPxslubDkJ3MvtKuCP3gjuDqO9eodN1XLall45nLTE6cw8ZD2EXxI+aJAlEuJAEEKt8xl6mXqGnUiYyF4PpcveFXtp1rfe1Mq6lQihCKEKitAT6UISMeRvJCcBvwmGWHMyUgyXhtKYyVDTTW6yOxGnWqU8zvMw6M+RyJ/8AZIGKTAikDaBa/wCYzFiGAIJ3KXcO8OHONWrBqb2fV+zl23Jrzrzz77kp51b0iQouSH3CVKcUe6ieprypWqzrTlOpIylIkkkuSSXJJNpJNpJtJtKtCMIwiIgMBYANixj8W463/FTaySG+Z/Jkjh0SLxvAPBnlOdT80s2Jx8R1XtB8Agp9xRJCN2gsVHQa2HwDwlDVpzzeaiTlqNpA/wA2YGLw7wcLWyw9o2RDSkCNTMVsLAbSki8peU1mM5494ROWjAYhsY/NcgadV7091KB7iEOghWwkkrVe61Hrt0qbcGcERLalqMHqVDihTIAjAG2MjG5/wwbDGPLYma+YLuDb6dfLdu2pvgKQhKUAJCAEoCdNqR0SLdAPSrbnMSL8r9O9aQsu+KLm/UgpVuBFwQfUGsSXv3ulViUpRcIARc3ITYXPc6dzSTJm2IksLLeV+b050EkqtulwSOoF+h++9qJQcdkOdyXEw3ruuGYHhWYd97mvMUcex6FW+hbjurkvgkdXEtuNsg9upNRfiHV9WyYP6dlTUmzCoJRwx/7b4pnnYcjXu06NMuZG/ZcE+PgQ4LGxDeK4Hlo2Sx0b5vp2py5byTa11peWpxF/QAD4V5z4iGpyzJq6jTlCpK22Apg82ECJ5+tdGlKLWLt07U3t13XF9dK4JdPFyut4ly/KcTnpkQ1l6G4r/PY4qsh5HfsbLH8JAvfTpcGW8I8Z57hrNCtl5YqZ79Mk4Jj/AAzHy1AHj9UTKEuRq+j0tRpYZWSF0mu/Zv8AXeyeHgM5juRY5jK4qQH4j+ljotCx+JC09lDuPvGle0eHeIMnruUjm8pJ4Gwg96E7DKExskNuwhpRMoyiTUOeyNXJVTSqhpDrGwjkW9rurURQhUOgoQk18j83TxXFpZhqSrNZDSE3orYhJG91QIOg6C/f7KrHzN46HDuR8PLyH3dUNCx8EfmqkXWXQxXz+WUYzCkXDui/qFZ5/wBON/Kdg9/MmguuuSHFPvuKdkPKUt95ZKlrUokkqUdSftrxvWrTrTlUqSMpSJJJLkk2kkm0km0nerchAQGGIYC4bAsdNrJWOPMxmXpclftxoja3pDno22CpZ+5INLGJmRGN5LDnNyxkWCjK5PyCXy3kOY5LOv7uXkl5plRulDNrMIH91LdhavYGjaPHSMnRykQxpQ7TbakiDKR5XDc0QuRWm8yBctGLDaElKEqAA/eAAPvrfaxrSeU+npyWJplfYgW2af2+1DMlAD3qwkIGp2aXKl6C1KEKgIWNySCPuH76UgIVwuPm0Kf7Q/d1H7qRCtSAk3A17XJsDawt6f00ojZYkZe/FQ8jOy+Ni4Vt1eblSUM4lTCy0/76jZG10G6NdSewrXz+YoUstUlmjHwIRJmCMUSB9B7MpG6L/M116yjiujf6bFJFxHG8kxOBhwOWZ5HI83HBEjJIb9sWNgG93VzZa282KvSvJWt5rJ5rNzq5Kj4NEnswcybltue9rguxSBEV0hAOhFxXLTi7ngXMpPEcwh1e9zFSzsyUZJ/h/wDVSNRuR1+y4vrpOuAONKnDOfFQvKhNo1Yvs2TjsxwvH4hig8cWIcPXtGhqNFhZUj3T7uY/t53lRZbMxhiVGWHo8ptLrDyeikLF0kfaK9s5fM08xShVpyEoTAlEi4xkHBHIQqeqU5U5mEgxF/Idy9VPrBeKbNjwocmZLX7UaI0p6Q512pQNyj8bAVqZ3O0cpQnmK0mp04mUjaWjAYiWAJLAXAOdgWdKlOtKMIi2RAHOUx/k/IZXKczMy0klCXF7Yse9/aZH4EA6drE6anWvCPFPEVfX9RqZ2sGMrIxckQhGyMA+7awAMzKTDEVd2mafDIUI0o7LzvO0+7kuXP1HVvo+2hCTjy/kl4vxly2Q2sodkRUw2lDreU6hgj9izUr4Hyn3WuZWBDgTxEckAZn+VNVi0SdyjwJCEXWQ2hA+ZRNhtFr6noNDrXqYC977z02v1rjRG61k53xX+lXyD5JgxOQZR1ng3FJu12JPntKdmymV6hceJ8pCT1CnCm/YGkJZcvNavTpSwwGI9Sd/xv8ARn4bwyEqzLOV5fNTbe/PmKYa9dGIvt7b+hUabMi65lTVsxK4gDmfrPwSrQ/AvhGAhIjeKuOFSdN78QPKI+KnStR+80hkStb7zMfjPQB8F5Mr+nzwhl21oleLsE2pYIS7CaXGcTf0LKkWpRJllHPZgF/EPSzexIly39Efj7Jtrc4ZyHLcNmFP8piSr8yh7uwUl0pdSD32rrLGHW1S1irHvgSHJYfgmNeT/DPPvEcxprlWMQ7iZqw1iuTwFF/HvrIPyFwpSWlmxIQ4AT2JrITAXcyudo5kdksdxvWHw9MjQvJ3DnX7Bt+Q4w2Vj5g48y422r7iR+0VFOP6Mqug5nDsESeUCcSV0MuWnhbf7FIOBt3I9CCPh8K8tX2rrX2ooQg3sbHaeyh2+34etKhOM8L8qLrbvFpix7kZKn8YokC6L3dZHS+wq3DToT6V6S8keL8UJaPWNsXnSNlsSXnT53JqC8t4jkCICrrjLShGQzcB3rJf4ZdNx6Evu/4fd3r0QoIxSJ+ac4YmHhYVpyzmVdLkpAI1YZsbK7jcspsR6EVRPnlrpy2nUtPge1Wlin3T+XTYgF3kHqGMokN3JB9imXBmR8XMSrm6AYfvS+Af1psVyolRGvRPwFeWrlZzNYihCPW/oaEJFP1BqUPGkltJ+V3K49tX2e4Va9f7NWF5XD/71Mi8QqH+ArTzhameb3hN7/T1xzD8q8y8Cw3IG0S8WZD01UB0AtyXITC32WVpOigVoBIOhtaxr0jIN6z6dS4eoTNPLyMS3oB71NE4rcrcSoG1g30AHbT7tPQaUw5KiMAwZW3t+EWFIyyRc3vfWhDIKidLkX620oZDKnoLk27E3oZC1PIONYjmODynFuQQ0T8NnGDHnxXBdNiNHE+i2z8yVDUEUoKxMzTOON4UGTLauK8xRGDynXOM8iEdUg9XBAmFv3Lj1CD/AMlMapRFfJZinfipVB/BJTqhMkxO1h1qTVR+ZarW3qP3C9eOhcu2LlbQlR2IPQ9aELaYXLPYHKwcywT7kB5Dqk3I3pBspH2KSSDpXW0PVquk56jm6XepyEmdnHzRe2yUXieQlaudykc3RlRldIEfA9BtT4fzeF+UjN+5/u/6X6z3bG/tbPcvbr07V7v/AFfK/YfqGL8jwvFxYS/h4fEfD3u7azPsvVH/AG0/F8Fu2+Fvq3Jp/lPKfmfMsiEve6zjkohR02tt9q5cH/uKVXkDzV1f9R4hriJeFFqUbGbB3xytVNS3dyK2OFct4GQg4YyeR6e7/CyTqq5UiRQhH9VCEk3nGCZnjDkC03P5YqPkFJHdLDqd3T0SSfuqb+XWa+317Ln8RMBstnExAe1nLBa+ZhigRyJieLz2S4pkcbyjDPGLmeNymshindf/ALDKgEpI1JS4fkItdV7CvTHIC7C/luu6FxqlKNUGErj/AG+5T146Y9kMZjMhIirgycjBjS5cBwHfHcebDimj01QVbbWrAhlCgGJG4kDlXqoWSKEIoQqp6ihBXBeVubf6deOeX80bbS/KwUBbmOYVolcp1SWY4J7D3HE3ojvWdCl4tSMN5UIkGPLyOUxbC1qlT8rkGgt0EqU87IkJKz6/MpSuvSsc5W8DL1qv4Kc5G3dEqbQgcYiNh9gUpS/xOAagLNj8P+u9eNAuyNispVkihCDcjaOqrAftoQls/wCJHf8AR0w7q+pGSGGLu7XYVfU/s9sbLVd/+5z/APn3gNLF432+Jzc/3G98GD8rDuDd1Qn9Nj+u42sweJ0tg/mtSP5GW7OyGQlvK3uyZTzzivUuq3n+u9U1ns5PO5ipmanfqSM5fvSJkesqYZelGlShAXCIHqDLx1qp5FCFUdfXQ0JCugwHHMfyUzYuWHuYgtFnJRLA+8h4FCm+o/Em+tTPgrh4apmjUqSMadExkTHvEk9mIOzuyJNtzbXHL1bNyy9Noh5SuTcP03eFYEbzh5FRnoIyGO8Ryfp8C1KSHG1y5K1KivrSbglEcbhe4ub9RevTEa/iDFvc9O/ksvBfeGUd1XNSNCAibJ2vdz/BSPq3FSlHXftUo36qAtek2rgxAAAGyxUrJKihCKEI6aihC0fJuL4fm/Hsxw/kEcysNyOMqDPaSrYra4RZaVDopCgFJPYgUI8Q0u2Lxao4P02+Fm8xyrmXIORPrI8eZqThMMhKfleyrRWhx9zXVDaLbQP4lXvYAVxOJMjHUcnLJymYGoGJAe7tBx+Fx2vpdrVKq+cNGcSA72nm9CnISGHY0h+O8n546yhZ9CCRr+yvKdejOjUlTmGlEkEXsYliLNxUnpzE4iQuKxU0s0UIRr1HUaj7taELfMSEjiuTiqVqrKQZbTd+4YlpWofeU1Icvmm0avQMr69GQGyyGYEiB0wB32bloTp/+5CX0Tj/ABQb3rQDpqde/wDXUfW+VWkQihCPm129QKELqOJ5RrHzvbkrDUWalLbiiQEpcSfkUo29dPvqacD65DTM/hqyIpVOyS7CMvkmbLgSYkuMMZSlsY8zVctKtTeIeUbejaEpvE+NM4nkPPeRNrQV80kY199hIsUqgxfprk9wsAEWr0fk7KQizNu28r7RtBDiQIKg2ZJ7EdkQesrvdx27fTvWw21azK2lSooQihCpQlWVghLzSiT8qr6C9Fm31bU3UDxISC8UwCPG+G5U9kJLT0vkPJ8tnSljoVzpBUwyL9djQRu063qJcR67R06hLM1QcQsgPxy2D92ztEOMLh8TBSGnTlnKsYw3AHkC4l1x151550Dc6srJHcquTevMlWrKrMzkXlIkk7ybSppGMYgRGxY6bWSKEIPQ/ZSoWQX2rTfTelNv8CjWPp1rHa/J71jsUlST/DYH77n/AJqVZO6KEIoQi5HShCPlKk7hcE631pbUWtYlE4Dn5EfKt4abJUuLLHsxir5gl2xLYClEW3EbQL6mrS8teIq9PPwyVSUpUqgIiL8EgCY4XuibQQLHIJuJUc4gyUDQNeIYi/ZY7dKWwn8OlgsXTfr/AEPWr3i+Ebvj8FDgiskIoQihCPuv1Nvs1oQuZ5pyrFcI4vluT5ic3BhYxtF5LgJCHn1paYBSLk3WsUxmqWbq0akcnT8SvgPhx2mbHDzte3zNh2rEVacJx8UiMHDk3M/oE3t3Kv5gxsg7PTkW3Gg9GlIUFtrS4SoKQUkpII6Hv2rybq+dzmbzE5ZyUzVBMZCdhi18cNmBj8oAY7FZ+Xp0oQ/KHZO7aGsWACxURf5ut65qfKrSIRQhUIJFgbaj99KhehDDqor8oD+W0+0hSv7zjbhH9SDTooTlTNUDsxIiTyycxHSIS9SbMwJiO0g9RHxWxz8A4vO5rHkECLNdba3CxKEKKUn7xY10uINOGnajmMrEERp1JxDu+ESOE274sQdotWvp+Y+4y1OpviD0kLT1x1uIoQihCodtrqISkC5UrRKQNSVHsAOvwpUhLBymQ+RvKWW5Nn2V8enOY3AcdnIe4+82ooMiVGXduc5axPzJJQDpt7E17X8tPLKjw7kvHzsIyzlWLycP4MJC2nEm6QB/MItxdgExBeluJOI62ezBjTk1KnLs/W1mL93vCIuI7V6lO8W+Q8f5Q4Nh+XQihMiQ2I2ehI0VEyLCQJDJT2FzuTfqk3pdTyM8nXNMizZyx2LZyOYjXpgi8JQrC171ordVKVCKEINrdSCbbbDW96AhRz/rE8ntZvMQPFuHdDsLjj4mcqdRZSF5JSbsRibWPsNrKz6LUBoU1N+GdPlTpnMS70rByAH3jaorrObxnw42jakt8Hc8dxWVPDMq6teJyiz+RrcNzGlFJUGUeiHrGw6BVrDU1V3njwPDP5aWt5WP51FhXs/qU3ERVfbKnZGRZzG0yaICk3BOuSo1fs5n8uR/LJ2FnMfhbfYndkWPYoN/bVfUgHuO1eTVa4KpQlRQhVHX172+zWhC6pnGvI4NkMiSPbkZ6G0363ZjSVKT/wDKBUvo5KUOGq2aPdnm6VMb3p0q0pf+SK5U8zE6hCntFKR9coN/KV2PmTELhcoRk0oUWM2wlz3OweYCWloH+EIP31MvOvRpZTW/urcGYhEuWbHTApyiG3REJF9s7OTj8HZwVcmaW2BPqkSR1uEkdU8paihCKEJNPLuZewnj3OyYzimpM8Ix8d1HUGSsNqt/gKqsXyn0yGocT5OnUDxjI1CD/wBKJqD+KI97ixRzizNnLabVkCxYD+8QPY6YjtQkNtpSAlIIA7BOgAA+Pf7K91EOSTaXL87uT0kqjIWd2xrOs9Wxk4j9M/kDOcO8m4fj8Vf1eB51KTCzOPWqwDobWpqWi/8AtG9tv7ySR/ZtweI8vCeVnWl3oDqe5dTTK8oV4wF0lK8y8zKZbkxloejvAFt9BuDf1PrVcQLxEhcVLrQWN6yEW7/bS2odVSLkXHy96CkJXOZ3kTOJKYsUpcybxSEoGqWkk6qX6fD41r16mEEPsTtKial9yhR5CpS+T8ocU4ouLzE5TilkqUpSpDh3knqSb3NXHlB+RDdhiOpQOvLDUkBsmepaf3XIgTJjLU2/DWJEZwH5kONqC0kH1BGlbNTLwzUTRqDFCYMZA3GMxhmG3GJK1sU6XagSMJxA7m7XuUk+IyCcvh8Tl0jb+aQ48kpHQKdbCyP/ABGvm/qmQnp+crZWfepTlA/8EjH3L0dlqwrUo1BdICQ5pBwthWgn0UIVDqQKVCcx/wAGj/SP6D2h+Ye1+dXsb+/f3dtr/i9r5K9P/wCyh/sLwMA8fB9z3Tix/wBRmvx+D+Vv6FWn61/9vG/Yfw+ju+rH2l1flPja89xd92MgLnYhX1kZIHzLSkEOov8AFJ3fEgCpb5r8MnWNGnKkHq0D4kbA5iAROI22x7TDvShELmcMaiMnmwJloT7J5Nx9dnMSmedTfoPT99eM1byrSIVOth03G1+tKhJN5xgrl+N8uWD7hx02LMcsdUtodCVG1tPx+tWj5MZsZfirLGVgnGpDplSm3WolxrRNXTKh3Mee0f2pkCBt011G4k9+1x9tq9u3gH0t9lypgbhucnpNi7fxvmo/HPI/A87KUG4uNzkRcp0jRDa1FtRPwAXWjqtCVfJ1oRvMS3OLVs5OQjXgTsKlomNZXBSHZuGUFRnVFUuARuQVXuVpF9Ae5FUjSrmLSPLZ6blZBjGqBvWdrn7YbT9RiVe53DTqSm/2EXH31ujOBrEwcqXvWun84yEkKagtM45C9C+VB1YFu1gAD91YSzJlYFnDLAG21cFPykfGQp2cnPgR8fHemy5Diiq4ZQV3PS5JTYXpqnGVacYxDmRA9dnULU9UrRo0zI3B1Fa7IcnSps54fzpsl2U4bWP+YUXLW9Ek2q9adPwoCmflAHqCq2RxGR+on+9b1LC6lS2lttpK3HU7G0J6qUrQJFr6k6VlihDtzkIxFpJLADa52DeVjKJnEwjbKVg5zYyke41j3cTxzj+Mk7US8fjIseS0CSUrQ0kqHQdFEivnTxFqENQ1PNZqm+CrWqTD7pTJHUy9EabRlRytKnIWxhEHnAETb0Ld1xluo17C9+tCF1vBuOnk/JoONUkmKyr38kQDYMo1UNwtYqJCR9vwqYcC8Ofr+r0crIPTfFU/04WyFhBGKyDi0GQK5Ouah9jlJVB3jZHnPwv6E9rYdu2wta1u37K90N6lStvp7VkX+E1kUJnHkriZ4xyAuR2yjD5danoBTqEK6uNH0AJFvhb414t8zuDzw/qcjTiBl6xM6V1jNjgwAbBKXZvHhyh2jLE1vcNat9/lmkfzIWS5RsPptdJ5ZQ0KTa5O8AkWH/RrVbqROk3535MwPBWgzIK8jnXkbouDYNnQCLhx9YCg0g9iRc9h3qweBvLjUuK5mVECnl4kCdWXdB2xgL6kwLcIsFmKUXDxvXuJsvpMWPbqG6It9f4RyyTReVeQ+Vc03N5aeI2NcO5OBh3bjJsdNwTq4QNCpZJPwr1twr5c6Nw1GMsvSx12trVO1U3PH5aQOwQDtYZytVUarrmc1F/Gm0ZfIPl2sd7X+wLirEJ07CwGug6kD76nC44DenOVYUhy7TlghYIWomwta5II/fSu1np/ZvSGJNykz/Tx5dZ5/wAbh8Zy7qUc24xGQxKZUQDNiNgJbktDqpQSAlxOp3Dd0NVJxNoZyNY14D8qRLWd0m2USLbCbYqbaLqUa9PDKyQsS9SsRj5oW46wAsncp5s7VXtYgkWuKjGLaDYu+5daxviuOWtO115YKhZoKvf/ALqb0pqse1d7PT1IMsN6Zn+pHyjhm4krxfw55LypCz/xzm2le5ZKVb0wGXDuBUVAKcKTYWtrrVgcI6FKzOVhvEAbDb83qcN0qJa5qniRNGBsN6Zom6jusQlwlQ3dAT0Tp6VYLubVGGv5bVRtbiHEvMuKbdjuhbLjZIUladQUntY97dabq06dSEoVYiUJAiQLMYkMQXsYiwocxIlEkEEEENYQX22JxXAvO8uO7ExXO1mXAdV7aOUtos8zcWR9S2kfOCRqsC47153448iadQHMaGMM7zQlJ4n/AEqkj2S7AU5yk72SFyn2hccVIGNLOMQS2MbN2JrG+oBnTp2JEeTHjyYr7cuPLbDseU0tK0OIPRSFA2IrzDXoVKFSVOpExnEmMokESjIXgg2gjaFaVOpGrHFEuFmtuunWx0076XPSmVm7J3fi7h6uNYcy5yNuXzIQ7LQpO1TLYH8tkg90j8Xx+y9exvKjg06Dp3jVw2YrtKQIINODPCmRK3FaZT7MSCcBfACak4m1f77MYIf04OB9R2y5t3IlRt8atRgo0gi9Khc5yfAQuQYWbj5yCtCm1KZWlIU4hwA7VI1GvwuL1HeKOGstxBkJ5PMCw2xlthMd2cX2jbaMUSYksSt7T9QqZKuKsNl43jco5/MuayHifDSvqGVMZ+asRONsukWWs7lfUAKtdCEDdqOosodq8vcK+V+bz3EX6Zn4mFKkPErSjdKk7R8OVj+LLsRN8e0TF4SiLF1jiejR0/7ijIGc+zEbcchdttjaTsu2FR9vSJEyTInTJLs2XMd96ZOeUS667axUq/26X6dK9pZbL0crShRpQEKcBhhGI7Ajfha31HbbbI2U1KpOpUlOcjKZtkd+xz8C7NZZYrSLkkmxVqbaD+qnGG63ft9d7cjpG2rzS0SlsqEFaUy0n3I7bmjbik6+2o9Ruta9KlXjxuTi5VlbrP8AKkML2S4Dg/nsOD+FaCO2tj0tQkIcLpITud4/Lxmfxxn4KcF+5hcyhC2NymyAVMOlIDovYG1wRodKwrUqdaJpzAIIYg+mz9iWMqsCJx7yfL45/VnhpUH6LybGcxOais7/AM+x0dbsWcUg6KabBU08fh8hPpVdanwVWjISybSgdkrMPNvHWpTktfAjhrhikp8o/qi5Fy1qXguEsyOI8ee3MSMiFf71mIXpt3pNo6VdCEEq/vdq7GjcH5fKNUrnxJ3gfKP+bmk4Wjn9cnWkY0rI702eVBnwXnIs6DLgyW0BS4khlbTh90BQWUL2k7gQbkWqYCT2rhN2iTeuZdn/AJlMcxmJWFCPZOZyYILTASR/LQq1lOHuB0FCyW/AI9sfgSlI2oB0sen7bUIVwUUH3N1imxIHdN7kAa0Fy7Nb77Elj2lhtuu9SW3wfzp3BZlriORfScHnnNmL3KsmLMVuUEouNEPW2kdAq1qozzs4HpankTrGViBmKIeo19SiOy8t9Sizv3jSfEThi0z4K1o5SuMpUP5U3wPdGVpw9OzlsUmvirgC8hJj8myrRRj4692LYUCkuutkWdtp8gI6Hr8RVceUvl7LP1oarmw1GnJ6cbvEnEuJH6IS/vzDHsiQlKeKte8KJy1I9o947gfl5/YnOhNje969SgMq2V1KhFCFQi4tQhJN5d8O8T8w8acwnImAzOihxeA5C0kGVj31psVtKPVKrALQdFADuEkLCRgXizs1u69vTcsZREgxuv6VDJ5X8Qcu8O8g/JeTtJUzOCnMRm2AoxJrbZCSpsn8KklXzJUbjdr/AAk9GlUjVFhtWjKkYEnf7rkmBKgoBVgSLgHrbpqO1u9KCLtqaxKpJFj6djqNfhSrILn8vghOdTkoMteKzTAsxkWjqsDUNvj+NP2gkfZSo2J1XnvNP4P9PX6T15mG9NckYmb9ZJhpStLSw0i6wk/wqv271r0u/JP1O5FNJb5nxl1G/wDMwgLF1KkJcQvpbX5Sbi/rT9i1zEG+1Z4/MsI9OxzOO+pzDzs6KktxGVkHe+2NxUoBIHxNDIj2AydX+tiBksh5zcZ/MVwcOeNYr6hMdNpMgqDhIU6NEpT0pqgXgnawaabjEixoLDMOJHTGjxkn2mUp2pFxqdblRPcmnVgvQdLC19unxoQqbStTaUp3lagEptqSToBfqSbAAXpRYm5dqxnUgn6cf0iSsq/C515Ygrg49p0ScNw1YLbkkoIU09LN96GwfmS38pOhV8vynQr1ROEqQtjIEScWSBdwd7gtzbwt2jSIkZk2kg8xjaGUnTLDUdDbTKEtMtJCWmkAJSlIFgABoAB2rUoUKdCEadOIjCIEYxAYRiLAABYABYANjLalIyJJLk3nes1OpEUIRQhFCEHWhC53kvFePcww0vAcoxEbOYianbIgymwtB9Cm+qVDsQbjsaRIQ6jc8v8A6I8tiA9mfEjys7DBKneLTHEpmNpAAH076ylLoHouyvQqOh3aeZJHbvWtLLA2gpimbwec41PcxPIcRLweUYJS9CnsOR3AR8Fp1v6itiJErQQeY+nxWqMQLMtVqlaLAi5vuNjY/DpSuAkxgWJ1nmsqT4G/TBYkA4yVca9A0m1wftrXpf1JrYq9yJCaS5j4Dqg47AjKc6lwtIv0He1PpgOvdDaaal45DDSGUqmxRtbSEDV5Gny20PehKxKc5+sUg+a3ewPHcULaaja7amaB7AHP7U5WkDMlNfKrC9/lbBBJBJA9B3/p99PgOmsQSweNfBfk3ym42vjGAcGI3Wd5HOP08KwKSdjir7yEruAgGm5Vowse3dt6nHrWcac57GG9Sa+G/wBJnA/GhiZnOJb5nzBhaXmclLZT9LDdQBtVEjqvZSSLhayVX1G2tCpUNTkHp6bluQpCPOnXBNje9YMnVdSoRQhFCEUIRQhFCEUIVlh6i3ekk21CTXyd/pN+SK/1ZPHvyax9v8+9i1+/s+78+702a+lAvDXrE4dqjm5fxL9EeZeW7xrypleGzNyvaaj47KTof4hfah+EpZTf+y6B91bsDWay5a8hSWx848U4U94X8CQ8f5TxUeDi4khGBzGRxmVaayjRQnc4hqNGlOMkAfhdHesYSIkXFqxnEYBb1JoauK4YEe15L4wpPQEsZ0Htr/8Ak0/jP4T1fFMCP1e1bTEcO4y7ksYmd5Y41DZ+tjF10Q8+6bB5BshIxSbk9BcgfGkM/pPV8SsxAP3upPN/UBwzwdlvLq8h5F8xyeLPfkeOaXx2HhJsh8tIC9j31bbTzICxeydhI70xSlMQGEWft6E/IU3tK7LxRA/RHj8xFY45m4Wcz6RaLM5QiYgKV6ticxHjbv8AsJvWFQVWLu21ve3vTkcGxP0jCL7LP0hbMbYPp/Zt7ey3y7dulrdLdqYTq9Gl+utKhXUIRQhFCEUIX//Z);
                }
            </style>
            <div class="live_status noselect">
                <i id="btn_live_end" class="fas fa-phone-slash" onclick="close_live();"></i>
                <i id="btn_link_session" class="fas fa-link" onclick="open_live_link_modal();"></i>
                <i id="btn_live_status" class="fas fa-circle"></i>
                <span style="float: left">Khởi tạo ...</span>
            </div>
            <div class="video_my_wrapper">
                <div class="video-wrapper">
                    <div class="video_background video_background_my">
                        <video id="webcam_my" autoplay="true" crossorigin="anonymous" muted="muted" playsinline></video>
                    </div>
                </div>
            </div>
            <div class="video_remote_wrapper">
                <div class="video-wrapper">
                    <div class="video_background video_background_remote">
                        <video id="webcam_remote" autoplay="true" crossorigin="anonymous" playsinline></video>
                    </div>
                </div>
            </div>
            <div class="floating-chat">
                <i class="fa fa-comments" aria-hidden="true"></i>
                <div class="chat">
                    <div class="header">
                        <span class="title noselect">Trò chuyện</span>
                        <button>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    </div>
                    <ul class="messages"></ul>
                    <div class="footer">
                        <div class="text-box" contenteditable="true" disabled="true"></div>
                        <button id="sendMessage"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
            <div class="msg_lock noselect"><i class="fas fa-lock"></i> Đầu vào bị khóa</div>
        </div>
        <div id="floatingSocialShare">
            <i onclick="toggle_share()" class="fa fa-times-circle"></i>
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                <!--            -->
                <!--<a class="a2a_button_email -->
                <!--"></a>--><a class="a2a_button_facebook "><img src="/app/backend/themes/default/images/fb.svg"><span>Facebook</span></a> <a class="a2a_button_twitter "><img src="/app/backend/themes/default/images/twitter.svg"><span>Twitter</span></a>
                <!--            -->
                <!--<a class="a2a_button_linkedin -->
                <!--"></a>-->
                <!--            -->
                <!--<a class="a2a_button_telegram -->
                <!--"></a>--><a class="a2a_button_facebook_messenger "><img src="/app/backend/themes/default/images/messenger.svg"><span>Messenger</span></a>
                <!--            -->
                <!--<a class="a2a_button_pinterest -->
                <!--"></a>-->
                <!--            -->
                <!--<a class="a2a_button_reddit -->
                <!--"></a>-->
                <!--            -->
                <!--<a class="a2a_button_line -->
                <!--"></a>-->
                <!--            -->
                <!--<a class="a2a_button_viber -->
                <!--"></a>-->
                <!--            -->
                <!--<a class="a2a_button_vk -->
                <!--"></a>-->
                <!--            -->
                <!--<a class="a2a_button_qzone -->
                <!--"></a>-->
                <!--            -->
                <!--<a class="a2a_button_wechat -->
                <!--"></a>--><a class="btn_copy" onclick="clipboard()"><img src="/app/backend/themes/default/images/copy.svg"><span>Copy</span></a>
            </div>
            <script>
                function share_config(share_data) {
                    if (show_share == 2) {
                        if (current_panorama_type == 'image' || is_iOS() || current_panorama_type == 'hls' || current_panorama_type == 'lottie') {
                            var current_yaw = parseFloat(pano_viewer.getYaw());
                            var current_pitch = parseFloat(pano_viewer.getPitch());
                        } else {
                            var current_yaw = parseFloat(video_viewer.pnlmViewer.getYaw());
                            var current_pitch = parseFloat(video_viewer.pnlmViewer.getPitch());
                        }
                        // var url_vt = window.base_url+'viewer/index.php?code='+window.code+'&room='+current_id_panorama+'&yaw='+current_yaw+'&pitch='+current_pitch;
                        var url_vt = window.base_url + '?vt=' + window.id_virtualtour;
                        return {
                            url: url_vt,
                        };
                    }
                }
                var a2a_config = a2a_config || {};
                a2a_config.callbacks = a2a_config.callbacks || [];
                a2a_config.callbacks.push({
                    share: share_config,
                });
            </script>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
        </div>
        <div id="flyin"></div>
        <div id="map_zoomed_background"></div>
        <div id="box_poi_fullscreen_div"></div>
        <div id="div_panoramas">
            <div class="passcode_div">
                <h2></h2>
                <p></p>
                <div class="input_material">
                    <input placeholder=" " id="passcode" type="text" autocomplete="new-password" /><span class="highlight"></span><span class="bar"></span>
                    <label>Mật khẩu</label>
                </div>
                <i onclick="check_passcode();" id="btn_check_passcode" class="fas fa-unlock-alt"></i>
                <i onclick="close_protect_form();" id="btn_close_passcode" class="fas fa-times"></i>
            </div>
            <div class="leads_div">
                <h2></h2>
                <p></p>
                <form method="post" action="#" class="form_leads">
                    <label>
                    <input id="lead_input_already" onclick="toggle_lead_already();" style="margin-bottom:20px;padding-bottom:2px;" type="checkbox" />&nbsp;&nbsp;<span style="vertical-align:middle;">Tôi đã nhập dữ liệu của mình</span>
                </label>
                    <div class="input_material">
                        <input placeholder=" " required id="lead_email" type="email" /><span class="highlight"></span><span class="bar"></span>
                        <label>E-mail *</label>
                    </div>
                    <br>
                    <div class="input_material">
                        <input placeholder=" " required id="lead_name" type="text" /><span class="highlight"></span><span class="bar"></span>
                        <label>Tên  *</label>
                    </div>
                    <br>
                    <div class="input_material">
                        <input placeholder=" " required pattern="^[+]?[0-9]{9,12}$" id="lead_phone" type="tel" /><span class="highlight"></span><span class="bar"></span>
                        <label>Điện thoại *</label>
                    </div>
                    <input type="hidden" id="protect_email" value="">
                    <button type="submit" id="btn_check_leads" class="fas fa-check"></button>
                    <i onclick="close_protect_form();" id="btn_close_leads" class="fas fa-times"></i>
                </form>
            </div>
            <div class="header_vt">
                <!--            <div class="name_vt"></div>-->
                <div class="room_vt"></div>
                <div class="comments_vt" onclick="toggle_comments();">
                    <i id="comments_control" class="fas fa-comments"></i>
                    <span class="disqus-comment-count" data-disqus-identifier="0"></span>
                </div>
                <!--            <div class="visitors_rt_stats"><div class="visitors_block"><span id="visitors_here">1</span>&nbsp;-->
                <!--&nbsp;&nbsp;<i class="fas fa-users"></i>&nbsp;&nbsp;<span id="visitors_total">1</span>&nbsp;-->
                <!--</div><div class="separator_block">&nbsp;&nbsp;|&nbsp;&nbsp;</div><div class="views_block"><i class="fas fa-eye"></i>&nbsp;<span id="views_total_count">0</span> -->
                <!--</div></div>-->
                <div class="visitors_rt_stats">
                    <div class="name_vt"></div>&nbsp;
                    <div class="views_block"><i class="fas fa-eye"></i>&nbsp;<span id="views_total_count">0</span></div>
                    <div class="separator_block">&nbsp;&nbsp;|&nbsp;&nbsp;</div>
                    <div class="visitors_block"><i class="fas fa-circle" style="color: #1BC941"></i>&nbsp;<span id="visitors_here">1</span></div>
                </div>
                <div class="rooms_view_sel"></div>

                <div class="type_view ">
                    <div onclick="close_map()" class="diagram_control diagram_view active">Chế độ xem</div>
                    <div onclick="open_map()" class="diagram_control diagram_floor">Sơ đồ</div>
                </div>
            </div>
            <div class="header_vt_vr">
                <div class="name_vt"></div>
                <div class="room_vt"></div>
                <div class="author_vt"></div>
            </div>
            <div class="footer_vt"></div>
            <div id="btn_stop_presentation" onclick="stop_presentation();" class="p_control tooltip pnlm-controls pnlm-control small-element">
                <i class="fa fa-stop"></i>
            </div>
            <div id="btn_stop_vr" onclick="disable_vr();" class="p_control tooltip pnlm-controls pnlm-control small-element">
                <i class="fas fa-times"></i>
            </div>
            <div id="btn_stop_vr_2" onclick="disable_vr();" class="p_control tooltip pnlm-controls pnlm-control small-element">
                <i class="fas fa-times"></i>
            </div>
            <div id="controls_bottom_left">
                <div style="order:0" class="voice_control"></div>
                <div style="order:0;" class="controls_arrows noselect hidden">
                    <i onclick="toggle_list()" class="fa fa-chevron-up list_control_alt noselect small-element hidden"></i>
                    <i data-roomtarget="" title="" class="fa fa-chevron-left prev_arrow noselect disabled small-element hidden"></i>
                    <i data-roomtarget="" title="" class="fa fa-chevron-right next_arrow noselect disabled small-element hidden"></i>
                </div>
                <div style="order:1;" title="Thông tin" class="small-element controls_btn info_control tooltip disabled " onclick="view_info_box()"><i style="" class="fas fa-info"></i></div>
                <div style="order:3;" title="Biên tập 3D- dollhouse" class="small-element controls_btn dollhouse_control tooltip disabled " onclick="view_dollhouse()"><i style="" class="fas fa-cube"></i></div>
                <div style="order:2;" title="Thư viện ảnh" id="gallery_control" class="small-element controls_btn gallery_control tooltip " onclick="open_gallery()"><i style="" class="fas fa-images"></i></div>
                <div style="order:5;" title="Trình bày tự động" class="small-element controls_btn presentation_control tooltip hidden" onclick="start_presentation()"><i style="" class="fas fa-play"></i></div>
                <div style="order:7;" title="" class="small-element controls_btn form_control tooltip hidden" onclick="view_form()"><i style="" class="fas fa-file-signature"></i></div>
                <div style="order:6;" title="Chia sẻ" class="small-element controls_btn share_control tooltip hidden" onclick="toggle_share()"><i style="" class="fas fa-share-alt"></i></div>
                <div style="order:9;" title="Bắt đầu phiên trực tiếp" class="small-element controls_btn live_control tooltip hidden" onclick="toggle_live()"><i style="" class="fas fa-phone"></i></div>
                <div style="order:8;" title="Tham gia cuộc họp" class="small-element controls_btn meeting_control tooltip hidden" onclick="toggle_meeting()"><i style="" class="fas fa-handshake"></i></div>
                <div style="order:3;" title="Web VR" class="small-element controls_btn vr_control tooltip hidden" onclick="enable_vr()"><i style="" class="fas fa-vr-cardboard"></i></div>
                <div style="order:10;" title="Custom" class="small-element controls_btn custom_control tooltip disabled " onclick="view_custom_box()"><i style="" class="fas fa-bullhorn"></i></div>
                <div style="order:99" class="small-element controls_btn menu_bottom_mb_control hidden" " onclick="show_menu_bottom_mb() "><i class="fa fa-bars " aria-hidden="true "></i><div class="arrow "></div></div>
    </div>
    <div id="controls_bottom_center ">
                                                                                                                                                <!--        <div id="list_alt_menu_bottom_control " class="alt_menu_bottom_control -->
                    <!--">-->
                    <!--                    <p data-ui-target="ui_edit_alt_menu_bottom" class="menu_bottom_control cate_all active" onclick="choose_cat_menu('all')" data-id-color="menu_bottom">-->
                    <!--</p>-->
                </div>
            </div>
            <div id="controls_bottom_right">
                <div style="order:1;" title="Trò chuyện trên Facebook" class="small-element controls_btn facebook_control tooltip " onclick="view_facebook_messenger()"><i style="" class="fab fa-facebook-messenger"></i></div>
                <a style="order:2;" title="Trò chuyện Whatsapp" class="small-element controls_btn whatsapp_control tooltip " target="_blank" href="#"><i style="" class="fab fa-whatsapp"></i></a>
                <a style="order:2;" title="Zalo Chat" class="viewer_zalo small-element controls_btn zalo_control tooltip " target="_blank" href="#"><img src="/app/backend/img/zalo.png" alt=""></a>
                <div style="order:3;" id="compass_icon" class="small-element controls_btn compass_control"><i class="icon-compass"></i></div>
                <div style="order:0;" title="Location" class="small-element controls_btn location_control tooltip disabled " onclick="view_location_box()"><i style="" class="fas fa-map-marker-alt"></i></div>
            </div>

            <div style="display: none" onclick="toggle_audio_room()" class="control_all_icon small-element audio_room_control hidden hidden">
                <img id="img_mc" src="/app/viewer/themes/default/mc-animation.webp" alt="">
                <img id="img_sound" src="/app/viewer/themes/default/audio_on.svg">
            </div>
            <div title="Toàn màn hình" class="small-element fullscreen_control tooltip noselect control_all_icon" onclick="toggle_fullscreen();"><img class="custom_img_icon" src="/app/backend/themes/default/images/fullscreen.svg"></div>
            <div title="Sơ đồ" class="small-element map_control tooltip noselect" onclick="toggle_map()"><i class="icon-map_on"></i></div>
            <div title="Bản đồ" class="small-element map_tour_control tooltip noselect" onclick="toggle_tour_map();"><i class="far fa-map"></i></div>
            <div class="group_list_menu">
                <div id="list_alt_menu_bottom_control" class="alt_menu_bottom_control hidden"></div>
                <span class="off_list_menu" onclick="toggle_list()"><i class="fas fa-chevron-down"></i></span>
            </div>

            <!--    <div class="small-element list_control -->
            <!--" style="display: none;" onclick="toggle_list()"><i class="fas fa-chevron-up"></i></div>-->
            <div class="list_alt_menu noselect">
                <div class="title btn_menu_alt"><img src="/app/backend/img/menu.svg" alt="" style="pointer-events: initial; cursor: pointer" onclick="click_list_alt_menu()">
                    <!--                    <div class="arrow"></div>-->
                </div>
                <div class="dropdown"></div>
                <div class="close_list_alt hidden" onclick="close_list_alt()"><img src="/app/backend/img/back.png" alt=""></div>
            </div>
            <div class="arrows_nav ">
                <i data-roomtarget="" title="" class="arrows prev_arrow fas fa-chevron-left disabled small-element"></i>
                <i data-roomtarget="" title="" class="arrows next_arrow fas fa-chevron-right disabled small-element"></i>
            </div>
            <div class="btn_show_annotation hidden control_all_icon" onclick="toggle_annotations()"><img width="30px" src="/app/backend/img/description.png" alt=""></div>
            <div class="annotation annotation_show annotation_top_left noselect control_all_icon">
                <div class="annotation_header">
                    <h2 class="annotation_title"></h2>
                    <span class="control_annotations show_annotations" onclick="toggle_annotations()"><i class="fa fa-times"></i></span>
                </div>
                <hr>
                <p class="annotation_description annotation_description_viewer"></p>
            </div>
            <div class="logo control_all_icon"></div>
            <div class="layer_map">
                <div class="close_map" onclick="close_map()"><img width="16px" src="/app/backend/themes/default/images/close.svg"></div>
                <div class="map"></div>
            </div>

            <div class="setting_bottom_control control_all_icon position_center" style="display: none">
                <div id="language_control" class="s1 small-element controls_btn language_control" onclick="toggle_language()">
                    <div><img class="custom_img_icon" src="/app/backend/themes/default/images/language.svg" alt="Ngôn ngữ"><span class="hidden_mb">Ngôn ngữ</span></div>
                </div>
                <div class="dropdown_language">
                    <a href="javascript:;" onclick="switch_language('en_US');"><img src="/app/backend/themes/default/images/eng.svg"></a>
                    <a href="javascript:;" onclick="switch_language('vi_VN');"><img src="/app/backend/themes/default/images/vi_active.svg"></a>
                </div>
                <div id="song_control" class="s1 small-element controls_btn song_control" onclick="toggle_song()">
                    <div><img class="custom_img_icon" src="/app/backend/themes/default/images/volume_on.svg" alt="Âm thanh"><span class="hidden_mb">Âm thanh</span></div>
                </div>
                <div id="location_control" class="s1 small-element controls_btn location_control" onclick="view_location_box()">
                    <div><img class="custom_img_icon" src="/app/backend/themes/default/images/location.svg" alt="Vị trí"><span class="hidden_mb">Vị trí</span></div>
                </div>
                <div id="info_control" class="s1 small-element controls_btn info_control" onclick="view_info_box()">
                    <div><img class="custom_img_icon" src="/app/backend/themes/default/images/info.svg" alt="Thông tin"><span class="hidden_mb">Thông tin</span></div>
                </div>
                <div id="list_room_control" onclick="toggle_list()" class="s1 small-element controls_btn list_room_control ">
                    <div><img class="custom_img_icon" src="/app/backend/themes/default/images/scenes.svg" alt="Cảnh VR360"><span class="hidden_mb">Cảnh VR360</span></div>
                </div>
                <div id="tool_control" onclick="click_open_tool()" class="s1 small-element controls_btn tool_control">
                    <div><img class="custom_img_icon" src="/app/backend/themes/default/images/tool.svg" alt="Công cụ"><span class="hidden_mb">Công cụ</span></div>
                </div>
                <div class="dropdown_tool open">
                    <div id="autorotate_control_menu" class="s2 small-element controls_btn autorotate_control" onclick="toggle_autorotate()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/rotate.svg" alt="Xoay tự động"></div>
                    </div>
                    <div id="share_control_menu" class="s2 small-element controls_btn share_control" onclick="toggle_share()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/share.svg" alt="Chia sẻ"></div>
                    </div>
                    <div id="help_control_menu" class="s2 small-element controls_btn help_control" onclick="toggle_help()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/help.svg" alt="Trợ giúp"></div>
                    </div>
                    <div id="icons_control_menu" class="s2 small-element controls_btn icons_control" onclick="toggle_icons()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/icons_on.svg" alt="Biểu tượng"></div>
                    </div>
                    <div id="measures_control_menu" class="s2 text-white small-element controls_btn measures_control" onclick="toggle_measures()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/measures.svg" alt="Nhãn kích thước"></div>
                    </div>
                    <div id="orient_control_menu" class="s2 text-white small-element controls_btn orient_control" onclick="toggle_orient()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/compass.svg" alt="Định hướng thiết bị"></div>
                    </div>
                    <div id="vr_control_menu" class="s2 text-white small-element controls_btn vr_control" onclick="enable_vr()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/vr.png" alt="Web VR"></div>
                    </div>
                    <div id="presentation_control_menu" class="s2 text-white small-element controls_btn presentation_control" onclick="start_presentation()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/presentation.svg" alt="Trình bày tự động"></div>
                    </div>
                    <div style="color: #ffffff !important;" id="form_control_menu" class="s2 text-white small-element controls_btn form_control" onclick="view_form()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/main_form.svg"></div>
                    </div>
                    <div id="meeting_control_menu" class="s2 text-white small-element controls_btn meeting_control" onclick="toggle_meeting()">
                        <div><img class="custom_img_icon" src="/app/backend/themes/default/images/handshake.png" alt="Tham gia cuộc họp"></div>
                    </div>
                </div>
            </div>

            <!--    <div id="btn_return_globe" class="back_to_general_view" style="display: none">-->
            <!--        <img src="/app/backend/themes/default/images/back.svg">-->
            <!--        <span> -->
            <!--</span>-->
            <!--    </div>-->

            <div class="popup_help">
                <h3>Hướng Dẫn</h3>
                <span id="close_help" onclick="toggle_help()"><img src="/app/backend/themes/default/images/close.svg"></span>
                <div class="body_instruct">
                    <div>
                        <span>Thay đổi ngôn ngữ</span>
                        <img src="/app/backend/themes/default/images/language.svg">
                    </div>
                    <div>
                        <span>Bật tắt âm thanh</span>
                        <img src="/app/backend/themes/default/images/sound_on.svg">
                    </div>
                    <div>
                        <span>Bật tắt âm thanh thuyết minh</span>
                        <img src="/app/viewer/themes/default/mc-animation.webp">
                    </div>
                    <div>
                        <span>Chế độ toàn màn hình</span>
                        <img src="/app/backend/themes/default/images/fullscreen.svg">
                    </div>
                    <div>
                        <span>Thông tin liên hệ</span>
                        <img src="/app/backend/themes/default/images/facebook.svg">
                    </div>
                    <div>
                        <span>Thông tin</span>
                        <img src="/app/backend/themes/default/images/info.svg">
                    </div>
                    <div>
                        <span>Đăng ký thông tin</span>
                        <img src="/app/backend/themes/default/images/main_form.svg">
                    </div>
                    <div>
                        <span>Cảnh VR360</span>
                        <img src="/app/backend/themes/default/images/scenes.svg">
                    </div>
                    <div>
                        <span>Công cụ</span>
                        <img src="/app/backend/themes/default/images/tool.svg">
                    </div>
                    <div>
                        <span>Vị trí</span>
                        <img src="/app/backend/themes/default/images/location.svg">
                    </div>
                    <div>
                        <span>Di chuyển vị trí</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 120" height="30" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_27"><rect width="70" height="120" x="0" y="0"></rect></clipPath><clipPath id="__lottie_element_29"><path d="M0,0 L70,0 L70,120 L0,120z"></path></clipPath></defs><g clip-path="url(#__lottie_element_27)"><g clip-path="url(#__lottie_element_29)" transform="matrix(1,0,0,1,0,0)" opacity="1" style="display: block;"><g transform="matrix(1,0,0,1,9.457000732421875,36.696998596191406)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,26.541000366210938,35.59600067138672)"><path fill="rgb(250,17,41)" fill-opacity="1" d=" M26.29199981689453,-9.053999900817871 C26.29199981689453,5.4670000076293945 0,35.34600067138672 0,35.34600067138672 C0,35.34600067138672 -26.29199981689453,5.4670000076293945 -26.29199981689453,-9.053999900817871 C-26.29199981689453,-23.575000762939453 -14.520000457763672,-35.34600067138672 0,-35.34600067138672 C14.520000457763672,-35.34600067138672 26.29199981689453,-23.575000762939453 26.29199981689453,-9.053999900817871z"></path></g></g><g transform="matrix(1,0,0,1,26.689998626708984,53.93000030517578)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,9.309000015258789,9.309000015258789)"><path fill="rgb(255,255,255)" fill-opacity="1" d=" M9.0600004196167,0 C9.0600004196167,5.002999782562256 5.001999855041504,9.059000015258789 -0.0010000000474974513,9.059000015258789 C-5.004000186920166,9.059000015258789 -9.0600004196167,5.002999782562256 -9.0600004196167,0 C-9.0600004196167,-5.002999782562256 -5.004000186920166,-9.059000015258789 -0.0010000000474974513,-9.059000015258789 C5.001999855041504,-9.059000015258789 9.0600004196167,-5.002999782562256 9.0600004196167,0z"></path></g></g></g></g></svg>
                    </div>
                    <div>
                        <span>Nhấp và kéo chuột để thay đổi góc nhìn</span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 171 154" fill="none"><g clip-path="url(#clip0_209_524)"><path d="M57.9833 23.0079L35.25 45.8152V52.1023C35.25 55.5468 35.35 58.356 35.5167 58.356C35.65 58.356 46.35 47.7214 59.35 34.6791L82.9167 11.0357V5.58463V0.167034H81.8167C80.85 0.167034 78.7833 2.14011 57.9833 23.0079Z" fill="white"/><path d="M88.2499 13.7447V27.4224L89.8832 28.0244C92.2165 28.8604 94.6832 31.2013 95.9832 33.8767L97.0832 36.1173L97.1832 47.8889L97.2832 59.6938H116.65H136.017L135.817 49.7282C135.617 39.1271 135.283 36.2511 133.683 31.1345C130.25 20.1321 121.85 10.1998 111.483 4.98287C105.55 1.9731 99.9165 0.535099 92.8499 0.267563L88.2499 0.0669098V13.7447Z" fill="white"/><path d="M68.4167 1.67167C55.0833 5.21651 44.05 14.8478 38.8167 27.5892C37.65 30.3648 36.25 35.2808 36.25 36.5181C36.25 36.886 43.0833 30.2645 54.0833 19.2287C63.8833 9.39676 71.9167 1.23693 71.9167 1.10316C71.9167 0.735298 71.8167 0.768742 68.4167 1.67167Z" fill="white"/><path d="M62.4831 39.2274C51.5498 50.1963 42.5831 59.2925 42.5831 59.4598C42.5831 59.5935 45.3831 59.6938 48.8498 59.6938H55.0831L64.4498 50.2298L73.8498 40.7992L74.0165 38.3245C74.3831 33.676 77.4165 29.3955 81.2831 28.0244L82.9165 27.4224V23.3425C82.9165 21.0684 82.8165 19.2291 82.6498 19.2291C82.5165 19.2291 73.4498 28.225 62.4831 39.2274Z" fill="white"/><path d="M83.0501 33.2414C82.2834 33.5759 81.2501 34.4454 80.7168 35.1476L79.7501 36.385L79.6501 50.1296C79.5501 65.5798 79.5168 65.1785 82.0168 67.185C83.1834 68.1214 83.5501 68.2217 85.5834 68.2217C87.6168 68.2217 87.9834 68.1214 89.1501 67.185C91.6501 65.1785 91.6168 65.5798 91.5168 50.1296L91.4168 36.385L90.4501 35.1476C89.3501 33.6762 87.2834 32.606 85.5834 32.606C84.9501 32.606 83.7834 32.907 83.0501 33.2414Z" fill="white"/><path d="M68.4833 53.9418C65.6167 56.8178 63.25 59.326 63.25 59.4598C63.25 59.5935 65.65 59.6938 68.5833 59.6938H73.9167V54.1759C73.9167 51.1327 73.8833 48.658 73.8167 48.658C73.7833 48.658 71.3833 51.0324 68.4833 53.9418Z" fill="white"/><path d="M8.91692 68.0876C4.98359 71.1977 1.41692 74.1406 0.98359 74.6087C-0.0164098 75.7458 -0.0497431 78.2873 0.916924 79.5247C1.28359 79.9929 4.85026 83.0027 8.85026 86.1796C15.9503 91.8648 16.1169 91.9651 17.6836 91.9651C19.0503 91.9651 19.4503 91.8313 20.1169 91.0287L20.9169 90.0923V77.2506V64.4424L20.0503 63.4057C19.3169 62.5028 18.9503 62.369 17.6503 62.369C16.1169 62.369 15.8503 62.5697 8.91692 68.0876Z" fill="white"/><path d="M151.117 63.4057L150.25 64.4424V77.2506V90.0923L151.05 91.0287C151.717 91.8313 152.117 91.9651 153.483 91.9651C155.05 91.9651 155.217 91.8648 162.317 86.1796C166.317 83.0027 169.883 79.9929 170.25 79.5247C171.217 78.2873 171.183 75.7458 170.183 74.6087C169.75 74.1406 166.183 71.1977 162.25 68.0876C155.317 62.5697 155.05 62.369 153.517 62.369C152.217 62.369 151.85 62.5028 151.117 63.4057Z" fill="white"/><path d="M35.35 89.8584C35.5167 117.013 35.4833 116.813 37.5833 123.3C39.5833 129.587 42.9833 135.239 47.7833 140.289C54.0833 146.843 61.4833 150.99 70.5833 153.064C73.8833 153.799 74.7167 153.833 85.5833 153.833C96.45 153.833 97.2833 153.799 100.583 153.064C109.683 150.99 117.083 146.843 123.383 140.289C129.583 133.768 133.383 126.377 135.117 117.381C135.617 114.739 135.717 111.395 135.817 89.6912L135.95 65.0445H116.483H97.0167L95.95 67.1848C94.7167 69.7264 92.5833 71.7998 89.9833 73.0037C88.4833 73.6725 87.5833 73.8732 85.55 73.8732C83.35 73.8732 82.6833 73.7059 80.8167 72.803C78.2833 71.5322 76.1833 69.3919 75.0167 66.8504L74.2167 65.0445H54.6833H35.1833L35.35 89.8584Z" fill="white"/></g><defs><clipPath id="clip0_209_524"><rect width="171" height="154" fill="white"/></clipPath></defs></svg>
                    </div>
                </div>
            </div>

            <div class="view_show_share">
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style group_share">
                    <a target="_blank" class="a2a_button_facebook "><img src="/app/backend/themes/default/images/fb.svg"></a> <a target="_blank" class="a2a_button_twitter "><img src="/app/backend/themes/default/images/twitter.svg"></a> <a target="_blank" class="a2a_button_facebook_messenger "><img src="/app/backend/themes/default/images/messenger.svg"></a>                    <a class="btn_copy" onclick="clipboard()"><img src="/app/backend/themes/default/images/copy.svg"></a>
                </div>
                <div class="close-popup" onclick="closePopupShare()"><img width="30" height="30" src="/app/backend/themes/default/images/close.svg" alt=""></div>
                <script>
                    function share_config(share_data) {
                        if (current_panorama_type == 'image' || is_iOS() || current_panorama_type == 'hls' || current_panorama_type == 'lottie') {
                            var current_yaw = parseFloat(pano_viewer.getYaw());
                            var current_pitch = parseFloat(pano_viewer.getPitch());
                        } else {
                            var current_yaw = parseFloat(video_viewer.pnlmViewer.getYaw());
                            var current_pitch = parseFloat(video_viewer.pnlmViewer.getPitch());
                        }
                        // var url_vt = window.base_url+'viewer/index.php?code='+window.code+'&room='+current_id_panorama+'&yaw='+current_yaw+'&pitch='+current_pitch;
                        var url_vt = window.base_url + '?vt' + window.id_virtualtour + 'vt';
                        return {
                            url: url_vt,
                        };
                    }
                    var a2a_config = a2a_config || {};
                    a2a_config.callbacks = a2a_config.callbacks || [];
                    a2a_config.callbacks.push({
                        share: share_config,
                    });
                </script>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
            </div>

            <div class="nav_control">
                <i onclick="nav_control_cmd('up');" class="nav_up fas fa-chevron-up small-element"></i>
                <i onclick="nav_control_cmd('down');" class="nav_down fas fa-chevron-down small-element"></i>
                <i onclick="nav_control_cmd('left');" class="nav_left fas fa-chevron-left small-element"></i>
                <i onclick="nav_control_cmd('right');" class="nav_right fas fa-chevron-right small-element"></i>
                <i onclick="nav_control_cmd('rotate');" class="nav_rotate fas fa-sync-alt small-element"></i>
            </div>
            <div class="panorama" id="panorama_viewer"></div>
            <div id="vs_before">
                <div style="width:100vw;" class="panorama" id="panorama_viewer_alt"></div>
            </div>
            <div id="vs_slider"></div>
            <div id="vs_grab" class="grabbable small-element"><i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i></div>
            <div style="display: none;width:50%;left:50%;" class="panorama" id="panorama_viewer_vr"></div>
            <i id="cursor_vr_left" class="fas fa-dot-circle cursor_vr"></i>
            <i id="cursor_vr_right" class="fas fa-dot-circle cursor_vr"></i>
            <img id="background_pano" src="" />
            <img id="background_pano_vr" src="" />
            <i id="loading_pano">
        <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                    <stop stop-color="#fff" stop-opacity="0" offset="0%"/>
                    <stop stop-color="#fff" stop-opacity=".631" offset="63.146%"/>
                    <stop stop-color="#fff" offset="100%"/>
                </linearGradient>
            </defs>
            <g fill="none" fill-rule="evenodd">
                <g transform="translate(1 1)">
                    <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                    </path>
                    <circle fill="#fff" cx="36" cy="18" r="1">
                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                    </circle>
                </g>
            </g>
        </svg>
    </i>
            <div style="display:none" id="canvas_p"></div>
            <div style="display:none" id="canvas_p_vr"></div>

            <!-- custom icon -->
            <div title="Facebook" style="opacity: 0" class="small-element controls_btn facebook_control tooltip control_all_icon" onclick="open_facebook()"><a href=""><img class="custom_img_icon" src="/app/backend/themes/default/images/fb.svg" alt="Facebook"></a></div>
            <div title="Điện thoại" style="opacity: 0" class="small-element controls_btn phone_control tooltip control_all_icon" onclick=""><img class="custom_img_icon" src="/app/backend/themes/default/images/whatsapp.svg" alt="Điện thoại"></div>
        </div>
        <div class="intro_img"><img src="" /></div>
        <div class="loading_vr"><span style="margin: 0 auto;">TẢI TRẢI NGHIỆM VR ...</span></div>
        <div class="list_slider">
            <ul class="slidee"></ul>
            <!--    <i id="list_left" class="fa fa-chevron-left"></i>-->
            <!--    <i id="list_right" class="fa fa-chevron-right"></i>-->
        </div>
        <div id="draggable_container"></div>
        <div id="dollhouse">
            <div class="info_dollhouse" id="info_dollhouse_pc">
                <b>Quỹ đạo</b> - Chuột trái<br><b>Bật tắt thu/phóng</b> - Chuột giữa hoặc con lăn chuột<br><b>Xoay ngang</b> - Chuột phải hoặc chuột trái + ctrl / meta / shiftKey </div>
            <div style="display:none" class="info_dollhouse" id="info_dollhouse_mobile">
                <b>Quỹ đạo</b> - Di chuyển bằng một ngón tay<br><b>Bật tắt thu/phóng</b> - Hai ngón tay xòe ra hoặc khuỵu xuống<br><b>Xoay ngang</b> - Di chuyển bằng hai ngón tay </div>
            <i onclick="toggle_dollhouse_help();" class="help_dollhouse fas fa-question-circle"></i>
            <div id="css_container_dollhouse"></div>
            <div id="container_dollhouse"></div>
            <div class="dropdown-menu dropdown-anchor-top-left dropdown-has-anchor dark" id="select_level_dollhouse"></div>
            <div id="button_level_dollhouse" data-dropdown="#select_level_dollhouse"><i class="fas fa-layer-group"></i>&nbsp;&nbsp;Tất cả</div>
            <div id="button_close_dollhouse" onclick="close_dollhose();"><i class="fas fa-times"></i>&nbsp;&nbsp;Đóng</div>
        </div>
        <div id="custom_html"></div>
    </div>
    <div onclick="toggle_jitsi_hide();" id="jitsi_show"><span>Cuộc họp</span>&nbsp;<i class="fas fa-eye"></i></div>
    <div id="jitsi_div">
        <i onclick="toggle_jitsi_fullscreen()" id="btn_jitsi_fullscreen" class="fas fa-expand"></i>
        <i onclick="toggle_jitsi_hide()" id="btn_jitsi_hide" class="fas fa-eye-slash"></i>
    </div>
    <div id="info_panel_div">
    </div>
    <div id="map_tour_div"></div>
    <div id="gallery_container"></div>

    <div class="popup" id="popup" style="display: none">
        <div class="popup-content">
            <div class="popup-header"></div>
            <div class="popup-body"></div>
            <div class="close-popup" onclick="closePopup()"><img width="30" height="30" src="/app/backend/themes/default/images/close.svg" alt=""></div>
        </div>
    </div>
    <script>
        window.viewer_labels = {
            "loading": `MÀN HÌNH LOADING`,
            "initializing": `KHỞI TẠO`,
            "lsc_title": `Phiên trực tiếp`,
            "lsc_content": `Bạn có chắc chắn muốn kết thúc phiên trực tiếp này không? Liên kết được tạo sẽ bị vô hiệu hóa.`,
            "lsc_content2": `Bạn có chắc chắn muốn kết thúc phiên trực tiếp này không?`,
            "lsc_endcall": `Kết thúc Cuộc gọi`,
            "ls_initializing": `Khởi tạo ...`,
            "ls_awaiting": `Đang chờ kết nối...`,
            "ls_connecting": `Kết nối`,
            "ls_connected": `Được kết nối`,
            "ls_connection_closed": `Ngắt kết nối`,
            "ls_invalid": `Phiên không hợp lệ`,
            "ls_link_msg": `Gửi link này cho người bạn muốn mời`,
            "ls_webcam_msg": `Bạn có muốn tham gia phiên trực tiếp chỉ với video hoặc âm thanh không?`,
            "ls_video_audio": `Video + Âm thanh`,
            "ls_audio": `Chỉ âm thanh`,
            "by": `Bởi`,
            "cancel": `Hủy`,
            "join_meeting": `Tham gia cuộc họp`,
            "exit_meeting": `Thoát khỏi cuộc họp`,
            "close_ad": `Bỏ qua`,
            "play_video": `Phát video`,
            "wait_video": `Chờ cho đến khi video kết thúc ...`,
            "enable_audio": `BẬT ÂM THANH?`,
            "enable_device_motion": `BẬT ĐỊNH HƯỚNG THIẾT BỊ?`,
            "open_vr_msg": `BẬT CHẾ ĐỘ VR?`,
            "yes": `Có`,
            "no": `Không`,
            "password_meeting": `Cuộc họp có mật khẩu`,
            "password_livesession": `Phiên trực tiếp mật khẩu`,
            "check": `Kiểm tra`,
            "buy": `MUA`,
            "add_to_cart": `THÊM VÀO GIỎ HÀNG`,
            "all": `Tất cả`,
            "comments": `Bình luận`,
            "comment": `Bình luận`,
        };
        window.peer_server_host = 'svtpeerjs.simpledemo.it';
        window.peer_server_port = '9000';
        window.peer_server_path = '/svt';
        window.peer_turn_host = '';
        window.peer_turn_port = '';
        window.peer_turn_u = '';
        window.peer_turn_p = '';
        window.jitsi_domain = 'meet.jit.si';
        window.street_basemap_url = 'https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}';
        window.satellite_basemap_url = 'https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}';
        window.street_subdomain = 'mt0,mt1,mt2,mt3';
        window.street_maxzoom = '20';
        window.satellite_subdomain = 'mt0,mt1,mt2,mt3';
        window.satellite_maxzoom = '20';
        window.hfov_mobile_ratio = 1;
    </script>
    <script type="text/javascript" src="themes/default/index.js?v=7.2_5"></script>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('service-worker.js', {
                scope: '.'
            });
        }
    </script>
    <script>
        (function($) {
            'use strict';
            window.base_url = 'https://diachidohanoi.vr360.com.vn/';
            window.auto_start = 1;
            window.preview = 0;
            window.preview_presentation = -1;
            window.nostat = 0;
            window.export_mode = 0;
            if (window.export_mode == 1) {
                window.rooms_json = '';
                window.maps_json = '';
                window.presentation_json = '';
                window.advertisement_json = '';
                window.gallery_json = '';
                window.info_box_json = '';
                window.custom_box_json = '';
                window.voice_commands_json = '';
                window.ip_visitor = '';
                window.id_visitor = '';
            } else {
                window.rooms_json = '';
                window.maps_json = '';
                window.presentation_json = '';
                window.advertisement_json = '';
                window.gallery_json = '';
                window.info_box_json = '';
                window.custom_box_json = '';
                window.voice_commands_json = '';
                window.ip_visitor = '14.190.98.97';
                window.id_visitor = 'b9nees8pt7on55eki2oau467b7';
            }
            window.url_vt = location.href.substring(0, location.href.lastIndexOf("/")) + "/";
            window.hide_loading = 0;
            window.virtual_tour_initialized = false;
            window.id_virtualtour = 196;
            window.password_protected = 0;
            window.protect_type = 'none';
            window.protect_pc = '';
            window.protect_remember = 1;
            window.background_image = '';
            window.background_image_mobile = '';
            window.background_video = '';
            window.background_video_delay = 0;
            window.background_video_mobile = '';
            window.background_video_delay_mobile = 0;
            window.background_video_elapsed = 0;
            window.interval_background_video_elapsed = null;
            window.video_loading_ended = false;
            window.code = '084b6fbb10729ed4da8c3d3f5a3ae7c9';
            window.logo = '';
            window.link_logo = '';
            window.live_session_force = 0;
            window.meeting = 0;
            window.meeting_force = 0;
            window.peer_id = '';
            window.peer = null;
            window.peer_conn = null;
            if (peer_id == '') {
                window.webcam_my = document.getElementById('webcam_my');
                window.webcam_remote = document.getElementById('webcam_remote');
            } else {
                window.webcam_my = document.getElementById('webcam_remote');
                window.webcam_remote = document.getElementById('webcam_my');
            }
            window.stream_sender = null;
            window.live_chat = $('.floating-chat');
            window.initial_id_room = '';
            window.initial_yaw = '';
            window.initial_pitch = '';
            window.flyin = 0;
            window.flyin_enabled = 0;
            window.name_app_vt = `ĐỊa_chỈ_ĐỎ_toàn_cảnh_quận_hoàn_kiếm`;
            window.name_vt = `Toàn cảnh quận Hoàn Kiếm`;
            window.meeting_protected = 0;
            window.livesession_protected = 0;
            window.lat_panorama = '';
            window.lon_panorama = '';
            window.external_embed = 1;
            window.dollhouse_open = false;
            window.url_screencast = 'https://studio.snipclip.app/record';
            window.vr_button = 1;
            window.webvr = 0;
            window.icon_tooltips = 1;
            window.preview_room_slider = 1;
            window.loading_text_color = '#ffffff';
            window.snipcart_currency = '';
            window.mouse_zoom = 1;
            window.is_dashboard = 1;
            switch (window.mouse_zoom) {
                case 0:
                    window.mouse_zoom = false;
                    break;
                case 1:
                    window.mouse_zoom = true;
                    break;
                case 2:
                    if (window.self !== window.top) {
                        window.mouse_zoom = false;
                    } else {
                        window.mouse_zoom = true;
                    }
                    break;
            }
            window.comments = 0;
            window.disqus_shortname = '';
            window.disqus_public_key = '';
            $(document).bind("contextmenu", function(event) {
                event.preventDefault();
                if ($.trim($("#context_info").html()) != '') {
                    if (!dollhouse_open) {
                        $("#context_info").show().css({
                            top: event.pageY + "px",
                            left: event.pageX + "px"
                        });
                    }
                }
                return false;
            });
            if ($.trim($("#context_info").html()) != '') {
                $(document).on("click pointerdown mousedown touchstart", function(event) {
                    if (!$(event.target).closest("#context_info").length) {
                        $("#context_info").hide();
                    }
                });
            }
            $(document).ready(function() {
                check_svt();
            });
        })(jQuery);
    </script>
    <!--
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v13.0'
            });
            FB.Event.subscribe('customerchat.load', function() {
                $('.facebook_control').show();
                $('.audio_room_control').css('right', ($('#controls_bottom_right')[0].getBoundingClientRect().width + 40) + 'px')
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-customerchat"
         attribution="setup_tool"
         greeting_dialog_display="hide"
         minimized="true"
         logged_in_greeting=""
         logged_out_greeting=""
         mobile_bottom_spacing="120"
         page_id=""
    ></div>
-->
    <div id="comments_div">
        <div id="disqus_thread"></div>
    </div>
    <!--<a class="powered_by" target="_blank" href="https://vr360.com.vn"><img src="/app/backend/themes/default/images/powered_by.svg" alt=""></a>-->
</body>
<script>
    document.addEventListener("keydown", function(e) {
        if (e.ctrlKey && (e.keyCode == "61" || e.keyCode == "107" || e.keyCode == "173" || e.keyCode == "109" || e.keyCode == "187" || e.keyCode == "189")) {
            e.preventDefault();
        }
    });
    document.addEventListener("wheel", function(e) {
        if (e.ctrlKey) {
            e.preventDefault();
        }
    }, {
        passive: false
    });

    if (is_iOS() && window.c_width <= 480) {
        $('.fullscreen_control').addClass('hidden');
    } else {
        $('.fullscreen_control').removeClass('hidden');
    }
</script>
