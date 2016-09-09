<script>
$(function() {  
        //TODO: embed in a JS script and add this to the head section
        var scroll_display = true;

        $(window).scroll(function() {

                if ($(window).scrollTop() == 0) {
                        scroll_display = true;
                        $('#header').removeClass( "mini");

                }else{
                        if (scroll_display == true){
                                $('#header').addClass("mini");
                                scroll_display = false;
                        }
                }
        });
        
        //Smooth scrolling
        $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
                        }
                }
        });
        
        
        //Navigation script
        $('li:nth-of-type(2)','.dropdown-menu').hover(function() {
                $(this).parent().parent().addClass('first-active')
        }, function() {
                $(this).parent().parent().removeClass('first-active')
        });

        $('a','.dropdown-menu').focus(function() {
                $(this).parent().parent().addClass('nav-opened');
        });

        $('li:nth-of-type(2)','.dropdown-menu').focus(function() {
		$(this).parent().parent().addClass('first-active')
	});
        
        $('a:last','.dropdown-menu').blur(function() {
                $(this).parent().parent().removeClass('nav-opened');
        });

        $('li:nth-of-type(2)','.dropdown-menu').blur(function() {
                $(this).parent().parent().removeClass('nav-opened');
                $(this).parent().parent().removeClass('first-active')
        });

         jQuery.fn.open_nav = function() {
                if (!$(this).hasClass('active')) {
                        $('body, html').addClass('nav-open');
                        $(this).addClass('active');
                } else {
                        $('body, html').removeClass('nav-open');
                        $(this).removeClass('active');
                }
        };

         jQuery.fn.open_search = function(el) {
                if (!$(el).hasClass('active')) {
                        $('body, html').removeClass('nav-open');
                        $(el).addClass('active');
                } else {
                        $(el).removeClass('active');
                }
        };

        $(document).keyup(function(e) {
                if (e.keyCode == 27) {
                        $('body, html').removeClass('nav-open search-open');
                        $('.hamburger').removeClass('active');
                }
        });
        
        $('.hamburger').click(function(){
        $(this).open_nav();
    });
        
        $('nav li > a').click(function(){
        $('body, html').removeClass('nav-open');
                        $('.hamburger').removeClass('active');
    });
        
});
        </script>

<div id="header" class="simple-header" >
        <div class="container" >
                <div class="column" >
                        <a class="float_left home_button" href="/" ></a>
                        <nav id="navigation" class="float_right collapse navbar-collapse"  >
                                <ul id="menu-primary-navigation" class="nav navbar-nav">
                                        <li><a href="/#about_1">About</a></li>
                                        <li><a href="/#news" >News</a></li>
                                        <li><a href="/#partners" >Partners</a></li>
                                        <li><a href="/terms" >Terms</a></li>
                                </ul>
                        </nav>
                        <button type="button" class="hamburger caf" data-func="open_nav">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="sr">Toggle navigation</span>
                        </button>
                </div>
        </div>
</div>



