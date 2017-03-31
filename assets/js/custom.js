/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});
	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

    $('#searchform .search-input').on('input',function(){
        var $this = $(this);
        var input = $this.val();
        var $wrapper = $this.parent();
        var $selector = $wrapper.find('.selector');
        var $options = $selector.find('.option');
        $selector.show();
        $options.css("display","none");
        if(input) {
            $options.each(function (i, el) {
                var $el = $(el);
                var regex = new RegExp(input, "i");
                if (regex.test($el.text())) {
                    $el.css("display", "");
                }
            });
        }
    });
    $('#searchform .option').on('click',function(){
        var $this = $(this);
        var $selector = $this.parent();
        var $wrapper = $selector.parent();
        var $search_input = $wrapper.find('.search-input');
        var $hidden_input = $wrapper.find('.search-input-hidden');
        $selector.css("display","none");
        var classes = this.className;
        var regex = new RegExp("\\s*value-.+\\s*");
        var matches = classes.match(regex);
        var val = "";
        if(matches){
            val = matches[0].split("-")[1];
        }
        $search_input.val($this.text());
        $hidden_input.val(val);
    });

});// END #####################################    END