@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">



							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">

													<input type="text" id="searchName" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="بحث من خلال الإسم" />
												<button type="button" id="Searchbtn" class="btn btn-light-primary me-3">
													<i class="ki-duotone ki-magnifier fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>بحث</button>
                                                    <button type="button" id="Clearbtn" class="btn btn-secondary me-3">
													<i class="ki-duotone ki-chart fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>تفريغ</button>
                                                </div>
												<!--end::Search-->
											</div>
                                            <div class="card-title">
										<a href="/create" class="btn btn-sm btn-success ms-3 px-4 py-3"><i class="ki-duotone ki-plus-circle">
 <span class="path1"></span>
 <span class="path2"></span>
</i> إضافة يتيم </a>
				<button data-bs-toggle="modal" data-bs-target="#kt_modal_upload" class="btn btn-sm btn-success ms-3 px-4 py-3"><i class="ki-duotone ki-folder-up">
 <span class="path1"></span>
 <span class="path2"></span>
</i> إضافة ملف Excel </button>
</div>
										</div>

										<!--end::Card header-->
										<!--begin::Card body-->

										<!--end::Card body-->
									</div>
			<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="orphansTable" style="width:100%">
												<thead>
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                     <th class="min-w-125px">#</th>
														<th class="min-w-125px">رقم هوية اليتيم</th>
														<th class="min-w-125px">إسم اليتيم</th>


														<th class="text-end min-w-70px">خيارات</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->

					<!--end:::Main-->


@endsection
@section('scripts')
<script>
$(document).ready(function () {
    let table = $('#orphansTable').DataTable({

        // إذا بتحبي الـ backend يرجع JSON كامل بدون paging
paging: true, pageLength: 10,
     processing: true,
    serverSide: false,
    paging: true,
    //pageLength: 10,
    lengthChange: true,
        ajax: {
            url: "/orphans/data",
            type: "GET",
            data: function (d) {
                d.searchName = $('#searchName').val(); // نضيف قيمة البحث للـ request
            },
            dataSrc: "data"
        },
        columns: [
            { data: "id" },
            { data: "id_no" },
            { data: "full_name" },
            {
                data: null,

                render: function (data, type, row) {
                    return `
                        <button data-id="${row.id}" title="تعديل"
                                data-bs-toggle="modal"
                                data-bs-target="#kt_modal_update"
                                class="btn btn-sm btn-primary btn-edit">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button data-id="${row.id}" title="حذف"
                                class="btn btn-sm btn-danger btn-delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    `;
                }
            }
        ]


    });
console.log(table.settings()[0]);

         $('#Searchbtn').on('click', function () {
        table.ajax.reload(); // يعيد تحميل الداتا مع قيمة البحث
    });
    // استدعاء البيانات عند تحميل الصفحة
    //loadOrphans();

    // دالة تحميل العملاء

    $(document).on("click", ".btn-edit", function() {
    let id = $(this).data("id");

    // جيبي البيانات من الـ API (show by id)
    $.ajax({
        url: "/orphansedit/" + id,
        type: "GET",
        success: function(response) {
                   // عبّي الفورم
            $("#edit_id").val(id);
            $("#edit_id_no").val(response.id_no);
            $("#edit_full_name").val(response.full_name);

            // افتحي المودال
            $("#kt_modal_update").modal("show");
        }
    });
});
$("#saveEditBtn").click(function() {
    let id = $("#edit_id").val();
    let data = {
        id_no: $("#edit_id_no").val(),
        full_name: $("#edit_full_name").val()
    };
    $.ajax({
        url: "/orphansupdate/" + id,
        type: "PUT", // أو POST لو عاملة Route خاص
        data: data,
       success: function(response) {

            // سكري المودال
            // جددي البيانات بالجدول

            if (response.success) {
                $("#kt_modal_update").modal("hide");
                Swal.fire("تم!", response.message, "success");
                table.ajax.reload(null, false); // refresh
    } else {
        Swal.fire("خطأ!", response.message, "error");
    }
        },
        error: function() {
            Swal.fire("خطأ!", "لم يتم تعديل البيانات", "error");
       }
    });
});
$(document).on("click", ".btn-delete", function(e) {
    e.preventDefault();
    let orphanId = $(this).data("id");
console.log(orphanId);
    Swal.fire({
        title: "هل أنت متأكد؟",
        text: "لن تتمكن من التراجع عن هذه العملية!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "نعم، احذف!",
        cancelButtonText: "إلغاء"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/orphansDel/" + orphanId,  // مسار الحذف في لارافيل
                type: "DELETE",

                success: function(response) {
                                if (response.success) {

                    Swal.fire("تم الحذف!", response.message, "success");

                    // تحديث الجدول مباشرة
                    table.ajax.reload(null, false);
                                }else {
        Swal.fire("خطأ!", response.message, "error");
    }
                },
                error: function(xhr) {
                    Swal.fire("خطأ!", "حدث خطأ أثناء الحذف", "error");
                }
            });
        }
    });
});
$(document).on("click", "#Clearbtn", function(e) {
$("#searchName").val("");
  table.ajax.reload(null, false);
});


$('#importForm').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);
console.log(formData);
    $.ajax({
        url: '/import',
        type: 'POST',
        data: formData,
        processData: false, // لازم مع FormData
        contentType: false, // لازم مع FormData
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: 'تم!',
                text: response.message || 'تم استيراد الأيتام بنجاح',
            });

            // إعادة تحميل الجدول
            $('#orphansTable').DataTable().ajax.reload();
        },
        error: function(xhr) {
            Swal.fire({
                icon: 'error',
                title: 'خطأ',
                text: xhr.responseJSON?.message || 'حدث خطأ أثناء رفع الملف'
            });
        }
    });
});

});

</script>
		<!--end::Custom Javascript-->

@endsection
