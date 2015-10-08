/*
 * 	File:		panelio.js
 * 	Author: 	Pug Digital Media (hello@madebypug.com)
 * 	Email:		hello@madebypug.com
 * 	Date:		May 2014
 * 	License:	MIT Open Source (https://github.com/MadeByPug/Panels.io/blob/master/LICENSE.md)
 */

$body 	   	= 	$("body");
$container 	= 	$("#container");
$side_pane 	= 	$(".side-pane");


//	Set initial panel state to 'closed'
	$(document).ready(function(){
		panelState("closed","");
		inputControl();
		$container.css({"min-height":$(window).outerHeight()+"px"});
		$(window).resize(function(){
			$container.css({"min-height":$(window).outerHeight()+"px"});
		});
	});

//	Allow panel to close on pressing 'escape' key
	function inputControl() {
		$(this).keyup(function(e) {
			switch (e.keyCode) {
				case  27:
				panelClose();
				break;
			}	
		});
	}

//	Open or close panel on clicking href 
	$("a[href^='#panel-open-']").on("click", function(e){
		e.preventDefault();	
		if ( $body.hasClass('open') ) {
			panelClose();
		} else {
			if ( $(this).attr("href") == "#panel-open-right" ) {
				panelOpen('right');
			} else if ( $(this).attr("href") == "#panel-open-left" ) {
				panelOpen('left');
			}
		}
	});

//	Close panel by clicking main content or panel link
	$("#container, .left a").on('click', function() {
		if ( $body.hasClass('open') ) {
			panelClose();
		}
	});

//	Listen for completion of CSS transitions and update status
	$("#container").on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd transitionEnd", function(){
		if ( ( $body.hasClass("active-left") || $body.hasClass("active-right") ) && !$body.hasClass("closing") ) {
			panelState("open","");
		} else {
			panelState("closed","");
		}
	});
	
//	Update panel status
	function panelState(state,dir) {
		if ( dir != "" )
			dir = " active-"+dir;
		if ( state == "closed" ) {
			$side_pane.scrollTop(0);
			$body.removeClass("active-left active-right");
		}
		$body.removeClass("open closed opening closing").addClass(state+dir);
	}

//	Open panel
	function panelOpen(side) {
		if ( side == 'left' ) {
			panelState("opening","left");
		} else if ( side == 'right' ) {
			panelState("opening","right");
		}
	}

//	Close panel
	function panelClose() {
		panelState("closing","");
	}
	