<?php

namespace Src\Models;

abstract class Base{

    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
}
