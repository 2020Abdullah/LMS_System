<div class="modal fade" id="createGrade">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">إنشاء مرحلة جديدة</h5>
                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.Grade.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="Name_ar">اسم المرحلة بالغة العربية</label>
                        <input type="text" class="form-control" name="Name_ar" id="Name_ar">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="Name_en">اسم المرحلة بالإنجليزية </label>
                        <input type="text" class="form-control" name="Name_en" id="Name_en" placeholder="اختيارى">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="Notes">ملاحظات</label>
                        <textarea name="Notes" id="Notes" class="form-control" cols="5" rows="5"></textarea>
                    </div>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" name="status" value="1" class="custom-control-input" id="customCheckBox3">
                        <label class="custom-control-label" for="customCheckBox3">مفتوح</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>