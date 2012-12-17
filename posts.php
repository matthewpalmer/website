<div class = "bigbox">
<p class = "named">Hi, I'm Matt Palmer.</p>
<p class="skilled"> I'm interested in responsive web design and development, Python, Django and photography.</p>

</div>
<!--<div class = "headercontainer">
	<div class = "header">
	
	<h1 id="one">Matthew Palmer</h1>
	<h1 id="two">Designer</h1>
	<h1 id="three">Developer</h1>
	<h1 id="blog"><a href=""></a><h1>
	
	</div>
</div>-->
<div class = "container">


	<div class = "postlist">
			
		
		
		
<?php if(has_posts()): ?>
		<ul class="items wrap">
		<span class = "recentarticles postsnip">LATEST <em><a href="">POSTS</a></em></span>
			<?php while(posts()): ?>
			
			<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><li>
				
					
					<?php echo article_title(); ?>
				
			</li></a>
			<?php endwhile; ?>
		</ul>

		<p><?php echo posts_prev(); ?> <?php echo posts_next(); ?></p>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>
			
		
		
	</div>
	<div class = "portfolioarea">
		
<span class = "recentarticles portfoliosnip">LATEST <em><a href="http://www.palmer.im/portfolio">WORKS</em></a></span>
      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-slide">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="http://placehold.it/400x300" title="Automatically generated caption"></li>
          <li><img src="http://placehold.it/500x300" title="Automatically generated caption"></li>
          <li><img src="http://placehold.it/500x200" title="Automatically generated caption"></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
      
      <!-- attach the plug-in to the slider parent element and adjust the settings as required -->
      <script class="secret-source">
        jQuery(document).ready(function($) {
          
          $('#banner-slide').bjqs({
            animtype      : 'slide',
    height        : 420,
    width         : 660,
    responsive    : true,
    randomstart   : true
          });
          
        });
      </script>

    </div>


	<div class = "shotsarea">
	<span class = "recentarticles dribbblesnip">LATEST <em><a href="http://dribbble.com/mp">SHOTS</em></a></span>
	<!--<div class="non-semantic-protector"> -->
	<h1 class="ribbon">
   <strong class="ribbon-content">Hey. Do you know anyone that has a Dribbble invite?</strong>
</h1>	
		<ul class="feed">
		
			

				</ul>
				
	<!--ribbons-->
	</div>
	<div class = "instagramarea">
			<span class = "recentarticles instagramsnip">LATEST <em><a href="http://instagram.com/matthewpalmer95">GRAMS</a></em></span>
		<div id="test"></div>
		
<script type="text/javascript">
$(document).ready(function () {
    $('#test').rssfeed('http://instagram.heroku.com/users/229211271.atom',{
        snippet: false,
        limit: 6,
    }, function(e) {
        $(e).find('div.rssBody').vTicker({
            showItems: 1,
           
        });
    });
});
</script>
</div>
	<div class = "tweetarea">
		<span class = "recentarticles tweetsnip">LATEST <em><a href="http://twitter.com/p_almer">TWEETS</a></em></span>
		<script>Chirp({
      user:'p_almer',
      max:3,
      templates: {
      	base: '<ul class="chirp">{{tweets}}</ul>',
      	tweet: '<li><p><a href="http://twitter.com/{{user.screen_name}}" title="{{user.name}} — {{user.description}}"></a> {{html}}</p><span class="meta"><time><a href="http://twitter.com/{{user.screen_name}}/statuses/{{id_str}}">{{time_ago}}</a></time> </span></li>'
      }
    })</script>
    
 
	</div>
	<div id="shotsByPlayerId">
	
	</div>
<script>
	$.jribbble.getShotsThatPlayerLikes('mp', function (playerShots) {
		var html = [];
		$.each(playerShots.shots, function (i, shot) {
			html.push('<li>');
			html.push('<a href="' + shot.url + '">');
			html.push('<img src="' + shot.image_teaser_url + '" ');
			html.push('alt="' + shot.title + '"></a></li>');
		});
			
		$('.shotsarea > ul.feed').html(html.join(''));
	}, {page: 1, per_page: 9});


</script>
<script>
$(document).ready(function() {
	
    $("#test").addClass("gramlink");
    $('.gramlink').wrap('<a href="http://instagram.com/matthewpalmer95"></a>');
    $( ".named" ).animate({
  top: "", opacity: 1
}, { duration: 1200, queue: false 
	
});
});


</script>
<script>
$(document).ready(function() {
	
        $( ".skilled" ).animate({
  left: "", opacity: 1
}, { duration: 1900, queue: false 
	
});
});

</script>
<script>
$(document).ready(function() {
	
        $( ".postlist" ).animate({
  paddingTop:"8%", opacity: 1
}, { duration: 2000, queue: false 
	
});
});

</script>
    <script src="bootstrap-carousel.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script>
    jQuery(document).ready(function($) {
    $('#banner-fade').bjqs({
        'height' : 320,
        'width' : 620,
        'responsive' : true
    });
});
</script>

<!--
<script>
$(document).ready(function() {
	
        $( ".shotsarea > ul.feed " ).animate({
  width: "100%", opacity: 1
}, { duration: 5500, queue: false 
	
});
});

</script>
<script>
$(document).ready(function() {
	
        $( " #test " ).animate({
  width: "100%", opacity: 1
}, { duration: 7500, queue: false 
	
});
});

</script>-->
