/*--------------------------------------
    Detact Mobile Browser
---------------------------------------*/
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   $('html').addClass('ismobile');
}

$(window).load(function(){
    /* --------------------------------------------------------
        Page Loader
     ---------------------------------------------------------*/
    if(!$('html').hasClass('ismobile')) {
        if($('.page-loader')[0]) {
            setTimeout (function () {
                $('.page-loader').fadeOut();
            }, 500);

        }
    }

    /*--------------------------------------
        Welcome Message
    ---------------------------------------*/
    function notify(message, type){
        $.growl({
            message: message
        },{
            type: type,
            allow_dismiss: false,
            label: 'Cancel',
            className: 'btn-xs btn-inverse',
            placement: {
                from: 'bottom',
                align: 'right'
            },
            delay: 2500,
            animate: {
                    enter: 'animated fadeInRight',
                    exit: 'animated fadeOutRight'
            },
            offset: {
                x: 30,
                y: 30
            }
        });
    };

    if (!$('.login-content')[0]) {
        notify('On your localhost MAMENE !', 'inverse');
    }
});

$(document).ready(function() {
    /*--------------------------------------
        Header Search
    ---------------------------------------*/
    $('body').on('click', '[data-ma-action]', function (e) {
        e.preventDefault();
        var action = $(this).data('ma-action');
        var $this = $(this);

        switch (action) {
            /* Clear Search */
            case 'search-clear':
                /* For mobile only */
                $('.h-search').removeClass('toggled');
                /* For all */
                $('.hs-input').val('');
                $('.h-search').removeClass('focused');
                break;
            /* Open search */
            case 'search-open':
                $('.h-search').addClass('toggled');
                $('.hs-input').focus();
                break;
        }
    });
    
    /* --------------------------------------------------------
        Top Search
    ----------------------------------------------------------*/

    /* Bring search reset icon when focused */
    $('body').on('focus', '.hs-input', function(){
        $('.h-search').addClass('focused');
    });

    /* Take off reset icon if input length is 0, when blurred */
    $('body').on('blur', '.hs-input', function(){
        var x = $(this).val();

        if (!x.length > 0) {
            $('.h-search').removeClass('focused');
        }
    });

    /*--------------------------------------
        display number of Projects
    ---------------------------------------*/
    $("#_wampindexer").removeClass("grid");
    var nbProjet = $('.grid').length;
    $( ".nbProjet" ).append( nbProjet );

    /*--------------------------------------
        Apparence grid
    ---------------------------------------*/
    var divs = $("div.myGrid > div.grid");
    var projetPerColm = nbProjet/3;
    for(var i = 0; i < divs.length; i+=projetPerColm) {
      divs.slice(i, i+projetPerColm).wrapAll("<div class='col-md-4 col-sm-6'></div>");
    }

    /*--------------------------------------
        Filter Site into the grids
    ---------------------------------------*/
    $( "#myInput" ).keyup(function() {
        var input, filter, container, titre, h2, span, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        container = $(".grid");
        titre = document.getElementById("titre");
        h2 = titre.getElementsByTagName("h2");

        for (i = 0; i < container.length; i++) {
            projet = container[i];
            h2 = container[i].getElementsByTagName("h2")[0];
            span = container[i].getElementsByTagName("span")[0];
            if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
                projet.style.display = "";
            } else {
                projet.style.display = "none";
            }
        }
    });

    /*--------------------------------------
        Animation
     ---------------------------------------*/
     $(".card.animation-demo").hover(
       function() {
         $(this).find(".animated").addClass( "pulse" );
       }, function() {
         $(this).find(".animated").removeClass( "pulse" );
       }
     );
});
