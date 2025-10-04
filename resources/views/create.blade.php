@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
<div class="card-body p-lg-17">
											<!--begin::Hero-->

											<!--end::-->
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-lg-row mb-17">
												<!--begin::Content-->
												<div class="flex-lg-row-fluid me-0 me-lg-20">
													<!--begin::Form-->
													<form action="m-0" class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework" method="post" id="kt_careers_form">
														<!--begin::Input group-->
														<div class="row mb-5">
															<!--begin::Col-->
															<div class="col-md-6 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="required fs-5 fw-semibold mb-2">First Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="first_name">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row fv-plugins-icon-container">
																<!--end::Label-->
																<label class="required fs-5 fw-semibold mb-2">Last Name</label>
																<!--end::Label-->
																<!--end::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="last_name">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<!--begin::Col-->
															<div class="col-md-6 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="required fs-5 fw-semibold mb-2">Email</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="email">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--end::Label-->
																<label class="fs-5 fw-semibold mb-2">Mobile No</label>
																<!--end::Label-->
																<!--end::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="mobileno">
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<!--begin::Col-->
															<div class="col-md-6 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="required fs-5 fw-semibold mb-2">Age</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="age">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row fv-plugins-icon-container">
																<!--end::Label-->
																<label class="required fs-5 fw-semibold mb-2">City</label>
																<!--end::Label-->
																<!--end::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="city">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Col-->
														</div>

														<div class="d-flex flex-column mb-8">
															<label class="fs-6 fw-semibold mb-2">Application</label>
															<textarea class="form-control form-control-solid" rows="4" name="application" placeholder=""></textarea>
														</div>
														<!--end::Input group-->
														<!--begin::Separator-->
														<div class="separator mb-8"></div>
														<!--end::Separator-->
														<!--begin::Submit-->
														<button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
															<!--begin::Indicator label-->
															<span class="indicator-label">Apply Now</span>
															<!--end::Indicator label-->
															<!--begin::Indicator progress-->
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															<!--end::Indicator progress-->
														</button>
														<!--end::Submit-->
													</form>
													<!--end::Form-->
													<!--begin::Job-->

													<!--end::Job-->
												</div>
												<!--end::Content-->
												<!--begin::Sidebar-->

												<!--end::Sidebar-->
											</div>
											<!--end::Layout-->
											<!--begin::Section-->

											<!--end::Section-->
											<!--begin::Card-->

											<!--end::Card-->
										</div>
@endsection


