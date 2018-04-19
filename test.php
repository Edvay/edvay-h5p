<style type="text/css">

body{

	padding: 0;
	margin:0;
	font-family: sans-serif;
	font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #212529;
text-align: left;
background-color: #fff;
}
.pull-left{

width: 64%;

padding: 10px;



float: left;

padding-left: 42px;
}
.App-title {
    font-size: 1.5em;
    position: relative;
    margin-top: 6px;
    font-weight: 400;  
		color:rgb(255,255,255);
}
.pull-right{

	width:26%;
    padding: 10px;
    float:right;
}
.logo a{

    color:#ffffff;
    text-decoration:none;
}

.header_right a{

   color:#3ebffa;
   font-weight: 900;
   text-decoration: none;
}
.btn-block {
    display: block;
    width:36%;
    margin: 10px;
    float: left;
    background-color: none;
}


.App-logo {
  animation: App-logo-spin infinite 20s linear;
  height:110px;
margin:0 auto;
position:relative;
top:200px;
left:0%;

}
.small-logo {

    -webkit-animation: App-logo-spin infinite 20s linear;
    animation: App-logo-spin infinite 20s linear;
    float: left;

}
.btn:focus, .btn:hover {
    text-decoration: none;
    color: #eff1f2;
}
.btn .btn_sign{

    background-color: none;
}

#ganges_rig {
    margin-top:10px;
}

.small-header {
  background-color: #222;
  height: 60px;

  color: white;

}

.small-logo{
  animation: App-logo-spin infinite 20s linear;
  height: 40px;

}

</style>



 <header class="row small-header justify-content-center">

             <div class="logo pull-left">
                  <a href="/"> <img src="../wp-content/plugins/h5p/admin/images/logo.svg" class="small-logo" alt="Ganges" />
                   <h3 class="App-title small-margin">Ganges</h3></a> </a>
              </div>


              <div class="header_right pull-right">
                   <a href="" class="btn btn-block ganges_btn">Deepak</a>
									 <a href="" class="btn btn-block ganges_btn">Logout</a>
              </div>



        </header>



<?php







require_once('h5p-php-library/h5p.classes.php');
require_once('h5p-php-library/h5p-development.class.php');
require_once('h5p-php-library/h5p-file-storage.interface.php');
require_once('h5p-php-library/h5p-default-storage.class.php');
require_once('h5p-php-library/h5p-event-base.class.php');
require_once('h5p-editor-php-library/h5peditor.class.php');
require_once('h5p-editor-php-library/h5peditor-file.class.php');
require_once('h5p-editor-php-library/h5peditor-storage.interface.php');
require_once('h5p-editor-php-library/h5peditor-ajax.interface.php');
require_once('h5p-editor-php-library/h5peditor-ajax.class.php');
require_once('public/class-h5p-event.php');
require_once('public/class-h5p-plugin.php');
require_once('public/class-h5p-wordpress.php');
require_once('admin/class-h5p-plugin-admin.php');
require_once('admin/class-h5p-content-admin.php');
require_once('admin/class-h5p-content-query.php');
require_once('admin/class-h5p-library-admin.php');
require_once('admin/class-h5p-editor-wordpress-storage.php');
require_once('admin/class-h5p-editor-wordpress-ajax.php');
$plugin = H5P_Plugin::get_instance();
$plugin_slug = $plugin->get_plugin_slug();
$plugin->enqueue_styles_and_scripts();

$admin_plugin = H5P_Plugin_Admin::get_instance();
$admin_plugin->enqueue_admin_styles_and_scripts();
$content = new H5PContentAdmin('h5p');
$library = new H5PLibraryAdmin('h5p');
//$content->add_editor_assets();
wp_enqueue_style('h5p' . '-plugin-styles', plugins_url('h5p/h5p-php-library/styles/h5p.css'), array(), '1.10.1');
$content->display_new_content_page();
?>
<style>
#adminmenuwrap {
display:none;
}

#adminmenuback{

display:none;

}

#adminmenumain{
display:none;
}

#wpadminbar{
display:none;
}

#wpcontent {
margin-left:0px;
padding-top:0px;
padding-left:0px;
margin-top:0px;
}

html.wp-toolbar {
padding-top:0px;
}

</style>
