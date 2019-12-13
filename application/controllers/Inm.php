<?php 
    defined('BASEPATH') or exit('No direct script access allowed');

    class Inm extends CI_Controller {

        public function index()
        {
            view('ejemplo');
        }

        public function mapa()

        {
            view('mapa');
        }

        public function text()
        {
            var_dump(model('Dashboard')->get(1));
        }
    }