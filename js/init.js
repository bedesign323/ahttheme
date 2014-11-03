Drupal.behaviors.init = {
	attach: function (context, settings) {
		
		var win = jQuery(window);
		var doc = jQuery(document);
		var win_w = win.width();
		var win_h = win.height();
		var main_nav = jQuery('#main-nav');
		var extras_nav_holder = jQuery('#extras-nav-holder');
		var main_nav_holder = jQuery('#main-nav-holder');



		// Sidebar control
		jQuery('#side-control, .search-toggle, #main-overlay').once().click(function(){
			jQuery('body').toggleClass('side-closed');
			jQuery('body').toggleClass('side-opened');
			
			//jQuery('#edit-search-block-form--2').focus();
			setSideCookie();
		});

		function setSideCookie(){
			if(jQuery('body').hasClass('side-closed')){
				jQuery.cookie('side-closed', 'true');
			}else{
				jQuery.cookie('side-closed', 'false');
			}

			console.log(jQuery.cookie('side-closed'));
		}

		function checkSideCookie(){
			if(jQuery.cookie('side-closed') == 'true'){
				jQuery('body').addClass('side-closed');
			}
		}

		checkSideCookie();


		// Body images
		jQuery('.post-image, .image-half-left, .image-half-right').parent().addClass('image-holder');

		// Nav style tweak
		jQuery('.fancy-sep').parent().addClass('fancy-sep-parent');

		// Comments
		jQuery('.comment-form-holder h2').once().after('<div class="btn-big"><a href="#">+ add comment</a></div>');
		jQuery('.comment-form-holder .btn-big').once().click(function(){
			jQuery('.comment-form-holder form').slideToggle();
			return false;
		});

		// Watch scroll
		var windowScroll = win.scrollTop();

		jQuery(window).scroll(function(event) {
			windowScroll = win.scrollTop();

			navPos();
		});

		function navPos(){
			var nav_top = 60 - windowScroll;
			if(nav_top < 0 || win_w < 1000){
				nav_top = 0;
			}
			jQuery('#main-nav').css({'top' : nav_top});
		}

		jQuery('.menu-toggle').once().click(function(){
			jQuery('#main-nav .inner-nav').slideToggle(800);
			return false;
		});


		jQuery(window).resize(function(){
			winResize();
		});

		function winResize(){
			win_w = win.width();

			if(win_w < 1000 && !jQuery('body').hasClass('shrank')){
				jQuery('body').addClass('shrank').addClass('side-closed').removeClass('side-opened');
			}else if(win_w > 1000 && jQuery('body').hasClass('shrank') && jQuery.cookie('side-closed') != 'true'){
				jQuery('body').removeClass('shrank').removeClass('side-closed').addClass('side-opened');
			}

			if(win_w < 1000){
				addNavToExtras();
			}else{
				addNavToMain();
			}
		}

		function addNavToExtras(){
			main_nav.appendTo('#extras-nav-holder');
		}

		function addNavToMain(){
			main_nav.appendTo('#main-nav-holder');
		}

		winResize();

	}
}

// Drupal.behaviors.scroll = {
// 	attach: function (context, settings) {

// 		jQuery('#extras .inner').once().mCustomScrollbar({
// 			'scrollInertia' : 0,
// 			'autoHideScrollbar' : true,
// 		});
// 	}
// }



Drupal.behaviors.pinterest = {
	attach: function (context, settings) {
		//jQuery('.service-links ul').append('<li><a href="javascript:pinIt();" class="pinterest"></a>');
	}
}

// function pinIt(){
//   var e = document.createElement('script');
//   e.setAttribute('type','text/javascript');
//   e.setAttribute('charset','UTF-8');
//   e.setAttribute('src','https://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);
//   document.body.appendChild(e);
// }


Drupal.behaviors.icheck = {
	attach: function (context, settings) {
		jQuery('input').iCheck({
	    checkboxClass: 'icheckbox_flat-yellow',
	    radioClass: 'iradio_flat-yellow',
	    increaseArea: '20%' // optional
	  });
	}
}