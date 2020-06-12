<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap-theme.min.css'); ?>">
  <style type="text/css">
    body{
      font-family: "Segoe UI", "Helvetica Neue", "Helvetica", "Lucida Grande", Arial, "Ubuntu", "Cantarell", "Fira Sans", sans-serif;
    color: #4b4b4b;
    text-rendering: optimizeLegibility;
    font-feature-settings: "kern";
    -webkit-font-feature-settings: "kern";
    }
  </style>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CI CRUD DEMO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url(); ?>">Home</a></li>
      <li class=""><a href="<?php echo site_url("students/add") ?>">Add Student</a></li>
      <li><a href="<?php echo site_url('students/edit') ?>">Edit Student</a></li>
      <li><a href="<?php echo site_url('students/delete') ?>">Delete Student</a></li>
    </ul>
  </div>
</nav>
	<div class="container">
			


