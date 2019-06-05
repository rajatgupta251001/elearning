
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php
//Import the SDK 
require_once __DIR__.'\..\sdk\index.php';

//Setting up the Hackerearth API
$hackerearth = Array(
		'client_secret' => $api, //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);

//Feeding Data Into Hackerearth API
$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['file']=__DIR__."/".$filecode;
$config['input']=$input;     	//(OPTIONAL) formatted input against which you have to test your source code
$config['language']=$language;  //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY

//Sending request to the API to compile and run and record JSON responses
$response = compile_with_file($hackerearth,$config);     // Use this $response the way you want , it consists data in PHP Array
//Printing the response
// echo"<pre>".print_r($response,1)."</pre>";
?>

<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>E-learning | Code Mirror</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="HTMLCooker">
        <!-- js Composer CSS -->
        <link href="<?php echo base_url(); ?>assets/codemirror/css/js_composer.css" rel="stylesheet">
        <!-- Fresco CSS -->
        <link href="<?php echo base_url(); ?>assets/codemirror/css/fresco.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="<?php echo base_url(); ?>assets/codemirror/css/font-awesome.min.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="<?php echo base_url(); ?>assets/codemirror/css/style.css" rel="stylesheet">
        <!-- Jquery Js -->
        <script src="<?php echo base_url(); ?>assets/codemirror/js/jquery.js"></script>
        <!-- Jquery Migrate Js -->
        <script src="<?php echo base_url(); ?>assets/codemirror/js/jquery-migrate.min.js"></script>
        <!-- Jwplayer Js -->
        <script src="<?php echo base_url(); ?>assets/codemirror/js/jwplayer.js"></script>
        <!-- Modernizr Js -->
        <script src="<?php echo base_url(); ?>assets/codemirror/js/modernizr-2.8.3.min.js"></script>
           </head>

    <body class="home page page-id-5 page-template-default header-boxed header-margin-true header-trans-false header-is-closing-true desktop wpb-js-composer js-comp-ver-4.7 vc_responsive">
        
        <header id="masthead" class="site-header" role="banner">
            <div class="wrapper">
                <div class="site-branding">
                    <a href="<?php echo base_url(); ?>"  style="width:200px;"><img src="<?php echo base_url();?>assets/dashboardvideo/images/logo.png" alt="E- learning logo"></a>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <ul id="menu-primary-navigation" class="menu">
                         <li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-665"><a href="<?php echo base_url();?>">Home</a>
                            <ul class="sub-menu">
                                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/codemirror">Code Mirror Home</a>
                                </li><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>">Main Home</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li id="menu-item-663" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663">
                            <a href="<?php echo base_url();?>index.php/maindocument/dashcourse">Document</a>
                        </li>
                        <li id="menu-item-662" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662">
                            <a href="<?php echo base_url();?>index.php/main/dashcourse">video & Animation</a>
                        </li>
                        <li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-665"><a href="<?php echo base_url();?>index.php/main/changepass">Welcome: <?php $pdata = $this->session->userdata('logged_in');
                                            echo $pdata['username'];
                                            ?></a>
                            <ul class="sub-menu">
                                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/changepass">Edit/password</a>
                                </li><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/logout">logout</a>
                                </li>
                            </ul>
                        </li>


                    </ul> <span class="trigger taphover"><i class="fa fa-angle-left"></i></span>
                </nav><!-- /#site-navigation -->
            </div>
        </header><!-- /#masthead -->

        <div class="trigger-mobile-nav">
            <i class="fa fa-angle-left"></i>
            <div class="site-branding">
                    <a href="<?php echo base_url(); ?>"  style="width:200px;"><img src="<?php echo base_url();?>assets/dashboardvideo/images/logo.png" alt="E- learning logo"></a>
                </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <ul id="menu-primary-navigation-1" class="menu">
                         <li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-665"><a href="<?php echo base_url();?>">Home</a>
                            <ul class="sub-menu">
                                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/codemirror">Code Mirror Home</a>
                                </li><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>">Main Home</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li id="menu-item-663" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663">
                            <a href="<?php echo base_url();?>index.php/maindocument/dashcourse">Document</a>
                        </li>
                        <li id="menu-item-662" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662">
                            <a href="<?php echo base_url();?>index.php/main/dashcourse">video & Animation</a>
                        </li>
                        <li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-665"><a href="<?php echo base_url();?>index.php/main/changepass">Welcome: <?php $pdata = $this->session->userdata('logged_in');
                                            echo $pdata['username'];
                                            ?></a>
                            <ul class="sub-menu">
                                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/changepass">Edit/password</a>
                                </li><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/logout">logout</a>
                                </li>
                            </ul>
                        </li>


                </ul>
            </nav>
        </div><!-- /.trigger-mobile-nav -->

        <div id="page" class="site">
            <div id="content" class="site-content">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div class="page-container">
                            <article id="post-5" class="post-5 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div class="boxed-row">
                                        <div style="" class="row normal_height vc_row wpb_row vc_row-fluid">
                                            <div class="vc_col-sm-12 column">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_empty_space" style="height: 30px">
                                                        <span class="vc_empty_space_inner"></span>
                                                    </div>
                                                    <div class="heading-area heading-607292 left">
                                                           <h1>Compiler</h1>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.boxed-row -->
                                    
                                    
                                    <div class="row normal_height vc_row wpb_row vc_row-fluid vc_custom_1437768633035">
                                        <div class="vc_col-sm-12 column">
                                            <div class="wpb_wrapper">
                                               

<script src="<?php echo base_url();?>assets/codemirror/lib/CodeMirror.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/codemirror/lib/codemirror.css">
<script src="<?php echo base_url();?>assets/codemirror/mode/javascript/javascript.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/3024-day.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/3024-night.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/abcdef.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/ambiance.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/base16-dark.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/bespin.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/base16-light.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/blackboard.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/cobalt.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/colorforth.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/dracula.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/duotone-dark.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/duotone-light.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/eclipse.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/elegant.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/erlang-dark.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/hopscotch.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/icecoder.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/isotope.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/lesser-dark.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/liquibyte.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/material.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/mbo.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/mdn-like.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/midnight.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/monokai.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/neat.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/neo.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/night.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/panda-syntax.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/paraiso-dark.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/paraiso-light.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/pastel-on-dark.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/railscasts.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/rubyblue.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/seti.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/solarized.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/the-matrix.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/tomorrow-night-bright.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/tomorrow-night-eighties.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/ttcn.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/twilight.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/vibrant-ink.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/xq-dark.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/xq-light.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/yeti.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/codemirror/theme/zenburn.css">
<style type="text/css">
      .CodeMirror {border: 1px solid black; font-size:13px}
    </style>
<div id=nav>


   </div>

<article>
<form form action="<?php echo base_url();?>index.php/main/compiler1" method="POST" enctype="multipart/form-data">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<p class="vc_col-sm-4">
<b>
Select a theme:</b> <select onchange="selectTheme()" id=select>
    <option selected>default</option>
    <option>3024-day</option>
    <option>3024-night</option>
    <option>abcdef</option>
    <option>ambiance</option>
    <option>base16-dark</option>
    <option>base16-light</option>
    <option>bespin</option>
    <option>blackboard</option>
    <option>cobalt</option>
    <option>colorforth</option>
    <option>dracula</option>
    <option>duotone-dark</option>
    <option>duotone-light</option>
    <option>eclipse</option>
    <option>elegant</option>
    <option>erlang-dark</option>
    <option>hopscotch</option>
    <option>icecoder</option>
    <option>isotope</option>
    <option>lesser-dark</option>
    <option>liquibyte</option>
    <option>material</option>
    <option>mbo</option>
    <option>mdn-like</option>
    <option>midnight</option>
    <option>monokai</option>
    <option>neat</option>
    <option>neo</option>
    <option>night</option>
    <option>panda-syntax</option>
    <option>paraiso-dark</option>
    <option>paraiso-light</option>
    <option>pastel-on-dark</option>
    <option>railscasts</option>
    <option>rubyblue</option>
    <option>seti</option>
    <option>solarized dark</option>
    <option>solarized light</option>
    <option>the-matrix</option>
    <option>tomorrow-night-bright</option>
    <option>tomorrow-night-eighties</option>
    <option>ttcn</option>
    <option>twilight</option>
    <option>vibrant-ink</option>
    <option>xq-dark</option>
    <option>xq-light</option>
    <option>yeti</option>
    <option>zenburn</option>
</select>
<br><b>
Select Language:</b>
<br>
<select name="language">
<option value="<?php echo $language;?>"><?php echo $language;?></option>
<option value="C">C</option>
<option value="CPP">CPP</option>
<option value="CPP11">CPP11</option>
<option value="CLOJURE">CLOJURE</option>
<option value="CSHARP">CSHARP</option>
<option value="JAVA">JAVA</option>
<option value="JAVASCRIPT">JAVASCRIPT</option>
<option value="HASKELL">HASKELL</option>
<option value="PERL">PERL</option>
<option value="PHP">PHP</option>
<option value="PYTHON">PYTHON</option>
<option value="RUBY">RUBY</option>
</select>
<br><b>
Upload Source:</b>
<input type="file" name="codefile">
<br><b>
Manual Input:</b>
<textarea name="input"><?php echo $input;?></textarea>
<b>Output</b>
<b>
<textarea rows="4" ><?php echo $response['compile_status'];?></textarea></b>
</p>

<div class="vc_col-sm-8" >
<textarea id="code" name="code" rows="20"><?php echo $code;?></textarea>
<br>
<button type="submit" style="    color: #fff;

    background-color: #b69853;
    font-size: 0.875rem;
    font-weight: 700;
    border: none;
    border-radius: 0;
    text-align: center;
    text-transform: uppercase;
    text-shadow: none;
    box-shadow: none;
    padding: 1rem 1rem 1rem;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;" name="submit" value="run">run</button>
<button type="submit" style="    color: #fff;

    background-color: #b69853;
    font-size: 0.875rem;
    font-weight: 700;
    border: none;
    border-radius: 0;
    text-align: center;
    text-transform: uppercase;
    text-shadow: none;
    box-shadow: none;
    padding: 1rem 1rem 1rem;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;" name="submit" value="compile"> compile</button>
</div>
</form>
<br>
<script>
  var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
      value: "function myScript(){return 100;}\n",
  mode:  "javascript"
  });



  var input = document.getElementById("select");
  function selectTheme() {
    var theme = input.options[input.selectedIndex].textContent;
    editor.setOption("theme", theme);
    location.hash = "#" + theme;
  }
  var choice = (location.hash && location.hash.slice(1)) ||
               (document.location.search &&
                decodeURIComponent(document.location.search.slice(1)));
  if (choice) {
    input.value = choice;
    editor.setOption("theme", choice);
  }
  CodeMirror.on(window, "hashchange", function() {
    var theme = location.hash.slice(1);
    if (theme) { input.value = theme; selectTheme(); }
  });
