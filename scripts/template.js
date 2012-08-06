// JavaScript Document
//Window resize scripts
//Setting the original banner image dimensions
var imgWidth = 912,
		imgHeight = 409,
		headerHeight = 108,
		footerHeight = 218,
		heightSubtract = headerHeight + footerHeight; //326 //has to top 866
		//alert(heightSubtract);
function sizeContent(){
	//alert(windowHeight);
	
	//Calculate global dimensions
	var windowWidth = $(window).width(),
			windowHeight = $(window).height(),
			bannerHeight = windowHeight-headerHeight-footerHeight-24,
			widthRatio = windowWidth / imgWidth,
			heightRatio = (windowHeight-heightSubtract) / imgHeight,
			widthDiff = heightRatio * imgWidth,
			heightDiff = widthRatio * imgHeight; //what the height should be according to the width

};


$(document).ready(function(){
	
	//Input clear for fields on focus
	$("input[type=text], textarea").focus(function(){
		if (this.value == this.defaultValue){  
            this.value = '';  
        }
	 });
	
	//jQuery styling	   
	$('table tbody tr:even').addClass('even');
	$('ul li:first-child, .item:first-child').addClass('first');
	$('ul li:last-child, .item:last-child').addClass('last');
	$('a[class=readmore]').hover(function(){
		$(this).stop().animate({
			'padding-left': '10px'
		}, 100, 'swing');
	}).mouseout(function(){
		$(this).stop().animate({
			'padding-left': '6px'
		}, 100, 'swing');
	});

	
	//Home banner
	$('#slideshow').bxSlider({
		mode: 'fade',
		infiniteLoop: true,
		auto: true,
		controls: false,
		pause: 4000,
		pager: true,
		autoHover: true
	});
	$(window).resize(sizeContent);

	//Home Product Scroller
	//$('div.bx-wrapper').css('background-color','#000');
	$('#slider1').bxSlider({
    	auto: true,
    	displaySlideQty: 4,
    	moveSlideQty: 2
  	});

	//FAQ Accordion
	$(function() {
		$( "#accordion" ).accordion({
			autoHeight: false,
			navigation: true
		});
	});


	//Dialog boxes
	$('a.popup').click(function() {
		var dialoglink = $(this).attr('href');
		$(dialoglink).dialog('open');
		return false;
	});
	//Declaring the containers that will pop up in the dialog box
	$('#watch-testimony').dialog({ autoOpen: false, modal:true, width: 580, show: 'fade' });
	$('#client-testimony').dialog({ autoOpen: false, modal:true, width: 580, show: 'fade' });
	$('#whitepapers-form').dialog({ autoOpen: false, modal:true, width: 580, show: 'fade' });
	$('#details-form').dialog({ autoOpen: false, modal:true, width: 580, show: 'fade' });

});