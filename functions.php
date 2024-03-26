<?php
function fun()
{

    wp_enqueue_style('google-fonts-bebas-neue', 'https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400;700&display=swap', array(), null, 'all');


    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0', 'all');
    
    // Enqueue Theme Stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue Bootstrap JavaScript and Popper.js
    wp_enqueue_script('jquery');

    // Enqueue Popper.js
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true);

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery', 'popper'), '4.5.0', true);
}

add_action('wp_enqueue_scripts', 'fun');






add_theme_support('woocommerce');































function Explore_custom_post_type() {
	register_post_type('Explore',
		array(
			'labels'      => array(
				'name'          => __('Explore', 'textdomain'),
				'singular_name' => __('Explore', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
                'supports'    => array( 'title', 'editor', 'thumbnail' ) // Enable support for post thumbnails
		)
	);
}
add_action('init', 'Explore_custom_post_type');



function Explore_categories_taxonomy() {
    $labels = array(
        'name'                       => __( 'Categories', 'text-domain' ),
        'singular_name'              => __( 'Category', 'text-domain' ),
        'search_items'               => __( 'Search Categories', 'text-domain' ),
        'popular_items'              => __( 'Popular Categories', 'text-domain' ),
        'all_items'                  => __( 'All Categories', 'text-domain' ),
        'edit_item'                  => __( 'Edit Category', 'text-domain' ),
        'update_item'                => __( 'Update Category', 'text-domain' ),
        'add_new_item'               => __( 'Add New Category', 'text-domain' ),
        'new_item_name'              => __( 'New Category Name', 'text-domain' ),
        'separate_items_with_commas' => __( 'Separate categories with commas', 'text-domain' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'text-domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used categories', 'text-domain' ),
        'not_found'                  => __( 'No categories found', 'text-domain' ),
        'menu_name'                  => __( 'Categories', 'text-domain' ),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array( 'slug' => 'categories' ),
        
    );

    register_taxonomy( 'categories', 'explore', $args );
}
add_action( 'init', 'Explore_categories_taxonomy' );

class categories_Taxonomy_Images {
    public function init() {
        // Image actions
        add_action('categories_add_form_fields', array($this, 'add_category_image'), 10, 2);
        add_action('created_categories', array($this, 'save_category_image'), 10, 2);
        add_action('categories_edit_form_fields', array($this, 'update_category_image'), 10, 2);
        add_action('edited_categories', array($this, 'updated_category_image'), 10, 2);
        add_action('admin_enqueue_scripts', array($this, 'load_media'));
        add_action('admin_footer', array($this, 'add_script'));
    }

    public function load_media() {
        if (!isset($_GET['taxonomy']) || $_GET['taxonomy'] != 'categories') {
            return;
        }
        wp_enqueue_media();
    }

    public function add_category_image($taxonomy) { ?>
        <div class="form-field term-group">
            <label for="categories-taxonomy-image-id"><?php __('Image', 'text-domain'); ?></label>
            <input type="hidden" id="categories-taxonomy-image-id" name="categories-taxonomy-image-id" class="custom_media_url" value="">
            <div id="categories-image-wrapper"></div>
            <p>
                <input type="button" class="button button-secondary categories_tax_media_button" id="categories_tax_media_button" name="categories_tax_media_button" value="<?php echo __('Add Image', 'text-domain'); ?>" />
                <input type="button" class="button button-secondary categories_tax_media_remove" id="categories_tax_media_remove" name="categories_tax_media_remove" value="<?php echo __('Remove Image', 'text-domain'); ?>" />
            </p>
        </div>
    <?php }

    public function save_category_image($term_id, $tt_id) {
        if (isset($_POST['categories-taxonomy-image-id']) && '' !== $_POST['categories-taxonomy-image-id']) {
            add_term_meta($term_id, 'categories-taxonomy-image-id', absint($_POST['categories-taxonomy-image-id']), true);
        }
    }

    public function update_category_image($term, $taxonomy) { ?>
        <tr class="form-field term-group-wrap">
            <th scope="row">
                <label for="categories-taxonomy-image-id"><?php echo __('Image', 'text-domain'); ?></label>
            </th>
            <td>
                <?php $image_id = get_term_meta($term->term_id, 'categories-taxonomy-image-id', true); ?>
                <input type="hidden" id="categories-taxonomy-image-id" name="categories-taxonomy-image-id" value="<?php echo esc_attr($image_id); ?>">
                <div id="categories-image-wrapper">
                    <?php if ($image_id) { ?>
                        <?php echo wp_get_attachment_image($image_id, 'thumbnail'); ?>
                    <?php } ?>
                </div>
                <p>
                    <input type="button" class="button button-secondary categories_tax_media_button" id="categories_tax_media_button" name="categories_tax_media_button" value="<?php echo __('Add Image', 'text-domain'); ?>" />
                    <input type="button" class="button button-secondary categories_tax_media_remove" id="categories_tax_media_remove" name="categories_tax_media_remove" value="<?php echo __('Remove Image', 'text-domain'); ?>" />
                </p>
            </td>
        </tr>
    <?php }

    public function updated_category_image($term_id, $tt_id) {
        if (isset($_POST['categories-taxonomy-image-id']) && '' !== $_POST['categories-taxonomy-image-id']) {
            update_term_meta($term_id, 'categories-taxonomy-image-id', absint($_POST['categories-taxonomy-image-id']));
        } else {
            update_term_meta($term_id, 'categories-taxonomy-image-id', '');
        }
    }

    public function add_script() {
        if (!isset($_GET['taxonomy']) || $_GET['taxonomy'] != 'categories') {
            return;
        } ?>
        <script>
            


            jQuery(document).ready(function($)
 {
    function ct_media_upload(button_class) {
        var _custom_media = true,
            _orig_send_attachment = wp.media.editor.send.attachment;

        $('body').on('click', button_class, function(e) {
            var button_id = '#' + $(this).attr('id');
            var send_attachment_bkp = wp.media.editor.send.attachment;
            var button = $(button_id);
            _custom_media = true;
            wp.media.editor.send.attachment = function(props, attachment) {
                if (_custom_media) {
                    $('#categories-taxonomy-image-id').val(attachment.id);
                    $('#categories-image-wrapper').html('<img class="custom_media_image" src="' + attachment.url + '" style="margin:0;padding:0;max-height:100px;float:none;" />');
                } else {
                    return _orig_send_attachment.apply(button_id, [props, attachment]);
                }
            }
            wp.media.editor.open(button);
            return false;
        });
    }

    ct_media_upload('.categories_tax_media_button.button');

    $('body').on('click', '.categories_tax_media_remove', function() {
        $('#categories-taxonomy-image-id').val('');
        $('#categories-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
    });
});


        </script>
		
    <?php }
}

$categories_Taxonomy_Images = new categories_Taxonomy_Images();
$categories_Taxonomy_Images->init();












?>

    
    
    
    