<?php
include_once('acf-gravity_forms.php');

function acf_load_faq_categories_choices( $field ) {

    // reset choices
    $field['choices'] = array();


    // get the textarea value from options page without any formatting
    $choices = get_field('global_faq_categories', 'option', false);


    // explode the value so that each line is a new array piece
    $choices = explode("\n", $choices);


    // remove any unwanted white space
    $choices = array_map('trim', $choices);


    // loop through array and add to field 'choices'
    if( is_array($choices) ) {

        foreach( $choices as $choice ) {

            $field['choices'][ $choice ] = $choice;

        }

    }
    return $field;
}

add_filter('acf/load_field/name=faq_category', 'acf_load_faq_categories_choices');
