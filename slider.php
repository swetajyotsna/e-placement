<div class="wrapper row3">
  <div id="featured_slide">
    <!-- ####################################################################################################### -->
    <ol>
      <li>
        <h2><span>Slide 1</span></h2>
        <div><img src="image/DSCN0493.jpg" height="350" width="100%" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 2</span></h2>
        <div><img src="image/DSCN0500.jpg" height="350" width="100%" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 3</span></h2>
        <div><img src="image/DSCN0496.jpg" height="350" width="100%" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 4</span></h2>
        <div><img src="image/DSCN0515.jpg" height="350" width="100%" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 5</span></h2>
        <div><img src="image/DSCN0501.jpg" height="350" width="100%" alt="" /></div>
      </li>
    </ol>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- liteAccordion is Homepage Only -->
<script type="text/javascript" src="scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script>
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
	
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title

    firstSlide: 1, // displays slide (n) on page load
	activateOn: "click", // click or mouseover
    autoPlay: true, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides

    slideSpeed: 100, // slide animation speed
    cycleSpeed: 2000, // time between slide cycles
});
</script>