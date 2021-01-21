$(document).ready(function() {

	/* scroll */

	$("a[href^='#']").click(function(){
		var _href = $(this).attr("href");
		$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		return false;
	});

	/* timer */

	now = new Date();

    var time = (24-now.getHours())*3600;

    $(".timer").attr("data-timer", time);
    $(".timer").TimeCircles({
        "animation": "smooth",
        "bg_width": 0.001,
        "fg_width": 0.02,
        "circle_bg_color": "#e2e2e2",
        "time": {
            "Days": {
                "show": false
            },
            "Hours": {
                "text": "horas",
                "color": "#de163a",
                "show": true
            },
            "Minutes": {
                "text": "minutos",
                "color": "#de163a",
                "show": true
            },
            "Seconds": {
                "text": "segundas",
                "color": "#de163a",
                "show": true
            }
        }
    });

	/* sliders */

	$(".owl-carousel").owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 300,
		mouseDrag: false,
		pullDrag: false,
		dots: false,
		nav: true,
		navText: ""
	});



});
