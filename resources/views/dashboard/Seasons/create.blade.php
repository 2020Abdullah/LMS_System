<div class="modal fade" id="createClass">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">إنشاء مرحلة جديدة</h5>
                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                </button>
            </div>
            <form method="POST" class="repeater" action="{{ route('admin.classes.store') }}">
                @csrf
                <div class="modal-body">
                    <div data-repeater-list="classes">
                        <div data-repeater-item>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="name_class">اسم الصف</label>
                                        <input type="text" class="form-control" name="name_class" id="name_class">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label" for="grade_id">المرحلة</label>
                                    <select name="grade_id" id="grade_id" class="form-control">
                                        <option>...</option>
                                        @foreach ($grades as $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->Name_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4 mt-4">
                                    <input data-repeater-delete type="button" class="btn btn-danger d-block w-100" value="حذف"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input data-repeater-create type="button" class="btn btn-success" value="إدراج صف"/>              
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>