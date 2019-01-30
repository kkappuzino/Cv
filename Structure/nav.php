 
 <div class="nav navbar navbar-right align-middle" id="myNavbar">
      <ul>
        <li><a href="#home"><i class="fas fa-home " data-text="Home"></i></a></li>
        <li><a href="#skills"><i class="fas fa-code " data-text="Skills"></i></a></li>
        <li><a href="#art"><i class="fas fa-pen " data-text="Art"></i></a></li>
        <li><a href="#me"><i class="fas fa-at" data-text="About Me"></i></a></li>
      </ul>
    </div>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>