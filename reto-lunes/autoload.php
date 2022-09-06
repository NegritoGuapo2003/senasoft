<?php

    function autoload($clase){

        require "controllers/$clase.php";

    }

    spl_autoload_register("autoload");