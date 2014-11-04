<?php
/**
 * WPMovieLibrary Config Shortcodes definition
 *
 * @package   WPMovieLibrary
 * @author    Charlie MERLAND <charlie@caercam.org>
 * @license   GPL-3.0
 * @link      http://www.caercam.org/
 * @copyright 2014 Charlie MERLAND
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) )
	wp_die();

$wpmoly_shortcodes = array(

	'movie_grid' => array(
		'atts' => array(
			'menu' => array(
				'default' => true,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			),
			'number' => array(
				'default' => -1,
				'values'  => null,
				'filter'  => 'intval'
			),
			'columns' => array(
				'default' => 4,
				'values'  => null,
				'filter'  => 'intval'
			),
			'title' => array(
				'default' => false,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			),
			'genre' => array(
				'default' => false,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			),
			'rating' => array(
				'default' => false,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			)
		),
		'content'  => null,
		'callback' => 'movie_grid',
		'aliases'  => null
	),

	'movies' => array(
		'atts' => array(
			'collection' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'genre' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'actor' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'order' => array(
				'default' => 'desc',
				'values'  => array( 'asc', 'desc' ),
				'filter'  => 'esc_attr'
			),
			'orderby' => array(
				'default' => 'date',
				'values'  => array( 'date', 'title', 'rating' ),
				'filter'  => 'esc_attr'
			),
			'count' => array(
				'default' => 4,
				'values'  => null,
				'filter'  => 'intval'
			),
			'poster' => array(
				'default' => 'medium',
				'values'  => array( 'none', 'thumb', 'thumbnail', 'medium', 'large', 'full' ),
				'filter'  => 'esc_attr'
			),
			'meta' => array(
				'default' => null,
				'values'  => array( 'director', 'runtime', 'release_date', 'genres', 'actors', 'overview', 'title', 'original_title', 'production', 'country', 'language', 'producer', 'photography', 'composer', 'author', 'writer' ),
				'filter'  => null
			),
			'details' => array(
				'default' => null,
				'values'  => array( 'media', 'status', 'rating' ),
				'filter'  => null
			)
		),
		'content'  => null,
		'callback' => 'movies_shortcode',
		'aliases'  => null
	),

	'movie' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'poster' => array(
				'default' => 'medium',
				'values'  => array( 'none', 'thumb', 'thumbnail', 'medium', 'large', 'full' ),
				'filter'  => 'esc_attr'
			),
			'meta' => array(
				'default' => array( 'director', 'runtime', 'release_date', 'genres', 'actors', 'overview' ),
				'values'  => array( 'director', 'runtime', 'release_date', 'genres', 'actors', 'overview', 'title', 'original_title', 'production', 'country', 'language', 'producer', 'photography', 'composer', 'author', 'writer' ),
				'filter'  => null
			),
			'details' => array(
				'default' => array( 'media', 'status', 'rating' ),
				'values'  => array( 'media', 'status', 'rating' ),
				'filter'  => null
			)
		),
		'content'  => null,
		'callback' => 'movie_shortcode',
		'aliases'  => null
	),

	'movie_meta' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'key' => array(
				'default' => null,
				'values'  => array( 'director', 'runtime', 'release_date', 'genres', 'actors', 'overview', 'title', 'original_title', 'production', 'country', 'language', 'producer', 'photography', 'composer', 'author', 'writer' ),
				'filter'  => 'esc_attr'
			),
			'label' => array(
				'default' => true,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			)
		),
		'content'  => null,
		'callback' => 'movie_meta_shortcode',
		'aliases' => array(
			'movie_director',
			'movie_overview',
			'movie_title',
			'movie_original_title',
			'movie_production',
			'movie_country',
			'movie_language',
			'movie_lang',
			'movie_producer',
			'movie_photography',
			'movie_composer',
			'movie_author',
			'movie_writer'
		)
	),

	'movie_runtime' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'format' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'label' => array(
				'default' => true,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			)
		),
		'content'  => null,
		'callback' => 'movie_runtime_shortcode',
		'aliases'  => null
	),

	'movie_release_date' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'format' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'label' => array(
				'default' => true,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			)
		),
		'content'  => null,
		'callback' => 'movie_release_date_shortcode',
		'aliases'  => array( 'movie_date' )
	),

	'movie_actors' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'count' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'intval'
			),
			'label' => array(
				'default' => true,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			)
		),
		'content'  => null,
		'callback' => 'movie_actors_shortcode',
		'aliases'  => array( 'movie_cast', 'movie_casting' )
	),

	'movie_genres' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'count' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'intval'
			),
			'label' => array(
				'default' => true,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			)
		),
		'content'  => null,
		'callback' => 'movie_genres_shortcode',
		'aliases'  => null
	),

	'movie_poster' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'size' => array(
				'default' => 'medium',
				'values'  => array( 'none', 'thumb', 'thumbnail', 'medium', 'large', 'full' ),
				'filter'  => 'esc_attr'
			),
		),
		'content'  => null,
		'callback' => 'movie_poster_shortcode',
		'aliases'  => null
	),

	'movie_images' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'size' => array(
				'default' => 'thumbnail',
				'values'  => array( 'none', 'thumb', 'thumbnail', 'medium', 'large', 'full' ),
				'filter'  => 'esc_attr'
			),
			'count' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'intval'
			),
			'label' => array(
				'default' => true,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			)
		),
		'content'  => null,
		'callback' => 'movie_images_shortcode',
		'aliases'  => array( 'movie_pictures', 'movie_photos' )
	),

	'movie_detail' => array(
		'atts'     => array(
			'id' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'title' => array(
				'default' => null,
				'values'  => null,
				'filter'  => 'esc_attr'
			),
			'key' => array(
				'default' => null,
				'values'  => array( 'media', 'status', 'rating' ),
				'filter'  => 'esc_attr'
			),
			'raw' => array(
				'default' => true,
				'values'  => 'boolean',
				'filter'  => 'esc_attr'
			),
		),
		'content'  => null,
		'callback' => 'movie_detail_shortcode',
		'aliases' => array(
			'movie_media',
			'movie_status',
			'movie_rating'
		)
	),
);