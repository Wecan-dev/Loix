<?php get_header(); ?>

<div class="blog-page" style="background-color: #fff!important; ">

  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/productos.png);">
    <div class="mask-blog">
      <h3>PRODUCTOS</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod
      tempor incididunt ut labore</p>
         <div id="section01" class="demo">
          <a href="#donacion"><span></span></a>
        </div>
    </div>
  </div>

  
<section class="shop-content">
<div class="shop-flex">
	<div class="filter">


    <div class="categories-filter">
    	<p class="categories-filter__title" >PRECIO</p>
<form method="get" action="">
	<div class="price_slider_wrapper">
		<div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style=""><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 76.6819%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 76.6819%;"></span></div>
		<div class="price_slider_amount" data-step="10">
			<input type="text" id="min_price" name="min_price" value="15820" data-min="10000" placeholder="Precio mínimo" style="display: none;">
			<input type="text" id="max_price" name="max_price" value="46210" data-max="184500" placeholder="Precio máximo" style="display: none;">
						<button type="submit" class="button">Filtrar</button>
			<div class="price_label" style="">
				Precio: <span class="from">$10.000</span> — <span class="to">$143.810</span>
			</div>
						<div class="clear"></div>
		</div>
	</div>
</form>
    </div>

    <div class="categories-filter">
    	<p class="categories-filter__title">Talla</p>
	<ul class="cat-list">
 <li class="color-check">
        <input type='checkbox' value='1' name='radio' id='radio1'/>
       <label for='radio1'><span class="color-radio"></span></label> Grande
    </li>
    <li class="color-check">
        <input type='checkbox' value='2' name='radio'  id='radio2'/>
        <label for='radio2'><span class="color-radio2"></span></label> Mediano   </li>
    <li class="color-check">
        <input type='checkbox' value='3' name='radio'  id='radio3'/>
        <label for='radio3'><span class="color-radio2"></span></label> Pequeño
    </li>
</ul>
    </div>


          <div class="categories-filter">
    	<p class="categories-filter__title" >Color</p>
	<ul class="cat-list">

    <li class="color-check">
        <input type='checkbox' value='1' name='radio' id='radio4'/>
       <label for='radio4'><span class="color-radio"></span></label> Rojo
    </li>
    <li class="color-check">
        <input type='checkbox' value='2' name='radio'  id='radio5'/>
        <label for='radio5'><span class="color-radio2"></span></label> Azul    </li>
    <li class="color-check">
        <input type='checkbox' value='3' name='radio'  id='radio6'/>
        <label for='radio6'><span class="color-radio2"></span></label> Verde
    </li>
</ul>
    </div>


    <div class="categories-filter">
    	<p class="categories-filter__title" >Categorias</p>
	<ul class="cat-list">

    <li class="color-check">
        <input type='checkbox' value='1' name='radio' id='radio7'/>
       <label for='radio7'><span class="color-radio"></span></label> Start
    </li>
    <li class="color-check">
        <input type='checkbox' value='2' name='radio'  id='radio8'/>
        <label for='radio8'><span class="color-radio2"></span></label> Elite    </li>
    <li class="color-check">
        <input type='checkbox' value='3' name='radio'  id='radio9'/>
        <label for='radio9'><span class="color-radio2"></span></label> Memories
    </li>
    <li class="color-check">
        <input type='checkbox' value='3' name='radio'  id='radio10'/>
        <label for='radio10'><span class="color-radio2"></span></label> Essentials
    </li>
</ul>
    </div>
	</div>
	<div class="cards-shop">
    <div class="filter-product">
    <p class="show-results">View as </p>

    <p class="show-results">Ordenar por </p>
            </div>

		<div class="cards-shop-flex">
				
        <div class="block4 card-product">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="icon-heart">					
					  <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>  
                    <div class="discount">					
                    <div class="discount-p">
                    <p>20%</p>
                    </div>
					</div>  
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>

        <div class="block4 card-product">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>
        <div class="block4 card-product">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>
        <div class="block4 card-product">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>
        <div class="block4 card-product">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>
        <div class="block4 card-product">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>
				</div>
		</div>
	</div>
</div>
</section>

<style type="text/css">


</style>
<script type="text/javascript">


$('.nav-tabs .nav-link').on("click.bs.dropdown", function (e) { 
    $(this).tab('show'); 
    e.stopPropagation(); 
});

 $(function() {
$( "#slider-range" ).slider({
range: true,
min: 130,
max: 500,
values: [ 130, 250 ],
slide: function( event, ui ) {
$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
}
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
" - $" + $( "#slider-range" ).slider( "values", 1 ) );
});
</script>
<?php get_footer(); ?>