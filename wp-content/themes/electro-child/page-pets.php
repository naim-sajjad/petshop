<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>
<div class="wrapper" id="page-wrapper" style="width:100%">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	<section>
		<div class="row">
			<div class="col-md-12 p-0">
				<div class="panel-group accordion pet_accordian" id="accordionExample" >
					<div class="panel panel-default pet_indiviual">
						<div class="panel-heading" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<h3 class="panel-title">
								<a class="">
									<span class="service_pet_type"></span> Name <span class="service_pet_name">Pet</span>, For One Hour Care Service Fee Is <span class="service-fee"> (Service Fee) </span> THB. Which Start From Now.

								</a>
								<span class="plus-icon"><i class="delete_pet fa fa-trash" aria-hidden="true"></i> <i class="fa fa-plus" aria-hidden="true"></i></span>
							</h3>

						</div>
						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="panel-body">
								<div class="row user-tab-box">
									<div class="col-md-8">
										<div class="row pet-type-row">
											<label class="col-sm-2 control-label">
												<strong> Pet Type: </strong>
											</label>
											<div class="col-md-8">
												<div class="form-group">
													<input type="text" value="count" name="counter[]" hidden>

													<select  id="pet_type" name="pet_type[]" class="form-control pet_type" data-id="" placeholder="Select Pet Type" >
														<option value="-1" selected="">--Please Select--</option>
													

														</select>
														<span class="text-danger error select-error">Please Fill out this Field</span>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-sm-2 control-label">
													<strong> Name: </strong>
												</label>
												<div class="col-md-8">
													<div class="form-group">
														<div class="select-text-box">

															<select id="pet_name" name="pet_name[]" class="form-control pet_name" placeholder="pet name">
																<option value="-1" selected="">--Please Select--</option>
															</select>
															<span class="text-danger error select-error">Please Fill out this Field</span>
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<label class="col-sm-2 control-label">
													<strong>Kind: 
													</strong>
												</label>
												<div class="col-md-8 ">
													<div class="form-group">
														<div class="select-text-box">

															<select  id="pet_kind"  name="pet_kind[]" class="form-control   pet_kind" placeholder="Select Pet Breed"  ><option value="-1" selected="">--Please Select--</option></select>
															<span class="text-danger error select-error">Please Fill out this Field</span>
														</div>         
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-sm-2 control-label">
													<strong>Sex: 
													</strong>
												</label>
												<div class="col-md-8 ">
													<div class="form-group row ml-0 mr-0">
														<select class="form-control pet_gender" id="sex" name="pet_gender[]"> 
															<option value="-1" selected="">--Select Gender--</option>
															<option value="male" =>Male</option>
															<option value="female" >Female</option>
															<option value="other" >Other</option>
														</select>
														<span class="text-danger error select-error">Please Fill out this Field</span>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-sm-2 control-label">
													<strong>DOB: 
													</strong>
												</label>
												<div class='col-sm-8'>
													<div class="form-group pet_dob_wrapper">
														<div  class="input-group date input_date_wrapper">
															<input  class="form-control pet_dob dob" required type="text" readonly name="pet_dob[]" />
															<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
														</div>
														<div class="age" id="age">
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-sm-2 control-label">
													<strong>Color: 
													</strong>
												</label>
												<div class="col-md-8 ">
													<div class="form-group ">
														<div class="select-text-box">
															<select  id="color"  name="pet_color[]" class="form-control pet_color" placeholder="pet color"><option value="-1" selected="">--Please Select--</option></select>																							   <span class="text-danger error select-error">Please Fill out this Field</span>		
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-sm-2 control-label">
													<strong>Chip: </strong>
												</label>
												<div class="col-md-8">
													<div class="form-group">
														<div class="select-text-box">
															<select  id="chip"  name="chip[]" class="form-control chip" placeholder="Select Chip">
																<option value="-1" selected="">--Please Select--</option>
																<?php 
