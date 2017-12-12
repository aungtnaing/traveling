@extends('layouts.default')
@section('content')
<div class="clearfix"></div>
<section id="page-title">

	<div class="container clearfix">
		<h1>Contact Us</h1>

	</div>

</section>
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">


			

			<h3>Send us an Email</h3>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">Wordpress</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send 
                                                           Message</button>
								</div>

							</form>
						</div>


				</div>

			</div>

		</section>
		@stop
