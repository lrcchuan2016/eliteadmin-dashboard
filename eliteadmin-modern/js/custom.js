/*jslint browser: true*/
/*global $, jQuery, alert*/

$(document).ready(function () {

    "use strict";

    var body = $("body");

    $(function () {
        $(".preloader").fadeOut();
        $("body").trigger("resize");
    });


    /* ===========================================================
        Loads the correct sidebar on window load.
        collapses the sidebar on window resize.
        Sets the min-height of #page-wrapper to window size.
    =========================================================== */

    $(function () {
        var set = function () {
            var topOffset = 60,
                height = ((window.innerHeight > 0) ? window.innerHeight : this.screen.height) - 1,
                width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;

            if (width < 1270) {
                body.addClass('content-wrapper');
                $('.mini-nav > li.selected').addClass('cnt-none');
                $('#togglebtn').hide();
            } else {
                body.removeClass('content-wrapper');
                $('#togglebtn').show();
                $('.mini-nav > li.selected').removeClass('cnt-none');
            }

            if (width < 1549) {
                body.addClass('rmv-right-panel');
                $('.right-side-toggle i').addClass('ti-arrow-left');
            } else {
                body.removeClass('rmv-right-panel');
                $('.right-side-toggle i').removeClass('ti-arrow-left');
            }

            height = height - topOffset;
            if (height < 1) {
                height = 1;
            }
            if (height > topOffset) {
                $("#page-wrapper").css("min-height", (height) + "px");
            }
        };

        $(window).ready(set);
        $(window).on("resize", set);
    });

    /* ===== Collapsible Panels JS ===== */

    (function ($, window, document) {
        var panelSelector = '[data-perform="panel-collapse"]',
            panelRemover = '[data-perform="panel-dismiss"]';
        $(panelSelector).each(function () {
            var collapseOpts = {
                    toggle: false
                },
                parent = $(this).closest('.panel'),
                wrapper = parent.find('.panel-wrapper'),
                child = $(this).children('i');
            if (!wrapper.length) {
                wrapper = parent.children('.panel-heading').nextAll().wrapAll('<div/>').parent().addClass('panel-wrapper');
                collapseOpts = {};
            }
            wrapper.collapse(collapseOpts).on('hide.bs.collapse', function () {
                child.removeClass('ti-minus').addClass('ti-plus');
            }).on('show.bs.collapse', function () {
                child.removeClass('ti-plus').addClass('ti-minus');
            });
        });

        /* ===== Collapse Panels ===== */

        $(document).on('click', panelSelector, function (e) {
            e.preventDefault();
            var parent = $(this).closest('.panel'),
                wrapper = parent.find('.panel-wrapper');
            wrapper.collapse('toggle');
        });

        /* ===== Remove Panels ===== */

        $(document).on('click', panelRemover, function (e) {
            e.preventDefault();
            var removeParent = $(this).closest('.panel');

            function removeElement() {
                var col = removeParent.parent();
                removeParent.remove();
                col.filter(function () {
                    return ($(this).is('[class*="col-"]') && $(this).children('*').length === 0);
                }).remove();
            }
            removeElement();
        });
    }(jQuery, window, document));

    /* ===== Tooltip Initialization ===== */

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    /* ===== Popover Initialization ===== */

    $(function () {
        $('[data-toggle="popover"]').popover();
    });

    /* ===== Task Initialization ===== */

    $(".list-task li label").on("click", function () {
        $(this).toggleClass("task-done");
    });
    $(".settings_box a").on("click", function () {
        $("ul.theme_color").toggleClass("theme_block");
    });

    /* ===== Collepsible Toggle ===== */

    $(".collapseble").on("click", function () {
        $(".collapseblebox").fadeToggle(350);
    });

    /* ===== Sidebar ===== */

    $('.slimscrollright').slimScroll({
        height: '100%',
        position: 'right',
        size: "5px",
        color: '#dcdcdc'
    });
    $('.mini-nav, .sidebar-menu').slimScroll({
        height: '100%',
        position: 'right',
        size: "5px",
        color: '#dcdcdc'
    });
    $('.scrollable-right').slimScroll({
        height: '100%',
        position: 'right',
        size: "5px",
        color: '#dcdcdc'
    });
    $('.chat-list').slimScroll({
        height: '100%',
        position: 'right',
        size: "5px",
        color: '#dcdcdc'
    });

    /* ===== Resize all elements ===== */

    body.trigger("resize");

    /* ===== Visited ul li ===== */

    $('.visited li a').on("click", function (e) {
        $('.visited li').removeClass('active');
        var $parent = $(this).parent();
        if (!$parent.hasClass('active')) {
            $parent.addClass('active');
        }
        e.preventDefault();
    });

    /* ===== Login and Recover Password ===== */

    $('#to-recover').on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });

    /* ===== this is for the left-aside-fix in content area with scroll ===== */

    $(function () {
        $(window).on("load", function () {
            $('.chat-left-inner').css({
                'height': (($(window).height()) - 240) + 'px'
            });
        });
        $(window).on("resize", function () {
            $('.chat-left-inner').css({
                'height': (($(window).height()) - 240) + 'px'
            });
        });
    });
    $(".open-panel").on("click", function () {
        $(".chat-left-aside").toggleClass("open-pnl");
        $(".open-panel i").toggleClass("ti-angle-left");
    });

    /* ===== This is for click on Sidebar open close button ===== */

    $(".mini-nav > li, #togglebtn").on('click', function () {
        if (body.hasClass("rmv-sidebarmenu")) {
            body.trigger("resize");
            $("#togglebtn").hide();
        } else {
            body.trigger("resize");
            $("#togglebtn").show();
        }
    });
    $(".mini-nav > li, #togglebtn").on('click', function () {
        if (body.hasClass("content-wrapper")) {
            $('.mini-nav > li.selected').removeClass('cnt-none');
            $("#togglebtn").show();
        }
    });

    /* ===== Sidemenu toggle ===== */

    $(".mini-nav").css("overflow", "hidden").parent().css("overflow", "visible");
    $('#togglebtn').on("click", function () {
        $('#togglebtn').hide();
        $('.mini-nav > li.selected').addClass('cnt-none');
    });
    $('.mini-nav > li').on("click", function () {
        $('#togglebtn').show();
        $('.mini-nav > li.selected').removeClass('cnt-none');
        body.removeClass('rmv-sidebarmenu');
    });
    $('.mini-nav > li').on('click', function () {
        $('.mini-nav > li.selected').removeClass('selected');
        $(this).addClass('selected');
    });

    /* ===== Add or removed class from body ===== */

    $('#togglebtn').on('click', function () {
        body.removeClass('content-wrapper');
        body.addClass('content-wrapper');
    });

    /* ===== This is the active menu js ===== */

    $(function () {
        var url = window.location;
        var element = $('ul.sidebar-menu a').filter(function () {
            return this.href === url || url.href.indexOf(this.href) === 0;
        }).addClass('active').parent().parent().addClass('in').parent();
        if (element.is('li')) {
            element.addClass('active');
        }
    });

    /* ===== Sidemenu style ===== */

    $.sidemenu = function (menu) {
        var animationSpeed = 300;
        $(menu).on('click', 'li a', function (e) {
            if ($(this).next().is('.sub-menu') && $(this).next().is(':visible')) {
                $(this).next().slideUp(animationSpeed, function () {
                    $(this).next().removeClass('menu-open');
                });
                $(this).next().parent("li").removeClass("active");
            } else if (($(this).next().is('.sub-menu')) && (!$(this).next().is(':visible'))) {
                var parent = $(this).parents('ul').first();
                parent.find('ul:visible').slideUp(animationSpeed).removeClass('menu-open');
                $(this).next().slideDown(animationSpeed, function () {
                    $(this).next().addClass('menu-open');
                    parent.find('li.active').removeClass('active');
                    $(this).parent("li").addClass('active');
                });
            }
        });
    }
    $.sidemenu($('.sidebar-menu'))

    /* ===== Open-Close-right sidebar ===== */

    $(".right-side-toggle").on('click', function () {
        body.toggleClass('rmv-right-panel');
        $('.right-side-toggle i').toggleClass('ti-arrow-left');
    });

});