</script>
  </article>







                                            </div><!-- /.wpb_wrapper -->
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- // entry-content -->
                            </article><!-- // post -->
                        </div><!-- // page-container -->
                    </main><!-- // main -->
                </div><!-- // primary -->
            </div><!-- // content -->
        </div><!-- // page -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-info">
                <div class="grid">
                    <div class="col-1-3 mobile-col-1-3">
                        <div id="text-2" class="widget widget_text">
                            <div class="textwidget">
                                <p>     <a href="<?php echo base_url(); ?>"  style="width:200px;"><img src="<?php echo base_url();?>assets/dashboardvideo/images/logo.png" alt="E- learning logo"></a></p>

                                <p>Moving the kietians to the new area of technology,where they can learn,explore there skills online.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3 mobile-col-1-3">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h6 class="widget-title">Social</h6>
                            <div class="menu-social-networks-container">
                                <ul id="menu-social-networks" class="menu">
                                    <li id="menu-item-638" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-638"><a target="_blank" href="https://www.facebook.com/kiet.elearning">Facebook</a>
                                    </li>
                                    <li id="menu-item-639" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-639"><a target="_blank" href="https://www.youtube.com/channel/UC4rxBQyVV00oGX9-m2aqKYw">Youtube</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3 mobile-col-1-3">
                        <div id="text-3" class="widget widget_text">
                            <h6 class="widget-title">Tags</h6>
                            <div class="tagcloud">

                            
                                                           <a href="<?php echo base_url();?>index.php/maindocument/dashcourse">Document</a>
                                                           <a href="<?php echo base_url();?>index.php/main/dashcourse">Video & Animation</a>
                                                           <a href="http://lms.kiet.edu">Moodle</a>
                                                           <a href="http://nptel.kiet.edu">Nptel</a>
                                                           <a href="<?php echo base_url(); ?>index.php/main/commingsoon">Learn Languages</a>
                                                           <a href="<?php echo base_url(); ?>index.php/main/Compiler">Compiler</a>
                                                           <a href="<?php echo base_url(); ?>index.php/main/commingsoon">Contest</a>
                                                       </div>

                        </div>
                    </div>
                </div>
            </div><!-- // site-info -->
            
        </footer><!-- // footer -->




        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.form.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/picturefill.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jwplayer.custom.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.easing.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/pace.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/scrollMonitor.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.perfectscrollbar.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.hoverintent.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.smoothscroll.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.imageloaded.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.fitvids.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/retina.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/touch.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/fresco.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/app.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.scrollto.min.js'></script>
    </body>
</html>