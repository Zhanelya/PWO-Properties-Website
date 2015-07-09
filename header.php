<!-- Author: Zhanelya Subebayeva -->    
<header class="navbar-fixed-top">
	<link rel="stylesheet" href="css/nav.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script>
        ;(function($) {

  // DOM ready
  $(function() {
    
    // Append the mobile icon nav
    $('.nav-menu').append($('<div class="nav-mobile"></div>'));
    
    // Add a <span> to every .nav-item that has a <ul> inside
    $('.nav-item').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
    
    // Click to reveal the nav
    $('.nav-mobile').click(function(){
      $('.nav-list').toggle();
    });
  
    // Dynamic binding to on 'click'
    $('.nav-list').on('click', '.nav-click', function(){
    
      // Toggle the nested nav
      $(this).siblings('.nav-submenu').toggle();
      
      // Toggle the arrow using CSS3 transforms
      $(this).children('.nav-arrow').toggleClass('nav-rotate');
      
    });
      
  });
  
})(jQuery);
        </script>
		<div id="mainHeader" role="banner" class="">
                       <!-- Nav -->    
                        <nav class="col-md-12 nav-menu">
                             <!-- Logo --><a class="col-md-2 navbar-brand" href="index"><img src="images/main-logo.png" alt="PWO Properties logo"></a>
			
                              <ul class="nav-list">
                                <li class="nav-item col-md-3">
                                  <a href="/">Home</a>
                                  <!--
                                  <ul class="nav-submenu">
                                    <li class="nav-submenu-item">
                                      <a href="?=submenu-4">Submenu item 4</a>
                                    </li>
                                  </ul>
                                  -->
                                </li>
                                <li class="nav-item col-md-3">
                                  <a href="properties.php">Properties</a>
                                </li>
                                <li class="nav-item col-md-3">
                                  <a href="contact.php">Contact Us</a>
                                </li>
                              </ul>
                              <div class="col-md-1"></div>
                                  
                             
                        </nav>
                        <!-- /Nav -->
                        
                </div>
                     
</header>
<div id="share-btns">
    <div class="row">
    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
    <div class="row">
        <br>
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-share-button" data-href="https://pwoproperties.com/" data-layout="button_count"></div>
    </div>
</div>