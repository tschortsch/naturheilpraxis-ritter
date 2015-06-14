<?php
/**
 * Plugin Name: Treatment Methods
 * Description: Adds Treatment Post-Type
 * Author: Juerg Hunziker <juerg.hunziker@gmail.com>
 * Version: 1.0
 * Date: 14.06.2015
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! defined( 'TREATMENT_SEARCH_FILE' ) ) {
    define( 'TREATMENT_SEARCH_FILE', __FILE__ );
}

if(!class_exists('TreatmentSearch'))
{
    class TreatmentSearch
    {
        /**
         * Construct the plugin object
         */
        public function __construct()
        {
            $this->init();
        } // END public function __construct

        /**
         * Activate the plugin
         */
        public static function activate()
        {
            // Do nothing
        } // END public static function activate

        /**
         * Deactivate the plugin
         */
        public static function deactivate()
        {
            // Do nothing
        } // END public static function deactivate

        protected function init() {
            $classes = array(
                'treatment' => dirname( TREATMENT_SEARCH_FILE ) . '/post-types/treatment.php',
                'suffering' => dirname( TREATMENT_SEARCH_FILE ) . '/taxonomies/suffering.php',
            );
            foreach ($classes as $class) {
                require_once($class);
            }
        }
    } // END class Treatment
} // END if(!class_exists('TreatmentSearch'))

if(class_exists('TreatmentSearch'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('TreatmentSearch', 'activate'));
    register_deactivation_hook(__FILE__, array('TreatmentSearch', 'deactivate'));

    // instantiate the plugin class
    $treatmentSearch = new TreatmentSearch();
}