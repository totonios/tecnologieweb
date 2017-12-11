<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@forelse($eventi as $evento)

     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row ex_box">
				<h3 class="m_2">Our Experiance</h3>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e1.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						{{$evento->id}}
					</div>
				</a></div>
				</div>
        @empty
        <h3>No shirts</h3>
       @endforelse

	   </div>
	  </div>
  </div>
</div>

</body>
</html>
