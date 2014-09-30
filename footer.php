<?php wp_footer(); ?>

<footer class="text-center">
                <div class="col-xs-12 header-links">

            <!--github-->
                <a href="https://github.com/James-Oldfield" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/github.svg" width="50px"></a>

             <!--cargo-->
                <a href="http://cargocollective.com/james-oldfield/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/cargo.svg" width="50px"></a>

             <!--instagram-->
                <a href="http://instagram.com/JOldfield_" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/instagram.svg" class="instagram" width="50px"></a>

            <!--mail-->
                <a href="mailto:hi@james-oldfield.co" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/mail.svg" width="50px"></a>

            </div>
    
    <div class="small">
        <small>&copy; <a href="/">James Oldfield</a> 2014</small>
    </div>
    
</footer>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/main.js"></script>

          <script>
           
          $(document).ready(function(){
           
                  $(".work").hide();
                  $(".projects").show();
           
              $('.projects').click(function(){
              $(".work").slideToggle();
              });
           
          });
           
          </script>

        <!--google analytics-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-52413684-1', 'auto');
          ga('send', 'pageview');

        </script>

        <!--end google analy-->
    </body>
</html>
