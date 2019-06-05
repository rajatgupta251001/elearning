<?php include 'fixed/header.php';?>

<div class="information-blocks">
    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">



            <div class="list">
                <a class="tab-switcher active">Submittion Table</a>


                <a class="tab-switcher">Question Table</a>
                <a class="tab-switcher">Login Table</a>


                <div class="clear"></div>
            </div>




        </div>
        <div>



          <div class="tabs-entry">
              <div class="article-container style-1">
                  <div class="row">



                    <div class="information-blocks">
                        <div class="categories-list">
                        <code><span id="submittion_output"></span></code>
                        <br>
                        <br>
                        <button  class="button style-3" id="submittion_truncate">Empty submittion Table</button>

                        </div>
                    </div>


                  </div>
              </div>
          </div>
          <div class="tabs-entry">
              <div class="article-container style-1">
                  <div class="row">



                    <div class="information-blocks">
                        <div class="categories-list">

                          <code><span id="question_output"></span></code>
                          <br>
                          <br>
                          <button  class="button style-3" id="question_truncate">Empty Question Table</button>

                        </div>
                    </div>


                  </div>
              </div>
          </div>
          <div class="tabs-entry">
              <div class="article-container style-1">
                  <div class="row">


                    <code><span id="login_output"></span></code>
                    <br>
                    <br>
                    <button  class="button style-3" id="login_truncate">Empty Login Table</button>

                    <div class="information-blocks">
                        <div class="categories-list">


                        </div>
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
$(document).ready(function() {
  	$('#submittion_truncate').click(function(e) {
      e.preventDefault();
      var url = '<?php echo base_url();?>index.php/code/delete';

      $.ajax({
        url:url,
        type: 'POST',
        data: {but:"submittion"},
        success: function(msg) {
      			$('#submittion_output').html(msg);
      		},
    		error: function(ob,errStr) {
    			$('#submittion_output').html('');
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

    });






    $(document).ready(function() {
      	$('#question_truncate').click(function(e) {
          e.preventDefault();
          var url = '<?php echo base_url();?>index.php/code/delete';

          $.ajax({
            url:url,
            type: 'POST',
            data: {but:"question"},
            success: function(msg) {
          			$('#question_output').html(msg);
          		},
        		error: function(ob,errStr) {
        			$('#question_output').html('');
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

        });







        $(document).ready(function() {
          	$('#login_truncate').click(function(e) {
              e.preventDefault();
              var url = '<?php echo base_url();?>index.php/code/delete';

              $.ajax({
                url:url,
                type: 'POST',
                data: {but:"login"},
                success: function(msg) {
              			$('#login_output').html(msg);
              		},
            		error: function(ob,errStr) {
            			$('#login_output').html('');
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

            });

</script>
</body>
</html>
