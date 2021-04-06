<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller {

    /**
     * Test DomPdf Library
     * @package     CodeIgniter
     * @author      Rizqi Setiaji
     * @license     MIT License
     * @link        https://github.com/rizqisetiaji7/ci_dompdf
     * @see         https://github.com/dompdf/dompdf
     * @category    Libraries
     */

    public function __construct() {
        parent::__construct();

        // Load Library Cipdf
        $this->load->library('cipdf');
    }

    public function index() {
        $data = [
            'title' => 'CodeIgniter DomPdf',
            'dompdf' => 'DomPDF',
            'text' => 'Lorem ipsum dolor sit amet'
        ];

        // Create PDF filename
        $filename = 'Doc-'. uniqid(time());

        // Print / Generate view and the data to PDF
        $this->cipdf->print('testpdf', $data, $filename);
    }
}
