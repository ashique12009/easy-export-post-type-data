<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://ashique12009.blogspot.com/
 * @since      1.0.0
 *
 * @package    Easy_Export_Post_Type_Data
 * @subpackage Easy_Export_Post_Type_Data/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
    <h2><?php _e('Easy export', EASY_EXPORT_POST_TYPE_DATA_TEXT_DOMAIN);?></h2>

    <?php $post_type_setting = esc_html( get_option( 'wprs_post_type', 'post' ) ); ?>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row"><label for="easy-export-post-type-data"><?php _e( 'Select your post type', EASY_EXPORT_POST_TYPE_DATA_DIR ); ?>: </label></th>
                <td>
                    <?php $desire_post_types = Helper_Trait::fetch_post_types(); ?>
                    <?php if (count($desire_post_types) > 0) : ?>
                        <select name="post_type_setting" id="post-type-setting">
                            <?php foreach ($desire_post_types as $pt) : ?>
                                <option value="<?php echo esc_attr( $pt );?>" <?php echo ($post_type_setting == $pt) ? ' selected="selected"': '';?>><?php echo esc_html( $pt );?></option>
                            <?php endforeach; ?>
                        </select>
                    <?php endif; ?>
                </td>
            </tr>
        </tbody>
    </table>

    <?php $nonce = wp_create_nonce("easy_export_nonce"); ?>
    <?php $action = "easy_export_action"; ?>

    <button id="export-submit-btn" class="button button-primary" data-nonce="<?php echo $nonce; ?>" data-action="<?php echo $action; ?>"><?php _e('Export', EASY_EXPORT_POST_TYPE_DATA_DIR); ?></button>

</div>