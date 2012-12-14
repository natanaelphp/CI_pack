<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ckeditor extends CI_Controller
{
     public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
    }
    
    public function index()
    {
        // Carregando o ckeditor_helper.php recém criado
        $this->load->helper('ckeditor'); 
 
        // Array com as configurações pra essa instância do CKEditor ( você pode ter mais de uma )
        $data['ckeditor_texto1'] = array
        (
            //id da textarea a ser substituída pelo CKEditor
            'id'   => 'texto1',
                
            // caminho da pasta do CKEditor relativo a pasta raiz do CodeIgniter
            'path' => 'asset/ckeditor',
 
            // configurações opcionais
            'config' => array
            (
                //'uiColor' => '#f0f0f0',
                //'skin' => 'kama',
                'toolbar' => "Full",
                'width'   => "700px",
                'height'  => "250px",
                'filebrowserBrowseUrl'      => base_url().'asset/ckeditor/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url().'asset/ckeditor/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url().'asset/ckeditor/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl'      => base_url().'asset/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url().'asset/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url().'asset/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            )
        );
 
        $this->load->view('ckeditor', $data);
    }
}
?>