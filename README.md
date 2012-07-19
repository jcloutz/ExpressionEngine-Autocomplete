[ExpressionEngine Autocomplete](http://github.com/elemental-shift/ExpressionEngine-Autocomplete)
=================

 This file is based on work done by [EThaiZone](http://codeigniter.com/forums/viewthread/187949/P15/#965668). I have only modified it to include expression engine components. 

 ExpressionEngine Autocomplete provides code hinting for ExpressionEngine and CodeIgniter in Netbeans 7.0+.

Usage
-----
In any file in which you are required to call `get_instance()` you will have to first instantiated and EE instance and type hint it with an `@var CI_Controller` declaration.

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
It is also possible to include your own custom libraries and models by adding @property hints to the EE_Autocompleter.php file for the EE_Autocompleter_base class.

table_model.php

	class Table_model extends CI_Model
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }
	}


EE_Autocompleter.php

	/**
	 * ================================================
	 * User Objects
	 * ================================================
	 * Place your own objects and libraries below
	 * @property Table_model $table_model
	 */
	class EE_Autocompleter_base {}

In controllers all functions for your table_model object will now be available via

	$this->EE->table_model->...