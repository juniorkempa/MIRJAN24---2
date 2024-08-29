<?php

class FirstModuleAjaxModuleFrontController extends ModuleFrontController {
    
    public function __construct()
    {
        parent::__construct();
    } 

    public function init()
    {
        parent::init();
    } 

    public function initContent()
    {
        parent::initContent();
        $configValue = Configuration::get('FIRST_MODULE');    
        $this->context->smarty->assign([
            'configValue' => $configValue
        ]);

        if ($this->ajax) 
        { 
            $response = [ 'success' => true, 'data' => $configValue ]; 
            die(Tools::jsonEncode($response));
        } 
        else 
        {
            die(Tools::jsonEncode(['success' => false, 'message' => 'Invalid request']));
        }
    }
}
