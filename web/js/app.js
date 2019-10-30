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
        Display Number of Projects
    ---------------------------------------*/
    $("#_wampindexer").removeClass("grid");
    var nbProjet = $('.repository-container').length;
    $( ".nbProjet" ).append( nbProjet );
 
    /*--------------------------------------
        Clear Header Search Bar
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
        Reset Icon Search Bar
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

    /*----------------------------------------
        Apparence grid
    -----------------------------------------*/
    // var divs = $("div.myGrid > div.grid");
    // var projetPerColm = nbProjet/3;
    // for (var i = 0; i < divs.length; i+=projetPerColm) {
    //     divs.slice(i, i+projetPerColm).wrapAll("<div class='grid col-md-4'></div>");
    // }

    /*--------------------------------------
        Search Bar Functionalities & Reset
    ---------------------------------------*/
    $( "#myInput" ).keyup(function() {
        var input, filter, container, titre, h2, span, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        container = $(".repository-container");
        titre = document.getElementById("titre");
        h2 = titre.getElementsByTagName("h2");

        /* Find specific repository and reset search */
        for (i = 0; i < container.length; i++) {
            projet = container[i];
            h2 = container[i].getElementsByTagName("h2")[0];
            span = container[i].getElementsByTagName("span")[0];
            if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
                projet.parentNode.style.display = "";
            } else {
                projet.parentNode.style.display = "none";
            }

            /* Icon reset search */
            $("i.hs-reset").click(function(){
                $(".grid").css('display', 'block');
            });
        }
    });

    /*--------------------------------------
        Filter Type Projects
    ---------------------------------------*/
    $(".filter").click(function(e) {
        e.preventDefault();
        
        /* Set types */
        folders = $(".repository-extension");
        files = $(".file-extension");
        sites = $(".site-extension");
        emails = $(".email-extension");

        /* Display types when filter */
        filter = this.className;
        $(".grid.col-md-4").hide();

        if (filter == "filter all") {
            $(".grid.col-md-4").show();
        }
        if (filter == "filter folders") {
            folders.parents().closest(".grid.col-md-4").show();
        }
        if (filter == "filter files") {
            files.parents().closest(".grid.col-md-4").show();
        }
        if (filter == "filter sites") {
            sites.parents().closest(".grid.col-md-4").show();
        }
        if (filter == "filter emails") {
            emails.parents().closest(".grid.col-md-4").show();
        }
    });

    /*--------------------------------------
        See README.md as description
    ---------------------------------------*/
    $(".see-readmore").hide();
    $(".readmore").click(function() {
        $(this).toggleClass("readmore-clicked");
        $(this).next().toggle();
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