<div class="editModel modal fade" id="editClass">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تحديث المرحلة</h5>
                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.Grade.update') }}">
                @csrf
                <input type="hidden" name="class_id" class="class_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">اسم الصف</label>
                        <input type="text" class="form-control Name" name="name_class">
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