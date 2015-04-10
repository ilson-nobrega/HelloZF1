<?php

class IndexController extends Zend_Controller_Action
{

    protected $self;
    
    public function init()
    {
        if(Zend_Auth::getInstance()->hasIdentity())
        {
            $this->self = Zend_Auth::getInstance()->getIdentity();
//            Zend_Debug::dump($this->self);exit;
        }
    }

    public function indexAction()
    {
        $this->view->nome = 'Ilson Nóbrega';
    }


}

