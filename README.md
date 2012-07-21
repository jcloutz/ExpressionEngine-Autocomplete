[ExpressionEngine Autocomplete](http://github.com/elemental-shift/ExpressionEngine-Autocomplete)
=================

ExpressionEngine Autocomplete provides code hinting for ExpressionEngine and CodeIgniter in Netbeans 7.0+ and Aptana Studio 3.

Usage
-----
In order for this to properly function you meed to meet two requirements
+ Place EE_Autocomplete.php anywhere in your project directory.
+ In any file in which you are required to obtain a `CI_Controller` instance via `get_instance()` you must first instantiate the instance variable and type hint it with `@var CI_Controller` to allow the IDE's to know what type of object it represents.

    	class Module_mcp {
    		/**
    		 * @var CI_Controller
    		 */
    		 protected $EE;
    
    		 public function __construct()
    		 {
    		 	$this->EE =& get_instance();
    		 }
    	}
    
All subsequent calls to `$this->EE->...` will provide proper code hinting for ExpressionEngine and CodeIgniter components.

If you are working from within a model the implementation will be automatic as it already extends CI_Model.

	class Table_model extends CI_Model
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function get_item($id)
	    {
	        $items = $this->db->get('table_name', array('id' => $id));
	        return $items;
	    }
	}

Custom Libraries and Objects
-----------------------------
It is also possible to include your own custom libraries and models by adding the necessary information to the EE_Autocomplete.php file for the EE_Autocomplete_user class. 

+ **Netbeans 7+**
To enable autocomplete for custom libraries in Netbeans you must use the @property declartion in the comment before EE_Autocomplete_user class declartion. 

	`@property Table_model $table_model`

+ **Aptana Studio 3**
If you are using aptana you must instantiate the variable within the EE_Autocomplete_user class constructor.

	`$this->table_model = new Table_model();`

**table_model.php**

	class Table_model extends CI_Model
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }
	}


**EE_Autocomplete.php**

	/**
	 * Add autocomplete for Netbeans 7+
	 * @property Table_model $table_model
	 */
	class EE_Autocomplete_user {
		public function __construct()
		{
			// Add autocomplete for Aptana Studio 3
			$this->table_model = new Table_model();
		}
	}

In controllers all functions for your table_model object will now be available via

	$this->EE->table_model->...

In models it will be available via

	$this->table_model->...

Compatibility
-------------
This is compatible with Netbeans 7+ and Aptana Studio

Author
------

**Jeremy Cloutier**
+ http://twitter.com/elevenStx
+ http://github.com/elemental-shift