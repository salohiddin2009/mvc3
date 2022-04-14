<?php

namespace Controller;

class Controller{

    public $get;

    public $post;

    public $server;

    public $cookie;

    public function __construct()
    {
        $this->get = $_GET;

        $this->post = $_POST;

        $this->cookie = $_COOKIE;

        $this->server = $_SERVER;
    }

}