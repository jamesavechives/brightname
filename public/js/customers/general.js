var $ = jQuery;
jQuery(document).ready(function() {
if(parseInt(display.number) <= parseInt(display.items)) {
           jQuery('.load.btn').hide();
	}
    
var pageNum = parseInt(display.startPage);
var max = parseInt(display.maxPages);
var max_specific = parseInt(display.max_specific);
if(max_specific != 0){ max = max_specific;}

jQuery('.load.btn span').on('click',function(){
    var is_test = jQuery('input[name="is_this_testimonial"]').attr("value");
    if(is_test == 'yes')
        jQuery(this).text('Loading Testimonials...');
    else
        jQuery(this).text('Loading Posts...');
        pageNum++;
        var is_blog = jQuery('input[name="is_this_blog"]').attr("value");
        var is_staff = jQuery('input[name="is_this_staff"]').attr("value");
        var is_room = jQuery('input[name="is_this_room"]').attr("value");
        var is_search = jQuery('input[name="is_this_search"]').attr("value");
        var is_gallery = jQuery('input[name="is_this_gallery"]').attr("value");
        var id = jQuery('input[name="current_cat"]').attr("value");
        var cat_ids = jQuery('input[name="categories_ids"]').attr("value");
        var homepage = jQuery('input[name="homepage"]').attr("value");
        var allhome = jQuery('input[name="allhome"]').attr("value");
        var allblog = jQuery('input[name="allblog"]').attr("value");
        var search_key = jQuery('input[name="search_key"]').attr("value");
        var x_data = "action=tfuse_ajax_get_posts&id="+id+"&homepage="+homepage+"&allhome="+allhome+"&allblog="+allblog+"&cat_ids="+cat_ids+'&search_key='+search_key+'&pageNum='+pageNum+'&max='+max+'&is_blog='+is_blog+'&is_room='+is_room+'&is_staff='+is_staff+'&is_test='+is_test+'&is_gallery='+is_gallery+'&is_search='+is_search;
        jQuery.ajax({
            type: "POST",
            url: tf_script.ajaxurl,
            data: x_data,
            success: function(rsp){
            var obj = jQuery.parseJSON(rsp);
            
           ///var obj = rsp;
            console.log(obj);
                     
                for(i = 0 ;i < parseInt(obj.items); i++)
                {
                    var boxes = jQuery(obj.html[i]);
                    jQuery(".postajax").append( boxes );

                }
                
                if(pageNum >= max)
                {  
                    jQuery('.load.btn').hide();
                }
                else
                {
                    if(is_test == 'yes')
                        jQuery('.load.btn span').text('Load More Testimonials');
                    else
                        jQuery('.load.btn span').text('Load More Posts');
                }
                
                jQuery('a[data-rel]').each(function() {
                jQuery(this).attr('rel', jQuery(this).data('rel'));
                });
                jQuery("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});
                jQuery(".boxed_list > .boxed_item:odd, .columns2 .article_item:odd").addClass("odd");
                jQuery(".columns2 .article_item:nth-child(2)").addClass("second");
                jQuery(".gallery .gallery_item:nth-child(2n), .staff_list .staff_item:nth-child(2n)").addClass("every_2nd"); // every 2nd
                jQuery(".gallery .gallery_item:nth-child(3n), .staff_list .staff_item:nth-child(3n)").addClass("every_3rd"); // every 3rd              
            }
            
        });
         
        return false;
    });
});
// Topmenu <ul> replace to <select>
jQuery(function()
{
    var tempMenu = jQuery('#topmenu').clone();
    var mainNavigationMenu = jQuery('<div>');

    mainNavigationMenu.attr('id', 'topmenu-select');

    /* Replace unordered list with a "select" element to be populated with options, and create a variable to select our new empty option menu */
    mainNavigationMenu.html('<select class="select_styled" id="topm-select"></select>');
    jQuery('#topmenu').after(mainNavigationMenu);

    var selectMenu = mainNavigationMenu.children('select');

    /* Navigate our nav clone for information needed to populate options */
    jQuery(tempMenu).children('.topmenu_inner').children('div').children('ul.dropdown').children('li').each(function() {

        /* Get top-level link and text */
        var href = jQuery(this).children('a').attr('href');
        var text = jQuery(this).children('a').text();

        /* Append this option to our "select" */
        if (jQuery(this).is(".current-menu-item") && href != '#') {
            jQuery(selectMenu).append('<option value="'+href+'" selected>'+text+'</option>');
        } else if ( href == '#' ) {
            jQuery(selectMenu).append('<option value="'+href+'" disabled="disabled">'+text+'</option>');
        } else {
            jQuery(selectMenu).append('<option value="'+href+'">'+text+'</option>');
        }

        /* Check for "children" and navigate for more options if they exist */
        if (jQuery(this).children('ul').length > 0) {
            jQuery(this).children('ul').children('li').not(".mega-nav-widget").each(function() {

                /* Get child-level link and text */
                var href2 = jQuery(this).children('a').attr('href');
                var text2 = jQuery(this).children('a').text();

                /* Append this option to our "select" */
                if (jQuery(this).is(".current-menu-item") && href2 != '#') {
                    jQuery(selectMenu).append('<option value="'+href2+'" selected> &nbsp;|-- '+text2+'</option>');
                } else if ( href2 == '#' ) {
                    jQuery(selectMenu).append('<option value="'+href2+'" disabled="disabled"> &nbsp;|-- '+text2+'</option>');
                } else {
                    jQuery(selectMenu).append('<option value="'+href2+'"> &nbsp;|-- '+text2+'</option>');
                }

                // if (jQuery(this).is(".current-menu-item")) {
                // jQuery(selectMenu).append('<option value="'+href2+'" class="select-current" selected>'+text2+'</option>');
                // } else {
                // jQuery(selectMenu).append('<option value="'+href2+'"> &nbsp;|-- '+text2+'</option>');
                // }

                /* Check for "children" and navigate for more options if they exist */
                if (jQuery(this).children('ul').length > 0) {
                    jQuery(this).children('ul').children('li').each(function() {

                        /* Get child-level link and text */
                        var href3 = jQuery(this).children('a').attr('href');
                        var text3 = jQuery(this).children('a').text();

                        /* Append this option to our "select" */
                        if (jQuery(this).is(".current-menu-item")) {
                            jQuery(selectMenu).append('<option value="'+href3+'" class="select-current" selected> &nbsp;&nbsp;&nbsp;&nbsp;|-- '+text3+'</option>');
                        } else {
                            jQuery(selectMenu).append('<option value="'+href3+'"> &nbsp;&nbsp;&nbsp;&nbsp;|-- '+text3+'</option>');
                        }

                    });
                }

            });
        }

    });

    /* When our select menu is changed, change the window location to match the value of the selected option. */
    jQuery(selectMenu).change(function() {
        location = this.options[this.selectedIndex].value;
    });
});
	
jQuery(document).ready(function($) {

// Remove links outline in IE 7
	$("a").attr("hideFocus", "true").css("outline", "none");

// Styled MultiSelect (listbox of checkboxes)
	if ($(".row").hasClass("field_multiselect")) {		
		$(".mutli_select").click (function() {			
			$(".cusel").removeClass("cuselOpen");
			$(".cusel-scroll-wrap").hide();
			$(this).parent().toggleClass("open");
			$(this).children('.mutli_select_box').css({"width": $(this).width()-3}).jScrollPane({
				showArrows: true, 
				mouseWheelSpeed: 15
			});
		});		
		$('body').click(function() {
			$(".field_multiselect").removeClass("open");
		});			
		$('.field_multiselect, .field_multiselect .select_row').click(function(event){
			event.stopPropagation();
		}); 
	}
	
// style Select, Radio, Checkbox
//	if ($("select").hasClass("select_styled")) {
//		var deviceAgent = navigator.userAgent.toLowerCase();
//		var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
//		if (agentID) {
//			cuSel({changedEl: ".select_styled", visRows: 8, scrollArrows: true});	 // Add arrows Up/Down for iPad/iPhone
//		} else {
//			cuSel({changedEl: ".select_styled", visRows: 8, scrollArrows: true});
//		}		
//	}
//	if ($("div,p").hasClass("input_styled")) {
//		$(".input_styled input").customInput();
//	}

jQuery(document).ready(function($) {
        jQuery('a[data-rel]').each(function() {
        jQuery(this).attr('rel', jQuery(this).data('rel'));
        });
        jQuery("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});
        });

// Placeholder for input
	if($('input').is('[placeholder]')) {
		$('input[placeholder], textarea[placeholder]').placeholder();
	}
// prettyPhoto lightbox, check if <a> has atrr data-rel and hide for Mobiles

// reload topmenu on Resize
	
// responsive megamenu			
	var screenRes = $(window).width();   
	
    if (screenRes < 750) {
		$(".dropdown li.mega-nav").removeClass("mega-nav");		
	} 
	if (screenRes > 750) {				
		mega_show();
		// animated elements
		$('#top_clouds').pan({fps: 20, speed: 0.5, dir: 'left', depth: 1});
    } 		
	
	function mega_show(){		
		jQuery('.dropdown li').hoverIntent({
			sensitivity: 5,
			interval: 50, 
			over: subm_show, 
			timeout: 0, 
			out: subm_hide
		});
	}
	function subm_show(){	
		if ($(this).hasClass("parent")) {
			$(this).addClass("parentHover");
		};		
		$(this).children("ul.submenu-1").fadeIn(50);		
	}
	function subm_hide(){ 
		$(this).removeClass("parentHover");
		$(this).children("ul.submenu-1").fadeOut(50);		
	}
	
	 
	
	$(".dropdown ul").parent("li").addClass("parent");
	$(".dropdown li:first-child, .pricing_box li:first-child, .sidebar .widget-container:first-child, .f_col .widget-container:first-child").addClass("first");
	$(".dropdown li:last-child, .pricing_box li:last-child, .widget_twitter .tweet_item:last-child, .sidebar .widget-container:last-child, .f_col .widget-container li:last-child").addClass("last");
	$(".dropdown li:only-child").removeClass("last").addClass("only");	
	$(".sidebar .current-menu-item, .sidebar .current-menu-ancestor").prev().addClass("current-prev");				
	
// tabs		
	if ($("ul").hasClass("tabs")) {		
		$("ul.tabs").tabs("> .tabcontent", {tabs: 'li', effect: 'fade'});	
	}
	if ($("ul").is(".tabs.linked")) {		
		$("ul.tabs").tabs("> .tabcontent", {effect: 'fade'});
	}
	
	var length = $('.staff_item').length;
	
	if(length % 3 == 1 )
	{
		jQuery('.staff_list .staff_item').slice(-1).css('background','none');
	}
	else if(length % 3 == 2)
	{
		jQuery('.staff_list .staff_item').slice(-2).css('background','none');
	}
	else if(length % 3 == 0)
	{
		jQuery('.staff_list .staff_item').slice(-3).css('background','none');
	}
	
	
// odd/even
	$(".boxed_list > .boxed_item:odd, .columns2 .article_item:odd").addClass("odd");
	$(".columns2 .article_item:nth-child(2)").addClass("second");
	$(".gallery .gallery_item:nth-child(2n), .staff_list .staff_item:nth-child(2n)").addClass("every_2nd"); // every 2nd
	$(".gallery .gallery_item:nth-child(3n)").addClass("every_3rd"); // every 3rd
	$(".staff_list .staff_item:nth-child(3n)").addClass("every_3rd"); // every 3rd
	$(".widget_recent_comments ul > li:even, .widget_recent_entries li:even, .widget_twitter .tweet_item:even, .widget_archive ul > li:even, .widget_categories ul > li:even, .widget_nav_menu ul > li:even, .widget_links ul > li:even, .widget_meta ul > li:even, .widget_pages ul > li:even, .offer_specification li:even").addClass("even");
	
	
// cols
	$(".row .col:first-child").addClass("alpha");
	$(".row .col:last-child").addClass("omega"); 	

// buttons	
	$(".btn, .post-share a, .btn-submit, .btn_custom, .tagcloud a, input[type='submit']").hover(function(){
		$(this).stop().animate({"opacity": 0.80});
	},function(){
		$(this).stop().animate({"opacity": 1});
	});	

// Smooth Scroling of ID anchors	
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');
 
  $('a[href*="#"].anchor').each(function() {
    $(this).click(function(event) {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target && $target.length != 0) {
        var targetOffset = $target.offset().top;
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
            location.hash = target;
          });
      }
    }
   });	
  });
 
  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }

	  
});