/**
 * Nietos AI Navigation JavaScript
 * Handles sticky header scroll effect
 */

(function() {
	'use strict';

	// Wait for DOM to be ready
	document.addEventListener('DOMContentLoaded', function() {
		initStickyHeader();
	});

	/**
	 * Initialize sticky header with scroll effects
	 */
	function initStickyHeader() {
		// Get the header element (try multiple selectors)
		const header = document.querySelector('body > .wp-site-blocks > .wp-block-group:first-child') ||
		               document.querySelector('body > .wp-site-blocks > header:first-child') ||
		               document.querySelector('.wp-block-template-part[class*="header"]');

		if (!header) {
			return;
		}

		let lastScroll = 0;
		const scrollThreshold = 50;

		// Scroll event listener
		window.addEventListener('scroll', function() {
			const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

			// Add 'scrolled' class when scrolled past threshold
			if (currentScroll > scrollThreshold) {
				header.classList.add('scrolled');
			} else {
				header.classList.remove('scrolled');
			}

			lastScroll = currentScroll;
		});
	}

})();
