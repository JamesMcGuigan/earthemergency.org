<?php

function set_admin_mode_from_cookie() {
  if(valid_login($_COOKIE['username'],$_COOKIE['password'])) {
    $GLOBALS['admin_mode'] = true;
  } else {
    $GLOBALS['admin_mode'] = false;
  }
  return $GLOBALS['admin_mode'];
}


function encrypt($data) {
  return md5($data);
}

function valid_login($username, $password) {
  $valid_logins = array('francesca' => '82b33086ffdf0cc28a6ce302a6046ff9',
                        'james'     => 'ff62eda755322128c6f59d79cec4d38a',
                        'deepac'    => 'eb79fbb48b05a9db2dcb084e02da328a',
                       );
  $valid = false;
  foreach($valid_logins as $user => $pass) {
    if($username === $user && $password === $pass) {
      $valid = true;
      break;
    }
  }
  return $valid;
}

function print_login_screen() {
  echo return_login_screen();
}

function return_login_screen() {
  global $login_warning,$admin_mode,$username;
  
  if($login_warning == '') {
    if($admin_mode) {    
      $login_warning = "You are currently logged in in as <br />$username";
    } else {
      $login_warning = "Please Log In";
    }
  }
  

  
  $output =
   "<div style='text-align:center'>"
  ."<h3 class='first'>$login_warning</h3><br/>"
  ."<form action='$_SERVER[PHP_SELF]' method='post'>"
  ."<div>Username: <input type='text' style='width:8em' name='username'></div>"
  ."<div>Password: <input type='password' style='width:8em' name='password'></div>"
  ."<div><input type='submit' style='width:7em' value='Login'></div>"
  ."</div>";

  return $output;
}

// process login
if($_GET['logout'] === 'logout' || $_SERVER['QUERY_STRING'] === 'logout') {
  setcookie('username',false);
  setcookie('password',false);
  $login_warning = "<b>Successfully Logged Out</b><br>";
  $GLOBALS['admin_mode'] = false;
}
elseif($_POST['username'] == '' && $_POST['password'] == '') {
  set_admin_mode_from_cookie();
}
elseif(valid_login($_POST['username'], encrypt($_POST['password']))) {
  setcookie('username',$_POST['username']);
  setcookie('password',encrypt($_POST['password']));
  $GLOBALS['admin_mode'] = true;
}
else {
  $login_warning = "<b>Invalid Username and/or Password</b><br>";
  $GLOBALS['admin_mode'] = false;
}

if($GLOBALS['admin_mode'] === true) {
  $GLOBALS['username'] = ucwords((($_COOKIE['username']) ? $_COOKIE['username'] : $_POST['username']));
}



?>