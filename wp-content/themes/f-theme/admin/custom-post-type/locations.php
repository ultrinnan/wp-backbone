<?php

/**
 * Custom post type - Location
 */
if (!function_exists('locations_cpt')) {

    /**
     *Create the custom post
     */
    function locations_cpt()
    {
        $labels = array(
            'name' => pll__('Locations'),
            'singular_name' => pll__('Location'),
            'menu_name' => pll__('Locations'),
            'parent_item_colon' => pll__(''),
            'all_items' => pll__('All locations'),
            'view_item' => pll__('View'),
            'add_new_item' => pll__('Add new location'),
            'add_new' => pll__('Add new'),
            'edit_item' => pll__('Edit'),
            'update_item' => pll__('Update'),
            'search_items' => pll__('Search'),
            'not_found' => pll__('Not found'),
            'not_found_in_trash' => pll__('Not found in trash'),
        );
        $args = array(
            'labels' => $labels,
            'supports' => array(
                'title',
//                'editor',
                'thumbnail',
//                'excerpt',
//                'comments'
            ),
            'taxonomies' => array('location_tax'),
            'public' => true,
            'menu_position' => null,
            'menu_icon' => 'dashicons-location-alt',
        );
        register_post_type('locations', $args);

    }

    add_action('init', 'locations_cpt', 0);
}

/**
 *  Meta-box
 */
