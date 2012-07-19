<?php
/**
 * This file is based on work done by EThaiZone here:
 * http://codeigniter.com/forums/viewthread/187949/P15/#965668 . I have only
 * modified it to include expression engine components.
 *
 *
 * USAGE:
 * In order for this to properly work you must instantiate a variable at the
 * top of your controller class and type hint it with an @var CI_Controller
 * declaration. See README for a usage example.
 *
 * Subsequent calls to $this->EE->... will provide autocomplete hints.
 *
 * ================================================
 * User Objects
 * ================================================
 * Place your own objects and libraries below
 * @property Object_name $object_name
 *
 */
class CI_Controller extends EE_Autocompleter_base {
    /**
     * @var CI_Controller
     */
    public $EE;
    
    public function __construct()
    {
        $this->EE =& get_instance();
    }
}

/**
 * ================================================
 * Expression Engine Libraries
 * ================================================
 * @property Api_channel_categories $api_channel_categories
 * @property Api_channel_entries $api_channel_entries
 * @property Api_channel_fields $api_channel_fields
 * @property Api_channel_structure $api_channel_structure
 * @property Api_template_structure $api_template_structure
 * @property EE_Accessories $accessories
 * @property EE_Actions $actions
 * @property EE_Addons $addons
 * @property Api $api
 * @property Auth $auth
 * @property EE_Blacklist $blacklist
 * @property EE_Core $core
 * @property Cp $cp
 * @property Cp_search $cp_search
 * @property EE_Email $email
 * @property EE_Form_validation $form_validation
 * @property EE_Javascript $javascript
 * @property EE_Pagination $pagination
 * @property EE_Table $table
 * @property EE_Typography $typography
 * @property EE_Upload $upload
 * @property EE_Xmlrpc $xmlrpc
 * @property EE_Extensions $extensions
 * @property File_field $file_field
 * @property File_integrity $file_integrity
 * @property Filemanager $filemanager
 * @property EE_Functions $functions
 * @property EE_Html_buttons $html_buttons
 * @property Layout $layout
 * @property EE_Localize $localize
 * @property EE_Logger $logger
 * @property Members $members
 * @property EE_Menu $menu
 * @property EE_Messages $messages
 * @property EE_Messages_send $messages_send
 * @property Notifications $notifications
 * @property Publish $publish
 * @property EE_Referrer $referrer
 * @property Remember $remember
 * @property Services_JSON $services_json
 * @property EE_Session $session
 * @property EE_Spellcheck $spellcheck
 * @property EE_Stats $stats
 * @property EE_Stylesheet $stylesheet
 * @property EE_Subscription $subscription
 * @property EE_Template $template
 * @property EE_Throttling $throttling
 * @property Utf8_db_convert $utf8_db_convert
 * @property EE_Validate $validate
 * @property View $view
 * @property XML_Cache $xml_cache
 * @property EE_XMLparser $xmlparser
 *
 * ================================================
 * CodeIgniter Objects
 * ================================================
 * @property Addons_model $addons_model
 * @property Admin_model $admin_model
 * @property Category_model $category_model
 * @property Channel_entries_model $channel_entries_model
 * @property Channel_model $channel_model
 * @property Comment_model $comment_model
 * @property Communicate_model $communicate_model
 * @property Design_model $design_model
 * @property Field_model $field_model
 * @property File_category_model $file_category_model
 * @property File_model $file_model
 * @property File_upload_preferences_model $file_upload_preferences_model
 * @property Language_model $language_model
 * @property Layout_model $layout_model
 * @property Member_model $member_model
 * @property Search_model $search_model
 * @property Site_model $site_model
 * @property Status_model $status_model
 * @property Super_model $super_model
 * @property Template_model $template_model
 * @property Tools_model $tools_model
 *
 * ================================================
 * CodeIgniter Objects
 * ================================================
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 * @property CI_Benchmark $benchmark
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Exceptions $exceptions
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Hooks $hooks
 * @property CI_Image_lib $image_lib
 * @property CI_Input $input
 * @property CI_Language $language
 * @property CI_Loader $load
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Router $router
 * @property CI_Session $session
 * @property CI_Sha1 $sha1
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit_test
 * @property CI_Upload $upload
 * @property CI_URI $uri
 * @property CI_User_agent $user_agent
 * @property CI_Validation $validation
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 */

class CI_Controller extends EE_Autocompleter_base {};

/**
* @property CI_DB_active_record $db
* @property CI_DB_forge $dbforge
* @property CI_Config $config
* @property CI_Loader $load
* @property CI_Session $session
*/

class CI_Model extends EE_Autocompleter_base {};

class CI_DB_Driver {
 /**
  * Execute the query
  *
  * Accepts an SQL string as input and returns a result object upon
  * successful execution of a "read" type query.  Returns boolean TRUE
  * upon successful execution of a "write" type query. Returns boolean
  * FALSE upon failure, and if the $db_debug variable is set to TRUE
  * will raise an error.
  *
  * @access public
  * @param string An SQL query string
  * @param array An array of binding data
  * @return CI_DB_mysql_result
  */
 function query() {}
}

/**
 * @return CI_Controller
 */
function &get_instance() {}