
<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_65354da4d0525',
    'title' => 'Feld für Verband',
    'fields' => array(
        array(
            'key' => 'field_65354db201965',
            'label' => 'Verband URL',
            'name' => 'verband_url',
            'type' => 'text',
            'instructions' => 'Bitte vollständige URL für die Verlinkung mit der Website eingeben.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'domi_verbaende_cpt',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
));

endif;      
?>