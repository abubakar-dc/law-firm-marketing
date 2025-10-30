/**
 * Sticky Header
 * Adds a class to header on scroll
 */
import magnificPopup from '../vendors/jquery-magnificpopup';
import organicTabs from '../vendors/organic-tab';
import slick from '../vendors/slick.min';
jQuery( document ).on( 'scroll', function() {
	if ( jQuery( document ).scrollTop() > 0 ) {
		jQuery( 'header, body' ).addClass( 'shrink' );
	} else {
		jQuery( 'header, body' ).removeClass( 'shrink' );
	}
} );

jQuery( function() {
	/**
	 * Header Wrapper Height Calculation for Navigation Overlay
	 */

	if ( jQuery( '.header-wrapper' ).length > 0 ) {
		function updateHeaderHeight() {
			jQuery( '.header-wrapper' ).each( function() {
				jQuery( this ).css( '--lfm_header-wrapper-default', jQuery( this ).outerHeight() + 'px' );
			} );
		}
		updateHeaderHeight();
		jQuery( window ).resize( updateHeaderHeight );
	}

	/**
	 * Toggle menu for mobile
	 */
	const navOverlay = jQuery( '.nav-overlay' );
	const htmlBody = jQuery( 'html, body' );

	jQuery( '.menu-btn' ).on( 'click', function() {
		jQuery( this ).toggleClass( 'active' );
		navOverlay.toggleClass( 'open' );
		htmlBody.toggleClass( 'no-overflow' );
		jQuery( '.header-nav ul li.active' ).removeClass( 'active' );
		jQuery( '.header-nav ul.sub-menu' ).slideUp();
	} );

	/**
	 * Add span tag to multi-level accordion menu for mobile menus
	 */

	jQuery( '.menu-item-has-children > a:first-child' ).each( function() {
		jQuery( this ).after( '<span class="submenu-icon"></span>' );
	} );

	/**
	 * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	 */

	jQuery( '.header-nav' ).on( 'click', '.submenu-icon', function() {
		const parentLi = jQuery( this ).closest( 'li' );

		parentLi.siblings( '.active' )
			.removeClass( 'active' )
			.find( 'ul' ).slideUp();

		parentLi.toggleClass( 'active' ).find( 'ul' ).stop( true, true ).slideToggle();
		parentLi.parents( 'ul' ).toggleClass( 'disabled-menu', parentLi.hasClass( 'active' ) );
	} );

	/**
	 *  Accessibility for Simple menu & Mega menu
	 */
	jQuery( '.menu-item-has-children > a' ).on( 'focus blur', function( event ) {
		jQuery( this ).siblings( '.sub-menu, .mega-menu' ).toggleClass( 'focused', event.type === 'focus' );
	} );

	jQuery( '.sub-menu a, .mega-menu a' ).on( 'focus blur', function( event ) {
		jQuery( this ).closest( '.sub-menu, .mega-menu' ).toggleClass( 'focused', event.type === 'focus' );
	} );

	/**
	 * Script for Accessibility of html Tags
	 */
	jQuery( 'h1, h2, h3, h4, h5, h6,p,li,blockquote,cite,strong,dt,dd,th,td,b,i,u,s,em,small,sup,del,ins,abbr,mark,details,pre,kbd,samp,var,address,code,q,figure,figcaption,caption,.top-bar-text,.top-bar-cross,.copy-right,.post-author-img,.post-author-name,.post-meta-date,.post-date' ).each( function() {
		jQuery( this ).attr( {
			tabindex: 0,
		} );
	} );

	jQuery( '.header-nav li, .blog-nav li, .footer-nav li, .legal-nav li' ).each( function() {
		const link = jQuery( this ).find( 'a' );
		if ( link.length > 0 ) {
			jQuery( this ).removeAttr( 'tabindex' );
		} else {
			jQuery( this ).attr( 'tabindex', '0' );
		}
	} );

	jQuery( 'form p' ).each( function() {
		jQuery( this ).removeAttr( 'tabindex' );
	} );

	jQuery( 'a,button:not([href])' ).each( function() {
		jQuery( this ).attr( {
			tabindex: 0,
		} );
	} );

	setTimeout( () => {
		jQuery( '#daextlwcnf-cookie-notice-button-1' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-notice-button-2' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-settings-button-1' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-settings-button-2' ).attr( 'role', 'button' );
	}, 500 );

	autosize();

	function autosize() {
		const text = jQuery( 'textarea' );

		text.each( function() {
			jQuery( this ).attr( 'rows', 5 );
			resize( jQuery( this ) );
		} );

		text.on( 'input', function() {
			resize( jQuery( this ) );
		} );

		function resize( $text ) {
			$text.css( 'min-height', 'auto' );
			$text.css( 'min-height', $text[ 0 ].scrollHeight + 'px' );
		}
	}

	/**
	 * Magnific Popup for Video Lightbox
	 */

	jQuery( '.hero-video-popup,.video-popup' ).magnificPopup( {
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false,
	} );

	jQuery( '.text-slider-reg' ).slick( {
		variableWidth: true,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 0,
		speed: 8000,
		cssEase: 'linear',
		arrows: false,
		pauseOnHover: false,
		swipe: false,
		pauseOnHover: false,
	} );

	jQuery( '.text-slider-rev' ).slick( {
		variableWidth: true,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 0,
		speed: 8000,
		cssEase: 'linear',
		arrows: false,
		pauseOnHover: false,
		swipe: false,
	} );

	if ( jQuery( '.stat-number' ).length > 0 ) {
		const $statNumbers = jQuery( '.stat-number' );

		function animateCounter( $element ) {
			const text = $element.text().trim();
			const numericText = text.match( /[0-9]+(?:\.[0-9]+)?/ )[ 0 ];
			const prefix = text.startsWith( '#' )
				? '#'
				: text.replace( numericText, '' ).trim().startsWith( '#' )
					? '#'
					: '';
			const suffix = text.replace( prefix + numericText, '' ).trim();
			const targetValue = parseFloat( numericText );
			if ( isNaN( targetValue ) ) {
				return;
			}

			const startValue = 0;
			const duration = 1500;
			const totalFrames = duration / ( 1000 / 60 );
			const increment = ( targetValue - startValue ) / totalFrames;
			let animatedValue = startValue;

			const decimalPlaces = numericText.includes( '.' )
				? numericText.split( '.' )[ 1 ].length
				: 0;

			const updateCounter = () => {
				animatedValue += increment;
				if ( animatedValue >= targetValue ) {
					$element.text(
						prefix + targetValue.toFixed( decimalPlaces ) + suffix,
					);
				} else {
					$element.text(
						prefix + animatedValue.toFixed( decimalPlaces ) + suffix,
					);
					requestAnimationFrame( updateCounter );
				}
			};
			requestAnimationFrame( updateCounter );
		}

		const isInViewport = ( element ) => {
			const rect = element[ 0 ].getBoundingClientRect();
			return (
				rect.bottom >= 0 &&
				rect.top <=
					( window.innerHeight ||
						document.documentElement.clientHeight )
			);
		};

		jQuery( window )
			.on( 'scroll resize', () => {
				$statNumbers.each( function() {
					const $this = jQuery( this );
					if ( isInViewport( $this ) && ! $this.hasClass( 'animated' ) ) {
						animateCounter( $this );
						$this.addClass( 'animated' );
					}
				} );
			} )
			.trigger( 'scroll' );
	}

	jQuery( document ).on( 'click', '.faq-head', function() {
		jQuery( this ).hasClass( 'active' )
			? ( jQuery( '.faq-head' ).removeClass( 'active' ),
			jQuery( this ).removeClass( 'active' ),
			jQuery( this ).parent().find( '.faq-content' ).slideUp( 400 ) )
			: ( jQuery( '.faq-head' ).removeClass( 'active' ),
			jQuery( this ).addClass( 'active' ),
			jQuery( '.faq-content' ).slideUp(),
			jQuery( this ).parent().find( '.faq-content' ).slideDown( 400 ) );
	} );
} );

