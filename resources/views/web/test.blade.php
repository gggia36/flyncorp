<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.3/css/lightslider.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.3/js/lightslider.min.js"></script>



<style>
.demo {
  width: 420px;
}

ul {
  list-style: none outside none;
  padding-left: 0;
  margin-bottom: 0;
}

li {
  display: block;
  float: left;
  margin-right: 6px;
  cursor: pointer;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

.preferredHeight {
  max-height: 127px;
  position: relative;
  left: 50%;
  transform: translate(-50%);
}



  }


});
    </style>



<div class="demo">
  <ul id="lightSlider">
    <li data-thumb="http://sc.reel-scout.com/up_images/2/2650782.jpg?10/24/2019 5:31:11 AM">
      <img src="http://sc.reel-scout.com/up_images/2/2650782.jpg?10/24/2019 5:31:11 AM" />
    </li>
    <li data-thumb="http://sc.reel-scout.com/up_images/1/2650811.jpg?10/24/2019 5:31:11 AM">
      <img src="http://sc.reel-scout.com/up_images/1/2650811.jpg?10/24/2019 5:31:11 AM" />
    </li>
    <li data-thumb="http://sc.reel-scout.com/up_images/5/2650815.jpg?10/24/2019 5:31:11 AM">
      <img src="http://sc.reel-scout.com/up_images/5/2650815.jpg?10/24/2019 5:31:11 AM" />
    </li>

    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-4.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-4.jpg" />
    </li>
    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-5.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-5.jpg" />
    </li>
    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-6.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-6.jpg" />
    </li>
    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-7.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-7.jpg" />
    </li>
    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-8.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-8.jpg" />
    </li>
    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-9.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-9.jpg" />
    </li>
    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-10.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-10.jpg" />
    </li>
    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-11.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-12.jpg" />
    </li>
    <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-13.jpg">
      <img src="http://sachinchoolur.github.io/lightslider/img/cS-13.jpg" />
    </li>
  </ul>
</div>


<script>
$('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 9,
    onSliderLoad: function() {


      $("img").addClass("preferredHeight");



    }


  });

    </script>
