<?php include 'fixed/header.php';?>
<link href="<?php echo base_url(); ?>assets/codemirror/css/js_composer.css" rel="stylesheet">
      <!-- Fresco CSS -->
      <link href="<?php echo base_url(); ?>assets/codemirror/css/fresco.css" rel="stylesheet">
      <!-- Font Awesome CSS -->
      <link href="<?php echo base_url(); ?>assets/codemirror/css/font-awesome.min.css" rel="stylesheet">
      <!-- Style CSS -->
      <!-- <link href="<?php echo base_url(); ?>assets/codemirror/css/style.css" rel="stylesheet"> -->
      <!-- Jquery Js -->
      <script src="<?php echo base_url(); ?>assets/codemirror/js/jquery.js"></script>
      <!-- Jquery Migrate Js -->
      <script src="<?php echo base_url(); ?>assets/codemirror/js/jquery-migrate.min.js"></script>
      <!-- Jwplayer Js -->
      <script src="<?php echo base_url(); ?>assets/codemirror/js/jwplayer.js"></script>
      <script src="<?php echo base_url(); ?>assets/tab.js"></script>
      <!-- Modernizr Js -->
      <script src="<?php echo base_url(); ?>assets/codemirror/js/modernizr-2.8.3.min.js"></script>
<div class="information-blocks">

            <a href="<?php echo base_url();?>index.php/code/manager/<?php echo $manager;?>" class="button style-4">All Question</a>

    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">


            <div class="list">

                <a class="tab-switcher active">Question</a>


                <!-- <a class="tab-switcher">Code</a> -->
                <a class="tab-switcher">My Submition</a>


                <div class="clear"></div>
            </div>




        </div>
        <div>
            <div class="tabs-entry">
                <div class="article-container style-1">
                    <div class="row">



                      <div class="information-blocks">
                          <div class="categories-list">

<?php
echo $ss[0]->question;
 ?>
</table>

                          </div>
                      </div>


                    </div>
                <!-- </div>
            </div>




            <div class="tabs-entry">
                <div class="article-container style-1"> -->
                <div class="clear"></div>
                <div class="clear"></div>
                <br>
                <hr>
                <h2><pre>Code Here</pre></h2>
                <hr>
                <br>
                    <div class="row">

                        <div class="col-md-12 information-entry">
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
          <article>

          <form  id="form2" method="POST" action="<?php echo base_url();?>index.php/code/compiler">
          <p class="col-md-3 information-entry">
          <b>
          Select a theme:</b> <select onchange="selectTheme()" id="select">
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
          <select name="language" id="language">
          <option value="C">C</option>
          <option value="CPP">CPP</option>
          <option value="JAVA">JAVA</option>
          <option value="PYTHON">PYTHON</option>
          <option value="PYTHON3">PYTHON3</option>
          </select>
<input hidden="" type="text" value="<?php
echo $ss[0]->ques_id;
 ?> " name="quesid" id="ques_id">
          <br><b>
          input:</b>
          <textarea name="input" rows="5" id="input" style="border:1px solid grey; "><?php
          echo $ss[0]->sample_input;
           ?> </textarea>

          </p>

          <div class="col-md-9 information-entry" >
          <textarea id="code" name="code" value=''>
          </textarea>

          <br>
          <button  value="run" name="run" id="ru" class="u" >run</button>
          <button  value="submit" name="submit" id="submi" class="s">Submit</button>
          </div>
          </form>

                            </ul>
                            <br>
                            <h3>
                                        Result</h3>
                                          <span id="output"></span>

                        </div>
                    </div>
                </div>
            </div>



                        <div class="tabs-entry">
                            <div class="article-container style-1">
                                <div class="row">

                                    <div class="col-md-12 information-entry" id="subm">
<center><img src="<?php echo base_url();?>assets/loader.gif" /></center>

                                    </div>
                                </div>
                            </div>
                        </div>






        </div>
    </div>
</div>
<br>


</div>
</div>


<!-- FOOTER -->
<?php include 'fixed/footer.php';?>

</div>

<div class="clear"></div>

<script src="<?php echo base_url();?>assets/theme/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/theme/js/idangerous.swiper.min.js"></script>
<script src="<?php echo base_url();?>assets/theme/js/global.js"></script>

