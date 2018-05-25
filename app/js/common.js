$(function() {

	"use strict";

	// jquery ui custom select
	$('.custom-select-cities').selectmenu();
	$('.custom-select-form').selectmenu();
	// resize fix
	$(window).resize(function() {
		$('[role="combobox"][aria-expanded="true"]').each(function() {
			$(this).prev().selectmenu("close").selectmenu("open");
		});
	});

	// jquery custom scroll bar
	$('.ui-selectmenu-menu').customScroll();

	// adding bg color to header for better display over light sections
	$(document).ready(function() {
		if($(window).width() < 1199) {

			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('.header').addClass('background');
				} else {
					$('.header').removeClass('background');
				}
			});
		}

	});


	$(".intro__scroll-down").click(function () {
			var top = $('.price').offset().top;
		$('body,html').animate({scrollTop: top}, 1000);
	});


	// Scroll Animation
	$(window).scroll(function(){
		if ($(window).scrollTop() > $('.animate').offset().top - $(window).height() + 300) {
			$('.animate').addClass('animated');
		}
	});

	// Mobile menu
	$(".nav").click(function() {
		$(this).toggleClass("nav-expanded");
	});

	// show/hide contacts info by clicking on contacts icon
	$('#js-info-toggle').click(function() {
		$('.header__contacts').slideToggle();
	});

	// change color of text in search__type block depending on the checkbox position
	$('#rounded-label').click(function() {
		$('.price__search-type').toggleClass('price__search-type--active');

	});



	// quantity plus minus
	$(document).on('click', '.price__result-quantity .minus', function(){
		var $_inp = $(this).parent().find('input');
		$_inp.val( parseInt( $_inp.val() ) - 1 );
		$_inp.trigger('propertychange');
		return false;
	});
	$(document).on('click', '.price__result-quantity .plus', function(){
		var $_inp = $(this).parent().find('input');
		$_inp.val( parseInt( $_inp.val() ) + 1 );
		$_inp.trigger('propertychange');
		return false;
	});
	$('.price__result-quantity input').bind('input propertychange', function () {
		var $this = $(this);
		$this.val( $this.val().replace(/[^0-9]/gim, '') );
		if ( $this.val().length == 0 || parseInt( $this.val() ) <= 0 )
		$this.val(1);
	});


	// drag and drop area
	var $fileInput = $('.price__result-files-input');
	var $droparea = $('.price__result-files');
	// highlight drag area
	$fileInput.on('dragenter click', function() {
		$droparea.addClass('is-active');
	});
	// back to normal state
	$fileInput.on('dragleave blur drop', function() {
		$droparea.removeClass('is-active');
	});
	// change inner text
	$fileInput.on('change', function() {
		var filesCount = $(this)[0].files.length;
		var $textContainer = $('.file-msg');

		if (filesCount === 1) {
			// if single file is selected, show file name
			var fileName = $(this).val().split('\\').pop();
			$textContainer.text(fileName);
		} else {
			// otherwise show number of files
			$textContainer.text(filesCount + ' файла(ов) выбрано');
		}
	});


	// edit interaction with jquery ui custom select and custom scrollbar
	$('.ui-selectmenu-button').click(function(){
		var index = $(this).attr("id").substring(6,7);

		$('.ui-menu').each(function(i, el) {

			if ( $(el).attr("id").substring(6,7) == index) {

				setTimeout(function(){
					$(el).closest('.custom-scroll_container').find('.custom-scroll_bar-y').css('opacity', '0.8');
				}, 300)

			}

		});

	});


});
