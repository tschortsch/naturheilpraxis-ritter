<?php
/**
 * Plugin Name: Treatment Methods
 * Description: Adds Treatment Post-Type
 * Author: Juerg Hunziker <juerg.hunziker@gmail.com>
 * Version: 1.0
 * Date: 18.10.2015
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! defined( 'TREATMENT_SEARCH_FILE' ) ) {
    define( 'TREATMENT_SEARCH_FILE', __FILE__ );
}

if( ! class_exists( 'Treatment_Search', false ) ) {
    /**
     * Class TreatmentSearch
     */
    class Treatment_Search {
        /**
         * Single instance of the Treatment_Search object
         *
         * @var Treatment_Search
         */
        public static $single_instance = null;

        /**
         * Creates/returns the single instance Treatment_Search object
         *
         * @return Treatment_Search Single instance object
         */
        public static function initiate() {
            if ( null === self::$single_instance ) {
                self::$single_instance = new self();
            }

            return self::$single_instance;
        }

        /**
         * Construct the plugin object
         */
        public function __construct() {
            add_action( 'init', array( $this, 'bootstrap' ), 0 );
        }

        public function bootstrap() {
            require_once plugin_dir_path( __FILE__ ) . 'post-types/treatment.php';
            require_once plugin_dir_path( __FILE__ ) . 'taxonomies/suffering.php';

            new Treatment();
            new Suffering();
        }
    }

    Treatment_Search::initiate();
}