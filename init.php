<?php
session_start();
include('includes/db.php');
include('includes/common.php');
include('includes/user.php');
include('includes/category.php');
date_default_timezone_set("Asia/Kolkata");
$db = new db;
$common = new common;
$user = new User;
$category = new Category;