<!-- custom scrollbar -->
<script src="<?php echo base_url();?>assets/theme/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>assets/theme/js/jquery.jscrollpane.min.js"></script>

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
  // function cnd() {
  // var lan=document.getElementById('lan').value;
  //
  // }
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
<style>
p{
  font-size: 1.2em;
  font-weight: bold;
}
strong{
  color:black !important;

}
</style>
<script type="text/javascript">
  //
  // $(document).ready(function() {
  //
  //   $('#form2').ajaxForm(function(msg) {
  //     $("#submi").attr("disabled", false);
  //     $("#run").attr("disabled", false);
  //     $('#output').html(msg);
  //   });
  //
  //
  // });

  //javascript

$(document).ready(function() {
  	$('#ru').click(function(e) {
  		// Fade in the progress bar

      // $('#form2').ajaxForm({
      //   $( "#form2" ).submit(function( event ) {
      //   data:{run:"run"},
      //   success: function(msg) {
    	// 			$('#output').html(msg);
      //       $('#ru').removeAttr("disabled", "disabled");
    	// 			$('#submi').removeAttr("disabled", "disabled");
    	// 		},
    	// 		error: function(ob,errStr) {
    	// 			$('#output').html('');
      //       $('#ru').removeAttr("disabled", "disabled");
    	// 			$('#submi').removeAttr("disabled", "disabled");
    	// 		}
      // });

      e.preventDefault();

      var form = new FormData($('#form2')[0]);
      form.append( 'run', "run"  );
      form.append( 'code', editor.getValue()  );

      var url = '<?php echo base_url();?>index.php/code/compiler/<?php echo $manager;?>';

      $.ajax({
        url:url,
        type: 'POST',
        data: form,
        cache: false,
        processData:false,
        contentType:false,
        // async:false,
        beforeSend: function()
    {
      $('#output').html('<br/>Generating the output &nbsp;&nbsp;&nbsp; <img src="<?php echo base_url();?>assets/loader.gif" />');
      $('#output').fadeIn();
      $('#ru').attr("disabled", "disabled");
      $('#submi').attr("disabled", "disabled");
    },
        success: function(msg) {
      			$('#output').html(msg);
            $('#ru').removeAttr("disabled", "disabled");
      			$('#submi').removeAttr("disabled", "disabled");
      		},
    		error: function(ob,errStr) {
    			$('#output').html('');
          $('#ru').removeAttr("disabled", "disabled");
    			$('#submi').removeAttr("disabled", "disabled");
    		}
      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });



  	});



    $('#submi').click(function(e) {
      // Fade in the progress bar

      $('#output').html('<br/>Generating the output &nbsp;&nbsp;&nbsp; <img src="<?php echo base_url();?>assets/loader.gif" />');
      $('#output').fadeIn();
      $('#ru').attr("disabled", "disabled");
      $('#submi').attr("disabled", "disabled");

      e.preventDefault();
      var form = new FormData($('#form2')[0]);
      form.append( 'submit', "submit"  );
      form.append( 'code', editor.getValue()  );

      var url = '<?php echo base_url();?>index.php/code/compiler/<?php echo $manager;?>';

      $.ajax({
        url:url,
        type: 'POST',
        data: form,
        processData:false,
        contentType:false,
        // async:false,
        beforeSend: function()
    {
      $('#output').html('<br/>Generating the output &nbsp;&nbsp;&nbsp; <img src="<?php echo base_url();?>assets/loader.gif" />');
      $('#output').fadeIn();
      $('#ru').attr("disabled", "disabled");
      $('#submi').attr("disabled", "disabled");
    },
        success: function(msg) {
            $('#output').html(msg);
            $('#ru').removeAttr("disabled", "disabled");
            $('#submi').removeAttr("disabled", "disabled");
          },
        error: function(ob,errStr) {
          $('#output').html('');
          $('#ru').removeAttr("disabled", "disabled");
          $('#submi').removeAttr("disabled", "disabled");
        }
      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });

      // $('#form2').ajaxForm({
      //   data:{submit:"submit"},
      //   success: function(msg) {
      //       $('#output').html(msg);
      //       $('#ru').removeAttr("disabled", "disabled");
      //       $('#submi').removeAttr("disabled", "disabled");
      //     },
      //     error: function(ob,errStr) {
      //       $('#output').html('');
      //       $('#ru').removeAttr("disabled", "disabled");
      //       $('#submi').removeAttr("disabled", "disabled");
      //     }
      // });
    });
  });

</script>


<script>
setInterval(ajaxCall, 5000); //300000 MS == 5 minutes

