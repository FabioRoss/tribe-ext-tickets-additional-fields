<?php
/**
 * @var WP_Post $post
 * @var array  $field_data  The field data. [type, label, description, (options)]
 * @var string $field_id    The field ID.
 * @var string $field_value The field value.
 */

// Don't load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
?>

<?php if ( ! empty( $field_data[ 'label' ] ) ) : ?>
	<label for="<?php echo esc_attr( $field_id ); ?>" class="ticket_form_label ticket_form_left">
		<?php echo esc_html( $field_data[ 'label' ] ); ?>
	</label>
<?php endif; ?>


<select 
    id="<?php echo esc_attr( $field_id ); ?>"
    name="<?php echo esc_attr( $field_id ); ?>"
    class="ticket_field ticket_form_right" 
>

<?php foreach ($field_data["options"] as $value => $label) : ?>

<option 
    value="<?php echo esc_attr($value); ?>" 
    <?php selected($value, $field_value, true); ?>
>

<?php echo esc_html($label); ?>

</option>
<?php endforeach; ?>

</select>


<?php if ( ! empty( $field_data[ 'description' ] ) ) : ?>
	<p class="description ticket_form_right">
		<?php echo esc_html( $field_data[ 'description' ] ); ?>
	</p>
<?php endif; ?>