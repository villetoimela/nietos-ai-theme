<?php
/**
 * Twenty Twenty-Five functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'twentytwentyfive_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'twentytwentyfive_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'twentytwentyfive_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'twentytwentyfive_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'twentytwentyfive_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_enqueue_styles() {
		wp_enqueue_style(
			'twentytwentyfive-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_enqueue_styles' );

// Enqueues navigation.js for sticky header effect.
if ( ! function_exists( 'nietos_enqueue_navigation_script' ) ) :
	/**
	 * Enqueues navigation.js for Nietos AI sticky header.
	 *
	 * @since Nietos AI 1.0
	 *
	 * @return void
	 */
	function nietos_enqueue_navigation_script() {
		wp_enqueue_script(
			'nietos-navigation',
			get_theme_file_uri( 'assets/js/navigation.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'nietos_enqueue_navigation_script' );

// Registers custom block styles.
if ( ! function_exists( 'twentytwentyfive_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfive' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'twentytwentyfive_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'twentytwentyfive_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfive_page',
			array(
				'label'       => __( 'Pages', 'twentytwentyfive' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfive' ),
			)
		);

		register_block_pattern_category(
			'twentytwentyfive_post-format',
			array(
				'label'       => __( 'Post formats', 'twentytwentyfive' ),
				'description' => __( 'A collection of post format patterns.', 'twentytwentyfive' ),
			)
		);
	}
endif;
add_action( 'init', 'twentytwentyfive_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'twentytwentyfive_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_register_block_bindings() {
		register_block_bindings_source(
			'twentytwentyfive/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'twentytwentyfive' ),
				'get_value_callback' => 'twentytwentyfive_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'twentytwentyfive_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'twentytwentyfive_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function twentytwentyfive_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;

// Registers Nietos custom blocks.
if ( ! function_exists( 'nietos_register_blocks' ) ) :
	/**
	 * Registers Nietos AI custom blocks.
	 *
	 * @since Nietos AI 1.0
	 *
	 * @return void
	 */
	function nietos_register_blocks() {
		// Register Nietos Blog Posts block
		register_block_type( get_theme_file_path( 'blocks/nietos-blog-posts' ) );
	}
endif;
add_action( 'init', 'nietos_register_blocks' );

// Enqueues frontend JavaScript for Nietos blocks.
if ( ! function_exists( 'nietos_enqueue_block_scripts' ) ) :
	/**
	 * Enqueues frontend scripts for Nietos custom blocks.
	 *
	 * @since Nietos AI 1.0
	 *
	 * @return void
	 */
	function nietos_enqueue_block_scripts() {
		// Enqueue filter.js for blog posts block
		wp_enqueue_script(
			'nietos-blog-posts-filter',
			get_theme_file_uri( 'blocks/nietos-blog-posts/filter.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'nietos_enqueue_block_scripts' );

// Adds FAQ Schema markup to FAQ pages.
if ( ! function_exists( 'nietos_add_faq_schema' ) ) :
	/**
	 * Generates and adds FAQ Schema (JSON-LD) markup to pages containing FAQ content.
	 * This helps Google display rich snippets with FAQ accordion in search results.
	 *
	 * @since Nietos AI 1.0
	 *
	 * @return void
	 */
	function nietos_add_faq_schema() {
		// Only run on singular pages
		if ( ! is_singular() ) {
			return;
		}

		global $post;

		// Get post content
		$content = $post->post_content;

		// Check if page contains FAQ-like structure (headings followed by paragraphs)
		// This works with standard Gutenberg blocks
		$faq_items = array();

		// Parse blocks to find FAQ structure
		$blocks = parse_blocks( $content );

		$current_question = '';
		$current_answer = '';

		foreach ( $blocks as $block ) {
			// Look for heading blocks (questions)
			if ( 'core/heading' === $block['blockName'] && ! empty( $block['innerHTML'] ) ) {
				// Save previous FAQ item if exists
				if ( $current_question && $current_answer ) {
					$faq_items[] = array(
						'question' => $current_question,
						'answer'   => $current_answer,
					);
				}

				// Extract question text
				$current_question = wp_strip_all_tags( $block['innerHTML'] );
				$current_answer = '';
			}

			// Look for paragraph blocks (answers)
			if ( 'core/paragraph' === $block['blockName'] && ! empty( $block['innerHTML'] ) && $current_question ) {
				$answer_text = wp_strip_all_tags( $block['innerHTML'] );
				$current_answer .= ( $current_answer ? ' ' : '' ) . $answer_text;
			}

			// Handle nested blocks (like columns, groups)
			if ( ! empty( $block['innerBlocks'] ) ) {
				nietos_parse_faq_blocks_recursive( $block['innerBlocks'], $current_question, $current_answer, $faq_items );
			}
		}

		// Add last FAQ item
		if ( $current_question && $current_answer ) {
			$faq_items[] = array(
				'question' => $current_question,
				'answer'   => $current_answer,
			);
		}

		// Only add schema if we found FAQ items
		if ( empty( $faq_items ) ) {
			return;
		}

		// Build Schema markup
		$schema = array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'mainEntity' => array(),
		);

		foreach ( $faq_items as $item ) {
			$schema['mainEntity'][] = array(
				'@type'          => 'Question',
				'name'           => $item['question'],
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $item['answer'],
				),
			);
		}

		// Output schema as JSON-LD
		echo '<script type="application/ld+json">' . "\n";
		echo wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
		echo "\n" . '</script>' . "\n";
	}
endif;

// Helper function to recursively parse nested blocks for FAQ content.
if ( ! function_exists( 'nietos_parse_faq_blocks_recursive' ) ) :
	/**
	 * Recursively parses nested Gutenberg blocks to find FAQ content.
	 *
	 * @since Nietos AI 1.0
	 *
	 * @param array  $blocks            Array of blocks to parse.
	 * @param string &$current_question Current question being processed (by reference).
	 * @param string &$current_answer   Current answer being processed (by reference).
	 * @param array  &$faq_items        Array of FAQ items found (by reference).
	 * @return void
	 */
	function nietos_parse_faq_blocks_recursive( $blocks, &$current_question, &$current_answer, &$faq_items ) {
		foreach ( $blocks as $block ) {
			// Look for heading blocks (questions)
			if ( 'core/heading' === $block['blockName'] && ! empty( $block['innerHTML'] ) ) {
				// Save previous FAQ item if exists
				if ( $current_question && $current_answer ) {
					$faq_items[] = array(
						'question' => $current_question,
						'answer'   => $current_answer,
					);
				}

				// Extract question text
				$current_question = wp_strip_all_tags( $block['innerHTML'] );
				$current_answer = '';
			}

			// Look for paragraph blocks (answers)
			if ( 'core/paragraph' === $block['blockName'] && ! empty( $block['innerHTML'] ) && $current_question ) {
				$answer_text = wp_strip_all_tags( $block['innerHTML'] );
				$current_answer .= ( $current_answer ? ' ' : '' ) . $answer_text;
			}

			// Recurse into nested blocks
			if ( ! empty( $block['innerBlocks'] ) ) {
				nietos_parse_faq_blocks_recursive( $block['innerBlocks'], $current_question, $current_answer, $faq_items );
			}
		}
	}
endif;
add_action( 'wp_head', 'nietos_add_faq_schema' );
