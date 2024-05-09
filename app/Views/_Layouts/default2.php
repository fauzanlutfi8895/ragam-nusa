<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="PTIK">
    <title>Ragam Nusa</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/calendars/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/calendars/extensions/daygrid.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/calendars/extensions/timegrid.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/tables/ag-grid/ag-grid.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/tables/ag-grid/ag-theme-material.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/jquery.contextMenu.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/plyr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/editors/quill/quill.bubble.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/vendors/css/extensions/sweetalert2.min.css">END: Vendor CSS

    <!-- BEGIN: Theme CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/themes/semi-dark-layout.css"> -->

    <!-- BEGIN: Page CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/plugins/tour/tour.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/plugins/forms/validation/form-validation.css"> -->
    <?= $this->renderSection('css'); ?>
    <!-- END: Page CSS-->

    <!-- BEGIN: Fileinput-->
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets') ?>/js/vendors/bootstrap-fileinput/css/fileinput.css" rel="stylesheet" type="text/css" /> -->
    <!-- END: Fileinput-->

    <!-- BEGIN: Custom CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/css/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/css/vue-transition.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/js/vendors/flatpickr/flatpickr.min.css"> -->
    <!-- END: Custom CSS-->

    <!-- BEGIN: Icon CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/fonts/font-awesome/css/font-awesome.css">
    <!-- END: Icon CSS-->

    <!-- preloader -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets'); ?>/css/preloader.css">
    <!-- end of preloader -->
