$(document).ready(function(){var t=new Waypoint.Sticky({element:$(".navbar-wrapper")[0]});$("header").waypoint(function(t){$(this.element).toggleClass("shrink-header","down"===t)},{offset:-55}),$(".carousel").carousel({interval:15e3}),$.stellar({horizontalScrolling:!1}),$(".toggle label").on("click",function(){var t=$(this).next(".answer");$(t).is(":visible")?$(this).parent().removeClass("active"):$(this).parent().addClass("active"),$(t).slideToggle(300)}),$("a[rel^='prettyPhoto']").prettyPhoto({slideshow:5e3,autoplay_slideshow:!1,show_title:!1,theme:"light_square",social_tools:!1,overlay_gallery:!1}),$(".toggle-portfolio").click(function(t){t.preventDefault(),$("a[rel^='prettyPhoto']:first").click()}),$(".line-graph").waypoint(function(){$(".graph-item .animated-bar").each(function(){var t=$(this).attr("aria-valuenow");$(this).width(t+"%")})},{offset:400}),$(".animated.repeat").on("click",function(){$(this).addClass("clicked")}),$("footer").waypoint(function(){$(".scroll-to-top").toggleClass("visible")},{offset:500}),$(".scroll-to-top").on("click",function(){return $("html, body").animate({scrollTop:0},500),!1}),$("a.style-toggle").on("click",function(t){$("#style-switcher").toggleClass("open"),t.preventDefault()}),$("#style-switcher li a").click(function(t){$("link.switch-style").attr("href",$(this).attr("rel")),t.preventDefault()}),$("#style-switcher .options li a").on("click",function(t){t.preventDefault(),$(this).parent().siblings().find("a").removeClass("active"),$(this).addClass("active");var e=$(this).data("background-color");"navbar-dark"===e?$(".navbar-wrapper").addClass("dark"):"navbar-light"===e?$(".navbar-wrapper").removeClass("dark"):"footer-light"===e?$(".footer-top").addClass("light"):$(".footer-top").removeClass("light")}),$("#portfolio-container").mixItUp(),$(".portfolio .controls a").on("click",function(t){t.preventDefault()})});