function ajaxCall() {
  $.ajax({url: "<?php echo base_url();?>index.php/code/subm",
 data: { ques_id: "<?php echo $ss[0]->ques_id; ?>"},
  success: function(result){
     $("#subm").html(result);
 }});
}
</script>
<style>
@charset "UTF-8";
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
body {
    margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
    display: block;
}
audio,
canvas,
progress,
video {
    display: inline-block;
    vertical-align: baseline;
}
audio:not([controls]) {
    display: none;
    height: 0;
}
[hidden],
template {
    display: none;
}
a {
    background-color: transparent;
}
a:active,
a:hover {
    outline: 0;
}
abbr[title] {
    border-bottom: 1px dotted;
}
b,
strong {
    font-weight: bold;
}
dfn {
    font-style: italic;
}
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}
mark {
    background: #ff0;
    color: #000;
}
small {
    font-size: 80%;
}
sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
sup {
    top: -0.5em;
}
sub {
    bottom: -0.25em;
}
img {
    border: 0;
}
svg:not(:root) {
    overflow: hidden;
}
figure {
    margin: 1em 40px;
}
hr {
    box-sizing: content-box;
    height: 0;
}
pre {
    overflow: auto;
}
code,
kbd,
pre,
samp {
    font-family: monospace, monospace;
    font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
button {
    overflow: visible;
}
button,
select {
    text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button[disabled],
html input[disabled] {
    cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0;
}
input {
    line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    height: auto;
}
input[type="search"] {
    -webkit-appearance: textfield;
    box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}
fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}
legend {
    border: 0;
    padding: 0;
}
textarea {
    overflow: auto;
}
optgroup {
    font-weight: bold;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
td,
th {
    padding: 0;
}
body {
    -webkit-backface-visibility: hidden;
}

.portfolio-container .tile a .unveil,
.page-hero {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display: flex;
}
.boxed-row {
    width: 77.77778%;
    margin-left: 11.11111%;
}
.wpb_column {
    margin: 24px 0;
}
@media (max-width: 35.5em) {
    .wpb_column {
        margin: 12px 0;
    }
}
@media (min-width: 35.5em) {
    .wpb_column {
        margin: 24px 0;
    }
}
@media (min-width: 40.063em) {
    .wpb_column {
        margin: 24px 0;
    }
}
@media (min-width: 64em) {
    .wpb_column {
        margin: 24px 0;
    }
}
@media (min-width: 90.063em) {
    .wpb_column {
        margin: 24px 0;
    }
}
@media (max-width: 50em) {
    .vc_empty_space {
        height: 24px!important;
    }
}
.heading-area {
    line-height: 1;
}
.heading-area h1 {
    font-size: 4.2vw;
    line-height: 1.1;
}
@media (max-width: 35.5em) {
    .heading-area h1 {
        font-size: 8.2vw;
    }
}
@media (min-width: 35.5em) {
    .heading-area h1 {
        font-size: 7.2vw;
    }
}
@media (min-width: 40.063em) {
    .heading-area h1 {
        font-size: 6.2vw;
    }
}
@media (min-width: 64em) {
    .heading-area h1 {
        font-size: 5.2vw;
    }
}
@media (min-width: 90.063em) {
    .heading-area h1 {
        font-size: 4.2vw;
    }
}
.heading-area hr.dash {
    margin: 36px 0;
}
.heading-area.align-center {
    text-align: center;
}
.heading-area.align-center hr.dash {
    margin: 36px auto;
}
.lead .wpb_wrapper p {
    font-size: 1.2em;
    max-width: 80%;
    margin: 0 auto;
}
@media (max-width: 35.5em) {
    .lead .wpb_wrapper p {
        max-width: 100%;
    }
}
@media (max-width: 35.5em) {
    .vc_row-o-full-height {
        -webkit-box-direction: reverse;
        -webkit-box-orient: vertical;
        -webkit-flex-direction: column-reverse;
        -moz-flex-direction: column-reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
    }
}
.vc_row-o-full-height .column {
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -moz-box-flex: 1;
    -moz-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    align-items: center;
}
@media (max-width: 35.5em) {
    .vc_row-o-full-height .column {
        width: 100%;
        padding: 10% 0;
        min-height: 50vh;
        -webkit-box-direction: normal;
        -webkit-box-orient: vertical;
        -webkit-flex-direction: column;
        -moz-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }
}
.vc_row-o-full-height .column .wpb_wrapper {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -moz-box-flex: 1;
    -moz-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.vertical-align {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    align-items: center;
}
@media (max-width: 768px) {
    .vertical-align {
        -webkit-flex-wrap: wrap;
        -moz-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }
}
.images-container {
    display: block;
}

.images-container .image {
    position: relative;
    text-align: center;
    border: 1px solid #f1f1f1;
    margin-right: -1px;
    margin-bottom: -1px;
    box-sizing: content-box;
    -webkit-box-sizing: content-box;
}
.images-container .image>a {
    display: block;
}
.images-container .image img {
    vertical-align: middle;
    max-width: 100%;
    display: inline-block;
}
.images-container .image .title {
    margin-top: 12px;
}
.images-container .image .title h5 {
    font-size: 1.2em;
}
.images-container .image .description p {
    margin-top: 0;
}
.images-container .images-group {
    margin-bottom: 48px;
}
.images-container .images-group.with-link:hover {
    cursor: pointer;
}
.images-container.no-spacing-cols {
    margin-left: 15px;
    margin-right: 15px;
}
.images-container.no-spacing-cols .images-col {
    padding-left: 0;
    padding-right: 0;
    margin-bottom: 0;
}
.images-container.no-spacing-cols .images-col .image {
    margin-bottom: -1px;
}
.images-container.no-image-borders .image {
    border: none;
    margin-bottom: 0;
    margin-right: 0;
    padding: 0;
}
.services-container {
    display: block;
}
.services-container .service-group .service .title h5 {
    font-size: 1.2em;
}
.services-container .service-group .service .content ul {
    margin: 0;
}
.text-area.two-col {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
    -webkit-column-gap: 72px;
    -moz-column-gap: 72px;
    column-gap: 72px;
}
@media only screen and (max-width: 768px) {
    .text-area.two-col {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
    }
}
.text-area.three-col {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 72px;
    -moz-column-gap: 72px;
    column-gap: 72px;
}
@media only screen and (max-width: 768px) {
    .text-area.three-col {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
    }
}
html.fp-enabled,
.fp-enabled body {
    margin: 0;
    padding: 0;
    overflow: hidden;
    -webkit-tap-highlight-color: transparent;
}
#superContainer {
    height: 100%;
    position: relative;
    -ms-touch-action: none;
    touch-action: none;
}
.fp-section {
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.fp-slide {
    float: left;
}
.fp-slide,
.fp-slidesContainer {
    height: 100%;
    display: block;
}
.fp-slides {
    z-index: 1;
    height: 100%;
    overflow: hidden;
    position: relative;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.fp-section.fp-table,
.fp-slide.fp-table {
    display: table;
    table-layout: fixed;
    width: 100%;
}
.fp-tableCell {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
    height: 100%;
}
.fp-slidesContainer {
    float: left;
    position: relative;
}
.fp-controlArrow {
    position: absolute;
    z-index: 4;
    top: 50%;
    cursor: pointer;
    width: 0;
    height: 0;
    border-style: solid;
    margin-top: -38px;
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
.fp-controlArrow.fp-prev {
    left: 15px;
    width: 0;
    border-width: 38.5px 34px 38.5px 0;
    border-color: transparent #fff transparent transparent;
}
.fp-controlArrow.fp-next {
    right: 15px;
    border-width: 38.5px 0 38.5px 34px;
    border-color: transparent transparent transparent #fff;
}
.fp-scrollable {
    overflow: scroll;
}
.fp-notransition {
    -webkit-transition: none!important;
    transition: none!important;
}
.fp-slidesNav {
    position: absolute;
    z-index: 4;
    left: 50%;
    opacity: 1;
}
.fp-slidesNav.bottom {
    bottom: 17px;
}
.fp-slidesNav.top {
    top: 17px;
}
#fp-nav ul,
.fp-slidesNav ul {
    margin: 0;
    padding: 0;
}
#fp-nav ul li,
.fp-slidesNav ul li {
    display: block;
    width: 14px;
    height: 13px;
    margin: 7px;
    position: relative;
}
#fp-nav ul li a,
.fp-slidesNav ul li a {
    display: block;
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
    cursor: pointer;
    text-decoration: none;
}
#fp-nav ul li a.active span,
.fp-slidesNav ul li a.active span {
    height: 16px;
    width: 16px;
    margin: -7px 0 0 -7px;
    border-radius: 100%;
    border: 2px solid #b69853;
}
#fp-nav ul li:hover #fp-nav ul li a.active span,
#fp-slidesNav ul li:hover #fp-nav ul li a.active span,
#fp-nav ul li:hover .fp-slidesNav ul li a.active span,
#fp-slidesNav ul li:hover .fp-slidesNav ul li a.active span {
    height: 12px;
    width: 12px;
    margin: -6px 0 0 -6px;
    border-radius: 100%;
}
#fp-nav ul li a span,
.fp-slidesNav ul li a span {
    border-radius: 50%;
    position: absolute;
    z-index: 1;
    height: 6px;
    width: 6px;
    border: 0;
    background: #fff;
    left: 50%;
    top: 50%;
    margin: -2px 0 0 -2px;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}
#fp-nav ul li:hover a span,
.fp-slidesNav ul li:hover a span {
    width: 10px;
    height: 10px;
    margin: -4px 0px 0px -4px;
}
#fp-nav {
    position: fixed;
    z-index: 9001;
    margin-top: -32px;
    top: 50%;
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
}
#fp-nav.right {
    right: 17px;
}
#fp-nav.left {
    left: 17px;
}
#fp-nav ul li .fp-tooltip {
    position: absolute;
    top: -2px;
    color: #fff;
    font-size: 14px;
    font-family: arial, helvetica, sans-serif;
    white-space: nowrap;
    max-width: 220px;
    overflow: hidden;
    display: block;
    opacity: 0;
    width: 0;
}
#fp-nav ul li .fp-tooltip.right {
    right: 20px;
}
#fp-nav ul li:hover .fp-tooltip {
    -webkit-transition: opacity 0.2s ease-in;
    transition: opacity 0.2s ease-in;
    width: auto;
    opacity: 1;
}
#fp-nav.fp-show-active a.active+.fp-tooltip {
    -webkit-transition: opacity 0.2s ease-in;
    transition: opacity 0.2s ease-in;
    width: auto;
    opacity: 1;
}
.fp-slidesNav ul li {
    display: inline-block;
}