</head>
<!-- END: Head-->

    <!-- BEGIN: Main Menu-->
    
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <?= $this->renderSection('content'); ?>
    <!-- END: Content-->


    <!-- BEGIN: Footer-->
    <!-- <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0">
            <span class="float-md-right d-none d-md-block">
                <i class="feather icon-user text-warning"></i> <= isset($session['kontak']['nama']) ?: ''; ?>
                <i class="feather icon-mail text-warning"></i> <= isset(['kontak']['email']) ?: '' ?>
                <i class="feather icon-phone text-warning"></i> <= isset(['kontak']['noHp']) ?: '' ?>
            </span>
        </p>
    </footer> -->
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/vendors.min.js"></script> -->
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url('assets'); ?>/js/vendors/moment.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/calendar/extensions/daygrid.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/calendar/extensions/timegrid.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/calendar/extensions/interactions.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/toastr.min.js"></script>
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/swiper.min.js"></script> -->
    <script src="<?= base_url('app-assets'); ?>/vendors/js/ui/prism.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/wNumb.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/nouislider.min.js"></script>

    <script src="<?= base_url('app-assets'); ?>/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/forms/select/select2.id.js"></script>

    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/editors/quill/katex.min.js"></script> -->
    <script src="<?= base_url('app-assets'); ?>/vendors/js/editors/quill/highlight.min.js"></script>
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/editors/quill/quill.min.js"></script> -->
    <script src="<?= base_url('app-assets'); ?>/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js"></script> -->
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/charts/apexcharts.min.js"></script> -->
    <script src="<?= base_url('app-assets'); ?>/vendors/js/charts/chart.min.js"></script>
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/charts/echarts/echarts.min.js"></script> -->
    <script src="<?= base_url('app-assets'); ?>/vendors/js/pagination/jquery.bootpag.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/pagination/jquery.twbsPagination.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/tether.min.js"></script>
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/shepherd.min.js"></script> -->
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/dropzone.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/jquery.contextMenu.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/jquery.ui.position.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/dragula.min.js"></script>
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/media/plyr.js"></script> -->
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/media/plyr.polyfilled.js"></script> -->
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extensions/polyfill.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBgjNW0WA93qphgZW-joXVR6VC3IiYFjfo"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/charts/gmaps.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/coming-soon/jquery.countdown.min.js"></script>
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/pdfmake.min.js"></script> -->
    <!-- <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/vfs_fonts.js"></script> -->
    <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/krajee/fileinput.min.js"></script>
    <script src="<?= base_url('app-assets'); ?>/vendors/js/extra/jquery.marquee.min.js"></script>

    <!-- <php if (ENVIRONMENT === 'production') : ?>
        <script src="<= base_url('assets'); ?>/js/vue.js"></script>
    <php else : ?>
        <php endif; ?> -->
    <script src="<?= base_url('assets'); ?>/js/vue.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/vendors/flatpickr/flatpickr.js"></script>
    <script src="<?= base_url('assets'); ?>/js/vendors/flatpickr/flatpickr.id.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('app-assets'); ?>/js/core/app-menu.js"></script>
    <script src="<?= base_url('app-assets'); ?>/js/core/app.js"></script>
    <script src="<?= base_url('app-assets'); ?>/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Fileinput-->
    <script src="<?= base_url('assets'); ?>/js/vendors/bootstrap-fileinput/js/plugins/piexif.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/vendors/bootstrap-fileinput/js/fileinput.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/vendors/bootstrap-fileinput/themes/fa/theme.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/vendors/bootstrap-fileinput/js/locales/id.js"></script>
    <!-- END: Fileinput-->


    <script src="<?= base_url('app-assets'); ?>/js/scripts/popover/popover.js"></script>

    <!-- BEGIN: Custom App-->
    <script src="<?= base_url('assets'); ?>/app/config.js"></script>
    <!-- END: Custom App-->

    <script>
        var allNotifId = [];

        $(document).ready(function() {
            fetchUnreadNotif();

            $("#notif-btn").on("click", function() {
                if (!$('#notif-box').hasClass('show')) {
                    fetchNotif();
                } else {
                    $("#notif-dropdown").empty();
                }
            });

            $('#notif-action').find('a').click(function() {
                notifClicked(allNotifId, 'readAll')
            });
        })
        // $.fn.select2.defaults.set('language', 'id');


        function fetchUnreadNotif() {
            $.get('<?= base_url('notifikasi/countUnread') ?>', function(res) {
                if (res.code == 200 || res.code == 404) {
                    localStorage.setItem('unread_notifikasi', res.data);
                }
            }).always(function(){
                var unreadNotif = localStorage.getItem('unread_notifikasi');
                if (unreadNotif != 0) {
                    $(".notif-badge").html("<strong>" + unreadNotif + "</strong>")
                } else {
                    $('#notif-action').html('Tidak Ada Notifikasi Terbaru').find('a').hide();
                }
            })

        }

        function fetchNotif() {
            $("#notif-dropdown").empty();
            var ind = 0;
            $.get('<?= base_url('notifikasi/all') ?>', function(res) {
                if (res.code == 200) {
                    res.data.forEach(element => {
                        font = "#000000"
                        var curDate = new Date();
                        var date = new Date(element.createdAt);
                        var x = `<p class="m-0 p-0 ml-auto close fa fa-times" style="font-size: 13px" id="delete-notif" onclick="notifDelete('${element.id}')"></p>`
                        var opc = '',
                            dot = '';
                        if (element.url == null) {
                            dot = `<i class="fa fa-bullhorn danger" style="font-size: 0.8rem;margin-top:0.3rem;"></i>`;
                            x = ``;
                        }

                        if (element.status == "read") {
                            opc = "opacity: 0.5";
                        }


                        if (curDate.getDate() == date.getDate()) {
                            date = date.getHours() + ":" + date.getMinutes();
                        } else {
                            date = curDate.getDate() - date.getDate() + " Hari";

                        }

                        var notificationItemHtml = `
                            <div class="dropdown-item d-flex px-1" id="notif-container" style="${opc}">
                                ${dot}
                                <div onclick="notifClicked('${element.id}','${element.url}')" style="color: ${font};">
                                <h6 class="m-0 text-break text-wrap" style="color: ${font}"><strong>${element.judul}</strong></h6>
                                <div style="margin-top:0.5rem">
                                    <p class="text-break text-wrap" style="line-height: 1.2rem;margin-bottom:0.3rem">${element.isi}</p>
                                    <small style="color: ${font}60;"><strong>${date}</strong></small>
                                </div>
                              </div>
                              ${x}
                            </div>`;
                        $("#notif-dropdown").append(notificationItemHtml);
                        allNotifId[ind] = element.id;
                        ind++;
                    });
                }
            })
            fetchUnreadNotif();
        }

        function notifClicked(id, url) {
            if (url !== 'null') {
                $.ajax({
                    url: `<?= base_url('notifikasi/read') ?>/${id}`,
                    success: function(result) {
                        fetchNotif();
                    }
                });
                if(url !== 'readAll'){
                    window.location.href =`<?= base_url() ?>/${url}`
                } else {
                    location.reload();
                }

            } else {
                event.stopPropagation();
            }
        }


        function notifDelete(id) {
            $.ajax({
                url: `<?= base_url('notifikasi/delete') ?>/${id}`,
                success: function(result) {
                    fetchNotif();
                    fetchUnreadNotif()
                }
            });
            event.stopPropagation()
            fetchUnreadNotif()
        }


        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: "<?= base_url('app-assets'); ?>/vendors/js/tables/datatable/id.json",
            },
        });
        $(function() {
            $(".preloader").delay(1000).fadeOut('slow');
            // $('[data-toggle="tooltip"]').tooltip()

            $('.marquee').marquee({
                direction: 'left'
            });
            // START - JS SLIDING APP NAME //
            window.requestAnimationFrame = (function() {
                return window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    function(callback) {
                        window.setTimeout(callback, 1000 / 60);
                    };
            })();
            var speed = 5000;
            (function currencySlide() {
                var currencyPairWidth = $('.slideItem:first-child').outerWidth();
                $(".slideContainer").animate({
                    marginLeft: -currencyPairWidth
                }, speed, 'linear', function() {
                    $(this).css({
                        marginLeft: 0
                    }).find("li:last").after($(this).find("li:first"));
                });
                requestAnimationFrame(currencySlide);
            })();
            // END - JS SLIDING APP NAME //

            // Untuk menyembunyikan label logout
            $('#sideMenu').on({
                mouseenter: function() {
                    $('#textLogout').show('fast');
                },
                mouseleave: function() {
                    if ($('#buttonTogel').hasClass("icon-circle")) {
                        $('#textLogout').hide('fast');
                    }
                }
            });
            $('body').click(function() {
                $('[data-toggle="tooltip"]').tooltip("hide");
            });

            $(document).on('mouseover', '.manual', function() {
                $(this).popover('show');
            });
            $(document).on('mouseout', '.manual', function() {
                $(this).popover('hide');
            });

        })

        function escapeHtml(unsafe) {
            return unsafe
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;")
            // .replace(/\n/g, "<br>");
        }
    </script>

    <style type="text/css">
        .w00 {
            width: 0px !important;
        }

        .w80 {
            width: 80px !important;
        }

        .w260 {
            width: 260px !important;
        }

        .w260 {
            width: 260px !important;
        }

        .w40p {
            width: 40% !important;
        }

        .w90p {
            width: 90% !important;
        }
    </style>
    <script>
        const menuOver = <?= json_encode($MENU_OVER) ?>;
        var l = 0;
        var pixel = 0;
        var element = $('.main-menu-content li.nav-item a');
        $.each(element, function() {
            var cell = $(this),
                cellText = cell.text(),
                cellLength = cellText.length;

            $.each(menuOver, function(i, v) {
                if (cellText == v) {
                    cell.parent().addClass("li-extends");
                }
            });

            if (cellLength > l) {
                l = cellLength;
                pixel = cell.parent().parent().width();
            }
        });
        var active_url = '<?= $ACTIVE_URL ?>';
        var openMenu = false;

        $.each(menuOver, function(i, v) {
            if (active_url.includes(v)) {
                openMenu = true;
                return;
            }
        });
        console.log(active_url, menuOver, openMenu);

        $(document).ready(function() {
            if ($(".vertical-layout").hasClass("menu-collapsed")) {
                $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                $('.main-menu').addClass('w80');
            };
            if ($(".vertical-layout").hasClass("menu-expanded")) {
                $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                $('.main-menu').addClass('w260');
            };

            $(".main-menu, .navigation-main").hover(function() {
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                    $('.main-menu').css('width', `${(70 + pixel)}px`);
                } else {
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                    if (openMenu) {
                        $('.main-menu').css('width', `${(70 + pixel)}px`);
                    } else {
                        $('.main-menu').addClass('w260');
                    }
                }
            }, function() {
                if ($(".vertical-layout").hasClass("menu-expanded")) {
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                    $('.main-menu').addClass('w260');
                } else if ($(".vertical-layout").hasClass("menu-collapsed")) {
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                    $('.main-menu').addClass('w80');
                }
            });

            // $("i.extends").parent().parent().addClass("li-extends");

            $('.li-hover').hover(function(e) {
                e.preventDefault();
                if ($(this).hasClass("open") && openMenu) {
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                    $('.main-menu').css('width', '');
                    openMenu = false;
                } else {
                    openMenu = true;
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                    $('.main-menu').css('width', `${(70 + pixel)}px`);
                }
            });

            $('.li-extends').click(function(e) {
                e.preventDefault();
                if ($(this).hasClass("open") && openMenu) {
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                    $('.main-menu').css('width', '');
                    openMenu = false;
                } else {
                    openMenu = true;
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                    $('.main-menu').css('width', `${(70 + pixel)}px`);
                }
            });
            // $("li.li-layanan").hover(function() {
            //     $('li.li-layanan').addClass('open').show("fold", 1000);
            // });

            $('.nav-item:not(.li-hover)').hover(function(e) {
                if (!$('.li-extends').hasClass("open")) {
                    openMenu = false;
                    $('.main-menu').css('width', '');
                }
            });
            $('.nav-item:not(.li-extends)').click(function(e) {
                openMenu = false;
                $('.main-menu').css('width', '');
            });

            $('.modern-nav-toggle').click(function() {
                $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                $('.main-menu').addClass('w00');
            });
            $('.menu-toggle').click(function() {
                if (!$("li").hasClass("li-long open")) {
                    $('.main-menu').removeClass("w00 w80 w260 w40p w90p");
                }
            });
        });

        $(document).ready(function() {
            $('.main-menu.menu-light .navigation li').hover(function() {
                if (!$(this).hasClass('active')) {
                    $(this).find('a').first().css({
                        color: '<?= $theme['activeColor'] ?>',
                    })
                }
            }, function() {
                if (!$(this).hasClass('active')) {
                    $(this).find('a').css({
                        color: '<?= $theme['secondaryContentColor'] ?>',
                    })
                }
            })
        })

        $(document).ready(function() {
            $('.btn-outline-primary').hover(
                function() {
                    $(this).css({
                        backgroundColor: hexToRgba('<?= $theme['primaryColor'] ?>', 0.8)
                    })
                },
                function() {
                    $(this).css({
                        backgroundColor: '',
                    })
                }
            )
        })

        function hexToRgba(hex, alpha) {
            const r = parseInt(hex.substring(1, 3), 16);
            const g = parseInt(hex.substring(3, 5), 16);
            const b = parseInt(hex.substring(5, 7), 16);
            return `rgba(${r},${g},${b},${alpha})`;
        }
    </script>

    <!-- BEGIN: Page JS-->
    <?= $this->renderSection('js'); ?>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>