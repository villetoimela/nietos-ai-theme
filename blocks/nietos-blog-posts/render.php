<?php
/**
 * Nietos Blog Posts Block Template
 *
 * @param array    $attributes Block attributes.
 * @param string   $content    Block default content.
 * @param WP_Block $block      Block instance.
 */

// Get block attributes with defaults
$posts_per_page = isset($attributes['postsPerPage']) ? absint($attributes['postsPerPage']) : 6;
$selected_categories = isset($attributes['selectedCategories']) ? $attributes['selectedCategories'] : [];
$show_featured_image = isset($attributes['showFeaturedImage']) ? $attributes['showFeaturedImage'] : true;
$show_excerpt = isset($attributes['showExcerpt']) ? $attributes['showExcerpt'] : true;
$show_categories = isset($attributes['showCategories']) ? $attributes['showCategories'] : true;
$show_date = isset($attributes['showDate']) ? $attributes['showDate'] : true;
$columns = isset($attributes['columns']) ? absint($attributes['columns']) : 3;

// Get all categories
$all_categories = get_categories([
	'orderby' => 'name',
	'order'   => 'ASC',
	'hide_empty' => true
]);

// Build query arguments
$args = [
	'post_type'      => 'post',
	'posts_per_page' => $posts_per_page,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC'
];

// Add category filter if categories are selected
if (!empty($selected_categories)) {
	$args['category__in'] = $selected_categories;
}

// Query posts
$query = new WP_Query($args);

// Generate unique ID for this block instance
$block_id = 'nietos-blog-posts-' . wp_unique_id();
?>

<div class="nietos-blog-posts-wrapper" id="<?php echo esc_attr($block_id); ?>" data-columns="<?php echo esc_attr($columns); ?>">

	<?php if (!empty($all_categories) && count($all_categories) > 1) : ?>
		<!-- Category Filter Buttons -->
		<div class="nietos-blog-filter">
			<button class="nietos-filter-btn active" data-category="all">
				<?php esc_html_e('All', 'twentytwentyfive'); ?>
			</button>
			<?php foreach ($all_categories as $category) : ?>
				<button class="nietos-filter-btn" data-category="<?php echo esc_attr($category->term_id); ?>">
					<?php echo esc_html($category->name); ?>
				</button>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<!-- Posts Grid -->
	<div class="nietos-blog-grid nietos-blog-grid-<?php echo esc_attr($columns); ?>">
		<?php if ($query->have_posts()) : ?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php
				$post_categories = get_the_category();
				$category_ids = array_map(function($cat) {
					return $cat->term_id;
				}, $post_categories);
				$category_data = implode(',', $category_ids);
				?>

				<article class="nietos-blog-card" data-categories="<?php echo esc_attr($category_data); ?>">

					<?php if ($show_featured_image && has_post_thumbnail()) : ?>
						<div class="nietos-blog-card-image">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('large'); ?>
							</a>
						</div>
					<?php endif; ?>

					<div class="nietos-blog-card-content">

						<h3 class="nietos-blog-card-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>

						<?php if ($show_date) : ?>
							<time class="nietos-blog-card-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
								<?php echo esc_html(get_the_date()); ?>
							</time>
						<?php endif; ?>

						<?php if ($show_excerpt) : ?>
							<div class="nietos-blog-card-excerpt">
								<?php echo wp_kses_post(wp_trim_words(get_the_excerpt(), 20, '...')); ?>
							</div>
						<?php endif; ?>

						<a href="<?php the_permalink(); ?>" class="nietos-blog-card-link">
							<?php esc_html_e('Read more', 'twentytwentyfive'); ?>
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</article>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p class="nietos-blog-empty">
				<?php esc_html_e('No articles to display.', 'twentytwentyfive'); ?>
			</p>
		<?php endif; ?>
	</div>

</div>
