<?php
/**
 * @license     MIT
 * @copyright   Copyright (c) 2012 Jeremy Cloutier
 * @author      Jeremy Cloutier
 * @package     EE_Autocomplete
 * @version     Version 1.0
 *
 *
 * USAGE:
 * In order for this to properly work you must instantiate a variable at the
 * top of your controller class and type hint it with an @var CI_Controller
 * declaration. See README for a usage example.
 */


/**
 * ================================================
 * User Objects for Netbeans 7+
 * ================================================
 * Place your own objects and libraries below
 * @property Object_name $object_name
 *
 */
class EE_Autocomplete_user {
  public function __construct()
  {
    /**
     * ================================================
     * User Objects for Aptana Studio 3+
     * ================================================
     */
    // $this->object_name = new Object_name();

  }
}

/************************************************************************
 * !!!! DO NOT EDIT BELOW THIS LINE !!!!
 ***********************************************************************/

/**
 * Code Completion for Netbeans 7+
 *
 *
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
 * @property CI_Benchmark $benchmark
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Exceptions $exceptions
 * @property CI_Form_validation $form_validation
 * @property CI_FTP $ftp
 * @property CI_Hooks $hooks
 * @property CI_Image_lib $image_lib
 * @property CI_Input $input
 * @property CI_Javascript $javascript
 * @property CI_Lang $lang
 * @property CI_Loader $load
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_Session $session
 * @property CI_Sha1 $sha1
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit_test
 * @property CI_Upload $upload
 * @property CI_URI $uri
 * @property CI_User_agent $user_agent
 * @property CI_Utf8 $utf8
 * @property CI_Validation $validation
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 */
class EE_Autocomplete_base extends EE_Autocomplete_user {

  /*
   * Code completion for Aptana Studio 3+
   */
  public function __construct()
  {

    /********************************
     * Expression Engine Libraries
     *******************************/
    $this->api_channel_categories = new Api_channel_categories();
    $this->api_channel_entries = new Api_channel_entries();
    $this->api_channel_fields = new Api_channel_fields();
    $this->api_channel_structure = new Api_channel_structure();
    $this->api_template_structure = new Api_template_structure();
    $this->accessories = new EE_Accessories();
    $this->actions = new EE_Actions();
    $this->api = new Api();
    $this->auth = new Auth();
    $this->blacklist = new EE_Blacklist();
    $this->core = new EE_Core();
    $this->cp = new Cp();
    $this->cp_search = new Cp_search();
    $this->email = new EE_Email();
    $this->form_validation = new EE_Form_validation();
    $this->javascript = new EE_Javascript();
    $this->pagination = new EE_Pagination();
    $this->table = new EE_Table();
    $this->typography = new EE_Typography();
    $this->upload = new EE_Upload();
    $this->xmlrpc = new EE_Xmlrpc();
    $this->extensions = new EE_Extensions();
    $this->file_field = new File_field();
    $this->file_integrity = new File_integrity();
    $this->filemanager = new Filemanager();
    $this->functions = new EE_Functions();
    $this->html_buttons = new EE_Html_buttons();
    $this->layout = new Layout();
    $this->localize = new EE_Localize();
    $this->logger = new EE_Logger();
    $this->members = new Members();
    $this->menu = new EE_Menu();
    $this->messages = new EE_Messages();
    $this->messages_send = new EE_Messages_send();
    $this->notifications = new Notifications();
    $this->publish = new Publish();
    $this->referrer = new EE_Referrer();
    $this->remember = new Remember();
    $this->services_json = new Services_JSON();
    $this->session = new EE_Session();
    $this->spellcheck = new EE_Spellcheck();
    $this->stats = new EE_Stats();
    $this->stylesheet = new EE_Stylesheet();
    $this->subscription = new EE_Subscription();
    $this->template = new EE_Template();
    $this->throttling = new EE_Throttling();
    $this->utf8_db_convert = new Utf8_db_convert();
    $this->validate = new EE_Validate();
    $this->view = new View();
    $this->xml_cache = new XML_Cache();
    $this->xmlparser = new EE_XMLparser();


    /********************************
     * Expression Engine Models
     *******************************/
    $this->addons_model = new Addons_model();
    $this->admin_model = new Admin_model();
    $this->category_model = new Category_model();
    $this->channel_entries_model = new Channel_entries_model();
    $this->channel_model = new Channel_model();
    $this->comment_model = new Comment_model();
    $this->communicate_model = new Communicate_model();
    $this->design_model = new Design_model();
    $this->field_model = new Field_model();
    $this->file_category_model = new File_category_model();
    $this->file_model = new File_model();
    $this->file_upload_preferences_model = new File_upload_preferences_model();
    $this->language_model = new Language_model();
    $this->layout_model = new Layout_model();
    $this->member_model = new Member_model();
    $this->search_model = new Search_model();
    $this->site_model = new Site_model();
    $this->status_model = new Status_model();
    $this->super_model = new Super_model();
    $this->template_model = new Template_model();
    $this->tools_model = new Tools_model();


    /********************************
     * CodeIgniter Objects
     *******************************/
    $this->db = new CI_DB_active_record();
    $this->dbforge = new CI_DB_forge();
    $this->benchmark = new CI_Benchmark();
    $this->calendar = new CI_Calendar();
    $this->cart = new CI_Cart();
    $this->config = new CI_Config();
    $this->controller = new CI_Controller();
    $this->email = new CI_Email();
    $this->encrypt = new CI_Encrypt();
    $this->exceptions = new CI_Exceptions();
    $this->form_validation = new CI_Form_validation();
    $this->ftp = new CI_FTP();
    $this->hooks = new CI_Hooks();
    $this->image_lib = new CI_Image_lib();
    $this->input = new CI_Input();
    $this->javascript = new CI_Javascript();
    $this->language = new CI_Language();
    $this->load = new CI_Loader();
    $this->log = new CI_Log();
    $this->model = new CI_Model();
    $this->output = new CI_Output();
    $this->pagination = new CI_Pagination();
    $this->parser = new CI_Parser();
    $this->profiler = new CI_Profiler();
    $this->router = new CI_Router();
    $this->security = new CI_Security();
    $this->session = new CI_Session();
    $this->sha1 = new CI_Sha1();
    $this->table = new CI_Table();
    $this->trackback = new CI_Trackback();
    $this->typography = new CI_Typography();
    $this->unit_test = new CI_Unit_test();
    $this->upload = new CI_Upload();
    $this->uri = new CI_URI();
    $this->user_agent = new CI_User_agent();
    $this->utf8 = new CI_Utf8();
    $this->validation = new CI_Validation();
    $this->xmlrpc = new CI_Xmlrpc();
    $this->xmlrpcs = new CI_xmlrpcs();
    $this->zip = new CI_Zip();
  }
}

class CI_Controller extends EE_Autocomplete_base {}
class CI_Model extends EE_Autocomplete_base {}
class CI_DB_Driver {
  /**
  * @return CI_DB_mysql_result
  */
  public function query() {}
}

/**
 * @return CI_Controller
 */
function get_instance() {}