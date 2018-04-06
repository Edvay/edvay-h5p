<?php
require_once('../admin/class-h5p-plugin-admin.php');
require_once('../admin/class-h5p-content-admin.php');
require_once('../admin/class-h5p-library-admin.php');
$plugin = H5P_Plugin::get_instance();
$plugin_slug = $plugin->get_plugin_slug();
$content = new H5PContentAdmin($this->plugin_slug);
$library = new H5PLibraryAdmin($this->plugin_slug);

?>
<html>
<head>
<title>PHP in HTML Example</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='/wp-content/plugins/edvay-h5p/admin/styles/App.css'>
</head>
<body>

   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ganges</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Interactive Video</a></li>  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Deepak</a></li>     
    </ul>
  </div>
  <div> $this->plugin_slug</div>
</nav>
</body>
</html>
