<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->parser->setModule("Home");
    }

    function index()
    {

        $product = new Entity\Product();

        $product->setName('Teste');

        $this->doctrine->em->persist($product);
        $this->doctrine->em->flush();

        //$this->load->view('Home/home_v');
        $data['title'] = 'hello zeca';
        $this->parser->parse("home_v", $data);
    }

}

