<?php

declare(strict_types=1);

require get_template_directory().'/post-types/employee.php';
require get_template_directory().'/taxonomies/location.php';

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});
