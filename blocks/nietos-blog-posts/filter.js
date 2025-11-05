/**
 * Nietos Blog Posts - Category Filter
 * Frontend JavaScript for category filtering with smooth animations
 */

document.addEventListener('DOMContentLoaded', () => {
	const blocks = document.querySelectorAll('.nietos-blog-posts-wrapper');

	blocks.forEach((block) => {
		const filterButtons = block.querySelectorAll('.nietos-filter-btn');
		const cards = block.querySelectorAll('.nietos-blog-card');

		filterButtons.forEach((button) => {
			button.addEventListener('click', () => {
				const selectedCategory = button.dataset.category;

				// Update active button state
				filterButtons.forEach((btn) => btn.classList.remove('active'));
				button.classList.add('active');

				// Filter cards with animation
				cards.forEach((card) => {
					const cardCategories = card.dataset.categories.split(',');
					const shouldShow = selectedCategory === 'all' || cardCategories.includes(selectedCategory);

					if (shouldShow) {
						// Show card with fade-in animation
						card.style.display = 'flex';
						// Force reflow for animation
						void card.offsetWidth;
						card.classList.add('nietos-card-visible');
					} else {
						// Hide card with fade-out animation
						card.classList.remove('nietos-card-visible');
						// Wait for animation to complete before hiding
						setTimeout(() => {
							if (!card.classList.contains('nietos-card-visible')) {
								card.style.display = 'none';
							}
						}, 300);
					}
				});

				// Adjust grid layout after filtering
				setTimeout(() => {
					adjustGridLayout(block);
				}, 50);
			});
		});

		// Initialize all cards as visible
		cards.forEach((card) => {
			card.classList.add('nietos-card-visible');
		});
	});

	/**
	 * Adjust grid layout based on visible cards
	 */
	function adjustGridLayout(block) {
		const grid = block.querySelector('.nietos-blog-grid');
		const visibleCards = Array.from(grid.querySelectorAll('.nietos-blog-card.nietos-card-visible'));

		grid.classList.add('nietos-grid-animating');

		setTimeout(() => {
			grid.classList.remove('nietos-grid-animating');
		}, 300);
	}
});
