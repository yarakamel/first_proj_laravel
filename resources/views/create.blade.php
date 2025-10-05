@extends('layouts.master')

@section('content')


<div class="card-body p-lg-17">
											<!--begin::Hero-->

											<!--end::-->
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-lg-row mb-17">
												<!--begin::Content-->
												<div class="flex-lg-row-fluid me-0 me-lg-20">
													<!--begin::Form-->
													<form class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework" id="myForm kt_careers_form">
														<!--begin::Input group-->
                                                        <meta name="csrf-token" content="{{ csrf_token() }}">

														<div class="row mb-5">
															<!--begin::Col-->
															<div class="col-md-6 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="required fs-5 fw-semibold mb-2">رقم هوية اليتيم</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" id="id_no" class="form-control form-control-solid" placeholder="" name="id_no">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row fv-plugins-icon-container">
																<!--end::Label-->
																<label class="required fs-5 fw-semibold mb-2">الإسم</label>
																<!--end::Label-->
																<!--end::Input-->
																<input type="text" id="full_name" class="form-control form-control-solid" placeholder="" name="full_name">
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
																<label class="required fs-5 fw-semibold mb-2">رقم الخيمة</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="email">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--end::Label-->
																<label class="fs-5 fw-semibold mb-2">العمر</label>
																<!--end::Label-->
																<!--end::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="Age">
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->


														<div class="d-flex flex-column mb-8">
															<label class="fs-6 fw-semibold mb-2">ملاحظات</label>
															<textarea class="form-control form-control-solid" rows="4" name="application" placeholder=""></textarea>
														</div>
														<!--end::Input group-->
														<!--begin::Separator-->
														<div class="separator mb-8"></div>
														<!--end::Separator-->
														<!--begin::Submit-->
														<button type="button" class="btn btn-primary" id="Add_btn">
															<!--begin::Indicator label-->
															<span class="indicator-label"><i class="fa-solid fa-plus"></i> إضافة </span>
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
@section('scripts')


<script>

$(function() {
    function Clear(){
        $("#id_no").val("");
        $("#full_name").val("");
       // $("#id_no").val("");
        //$("#id_no").val("");
       // $("#id_no").val("");
    }
    $(document).on("click", "#Add_btn", function () {

        var id_no = $("#id_no").val().trim();
        var name = $("#full_name").val().trim();

            if(name === "" || id_no === ""){

            Swal.fire({
                icon: 'error',
                title: 'خطأ',
                text: 'الرجاء تعبئة كل الحقول'
            });
            return;
        }

                 Swal.fire({
            title: 'هل انت متأكد من كافة البيانات؟',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'إضافة يتيم جديد',
            cancelButtonText: 'إلغاء',
        }).then((result) => {
            if(result.isConfirmed){
                var formData = new FormData();
                formData.append("id_no", id_no);
                formData.append("full_name", name);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                $.ajax({
                    type: "POST",
                    url: "/add-data",
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function (json) {
                    //console.log(json);
                    if(json.StatusCode==1){
                       Swal.fire({title: "تم!",text: json.msg,icon: "success"});
                       Clear();
                    }else {

                        Swal.fire({title: "خطأ!",text: json.msg,icon: "error"});

                }
                    },
                    error: function (json) {
                       // console.log(json);
                        Swal.fire('خطأ!', 'حاول مرة أخرى', 'error');
                    }
                });
            }
        });

    });
});
</script>
@endsection