.ps-container {
    -ms-touch-action: none;
    overflow: hidden!important;
}
.ps-container.ps-active-x>.ps-scrollbar-x-rail,
.ps-container.ps-active-y>.ps-scrollbar-y-rail {
    display: block;
}
.ps-container.ps-in-scrolling {
    pointer-events: none;
}
.ps-container.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
    background-color: #eee;
    opacity: 0.9;
}
.ps-container.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
    background-color: #999;
}
.ps-container.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
    background-color: #eee;
    opacity: 0.9;
}
.ps-container.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
    background-color: #999;
}
.ps-container>.ps-scrollbar-x-rail {
    display: none;
    position: absolute;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    opacity: 0;
    z-index: 9;
    -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
    -moz-transition: background-color 0.2s linear, opacity 0.2s linear;
    -o-transition: background-color 0.2s linear, opacity 0.2s linear;
    transition: background-color 0.2s linear, opacity 0.2s linear;
    bottom: 3px;
    height: 8px;
}
.ps-container>.ps-scrollbar-x-rail>.ps-scrollbar-x {
    position: absolute;
    background-color: #aaa;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    -webkit-transition: background-color 0.2s linear;
    -moz-transition: background-color 0.2s linear;
    -o-transition: background-color 0.2s linear;
    transition: background-color 0.2s linear;
    bottom: 0;
    height: 8px;
}
.ps-container>.ps-scrollbar-y-rail {
    display: none;
    position: absolute;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    opacity: 0;
    z-index: 9;
    -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
    -moz-transition: background-color 0.2s linear, opacity 0.2s linear;
    -o-transition: background-color 0.2s linear, opacity 0.2s linear;
    transition: background-color 0.2s linear, opacity 0.2s linear;
    right: 0px;
    width: 8px;
}
.ps-container>.ps-scrollbar-y-rail>.ps-scrollbar-y {
    position: absolute;
    background-color: #aaa;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    -webkit-transition: background-color 0.2s linear;
    -moz-transition: background-color 0.2s linear;
    -o-transition: background-color 0.2s linear;
    transition: background-color 0.2s linear;
    right: 0px;
    width: 8px;
}
.ps-container:hover.ps-in-scrolling {
    pointer-events: none;
}
.ps-container:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
    background-color: #eee;
    opacity: 0.9;
}
.ps-container:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
    background-color: #999;
}
.ps-container:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
    background-color: #eee;
    opacity: 0.9;
}
.ps-container:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
    background-color: #999;
}
.ps-container:hover>.ps-scrollbar-x-rail,
.ps-container:hover>.ps-scrollbar-y-rail {
    opacity: 0.6;
}
.ps-container:hover>.ps-scrollbar-x-rail:hover {
    background-color: #eee;
    opacity: 0.9;
}
.ps-container:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
    background-color: #999;
}
.ps-container:hover>.ps-scrollbar-y-rail:hover {
    background-color: #eee;
    opacity: 0.9;
}
.ps-container:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
    background-color: #999;
}
html {
    box-sizing: border-box;
}
*,
*:before,
*:after {
    box-sizing: inherit;
}
h1,
h2,
h3,
h4,
h5,
h6,
ul,
li {
    margin: 0;
    padding: 0;
}
input,
textarea,
button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0;
    outline: 0;
    border: 0;
}
embed,
iframe,
img,
object,
video {
    max-width: 100%;
}
img {
    height: auto;
    width: auto;
}
.boxed-row:after,
.heading-area:after,
.portfolio-container:after,
.header-fullwidth .site-header .wrapper:after,
.pagination-holder:after,
.posts-navigation:after,
.post-navigation:after,
.site-footer .site-info:after,
.site-footer .copyright .wrapper:after,
.cf:after {
    content: "";
    display: table;
    clear: both;
}
ul {
    list-style: none;
}
.visibility-hidden {
    filter: alpha(opacity=0);
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    -webkit-opacity: 0;
    -khtml-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
}
body {
    font-size: 100%;
    -moz-text-size-adjust: none;
    -webkit-text-size-adjust: none;
    -ms-text-size-adjust: none;
}
a {
    font: inherit;
    font-size: 100%;
    vertical-align: baseline;
    text-decoration: none;
}
a.external[target="_blank"]:after {
    content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQElEQVR42qXKwQkAIAxDUUdxtO6/RBQkQZvSi8I/pL4BoGw/XPkh4XigPmsUgh0626AjRsgxHTkUThsG2T/sIlzdTsp52kSS1wAAAABJRU5ErkJggg==);
    vertical-align: super;
}
ul li {
    margin-bottom: 5px;
    line-height: 1.5;
}
p {
    margin: 0;
    margin-bottom: 1.5em;
    line-height: 1.575;
}
.lead {
    font-size: 1.55rem;
    color: #282b2d;
    word-wrap: break-word;
}
@media (max-width: 35.5em) {
    .lead {
        font-size: 1.1rem;
    }
}