// $exceldatas = unique_multidim_array($exceldatas , "chip"); 
																?>
																@foreach($exceldatas as $exceldata)
																<option  value="{{$exceldata->number}}" data-id="{{$exceldata->id}}">
																	{{$exceldata->number}}
																</option>
																@endforeach
															</select>
															<span class="text-danger error select-error">Please Fill out this Field</span>																							
														</div>
														<!-- <input type="number"  id="chip" name="chip[]" class="form-control" required placeholder="chip"> -->
														<div class="chip-error text-danger"></div></div>
													</div>
												</div>
												<div class="row">
													<label class="col-sm-2 control-label">
														<strong>Expected  Date: </strong>
													</label>
													<div class="col-md-8">
														<div class="form-group pet_dob_wrapper">
															<div class="input-group input_date_wrapper">
																<input type="text"  id="expected_date" name="expected_date[]" class="form-control expected_date" required placeholder="Date ">
																<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
															</div>
															<div class="expected_date-error ">Expected Day :10 days 0 months 0 years</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12 col-md-12 ">
														<h3><span class="cust_name"> </span> Where Did You Buy This <span class="service_pet_name">Pet</span></h3>
													</div>
												</div>
												<div class="row">
													<label class="col-sm-2 control-label">
														<strong>Let Us Know: </strong>
													</label>
													<div class="col-md-8">
														<div class="form-group">
															<label class="" > <input type="radio" class="buy_shop"  name="buy_shop0"   id="other_shop" value="Buy from other Shop"  >
																I Did Not Buy This <span class="service_pet_name">Pet</span> From Emirate Animal Shop </label><br/>
																<label > <input type="radio" class="buy_shop"  value="Buy from EAS" name="buy_shop0" required   >
																	I Bought This <span class="service_pet_name">Pet</span> from Emirate Animal Shop </label>
																	<br/>
																	<span class="text-danger error select-error">Please Fill out this Field</span>	
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12 col-md-12 ">
																<h3><span class="service_pet_name">Pet</span> Is Vaccinated Or No?</h3>
															</div>
														</div>
														<div class="row">
															<label class="col-sm-2 control-label">
																<strong>Let Us Know: </strong>
															</label>
															<div class="col-md-8">
																<div class="form-group">

																	<label class="" for="yes_vaccinated"> <input type="radio" id="yes_vaccinated" class="vaccinated" name="vaccinated0"  value="yes_vaccinated" >
																		Yes <span class="service_pet_name">Pet</span> Is Vaccinated</label>
																		<br/>

																		<label class="" for="no_vaccinated"> <input type="radio" id="no_vaccinated"  name="vaccinated0" class="vaccinated"  value="no_vaccinated" required>
																			No <span class="service_pet_name">Pet</span> Not Vaccinated </label>

																			<br/>
																			<span class="text-danger error select-error">Please Fill out this Field</span>	
																		</div>
																	</div>
																</div>
																<div class="pet_vac_box">

																</div>
															</div>
															<div class="col-md-4 col-sm-12">
																<div class="row">

																	<div class="col-md-6">
																		<div class="form-group first-img-box">
																			<i class="first-cam-icon fas fa-camera"  data-toggle="modal" data-size="modal-lg" data-target="#firstCameraModal"></i>
																			<input type="file" id="" name="pet_img[]" required="" class="dropify"  />
																		</div>
																	</div>

																</div>
															</div> 
														</div> 
														<div class="pet_vac_detailbox">

														</div>

														<div class="addmore-vac mb-3">
															<div class="panel-group vaccination_accordian" id="vaccination_accordian" >
															</div>
														</div>
														<div class="row ">
															<div class="col-sm-12 col-md-12 ">
																<h5 style="color:#2830d1;">Emirate Animal Shop Provide Services For Your Pet, Dear Customer Apply Your Favorite Services From The Following Services For Your <span class="service_pet_name">pet</span> Note This All Services Fee Not Including In The Pet Care Service Fee. Your <span class="service_pet_name">pet</span> For One Hour Care Service Fee Is </h5>
															</div>
														</div>
														<div class="row user-tab-box ">
															<div class="col-md-8">
																<div class="row mt-2">
																	<label class="col-sm-2 control-label">
																		<strong>Select Services For <span class="service_pet_name">Pet</span>: </strong>
																	</label>
																	<div class="col-md-8">
																		<div class="form-group">

																			<label class="" for="travel_board"> <input type="radio" id="travel_board" class="travel_detail" name="travel_detail0"  value="travel_board" >
																				I Want Boarding My <span class="service_pet_name">Pet</span></label>
																				<br/>

																				<label class="" for="in_country"> <input type="radio" id="in_country"  name="travel_detail0" class="travel_detail"  value="in_country" >
																					I Want My <span class="service_pet_name">Pet</span> Travel In My Country</label>

																					<br/>
																					<span class="text-danger error select-error">Please Fill out this Field</span>
																				</div>
																			</div>
																		</div>
																	</div>

																</div>



																<div class="clearfix"></div>
																<div class="row services_accordian">

																	<div class="accordion " >

																	</div>
																</div>


															</div>
														</div>
													</div>


												</div>
											</div>
										</div>
									
									<button type="button"  name="save_pet" class="btn-save add-more"><i class="far fa-save"></i> Add More Pet's</button>

								</section>		


			<button class="add_to_cart">Add to cart</button>
	</div>
</div>
<?php get_footer(); ?>
<script>
	jQuery(document).ready(function(){
		var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
		jQuery(".add_to_cart").click( function(e) {
			e.preventDefault(); 
			productID = jQuery("#productID").val();
			price = jQuery("#price").val();
			jQuery.ajax({
				method : "POST",
				dataType : "json",
				url : ajaxurl,
				data : {action: "wdm_add_user_custom_data_options", productID : productID, price: price},
				success: function(response) {
					
						console.log(response);
					
				}
			});
		});
		
	});
</script>