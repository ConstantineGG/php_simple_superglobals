<?php
// --------------------------------------------------------------
// diagnostics
// --------------------------------------------------------------
// echo "<pre>";
// var_dump($zugzug);
// print_r($zugzug);
// print_r(get_defined_vars());
// echo "<hr>";
// echo "<br>";
// echo "</pre>";
// echo "<script>console.log('$zugzug');</script>";


// --------------------------------------------------------------
//  notes
// --------------------------------------------------------------
// we examine whether the var isset() and whether it is empty()
// -- "force" means we stay only if the var is set and not empty
// -- "empty" means we stay if the var is empty but it must be set
// -- "allow" means we stay no matter what and give the var the value of ""
// meaning of if !isset()
// -- the session var was not set
// -- the session didn't start at all
// meaning of if empty()
// -- the session var was set wrong
// -- the session var is genuinely empty
// secure integers:
// -- $safe_int = filter_var($unsafe_int, FILTER_SANITIZE_NUMBER_INT);
// -- remove non integer characters from known integer variables


// --------------------------------------------------------------
// SESSION INTEGER
// --------------------------------------------------------------
function session_integer_force($filthy) {
  if ( !isset($_SESSION["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_SESSION["$filthy"]) ) {
    header("Location: index.php?errno=3");
    die();
  }
  else {
    $session_var = $_SESSION["$filthy"];
    $session_var = filter_var($session_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $session_var;
}

function session_integer_empty($filthy) {
  if ( !isset($_SESSION["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_SESSION["$filthy"]) ) {
    $session_var = "";
  }
  else {
    $session_var = $_SESSION["$filthy"];
    $session_var = filter_var($session_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $session_var;
}

function session_integer_allow($filthy) {
  if ( !isset($_SESSION["$filthy"]) ) {
    $session_var = "";
  }
  elseif ( empty($_SESSION["$filthy"]) ) {
    $session_var = "";
  }
  else {
    $session_var = $_SESSION["$filthy"];
    $session_var = filter_var($session_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $session_var;
}


// --------------------------------------------------------------
// SESSION VARCHAR
// --------------------------------------------------------------
function session_varchar_force($filthy) {
  if ( !isset($_SESSION["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_SESSION["$filthy"]) ) {
    header("Location: index.php?errno=3");
    die();
  }
  else {
    $session_var = $_SESSION["$filthy"];
  }
  return $session_var;
}

function session_varchar_empty($filthy) {
  if ( !isset($_SESSION["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_SESSION["$filthy"]) ) {
    $session_var = "";
  }
  else {
    $session_var = $_SESSION["$filthy"];
  }
  return $session_var;
}

function session_varchar_allow($filthy) {
  if ( !isset($_SESSION["$filthy"]) ) {
    $session_var = "";
  }
  elseif ( empty($_SESSION["$filthy"]) ) {
    $session_var = "";
  }
  else {
    $session_var = $_SESSION["$filthy"];
  }
  return $session_var;
}


// --------------------------------------------------------------
// POST INTEGER
// --------------------------------------------------------------
function post_integer_force($filthy) {
  if ( !isset($_POST["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_POST["$filthy"]) ) {
    header("Location: index.php?errno=3");
    die();
  }
  else {
    $post_var = $_POST["$filthy"];
    $post_var = filter_var($post_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $post_var;
}

function post_integer_empty($filthy) {
  if ( !isset($_POST["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_POST["$filthy"]) ) {
    $post_var = "";
  }
  else {
    $post_var = $_POST["$filthy"];
    $post_var = filter_var($post_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $post_var;
}

function post_integer_allow($filthy) {
  if ( !isset($_POST["$filthy"]) ) {
    $post_var = "";
  }
  elseif ( empty($_POST["$filthy"]) ) {
    $post_var = "";
  }
  else {
    $post_var = $_POST["$filthy"];
    $post_var = filter_var($post_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $post_var;
}


// --------------------------------------------------------------
// POST VARCHAR
// --------------------------------------------------------------
function post_varchar_force($filthy) {
  if ( !isset($_POST["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_POST["$filthy"]) ) {
    header("Location: index.php?errno=3");
    die();
  }
  else {
    $post_var = $_POST["$filthy"];
  }
  return $post_var;
}

function post_varchar_empty($filthy) {
  if ( !isset($_POST["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_POST["$filthy"]) ) {
    $post_var = "";
  }
  else {
    $post_var = $_POST["$filthy"];
  }
  return $post_var;
}

function post_varchar_empty_allow_zero($filthy) {
  if ( !isset($_POST["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( $_POST["$filthy"] === "0" ) {
    $post_var = $_POST["$filthy"];
  }
  elseif ( empty($_POST["$filthy"]) ) {
    $post_var = "";
  }
  else {
    $post_var = $_POST["$filthy"];
  }
  return $post_var;
}

function post_varchar_allow($filthy) {
  if ( !isset($_POST["$filthy"]) ) {
    $post_var = "";
  }
  elseif ( empty($_POST["$filthy"]) ) {
    $post_var = "";
  }
  else {
    $post_var = $_POST["$filthy"];
  }
  return $post_var;
}


// --------------------------------------------------------------
// GET INTEGER
// --------------------------------------------------------------
function get_integer_force($filthy) {
  if ( !isset($_GET["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_GET["$filthy"]) ) {
    header("Location: index.php?errno=3");
    die();
  }
  else {
    $get_var = $_GET["$filthy"];
    $get_var = filter_var($get_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $get_var;
}

function get_integer_empty($filthy) {
  if ( !isset($_GET["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_GET["$filthy"]) ) {
    $get_var = "";
  }
  else {
    $get_var = $_GET["$filthy"];
    $get_var = filter_var($get_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $get_var;
}

function get_integer_allow($filthy) {
  if ( !isset($_GET["$filthy"]) ) {
    $get_var = "";
  }
  elseif ( empty($_GET["$filthy"]) ) {
    $get_var = "";
  }
  else {
    $get_var = $_GET["$filthy"];
    $get_var = filter_var($get_var, FILTER_SANITIZE_NUMBER_INT);
  }
  return $get_var;
}


// --------------------------------------------------------------
// GET VARCHAR
// --------------------------------------------------------------
function get_varchar_force($filthy) {
  if ( !isset($_GET["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_GET["$filthy"]) ) {
    header("Location: index.php?errno=3");
    die();
  }
  else {
    $get_var = $_GET["$filthy"];
  }
  return $get_var;
}

function get_varchar_empty($filthy) {
  if ( !isset($_GET["$filthy"]) ) {
    header("Location: index.php?errno=4");
    die();
  }
  elseif ( empty($_GET["$filthy"]) ) {
    $get_var = "";
  }
  else {
    $get_var = $_GET["$filthy"];
  }
  return $get_var;
}

function get_varchar_allow($filthy) {
  if ( !isset($_GET["$filthy"]) ) {
    $get_var = "";
  }
  elseif ( empty($_GET["$filthy"]) ) {
    $get_var = "";
  }
  else {
    $get_var = $_GET["$filthy"];
  }
  return $get_var;
}
?>
