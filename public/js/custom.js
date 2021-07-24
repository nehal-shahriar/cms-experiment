$(document).ready(function() {


    $('.responsive').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $(window).scroll(function() {
        var scrolling = $(this).scrollTop();
        if (scrolling >= document.body.clientHeight - screen.availHeight) {
            // console.log($("section").attr("id"));
            $('.navbar').addClass('bg');
        } else {
            $('.navbar').removeClass('bg');
        }
    });

    // $('ul .nav-item a').click(function() {
    //     $('.nav-item a').removeClass("active");
    //     // $('.nav-item a').removeClass("cliked");
    //     $(this).addClass("active");
    // });
    // //******************change */

    // $(window).scroll(function() {

    //     //     var position = $(this).scrollTop();
    //     //     $("section").each(function() {
    //     //             // var scrolling = $(this).scrollTop();
    //     //             var id = $(this).attr('id');
    //     //             if (position >= document.body.clientHeight - screen.availHeight || id == "footer") {
    //     //                 //console.log("id=" + id);
    //     //                 //console.log($("section").attr("id"));
    //     //                 $('.navbar').addClass('bg');
    //     //             } else {
    //     //                 $('.navbar').removeClass('bg');
    //     //             }
    //     //             //console.log($(this).height());

    //     //             var target = jQuery(this).offset().top

    //             // console.log($(this).scrollTop());
    //             // console.log(screen.availHeight);
    //             // console.log(document.body.clientHeight);
    //             // console.log($(this).attr('id'));

    //             var m = $('ul .nav-item a[href="#' + $(this).attr('id') + '"]');
    //             // $('ul .nav-item a').click(function() {
    //             //     $('.nav-item a').removeClass("active");
    //             //     $(this).addClass("active");
    //             // });
    //             if (position > target) {
    //                 $('.nav-item a').removeClass("active");
    //                 if (!(m.hasClass('cliked'))) {
    //                     $('.nav-item a').removeClass("cliked");
    //                 }
    //                 m.addClass("active");
    //                 $('ul .nav-item a').click(function() {
    //                     $('.nav-item a').removeClass("active");
    //                     $('.nav-item a').removeClass("cliked");
    //                     $(this).addClass("active");
    //                     $(this).addClass("cliked");

    //                 });

    //             }


    //         }


    //     );
    //     $("section").get().reverse().each(function() {
    //         var target = jQuery(this).offset().top

    //         // console.log($(this).scrollTop());
    //         // console.log(screen.availHeight);
    //         // console.log(document.body.clientHeight);
    //         // console.log($(this).attr('id'));
    //         var id = $(this).attr('id');
    //         var m = $('ul .nav-item a[href="#' + $(this).attr('id') + '"]');
    //         if (position > target) {
    //             $('.nav-item a').removeClass("active");
    //             m.addClass("active");
    //         }
    //     });
    // });
    // *****************change
    /* Back to top  */
    $('.back-to-top').click(function() {
        $('html,body').animate({ scrollTop: 0 }, 2000);
    });
    $(".works .col-lg-4").hover(
        function() {
            $(this).siblings().addClass("small");
        },
        function() { // Mouse out
            $(this).siblings().removeClass('small');

        }
    );



    $(".blog-item").hover(
        function() {
            $(this).siblings().removeClass('current');
            $(this).addClass("current");
        },
        function() { // Mouse out
            $(this).removeClass('current');
            $('.firts-blog').addClass("current");

        }
    );
    $(".share").click(() => {
        if ($(".share-links").css("display") == "none") {
            $(".share-links").css("display", "inline-block");
        } else {
            $(".share-links").css("display", "none");
        }

    });

});