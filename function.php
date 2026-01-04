// --- SKIN QUIZ AJAX (FIXED) ---
add_action('wp_ajax_get_quiz_products', 'handle_skin_quiz_ajax');
add_action('wp_ajax_nopriv_get_quiz_products', 'handle_skin_quiz_ajax');

function handle_skin_quiz_ajax() {
    $skin_type = isset($_POST['skin_type']) ? sanitize_text_field($_POST['skin_type']) : '';
    $concern   = isset($_POST['concern']) ? sanitize_text_field($_POST['concern']) : '';

    // Prefix lagana taake sirf skin products aayein
    $terms = array(
        'skin-' . strtolower($skin_type),
        'skin-' . strtolower($concern)
    );

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_tag',
                'field'    => 'slug',
                'terms'    => $terms,
                'operator' => 'IN',
            ),
        ),
    );
    $query = new WP_Query($args);
    // ... baki loop ka code wahi rahega ...
    render_quiz_output($query);
    wp_die();
}

// --- HAIR QUIZ AJAX (FIXED) ---
add_action('wp_ajax_get_hair_products', 'handle_hair_quiz_ajax');
add_action('wp_ajax_nopriv_get_hair_products', 'handle_hair_quiz_ajax');

function handle_hair_quiz_ajax() {
    $scalp = isset($_POST['scalp_type']) ? sanitize_text_field($_POST['scalp_type']) : '';
    $h_concern = isset($_POST['hair_concern']) ? sanitize_text_field($_POST['hair_concern']) : '';

    // Prefix lagana taake sirf hair products aayein
    $terms = array(
        'hair-' . strtolower($scalp),
        'hair-' . strtolower($h_concern)
    );

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_tag',
                'field'    => 'slug',
                'terms'    => $terms,
                'operator' => 'IN',
            ),
        ),
    );
    $query = new WP_Query($args);
    render_quiz_output($query);
    wp_die();
}

// Helper function taake code repeat na ho
function render_quiz_output($query) {
    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();
            global $product;
            echo '<div class="prod-card">';
            echo '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_ID(), 'medium').'</a>';
            echo '<h4>'.get_the_title().'</h4>';
            echo '<span class="price">'.$product->get_price_html().'</span>';
            echo '<a href="'.get_the_permalink().'" class="view-link">View Product</a>';
            echo '</div>';
        endwhile;
    } else {
        echo '<p>No specific products found for this category.</p>';
    }
}