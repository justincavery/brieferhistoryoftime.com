
$(document).ready(function () {
    $("#glossary").hide();
    console.log("hidden glossary");
    $("a[rel='footnote']").click(function (event) {
        var id = $(this).attr("href");
        console.log("Clicked item");
        console.log("ID is " + id);
        id = id.substring(9);
        console.log("ID is " + id);
        $(id).clone().appendTo("#footnote-content");
        event.preventDefault();
    $("#veil").removeClass('off');
    $("#veil").addClass('on');
    $("#footnote-content").addClass('active');
    });
    $("#veil").click(function (event){
      $("#footnote-content").empty();
       event.preventDefault();
    $("#veil").removeClass('on');
    $("#veil").addClass('off');
    $("#footnote-content").removeClass('active');
    });
});

  $("#toc").addClass('menu-slide hide-menu');
  $("#header").append('<button id="mobile-menu">Menu</button>');
  $("#mobile-menu").click(function(event){
    $("#toc").addClass('show-menu').removeClass('hide-menu').append('<button id="menu-close">Close</button>');
    $("body").addClass('show-menu');
     event.preventDefault();
  });

 $("#toc").on("click", "#menu-close, a", function() {
      $("#toc").addClass('hide-menu').removeClass('show-menu');
      $("body").removeClass('show-menu');
      $(this).remove();
 });


  $( "[data-after],[data-before],[data-append],[data-replace]" ).ajaxInclude();
  $( "a[data-interaction]" ).bind( "click", function( event ) {
    $( this ).removeAttr( "data-interaction" ).ajaxInclude({
      headerCallbacks: {
        'X-AjaxInclude-Redirect': function( url ) {
          window.location.href = url;
        }
      }
    });

    event.preventDefault();
  });

$(function() {
  return $("h2, h3, h4, h5, h6, figure").each(function(i, el) {
    var $el, icon, id;
    $el = $(el);
    id = $el.attr('id');
    icon = '#' + id;
    if (id) {
      return $el.prepend($("<a />").addClass("header-link").attr("href", "#" + id).html(icon));
    }
  });
});

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

if ('serviceWorker' in navigator) {
 console.log('Service Worker is supported');
 navigator.serviceWorker.register('/serviceworker.js').then(function(reg) {
   console.log(':^) service worker registered', reg);
   // TODO
 }).catch(function(err) {
   console.log(':^(', err);
 });
}