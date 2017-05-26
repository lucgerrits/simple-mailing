<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */

include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Simple Mailing</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">

    <link href="/static/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/static/css/navbar-top-fixed.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">Simple Mailing</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/add_contact.php">Add Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/search.php">Search Contacts</a>
          </li>
          <li class="nav-item pull-xs-right">
            <a class="nav-link" href="/send.php">Send Mail</a>
          </li>
          <li class="nav-item pull-xs-right">
            <a class="nav-link" href="/email_templates.php">Email templates</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item pull-right">
            <a class="nav-link" href="/settings.php">Settings</a>
          </li>
        </ul>
      </div>
    </nav>
