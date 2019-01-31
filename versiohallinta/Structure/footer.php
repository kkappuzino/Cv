</body>
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 col-sm-6 ml-0 ml-sm-3">
                <h2> This website<br> is</h2>
                <div class="c-progress-circle" id="circle" data-percentage="67">
                    
                    <svg class="c-progress-circle__svg">
                        <defs>
                            <linearGradient id="gradient">
                                <stop offset="0%" stop-color="#FFf" />
                                <stop offset="100%" stop-color="#FF1900" />
                            </linearGradient>
                        </defs>
                        <circle class="c-progress-circle__bar" r="90" cx="50%" cy="50%" stroke="url(#gradient)"></circle> 
                    </svg>
                    <br><br>
                    <h2> Finished</h2>
                </div>
            </div>
            <div class="col col-12 col-sm-12 align-right">
                <p><i class="far fa-copyright"></i> All rights reserved 2019</p>
            </div>
        </div>
    </div>
</div>
<script>
var progressCircles = document.querySelectorAll('.c-progress-circle');

setTimeout(function(){
  for(var i=0; i < progressCircles.length; i++) {
    var circle = progressCircles[i],
        val = Number(circle.getAttribute('data-percentage')),
        bar = circle.querySelectorAll('.c-progress-circle__bar')[0];

    if (isNaN(val)) {
      val = 100;
    }
    else {
      var r = bar.getAttribute('r');
      var c = Math.PI*(r*2);

      if (val < 0) { val = 0;}
      if (val > 100) { val = 100;}

      var pct = ((100-val)/100)*c;

      bar.style.strokeDashoffset = pct;
      bar.setAttribute('data-percentage', val);
    }
  }
}, 500);
</script>

<!--

<div class="c-progress-circle  c-progress-circle--sm" data-percentage="50">
  <svg class="c-progress-circle__svg">
    <circle class="c-progress-circle__bar" r="40" cx="50%" cy="50%" stroke="url(#gradient)"></circle> 
  </svg>
</div>
<div class="c-progress-circle  c-progress-circle--sm" data-percentage="89">
  <svg class="c-progress-circle__svg">
    <circle class="c-progress-circle__bar" r="40" cx="50%" cy="50%" stroke="url(#gradient)"></circle> 
  </svg>
</div>
<div class="c-progress-circle  c-progress-circle--sm" data-percentage="77">
  <svg class="c-progress-circle__svg">
    <circle class="c-progress-circle__bar" r="40" cx="50%" cy="50%" stroke="url(#gradient)"></circle> 
  </svg>
</div>