if (!function_exists('location_fields_box')) {
    /**
     *Create the meta field
     */
    function location_fields_box()
    {
        add_meta_box(
            'location_fields_box',
            pll__('Location fields box', 'locations'),
            'location_fields_box_content',
            'locations',
            'normal',
            'high'
        );
    }

    add_action('add_meta_boxes', 'location_fields_box');


    /**
     * Template for metaBox
     */
    function location_fields_box_content($post)
    {
        wp_nonce_field(plugin_basename(__FILE__), 'location_fields_box_content_nonce');

        // Get meta data
        $location = get_post_meta($post->ID, 'location_fields', 1);

        if (empty($location)) {
            $location = array(
                'address' => '',
                'latitude' => '',
                'longitude' => '',
                'working_days_from_to' => '',
                'working_hours_from_to' => '',
                'email' => '',
                'comment' => '',
                'phone_number' => array(
                    array(
                        'number' => '',
                        'comment' => ''
                    ),
                    array(
                        'number' => '',
                        'comment' => ''
                    ),
                    array(
                        'number' => '',
                        'comment' => ''
                    ), array(
                        'number' => '',
                        'comment' => ''
                    )
                )
            );
        }


        $template = (
            '<fieldset id="namediv">
                    <table class="form-table edit-location" width="100%">
                        <tbody>
                            <tr>
                                <td class="first"><label for="location_fields[address]">' . pll__('Address') . '</label></td>
                                <td><input id="location_fields[address]" name="location_fields[address]" type="text" value="' . $location['address'] . '"></td>
                            </tr>
                   
                            <tr>
                                <td class="first"><label for="location_fields[latitude]">' . pll__('Latitude') . '<br />' . pll__('GPS coordinates') . '</label></td>
                                <td><input id="location_fields[latitude]" name="location_fields[latitude]"  type="text" value="' . $location['latitude'] . '"></td>
                                
                                <td class="first"><label for="location_fields[longitude]">' . pll__('Longitude') . '<br />' . pll__('GPS coordinates') . '</label></td>
                                <td><input id="location_fields[longitude]" name="location_fields[longitude]"  type="text" value="' . $location['longitude'] . '"></td>
                            </tr>
                           
                            
                            <tr class="phone-row-0">
                                <td class="first"><label for="location_fields[phone_number][0][number]">' . pll__('Phone number') . ' 1' . '</label></td>
                                <td><input id="location_fields[phone_number][0][number]" name="location_fields[phone_number][0][number]" type="text" value="' . $location['phone_number'][0]['number'] . '"></td>
                               
                                <td class="first"><label for="location_fields[phone_number][0][comment]">' . pll__('Description to phone') . ' 2' . '</label></td>
                                <td><input id="location_fields[phone_number][0][comment]" name="location_fields[phone_number][0][comment]"  type="text" value="' . $location['phone_number'][0]['comment'] . '"></td>
                            </tr>
                            <tr class="phone-row-1">
                                <td class="first"><label for="location_fields[phone_number][1][number]">' . pll__('Phone number') . ' 2' . '</label></td>
                                <td><input id="location_fields[phone_number][1][number]" name="location_fields[phone_number][1][number]"  type="text" value="' . $location['phone_number'][1]['number'] . '"></td>
                               
                                <td class="first"><label for="location_fields[phone_number][1][comment]">' . pll__('Description to phone') . ' 2' . '</label></td>
                                <td><input id="location_fields[phone_number][1][comment]" name="location_fields[phone_number][1][comment]"  type="text" value="' . $location['phone_number'][1]['comment'] . '"></td>
                            </tr>
                            <tr class="phone-row-2">
                                <td class="first"><label for="location_fields[phone_number][2][number]">' . pll__('Phone number') . ' 3' . '</label></td>
                                <td><input id="location_fields[phone_number][2][number]" name="location_fields[phone_number][2][number]"  type="text" value="' . $location['phone_number'][2]['number'] . '"></td>
                               
                                <td class="first"><label for="location_fields[phone_number][2][comment]">' . pll__('Description to phone') . ' 3' . '</label></td>
                                <td><input id="location_fields[phone_number][2][comment]" name="location_fields[phone_number][2][comment]" type="text" value="' . $location['phone_number'][2]['comment'] . '"></td>
                            </tr>
                            <tr class="phone-row-3">
                                <td class="first"><label for="location_fields[phone_number][3][number]">' . pll__('Phone number') . ' 4' . '</label></td>
                                <td><input id="location_fields[phone_number][3][number]" name="location_fields[phone_number][3][number]" type="text" value="' . $location['phone_number'][3]['number'] . '"></td>
                               
                                <td class="first"><label for="location_fields[phone_number][3][comment]">' . pll__('Description to phone') . ' 4' . '</label></td>
                                <td><input id="location_fields[phone_number][3][comment]" name="location_fields[phone_number][3][comment]"  type="text" value="' . $location['phone_number'][3]['comment'] . '"></td>
                            </tr>
                            <tr>
                                <td class="first"><label for="location_fields[email]">' . pll__('Email') . '</label></td>
                                <td><input id="location_fields[email]" name="location_fields[email]"  type="text" value="' . $location['email'] . '"></td>
                            </tr> 
                          
                            <tr>
                                <td class="first"><label for="location_fields[working_days_from_to]">' . pll__('Working days from to') . '<br />' . pll__('days of week DD-DD') . '</label></td>
                                <td><input id="location_fields[working_days_from_to]" name="location_fields[working_days_from_to]"  type="text" value="' . $location['working_days_from_to'] . '"></td>
                                
                                <td class="first"><label for="location_fields[working_hours_from_to]">' . pll__('Working hours from to') . '<br />' . pll__('hours HH:MM-HH:MM') . '</label></td>
                                <td><input id="location_fields[working_hours_from_to]" name="location_fields[working_hours_from_to]" type="text" value="' . $location['working_hours_from_to'] . '"></td>
                            </tr>
                            
                            <tr>
                                <td class="first"><label for="location_fields[comment]">' . pll__('Comment') . '</label></td>
                                <td colspan="3"><textarea id="location_fields[comment]" name="location_fields[comment]"  rows="4" style="width: 99%;">' . $location['comment'] . '</textarea></td>
                            </tr>    
                        </tbody>    
                    </table>
                </fieldset>'
        );

        echo $template;
    }

    /**
     * Data handler (save data)
     */
    function location_fields_box_save($post_id)
    {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return;

        if (!wp_verify_nonce($_POST['location_fields_box_content_nonce'], plugin_basename(__FILE__)))
            return;

        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id))
                return;
        } else {
            if (!current_user_can('edit_post', $post_id))
                return;
        }
        $location_fields = $_POST['location_fields'];

        update_post_meta($post_id, 'location_fields', $location_fields);
    }

    add_action('save_post', 'location_fields_box_save', 0);

}
