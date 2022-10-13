<?php

include_once "../utils.php";

session_start();
session_unset();
session_destroy();

redirect("login.php");
