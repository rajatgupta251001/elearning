<?php include 'fixed/header.php';?>

<div class="information-blocks">
    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">



            <div class="list">
              <a class="tab-switcher active">Help</a>
              <a class="tab-switcher">Add Question</a>
              <a class="tab-switcher">Add Test Case</a>
              <a class="tab-switcher">Edit Question</a>
              <a class="tab-switcher">Edit Test Case</a>



                <div class="clear"></div>
            </div>




        </div>
        <div>


          <div class="tabs-entry">
              <div class="article-container style-1">
                  <div class="row">


Help


                  </div>
              </div>
          </div>

          <div class="tabs-entry">
              <div class="article-container style-1">
                  <div class="row">
<form id="form2" action="<?php echo base_url();?>index.php/code/admin_question" method="POST">
  <div class="col-md-12 information-entry" >
<label>Question Heading:</label>
    <input type="text" name="heading" class="col-md-12" required>
  <label>Sample Input:</label>

    <textarea type="text" name="sample_input" style="width:100% !important;" required></textarea>
  <label>  Sample Output:</label>

    <textarea type="text" name="sample_output" style="width:100% !important;" required></textarea>

    <label>Question Body:</label>

  <textarea  name="question" style="width:100% !important;height:500px !important;" id="question_body" required>  </textarea>
  <button   type="button" id="ru" onclick="text()" class="button style-4">Preview</button>
  <input   name="add_ques" class="button style-4" type="submit">
</form>
<br>
<hr>

<h2>Preview</h2>
<div id="text_output">

</div>
</div>




                  </div>
              </div>
          </div>




          <div class="tabs-entry">
              <div class="article-container style-1">
                  <div class="row">

                    <form id="form2" action="<?php echo base_url();?>index.php/code/admin_question" method="POST">
                      <div class="col-md-12 information-entry" >
                    <label>Question Heading:</label>
                      <select name="ques_id" style="width:100% !important;" required>
                        <?php
                        $i=0;
                        while ($ss[$i]) {
                          # code...



?>
<option value="<?php echo $ss[$i]->ques_id;?>"><?php echo $ss[$i]->heading;?></option>
<?php
$i++;
}
?>

                      </select>
                      <label>Input:</label>

                        <textarea type="text" name="sample_input" style="width:100% !important;" required></textarea>
                      <label>Output:</label>

                        <textarea type="text" name="sample_output" style="width:100% !important;" required></textarea>


                      <input   name="add_case" class="button style-4" type="submit">
                    </form>


                      </div>
                  </div>
              </div>
</div>



              <div class="tabs-entry">
                  <div class="article-container style-1">
                      <div class="row">


Edit Question


                      </div>
                  </div>
              </div>




              <div class="tabs-entry">
                  <div class="article-container style-1">
                      <div class="row">

Edit Test case


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
function text()
 {
    //  e.preventDefault();
  var x=document.getElementById('question_body').value;

  document.getElementById('text_output').innerHTML=x;
}



  //
  //   $('#submi').click(function(e) {
  //     // Fade in the progress bar
  //
  //     $('#output').html('<br/>Generating the output &nbsp;&nbsp;&nbsp; <img src="<?php echo base_url();?>assets/loader.gif" />');
  //     $('#output').fadeIn();
  //     $('#ru').attr("disabled", "disabled");
  //     $('#submi').attr("disabled", "disabled");
  //
  //     e.preventDefault();
  //     var form = new FormData($('#form2')[0]);
  //     form.append( 'submit', "submit"  );
  //     form.append( 'code', editor.getValue()  );
  //
  //     var url = '<?php echo base_url();?>index.php/code/compiler';
  //
  //     $.ajax({
  //       url:url,
  //       type: 'POST',
  //       data: form,
  //       processData:false,
  //       contentType:false,
  //       // async:false,
  //       beforeSend: function()
  //   {
  //     $('#output').html('<br/>Generating the output &nbsp;&nbsp;&nbsp; <img src="<?php echo base_url();?>assets/loader.gif" />');
  //     $('#output').fadeIn();
  //     $('#ru').attr("disabled", "disabled");
  //     $('#submi').attr("disabled", "disabled");
  //   },
  //       success: function(msg) {
  //           $('#output').html(msg);
  //           $('#ru').removeAttr("disabled", "disabled");
  //           $('#submi').removeAttr("disabled", "disabled");
  //         },
  //       error: function(ob,errStr) {
  //         $('#output').html('');
  //         $('#ru').removeAttr("disabled", "disabled");
  //         $('#submi').removeAttr("disabled", "disabled");
  //       }
  //     })
  //     .done(function() {
  //       console.log("success");
  //     })
  //     .fail(function() {
  //       console.log("error");
  //     })
  //     .always(function() {
  //       console.log("complete");
  //     });
  //
  //     // $('#form2').ajaxForm({
  //     //   data:{submit:"submit"},
  //     //   success: function(msg) {
  //     //       $('#output').html(msg);
  //     //       $('#ru').removeAttr("disabled", "disabled");
  //     //       $('#submi').removeAttr("disabled", "disabled");
  //     //     },
  //     //     error: function(ob,errStr) {
  //     //       $('#output').html('');
  //     //       $('#ru').removeAttr("disabled", "disabled");
  //     //       $('#submi').removeAttr("disabled", "disabled");
  //     //     }
  //     // });
  //   });
  // });

</script>
</body>
</html>
