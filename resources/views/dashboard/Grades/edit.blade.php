<div class="editModel modal fade" id="editGrade">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تحديث المرحلة</h5>
                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.Grade.update') }}">
                @csrf
                <input type="hidden" name="grade_id" class="grade_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">اسم المرحلة بالغة العربية</label>
                        <input type="text" class="form-control Name_ar" name="Name_ar" value="{{ $grade->Name_ar }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">ملاحظات</label>
                        <textarea name="Notes" class="form-control Notes" cols="5" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">الحالة</label>
                        <select name="status" class="form-control">
                            <option value="1">مفتوح</option>
                            <option value="0">مغلق</option>
                        </select>
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