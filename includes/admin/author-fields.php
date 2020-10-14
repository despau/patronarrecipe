<?php

function patronarrecipe_custom_user_profile_fields( $user ){
  ?>
  <table class="form-table">
    <tr>
      <th>
        <label for="patronarrecipe_twitter"><?php _e( 'Twitter', 'patronarrecipe' ); ?></label>
      </th>
      <td>
        <input type="text" name="patronarrecipe_twitter" id="patronarrecipe_twitter" class="regular-text"
              value="<?php echo esc_attr( get_the_author_meta( 'patronarrecipe_twitter', $user->ID ) ); ?>"/>
      </td>
    </tr>
  </table>
  <?php
}

function patronarrecipe_save_extra_profile_fields( $user_id){

  if( !current_user_can('edit_user') ){
    return false;
  }

  update_user_meta( $user_id, 'patronarrecipe_twitter', $_POST['patronarrecipe_twitter'] );
}