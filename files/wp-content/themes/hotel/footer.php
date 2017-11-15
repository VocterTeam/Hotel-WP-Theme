<?php global $redux_opt; ?>

    

    <!-- .popup -->
    <div class="popup" id="popupReview">
        <div class="popup-inner">
            <h2 class="popup-title element-after">ЗАПИСАТЬСЯ <span class="popup-title popup-title--thin">НА ПРОСМОТР</span></h2>
            <?php echo do_shortcode('[contact-form-7 id="4" title="Контактная форма" html_class="default-form"]'); ?>
            <!-- <form action="#" class="default-form">
                <input type="text" class="hidden-input" />
                <div class="input-group element-after">
                    <input type="text" class="default-input" placeholder="Ваше имя*" />
                    <input type="number" class="default-input" placeholder="Телефон*" />
                </div>
                <button class="default-btn">ЗАПИСАТЬСЯ</button>
            </form> -->

            <button type="button" id="btn_review" class="close-btn"></button>
        </div>
    </div>
    <!--END:.popup -->

    <!-- .popup -->
    <div class="popup" id="popupSuccess">
        <div class="popup-inner" style="height: 480px;">
            <h2 class="popup-title element-after">
              СПАСИБО! <span class="popup-title popup-title--thin">ВАШЕ СООБЩЕНИЕ УСПЕШНО ОТПРАВЛЕНО.</span>
            </h2>

            <button type="button" id="btn_success" class="close-btn"></button>
        </div>
    </div>
    <!--END:.popup -->

    <!-- <footer id="footer" class="site-footer"></footer> -->
    <footer class="site-footer"></footer>
    <!-- END:site-footer -->

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.minjs"></script>
    <![endif]-->

    <!--[if IE 9]>
      <script type="text/javascript">
      (function setPlaceHolders(){
      var input = document.getElementsByTagName('input'); // get all text fields
      var cls = "placeholdr"; // set name of the class

      if (input) { // if fields found
        for (var i=0; i < input.length; i++) { 
          var t = input[i]; 
          var txt = t.getAttribute("placeholder");
          
          if (txt.length > 0) { // if placeholder found
            t.className = t.value.length == 0 ? t.className+" "+cls : t.className; // add class
            t.value = t.value.length > 0 ? t.value : txt; // if no value found
            
            t.onfocus = function() { // on focus
              this.className = this.className.replace(cls);
              this.value = this.value == this.getAttribute("placeholder") ? "" : this.value;
            }
          
            t.onblur = function() { // on focus out 
              if (this.value.length == 0) {
                this.value = this.getAttribute("placeholder");
                this.className = this.className+" "+cls; // add class
              }
            }
          }  
        }
      }
      })();
      </script>
    <![endif]-->
    
<?php wp_footer(); ?>

</body>

</html>