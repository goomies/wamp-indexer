/*--------------------------------------
    Detact Mobile Browser
---------------------------------------*/
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    $('html').addClass('ismobile');
}

$(window).load(function () {
    /* --------------------------------------------------------
        Page Loader
    ---------------------------------------------------------*/
    if (!$('html').hasClass('ismobile')) {
        if ($('.page-loader')[0]) {
            setTimeout(function () {
                $('.page-loader').fadeOut();
            }, 500);
        }
    }

    /*--------------------------------------
        Welcome Message
    ---------------------------------------*/
    function notify(message, type) {
        $.growl({
            message: message
        }, {
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

$(document).ready(function () {
    /*--------------------------------------
        Display Number of Projects
    ---------------------------------------*/
    $("#_wampindexer").removeClass("grid");
    var nbProjet = $('.repository-container').length + " " + "Repositories";
    $(".nbProjet").append(nbProjet);

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
    $('body').on('focus', '.hs-input', function () {
        $('.h-search').addClass('focused');
    });

    /* Take off reset icon if input length is 0, when blurred */
    $('body').on('blur', '.hs-input', function () {
        var x = $(this).val();

        if (!x.length > 0) {
            $('.h-search').removeClass('focused');
        }
    });

    /*--------------------------------------
        Search Bar Functionalities & Reset
    ---------------------------------------*/
    $("#myInput").keyup(function () {
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

            /* Reset number of projects */
            var nbProjet = $('.grid.col-md-4:not([style*="display: none"])').length + " " + "Repositories";
            $(".nbProjet").empty();
            $(".nbProjet").append(nbProjet);

            /* Icon reset search */
            $("i.hs-reset").click(function () {
                $(".grid").css('display', 'block');

                /* Reset number of projects */
                var nbProjet = $('.grid.col-md-4:not([style*="display: none"])').length + " " + "Repositories";
                $(".nbProjet").empty();
                $(".nbProjet").append(nbProjet);
            });
        }
    });

    /*--------------------------------------
        Filter Type Projects
    ---------------------------------------*/
    $(".filter").click(function (e) {
        e.preventDefault();

        /* Set types */
        projects = $(".repository-extension").parents().closest(".grid.col-md-4");
        files = $(".file-extension").parents().closest(".grid.col-md-4");
        sites = $(".site-extension").parents().closest(".grid.col-md-4");
        emails = $(".email-extension").parents().closest(".grid.col-md-4");

        /* Display types when filter */
        filter = this.className;
        $(".grid.col-md-4").hide();
        $(".grid.col-md-4").removeClass("animated fadeIn");

        if (filter == "filter all") {
            $(".grid.col-md-4").show();
            /* Reset number of projects */
            var nbProjet = $('.repository-container').length + " " + "Repositories";
            $(".grid.col-md-4").addClass("animated fadeIn");
        }
        if (filter == "filter folders") {
            projects.show();
            /* Reset number of folders */
            var nbProjet = projects.length + " " + "Projects";
            projects.addClass("animated fadeIn");
        }
        if (filter == "filter files") {
            files.show();
            /* Reset number of files */
            var nbProjet = files.length + " " + "Files";
            files.addClass("animated fadeIn");
        }
        if (filter == "filter sites") {
            sites.show();
            /* Reset number of sites */
            var nbProjet = sites.length + " " + "Sites";
            sites.addClass("animated fadeIn");
        }
        if (filter == "filter emails") {
            emails.show();
            /* Reset number of emails */
            var nbProjet = emails.length + " " + "Emails";
            emails.addClass("animated fadeIn");
        }

        /* Display mumber of projects of type */
        $(".nbProjet").empty();
        $(".nbProjet").append(nbProjet);
    });

    /*--------------------------------------
        See README.md as description
    ---------------------------------------*/
    $(".see-readmore").hide();

    $(".readmore").click(function () {
        $(this).toggleClass("clicked");
        $(this).next().toggle("slow");
        $(this).next().toggleClass("bounceInDown");
    });

    /*--------------------------------------
         Animation
    ---------------------------------------*/
    $(".card.animation-demo").hover(
        function () {
            $(this).find(".animated.extensions").addClass("pulse");
        }, function () {
            $(this).find(".animated.extensions").removeClass("pulse");
        }
    );

    /*----------------------------------------
        Is Site Available
    -----------------------------------------*/
    jQuery.ajax({
        type: "POST",
        url: 'http://localhost/index.php',
        dataType: 'json',
        data: { functionname: 'add', arguments: [1, 2] },

        success: function (obj, textstatus) {
            if (!('error' in obj)) {
                yourVariable = obj.result;
            }
            else {
                console.log(obj.error);
            }
        }
    });

});