<?php
$pagina = basename(__FILE__);
//$classBody = "contact-pg";
$page_title = "Shalux Lighting | Lo mejor en iluminación";
ob_start();
?>	

<section>
			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs img13">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			               Contáctanos
			            </h1>
			            <div class="description">
                    		<p> Con gusto atenderemos tus dudas, recibiremos tus comentarios y te brindaremos el servicio que requieres.<br>
                            Ponemos a tu alcance el medio de comunicación más cómodo para ti.</p>
                    	</div>                       
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- Contact Section End -->
			<div class="rs-contact contact-style3 pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container custom2">
			        <div class="row">
			            <div class="col-lg-5 md-mb-50">
			              	<div class="rs-contact-box">
				              	<div class="sec-title2 mb-40">
	  								<div class="brush-content mb-20">
	  									<img src="assets/images/brush.png" alt="">
	  									<span class="sub-text">Contáctanos</span>
	  								</div>
	  								<h2 class="title small pb-15">
                                      Ponerse en contacto
	  								</h2>
	  								<div class="desc">

                                </div>
	  							</div>
	  							<div class="address-item mb-30">
	  								<div class="address-icon">
	  									<img src="assets/images/contact/style1/1.png" alt="">
	  								</div>
	  								<div class="address-content">
	  									<span class="label">Visítanos</span>
                                          <a class="des" href="https://goo.gl/maps/Hsp2rWWvgftvwXfv7" target="_blank">
                                          Av. Guillermo Dansey Nº 331- Ofic. 213 -
Cercado de Lima
                                        </a>
	  								</div>
	  							</div>
	  							<div class="address-item mb-30">
	  								<div class="address-icon">
	  									<img src="assets/images/contact/style1/2.png" alt="">
	  								</div>
	  								<div class="address-content">
	  									<span class="label">Envíenos un correo electrónico:</span>
                                          <a class="des" href="mailto:ventas@shaluxlighting.com">ventas@shaluxlighting.com</a>
	  								</div>
	  							</div>
	  							<div class="address-item">
	  								<div class="address-icon">
	  									<img src="assets/images/contact/style1/3.png" alt="">
	  								</div>
	  								<div class="address-content">
	  									<span class="label">Teléfono:</span>
                                          <a class="des" href="tel:+51946574347">946 574 347</a>
	  									 <br>
                                           <a class="des" href="tel:+51954775210">954 775 210</a>
	  								</div>
	  							</div>
			              	</div>
			            </div>
			            <div class="col-lg-7 pl-50 md-pl-15">
			                <div class="contact-drop-line">
			                	<div class="heading-inner-title mb-30">
			                		<h2 class="title">Escríbanos</h2>
			                	</div>
			                    <div id="form-messages"></div>
			                    <form id="contact-form" method="post" action="http://shaluxlighting.com/php/mail.php">
			                        <fieldset>
			                            <div class="row">
			                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="text" id="first_name" name="first_name" placeholder="Nombre" required="">
			                                </div> 
											<div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="text" id="rut" name="rut" placeholder="RUC" required="">
			                                </div>
											<div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="text" id="empresa" name="empresa" placeholder="Empresa" required="">
			                                </div>
											<div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required="">
			                                </div> 
			                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="email" id="email_address" name="email_address" placeholder="E-Mail" required="">
			                                </div>   
			                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="text" id="phone_number" name="phone_number" placeholder="Teléfono" required="">
			                                </div>   
			                                <div class="col-lg-12 mb-30">
			                                    <textarea class="from-control" id="message" name="message" placeholder="Su mensaje aquí" required=""></textarea>
			                                </div>
			                            </div>
			                            <div class="btn-part">                                            
			                               	<div class="form-group mb-0">
                                                <p class="submit-btn submit-btn3">
                                                	<input type="submit" value="Enviar Ahora">
                                                </p>
                                            </div>
			                            </div> 
			                        </fieldset>
			                    </form> 
			                </div>
			            </div>
			        </div>
			        <div class="map-canvas pt-120 md-pt-80">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.974468253185!2d-77.04902558326503!3d-12.045277621838023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9eb574b2287%3A0xf1f838b12421fae4!2sShalux%20Lighting%20Peru!5e0!3m2!1ses!2spe!4v1675910011386!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    			        </div> 
			    </div> 
			</div>
			<!-- Contact Section End -->


</section>






<?php
$page_content = ob_get_contents();
ob_end_clean();

//Extras
ob_start();
?>

<?php
$extras=ob_get_contents();
ob_end_clean();

//Apply the template
include("template.php");
?>