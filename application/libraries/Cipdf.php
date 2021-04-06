<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Generate HTML to PDF file with DomPDF library
 * 
 * @package     CodeIgniter
 * @author      Rizqi Setiaji
 * @license     MIT License
 * @link        https://github.com/rizqisetiaji7/ci_dompdf
 * @see         https://github.com/dompdf/dompdf
 * @category    Libraries
 */

// Reference the Dompdf namespace
use Dompdf\Dompdf;

class Cipdf {

    /**
     * CodeIgniter & DomPdf instance
     * @access protected
     */
    protected $ci;
    protected $dompdf;

    public function __construct() {
        $this->ci = &get_instance();
        $this->dompdf = new Dompdf();
    }

    /**
     * Print method to generate HTML into PDF
     * 
     * @access  public
     * @param   string  $view
     * @param   array   $data Store the view data
     * @param   string  $filename PDF file name output
     * @param   string  $paperSize the size of paper
     * @param   string  $orienntation the orientation of paper
     */

    public function print($view, $data = [], $filename = 'Doc', $paperSize = 'A4', $orientation = 'portrait') {
        // Load html view and store data
        $this->dompdf->loadHtml($this->ci->load->view($view, $data, TRUE));

        // Set Paper Size and Orientation
        $this->dompdf->setPaper($paperSize, $orientation);

        // Render the HTML to PDF
        $this->dompdf->render();

        // Output the genrated PDF to Browser
        $this->dompdf->stream($filename . '.pdf', ['Attachment' => FALSE]);
    }
}
