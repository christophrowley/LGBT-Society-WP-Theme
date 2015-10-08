window.addEventListener('load', function() {
	FastClick.attach(document.body);
}, false);

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('html').addClass( 'mobile' );
}

function committeeGridding() {
	cell_prefix = '#committee .cell';
	function resetGrid() {
		for( i=1; i<=12; i++ ) {
			$( cell_prefix ).removeClass( 'span-' + i );
			$( cell_prefix ).removeClass( 'col-' + i );
		}
		$( cell_prefix + ' .member' ).removeClass( 'slide-right' );
		$( cell_prefix + ' .member' ).removeClass( 'slide-left' );
		$( cell_prefix ).removeClass( 'new-row' );
		$( cell_prefix ).addClass( 'keep' );
		$( cell_prefix ).removeClass( 'single-column' );
	}

	if ( $(window).width() >= 1000 ) {
		resetGrid();
		$( cell_prefix ).addClass( 'span-3' );
		$( cell_prefix + ':nth-child(1)' ).addClass( 'col-1' );
		$( cell_prefix + ':nth-child(2)' ).addClass( 'col-4' );
		$( cell_prefix + ':nth-child(3)' ).addClass( 'col-7' );
		$( cell_prefix + ':nth-child(4)' ).addClass( 'col-10' );
	} else if ( $(window).width() < 1000 && $(window).width() >= 540 ) {
		resetGrid();
		$( cell_prefix ).addClass( 'span-6' );
		$( cell_prefix + ':nth-child(1)' ).addClass( 'col-1' );
		$( cell_prefix + ':nth-child(2)' ).addClass( 'col-7' );
		$( cell_prefix + ':nth-child(3)' ).addClass( 'col-1' );
		$( cell_prefix + ':nth-child(4)' ).addClass( 'col-7' );
		$( cell_prefix + ':nth-child(3)' ).addClass( 'new-row' );
		$( cell_prefix + ':nth-child(1) .member' ).addClass( 'slide-right' );
		$( cell_prefix + ':nth-child(2) .member' ).addClass( 'slide-left' );
		$( cell_prefix + ':nth-child(3) .member' ).addClass( 'slide-right' );
		$( cell_prefix + ':nth-child(4) .member' ).addClass( 'slide-left' );
	} else if ( $(window).width() < 540 ) {
		resetGrid();
		$( cell_prefix ).removeClass( 'keep' );
		$( cell_prefix ).addClass( 'single-column' );
	}
}

function bannerSize() {
	bannerHeight = $(window).height() - $('nav').outerHeight();
	if ( !$( 'html' ).hasClass( 'mobile' ) && $(window).height() > 574 && $(window).width() > 599 ) {
		var container_margin = 0.5 * ( bannerHeight - $( '.index.banner .container' ).height() );
		$( '.index.banner' ).outerHeight( bannerHeight );
		$( '.index.banner .container ').css( 'margin-top', container_margin - 64 );
		$( '.index.banner .container ').css( 'margin-bottom', container_margin );
	} else {
		$( '.index.banner' ).attr( 'style', '' );
		$( '.index.banner .container' ).attr( 'style', '' );
	}
	$( '.not-found.banner ').outerHeight( bannerHeight - $('footer').outerHeight() );
}

function handleJumpLinks() {
	$( '.jump-link' ).click( function(e) {
		e.preventDefault();
		var section_id = $(this).attr("href");		
		var nav_height = $('nav').outerHeight();
		var section_height = $(section_id).outerHeight();
		var window_height = $(window).outerHeight();

		if( section_height < ( window_height - nav_height ) ) {
			var top_offset = 0.5 * ( window_height - section_height + nav_height );
			scroll_psn = $(section_id).offset().top - top_offset ;
		} else {
			scroll_psn = $(section_id).offset().top - nav_height;
		}
		$("html, body").animate( { 
			scrollTop : scroll_psn
		},1000);
	});
}

function handleStepLinks() {
	$('#what-we-offer .step').click( function(e) {
		e.preventDefault();
		var activate_class = $(this).attr('href');

		$( '#what-we-offer .step' ).removeClass( 'active' );
		$( '#what-we-offer .step.' + activate_class ).addClass( 'active' );
		$( '#what-we-offer .tbox-white article' ).removeClass( 'active' );
		$( '#what-we-offer .tbox-white article.' + activate_class ).addClass( 'active' );
	});
}

function emailTrayDropdown() {
	$( '#email-button' ).click( function(e) {
		e.preventDefault();
		if ( $( '.email-tray' ).hasClass( 'active' ) ) {
			$( '.email-tray' ).removeClass( 'active' );
		} else {
			$( '.email-tray' ).addClass( 'active' );
		}
	});
}

function tagsDropdown() {
	$( '#blog .tags h2 ' ).click( function(e) {
		if ( $( '#blog .tags ' ).hasClass( 'active' ) ) {
			$( '#blog .tags ' ).removeClass( 'active' );
		} else {
			$( '#blog .tags ' ).addClass( 'active' );
		}
	});
}

function handleMapGuard() {
	$( '#map-click-guard' ).click( function(e) {
		$( '#map-click-guard' ).css( 'display', 'none' );
	});
}

function fadeBannerHeading() {
	if( $(window).scrollTop() > 1 ) {
		$( '.banner h1' ).addClass( 'fade-out' );
	} else {
		$( '.banner h1' ).removeClass( 'fade-out' );
	}
}

function blogHeight() {
	var min_section_height = $(window).height() - $('nav').height() - $('footer').height() - $('.banner').outerHeight();
	console.log( min_section_height );
	console.log( $('#blog').outerHeight() );
	if ( $('#blog').outerHeight() < min_section_height ) {
		console.log( 'if triggered' );
		$('#blog').outerHeight( min_section_height );
	} else {
		$('#blog').attr( 'style', '' );
	}
}



$(document).ready( function() {

	committeeGridding();
	bannerSize();
	handleJumpLinks();
	handleStepLinks();
	emailTrayDropdown();
	tagsDropdown();
	handleMapGuard();
	blogHeight();

	$(window).resize( function() {
		committeeGridding();
		bannerSize();
		blogHeight();
	});

	$(window).scroll( function() {
		fadeBannerHeading();
	});

});