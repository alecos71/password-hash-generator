<?php
  ##############################################################################
  # Password Hash Generator - 1.0 - 10.18.2018 © Alessandro Marinuzzi - G.P.L. #
  # this script generates password for using with password_verify php function #
  ##############################################################################
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="author" content="Alessandro Marinuzzi [Alecos]">
<meta name="generator" content="Notepad2">
<meta name="pragma" content="no-cache">
<meta name="robots" content="noindex, nofollow">
<title>Password Hash Generator</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Oswald');
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
html {
  display: table;
}
html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
body {
  background-color: lightgray;
  display: table-cell;
  vertical-align: middle;
  font-family: Oswald, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 18px;
  font-style: normal;
  line-height: normal;
  font-weight: normal;
  font-variant: normal;
}
.wrapper {
  font-family: Oswald, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 18px;
  font-style: normal;
  line-height: normal;
  font-weight: normal;
  font-variant: normal;
  border-radius: 7px;
  border: 1px solid gray;
  background-color: darkgray;
  width: 800px;
  height: auto;
  margin-top: 50px;
  margin-bottom: 50px;
  vertical-align: middle;
  text-align: center;
  margin: 0 auto;
  padding: 10px;
}
.title {
  font-family: 'Roboto Condensed', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 26px;
  font-style: normal;
  line-height: normal;
  font-weight: normal;
  font-variant: normal;
}
.password {
  border-right: #e6e6fa 1px solid;
  border-top: #e6e6fa 1px solid;
  border-left: #e6e6fa 1px solid;
  border-bottom: #e6e6fa 1px solid;
  color: #e6e6fa;
  background-color: #32363c;
  font-family: 'Roboto Condensed', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: normal;
  line-height: normal;
  font-style: normal;
  font-variant: normal;
  margin-top: 3px;
  margin-bottom: 3px;
  border-radius: 3px;
  vertical-align: middle;
}
.generate {
  border-right: #e6e6fa 1px solid;
  border-top: #e6e6fa 1px solid;
  border-left: #e6e6fa 1px solid;
  border-bottom: #e6e6fa 1px solid;
  color: #e6e6fa;
  background-color: #32363c;
  font-family: 'Roboto Condensed', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 22px;
  font-weight: normal;
  line-height: normal;
  font-style: normal;
  font-variant: normal;
  cursor: pointer;
  margin-top: 3px;
  margin-bottom: 3px;
  border-radius: 5px;
  vertical-align: middle;
}
</style>
</head>
<body>
<div class="wrapper">
<span class="title">Password Generator</span>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<label for="pass">Password:</label>&nbsp;&nbsp;<input class="password" type="password" name="pass" id="pass" value="<?php echo isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : ''; ?>">&nbsp;&nbsp;<input class="password" readonly="readonly" type="text" style="width: 440px" name="pass_cripted" id="pass_cripted" value="<?php echo isset($_POST['pass']) && !empty($_POST['pass']) ? password_hash($_POST['pass'], PASSWORD_DEFAULT) : ''; ?>">&nbsp;&nbsp;<input class="generate" type="submit" name="submit" value="Generate">
</form>
</div>
</body>
</html>