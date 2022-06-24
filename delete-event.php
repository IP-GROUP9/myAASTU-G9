<?php
include_once("utils/events.php");
include_once("utils/util.php");

if (isset($_REQUEST['event-id']))
    delete_event($_REQUEST['event-id']);
header('Location: event.php');