@media (min-width: 35.5em) {
    .lead {
        font-size: 1.3rem;
    }
}
@media (min-width: 40.063em) {
    .lead {
        font-size: 1.4rem;
    }
}
@media (min-width: 64em) {
    .lead {
        font-size: 1.55rem;
    }
}
.lead .wpb_wrapper p {
    font-size: inherit;
    color: inherit;
    word-wrap: inherit;
}
.site {
    font-size: 1em;
    line-height: 1.375;
}
@media (max-width: 35.5em) {
    .site {
        font-size: .855em;
        line-height: 1.375;
    }
}
@media (min-width: 35.5em) {
    .site {
        font-size: .895em;
        line-height: 1.375;
    }
}
@media (min-width: 40.063em) {
    .site {
        font-size: .925em;
        line-height: 1.375;
    }
}
@media (min-width: 64em) {
    .site {
        font-size: 1em;
        line-height: 1.475;
    }
}
@media (min-width: 90.063em) {
    .site {
        font-size: 1.2em;
        line-height: 1.675;
    }
}
pre,
code {
    font-size: inherit;
}
strong {
    font-weight: 700;
}
em {
    font-style: italic;
}
pre {
    white-space: pre;
}
code {
    overflow: hidden;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    border-bottom: 1px solid transparent;
}
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5 {
    margin-bottom: .5em;
}
h1,
.h1 {
    font-size: 3.5em;
    line-height: 1.25;
}
@media (max-width: 35.5em) {
    h1,
    .h1 {
        font-size: 1.5em;
    }
}
@media (min-width: 35.5em) {
    h1,
    .h1 {
        font-size: 2em;
    }
}
@media (min-width: 40.063em) {
    h1,
    .h1 {
        font-size: 2.5em;
    }
}
@media (min-width: 64em) {
    h1,
    .h1 {
        font-size: 3em;
    }
}
@media (min-width: 90.063em) {
    h1,
    .h1 {
        font-size: 3.5em;
    }
}
h2,
.h2 {
    font-size: 3em;
    line-height: 1.25;
}
@media (max-width: 35.5em) {
    h2,
    .h2 {
        font-size: 1.5em;
    }
}
@media (min-width: 35.5em) {
    h2,
    .h2 {
        font-size: 2em;
    }
}
@media (min-width: 40.063em) {
    h2,
    .h2 {
        font-size: 2.5em;
    }
}
@media (min-width: 64em) {
    h2,
    .h2 {
        font-size: 2.5em;
    }
}
@media (min-width: 90.063em) {
    h2,
    .h2 {
        font-size: 3em;
    }
}
h3,
.h3 {
    font-size: 2.5em;
    line-height: 1.25;
}
@media (max-width: 35.5em) {
    h3,
    .h3 {
        font-size: 1.4em;
    }
}
@media (min-width: 35.5em) {
    h3,
    .h3 {
        font-size: 1.8em;
    }
}
@media (min-width: 40.063em) {
    h3,
    .h3 {
        font-size: 2em;
    }
}
@media (min-width: 64em) {
    h3,
    .h3 {
        font-size: 2em;
    }
}
@media (min-width: 90.063em) {
    h3,
    .h3 {
        font-size: 2.5em;
    }
}
h4,
.h4 {
    font-size: 2em;
    line-height: 1.25;
}
@media (max-width: 35.5em) {
    h4,
    .h4 {
        font-size: 1.2em;
    }
}
@media (min-width: 35.5em) {
    h4,
    .h4 {
        font-size: 1.4em;
    }
}
@media (min-width: 40.063em) {
    h4,
    .h4 {
        font-size: 1.6em;
    }
}
@media (min-width: 64em) {
    h4,
    .h4 {
        font-size: 1.6em;
    }
}
@media (min-width: 90.063em) {
    h4,
    .h4 {
        font-size: 2em;
    }
}
h5,
.h5 {
    font-size: 1.3em;
    line-height: 1.25;
}
@media (max-width: 35.5em) {
    h5,
    .h5 {
        font-size: 1.2em;
    }
}
@media (min-width: 35.5em) {
    h5,
    .h5 {
        font-size: 1.2em;
    }
}
@media (min-width: 40.063em) {
    h5,
    .h5 {
        font-size: 1.2em;
    }
}
@media (min-width: 64em) {
    h5,
    .h5 {
        font-size: 1.3em;
    }
}
@media (min-width: 90.063em) {
    h5,
    .h5 {
        font-size: 1.3em;
    }
}
h6,
.h6 {
    font-size: 18px;
    line-height: 1.25;
    margin-bottom: 55px;
    text-transform: uppercase;
    line-height: 1.22222222;
}
@media (max-width: 35.5em) {
    h6,
    .h6 {
        font-size: 0.95em;
        margin-bottom: 35px;
    }
}
blockquote {
    font-size: 1.25em;
    line-height: 1.25;
    padding: 0 6%;
    margin: 4%;
}
@media (max-width: 35.5em) {
    blockquote {
        font-size: 1.1em;
    }
}
@media (min-width: 43.75em) {
    blockquote {
        font-size: 1.25em;
        line-height: 1.25833333;
    }
}
.btn {
    display: inline-block;
    padding: 12px 18px;
    margin-bottom: 5px;
    vertical-align: top;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
}
.btn.btn-small {
    padding: 10px 14px;
    font-size: 13px;
}
.btn.btn-large {
    padding: 16px 24px;
    font-size: 16px;
}
.btn.btn-default {
    background: #8c8c8c;
    color: #ffffff;
}
.btn.btn-default:hover {
    background-color: #7f7f7f;
}
.btn.btn-primary {
    color: #ffffff;
}
.btn.btn-primary:hover {
    background-color: #282b2d;
}
.btn.btn-black {
    background: #282b2d;
    color: #ffffff;
}
.btn.btn-black:hover {
    background-color: #646c71;
}
.btn.btn-white {
    background: #fff;
}
.btn.btn-type-outlined {
    background: transparent;
}
.btn.btn-type-outlined.btn-default {
    border: 2px solid #8c8c8c;
    color: #8c8c8c;
    background: none;
}
.btn.btn-type-outlined.btn-default:hover {
    background-color: #8c8c8c;
    color: #ffffff;
}
.btn.btn-type-outlined.btn-primary {
    border-width: 2px;
    border-style: solid;
    background: none;
}
.btn.btn-type-outlined.btn-primary:hover {
    color: #ffffff;
}
.btn.btn-type-outlined.btn-black {
    border: 2px solid #282b2d;
    color: #282b2d;
    background: none;
}
.btn.btn-type-outlined.btn-black:hover {
    background-color: #282b2d;
    color: #ffffff;
}
.btn.btn-type-outlined.btn-white {
    border: 2px solid #ffffff;
    color: #ffffff;
}
.btn.btn-type-outlined.btn-white:hover {
    background-color: #ffffff;
    color: #282b2d;
}
.animated {
    -webkit-animation-duration: .5s;
    -moz-animation-duration: .5s;
    -o-animation-duration: .5s;
    animation-duration: .5s;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    animation-fill-mode: both;
}
.pulse:hover,
.pulsing {
    animation-name: pulse;
    -webkit-animation-name: pulse;
    animation-duration: 1.5s;
    -webkit-animation-duration: 1.5s;
    animation-iteration-count: infinite;
    -webkit-animation-iteration-count: infinite;
    cursor: pointer;
}
@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.2);
        opacity: 0, 7;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}
