@extends('layouts.backend.dashboard')

@section('content')
<div class="content-body">
    <!-- head page title -->
    <div class="container-fluid">
        <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
            <h3 class="font-w600 title mb-2 mr-auto">الصفوف الدراسية</h3>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">الصفوف الدراسية</h3>
                <button type="button" class="btn btn-rounded btn-info mb-2" data-toggle="modal" data-target="#createClass">
                    إضافة صف جديد
                </button>   
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>اسم الصف</td>
                            <td>اسم المرحلة</td>
                            <td>الحالة</td>
                            <td>العمليات</td>
                        </tr>
                        @forelse ($Seasons as $season)
                            <tr>
                                <td>{{ $season->name_class }}</td>
                                <td>{{ $season->grades->Name_ar }}</td>
                                <td>{{ $season->status == 1 ? 'مفتوح' : 'مغلق' }}</td>
                                <td>
                                    <a href="#" data-id="{{ $season->id }}" data-name="{{ $season->name_class }}" data-toggle="modal" data-target="#editClass" class="btn light btn-info editBtn">تعديل</a>
                                    <a href="{{ route('admin.class.delete', $season->id) }}" data-confirm-delete="true" class="btn light btn-danger del">حذف</a>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="4">لا توجد صفوف دراسية مضافة</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
                @include('dashboard.Seasons.create')        
                @include('dashboard.Seasons.edit')        
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="{{ asset('js/jquery.repeater.min.js') }}"></script>
<script>
    $(function(){
        $('.editBtn').on('click', function(e){
            let id = $(this).data('id');
            let Notes = $(this).data('info');
            let Name = $(this).data('name');
            $('.editModel .Name').val(Name);
            $('.editModel .class_id').val(id);
        })

        $('.repeater').repeater({});
    })
</script>
@endsection