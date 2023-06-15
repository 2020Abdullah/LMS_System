@extends('layouts.backend.dashboard')

@section('content')
<div class="content-body">
    <!-- head page title -->
    <div class="container-fluid">
        <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
            <h3 class="font-w600 title mb-2 mr-auto">المراحل الدراسية</h3>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">المراحل الدراسية</h3>
                <button type="button" class="btn btn-rounded btn-info mb-2" data-toggle="modal" data-target="#createGrade">
                    <span class="btn-icon-left text-info">
                        <i class="fa fa-plus color-info"></i>
                    </span>
                    إنشاء مرحلة
                </button>   
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>اسم المرحلة</td>
                            <td>الحالة</td>
                            <td>ملاحظات</td>
                            <td>العمليات</td>
                        </tr>
                        @forelse ($grades as $grade)
                            <tr>
                                <td>{{ $grade->Name_ar }}</td>
                                <td>{{ $grade->status == 1 ? 'مفتوح' : 'مغلق' }}</td>
                                <td>{{ $grade->Notes }}</td>
                                <td>
                                    <a href="#" data-id="{{ $grade->id }}" data-name="{{ $grade->Name_ar }}" data-info="{{ $grade->Notes }} " data-toggle="modal" data-target="#editGrade" class="btn light btn-info editBtn">تعديل</a>
                                    <a href="{{ route('admin.Grade.delete', $grade->id) }}" data-confirm-delete="true" class="btn light btn-danger del">حذف</a>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="4">لا توجد مراحل دراسية مضافة</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
                @include('dashboard.Grades.create')        
                @include('dashboard.Grades.edit')        
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
    $(function(){
        $('.editBtn').on('click', function(e){
            let id = $(this).data('id');
            let Notes = $(this).data('info');
            let Name_ar = $(this).data('name');
            $('.editModel .Notes').attr(Notes);
            $('.editModel .Name_ar').val(Name_ar);
            $('.editModel .grade_id').val(id);
        })
    })
</script>
@endsection