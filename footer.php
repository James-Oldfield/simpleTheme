<?php wp_footer(); ?>
    
      <footer>
        
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

          <script type="text/javascript">
            var str = 
            "<p>Hi<span>.</span><br>My name's James<span>.</span><br>I'm a freelance web developer and designer based in London, UK.<br>Feel free to check out some of my <a href='/work'><span>work</span></a>, read my <a href='/blog'><span>blog</span></a> or <a href='mailto:hi@james-oldfield.co'><span>hire me</span></a>.</p>",
                i = 0,
                isTag,
                text; 

            (function type() {
                text = str.slice(0, ++i);
                if (text === str) return;

                document.getElementById('type').innerHTML = text;

                var char = text.slice(-1);
                if( char === '<' ) isTag = true;
                if( char === '>' ) isTag = false;

                if (isTag) return type();
                setTimeout(type, 50);

            }());
          </script>

      </footer>

    </body>
</html>