@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        opacity: 1;
    }
    50% {
        -webkit-transform: scale(1.2);
        opacity: 0, 7;
    }
    100% {
        -webkit-transform: scale(1);
        opacity: 1;
    }
}
@-webkit-keyframes slideDown {
    0% {
        -webkit-transform: translateY(-8em);
    }
    100% {
        -webkit-transform: translateY(0);
    }
}
@-moz-keyframes slideDown {
    0% {
        -moz-transform: translateY(-8em);
    }
    100% {
        -moz-transform: translateY(0);
    }
}
@-o-keyframes slideDown {
    0% {
        -o-transform: translateY(-8em);
    }
    100% {
        -o-transform: translateY(0);
    }
}
@keyframes slideDown {
    0% {
        transform: translateY(-8em);
    }
    100% {
        transform: translateY(0);
    }
}
.animated.slideDown {
    -webkit-animation-name: slideDown;
    -moz-animation-name: slideDown;
    -o-animation-name: slideDown;
    animation-name: slideDown;
}
@-webkit-keyframes slideUp {
    0% {
        -webkit-transform: translateY(0);
    }
    100% {
        -webkit-transform: translateY(-8em);
    }
}
@-moz-keyframes slideUp {
    0% {
        -moz-transform: translateY(0);
    }
    100% {
        -moz-transform: translateY(-8em);
    }
}
@-o-keyframes slideUp {
    0% {
        -o-transform: translateY(0);
    }
    100% {
        -o-transform: translateY(-8em);
    }
}
@keyframes slideUp {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-8em);
    }
}
.animated.slideUp {
    -webkit-animation-name: slideUp;
    -moz-animation-name: slideUp;
    -o-animation-name: slideUp;
    animation-name: slideUp;
}
@-webkit-keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}
@-webkit-keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}
@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}
.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
}
.kenburns {
    -webkit-animation-name: kenburns;
    -moz-animation-name: kenburns;
    -o-animation-name: kenburns;
    animation-name: kenburns;
}
.kenburnsreverse {
    -webkit-animation-name: kenburnsreverse;
    -moz-animation-name: kenburnsreverse;
    -o-animation-name: kenburnsreverse;
    animation-name: kenburnsreverse;
}
.kanimate {
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -ms-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-duration: 30s;
    -moz-animation-duration: 30s;
    -ms-animation-duration: 30s;
    -o-animation-duration: 30s;
    animation-duration: 30s;
    animation-timing-function: ease-out;
    -webkit-animation-timing-function: ease-out;
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
    -moz-animation-iteration-count: 1;
    -moz-animation-fill-mode: forwards;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-fill-mode: forwards;
}
@-webkit-keyframes kenburns {
    0% {
        -webkit-transform: scale(1.2);
    }
    100% {
        -webkit-transform: scale(1);
    }
}
@keyframes kenburns {
    0% {
        transform: scale(1.2);
    }
    100% {
        -webkit-transform: scale(1);
    }
}
@-webkit-keyframes kenburnsreverse {
    0% {
        -webkit-transform: scale(1);
    }
    100% {
        -webkit-transform: scale(1.2);
    }
}
@keyframes kenburnsreverse {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.2);
    }
}
body {
    overflow-x: hidden;
}

</style>
</html>
<?php if ($pdata['rank']=="student") {
	$m=$manager_detail[0]->end;

?>
<script>
var countDownDate = new Date("<?php echo $m;?>").getTime();
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
		document.getElementById("subm1").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";


    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        location.replace("<?php echo base_url();?>");
    }
}, 1000);
</script>
<?php }?>
