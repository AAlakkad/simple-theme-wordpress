<?php

add_action( 'init', 'create_companies_taxonomies' );

function create_companies_taxonomies() {
    register_taxonomy(
        'company_category',
        'company',
        array(
            'label' => 'تصنيف الشركة',
            'hierarchical' => false,
        )
    );

    register_taxonomy(
        'company_country',
        'company',
        array(
            'label' => 'بلد الشركة',
            'hierarchical' => false,
        )
    );
}
