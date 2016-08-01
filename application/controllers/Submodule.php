<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submodule extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "New Third-Party Submodule";
    }
}
