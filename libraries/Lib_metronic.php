<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* vim: set expandtab tabstop=4 shiftwidth=4 encoding=utf-8: */
// +----------------------------------------------------------------------+
// | MCAT Portal - Multi-Carrier Aggregate Trunking Client Portal         |
// +----------------------------------------------------------------------+
// |  © Copyright - INVITE Communications Co., Ltd. - All Rights Reserved |
// |       Unauthorized copying of this file is strictly prohibited       |
// |                     Proprietary and Confidential                     |
// |                                                                      |
// | 1F Computec Ichigaya Building                                        |
// | 2-20 Ichigaya-Honmuracho                                             |
// | Shinjuku-ku, Tokyo, Japan 162-0845                                   |
// +----------------------------------------------------------------------+
// | Contact: Brian LaVallee <brian.lavallee@invite-comm.jp>              |
// +----------------------------------------------------------------------+
//

class Lib_metronic {

	// Define the CodeIgniter super-object
	protected $CI;

    /**
     * CodeIgniter Application Controller Constructor - Constructors are 
     * useful if you need to set some default values, or run a default 
     * process when your class is instantiated. Constructors can’t return
     * a value, but they can do some default work.
     *
     */
	public function __construct()
	{
    	// Assign the CodeIgniter super-object
        $this->CI =& get_instance();
	}
	
	public function foo()
	{
		Return "foo77";
	}

}