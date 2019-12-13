<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Migracion extends CI_Controller {

    public function index()
    {
        
    }
    public function irregular()
    {
        view('migracion/irregular');

    }

    public function regular()
    {
        view('migracion.regular');
    }
    public function infografia()
    {
        $data['migrantes'] = 'MIGRANTES';
        $data['total'] = '23,624';
        view('migracion.infosvg', $data);
    }

}

/* End of file Migracion.php */
