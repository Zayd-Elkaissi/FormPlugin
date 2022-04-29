<!-- Core theme CSS (includes Bootstrap)-->

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="solo.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
/*
Plugin Name: Formz 
Plugin URI: https://wordpress.com
Description: Allows you WordPress articles!
Version: 0.1
Author: Zuse
Author URI: https://wordpress.com
*/
// admin menu and submenu
function admin_menu_option()
{
  add_menu_page(
    'Form to', // page-title
    'Forms', //menu-title
    'manage_options', //capatibily
    'admin_menu_options', //slug
    'menu_page', //callback
    'dashicons-schedule', //icon tagcloud
    20 //position
  );

  // add_submenu_page('admin_menu_options', '', 'Add new', 'manage_options', '', 'submenu_page');
}
add_action('admin_menu', 'admin_menu_option');

function menu_page()
{

?>
  <!-- html menu -->
  <div class="wrap">
    <h1 class="wp-heading-inline">Forms</h1>
    <hr class="wp-header-end">
    <?php
    echo '<form action="" method="POST">';
    ?>
    <!-- <label>First Name</label> -->
    <input type="text" placeholder="First Name" class="col-6">
    <label for="default-toggle" class="relative inline-flex items-center mb-1 cursor-pointer ms-1">
      <input type="checkbox" name="fname" value="1" id="default-toggle" class="sr-only peer" <?php checkbox("wp_form_fname"); ?>>
      <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-amber-500 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-600"></div>
    </label>
    <br> <br>

    <!-- <label>Last Name</label> -->
    <input type="text" placeholder="Last Name" class="col-6">
    <label for="checked-toggle" class="relative inline-flex items-center mb-1 cursor-pointer ms-1">
      <input type="checkbox" name="lname" value="1" id="checked-toggle" class="sr-only peer" <?php checkbox("wp_form_lname"); ?>>
      <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-amber-500 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-600"></div>
    </label>
    <br> <br>

    <!-- <label>Phone</label>  -->
    <input type="text" placeholder="Phone" class="col-6">
    <label for="checked-0" class="relative inline-flex items-center mb-1 cursor-pointer ms-1">
      <input type="checkbox" name="phone" value="1" id="checked-0" class="sr-only peer" <?php checkbox("wp_form_phone"); ?>>
      <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-amber-500 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-600"></div>
    </label>
    <br> <br>

    <!-- <label>Email</label> -->
    <input type="text" placeholder="Email" class="col-6">
    <label for="checked-1" class="relative inline-flex items-center mb-1 cursor-pointer ms-1">
      <input type="checkbox" name="email" value="1" id="checked-1" class="sr-only peer " <?php checkbox("wp_form_email"); ?>>
      <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-amber-500 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-600"></div>
    </label>
    <br> <br>

    <!-- <label>Address</label> -->
    <input type="text" placeholder="Address" class="col-6"> <span class="tgl">
      <label for="checked-2" class="relative inline-flex items-center mb-1 cursor-pointer ms-1">
        <input type="checkbox" name="address" value="1" id="checked-2" class="sr-only peer" <?php checkbox("wp_form_address"); ?>>
        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-amber-500 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-600"></div>
      </label>
      <br> <br>

      <!-- <label>Message</label> -->
      <textarea placeholder="Message" class="col-6"></textarea> <span class="tgl">
        <label for="checked-3" class="relative inline-flex items-center mb-5 cursor-pointer ms-1">
          <input type="checkbox" name="message" value="1" id="checked-3" class="sr-only peer" <?php checkbox("wp_form_message"); ?>>
          <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-amber-500 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-600"></div>
        </label>
        <br> <br>

        <button type="submit" name="submit" class="text-white bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-orange-300 dark:focus:ring-orange-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Save</button>
        </form>


      <?php
    }
    $fname_option = "wp_form_fname";
    $lname_option = "wp_form_lname";
    $phone_option = "wp_form_phone";
    $email_option = "wp_form_email";
    $address_option = "wp_form_address";
    $message_option = "wp_form_message";
    $fname_value =  0;
    $lname_value =  0;
    $phone_value =  0;
    $email_value = 0;
    $address_value = 0;
    $message_value =  0;

    if (isset($_POST["submit"])) {

      if (isset($_POST['fname'])) {
        $fname_value =  $_POST['fname'];
      }

      if (isset($_POST['lname'])) {
        $lname_value =  $_POST['lname'];
      }

      if (isset($_POST['phone'])) {
        $phone_value =  $_POST['phone'];
      }
      if (isset($_POST['email'])) {
        $email_value =  $_POST['email'];
      }
      if (isset($_POST['address'])) {
        $address_value =  $_POST['address'];
      }
      if (isset($_POST['message'])) {
        $message_value =  $_POST['message'];
      }

      update_option($fname_option, $fname_value);
      update_option($lname_option, $lname_value);
      update_option($phone_option, $phone_value);
      update_option($email_option, $email_value);
      update_option($address_option, $address_value);
      update_option($message_option, $message_value);
    }


    function checkbox($test)
    {
      if (get_option($test) == 1) {

        echo "checked";
      }
    }


    function short()
    {
      $checked = 0;
      $echo = '';
      $echo .= '<div class="wrap">';
      $echo .= '<br>' . '<h1>Contact Us</h1>' . '<br>';
      if (get_option('wp_form_fname') == '1') {
        $echo .= '<input type="text" placeholder="First Name" class="form-control">' . '<br><br>';
        $checked = 1;
      }
      if (get_option('wp_form_lname') == '1') {
        $echo .= '<input type="text" placeholder="Last Name" class="form-control">' . '<br><br>';
        $checked = 1;
      }
      if (get_option('wp_form_phone') == '1') {
        $echo .= '<input type="text" placeholder="Phone Number" class="form-control">' . '</br><br>';
        $checked = 1;
      }
      if (get_option('wp_form_email') == '1') {
        $echo .= '<input type="text" placeholder="Email" class="form-control">' . '<br><br>';
        $checked = 1;
      }
      if (get_option('wp_form_address') == '1') {
        $echo .= '<input type="text" placeholder="Address" class="form-control">' . '<br><br>';
        $checked = 1;
      }
      if (get_option('wp_form_message') == '1') {
        $echo .= '<input type="text" placeholder="Message" class="form-control">' . '<br><br>';
        $checked = 1;
      }
      if ($checked) {

        $echo .= '<input type="submit" name="submit" value="Save Your Informaion" class="btn btn-sm btn-info" />' . '<br><br>';
      }
      $echo .= '</div>';
      return $echo;
    }


    add_shortcode('Form_2', 'short');

    // function submenu_page()
    // {

    // }

      ?>