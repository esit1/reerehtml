// SmartMenus init
$(function() {
  $('#main-menu').smartmenus({
    mainMenuSubOffsetX: -1,
    subMenusSubOffsetX: 10,
    subMenusSubOffsetY: 0
  });
});

// SmartMenus mobile menu toggle button
$(function () {
    var $mainMenuState = $('#main-menu-state');
    if ($mainMenuState.length) {
        // animate mobile menu
        $mainMenuState.change(function (e) {
            var $menu = $('#main-menu');
            if (this.checked) {
                $menu.hide().slideDown(250, function () {
                    $menu.css('display', '');
                });
            } else {
                $menu.show().slideUp(250, function () {
                    $menu.css('display', '');
                });
            }
        });
        // hide mobile menu beforeunload
        $(window).bind('beforeunload unload', function () {
            if ($mainMenuState[0].checked) {
                $mainMenuState[0].click();
            }
        });
    }
});



$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
    });


    return false;
});

