@extends('admin.main')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" name="name" id="menu" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="menu">Danh mục</label>
                <select name="parent_id" id="" class="form-control">
                    <option value="0">Danh mục cha</option>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="description" class="form-control" id=""></textarea>
            </div>
            <div class="form-group">
                <label for="">Mô tả chi tiết</label>
                <textarea name="content" class="form-control" id=""></textarea>
            </div>
            <div class="form-group">
                <label for="">Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" value="1" id="active" name="active"
                        checked="">
                    <label for="customRadio1" class="custom-control-label">Kích hoạt</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" value="1" id="no_active" name="active">
                    <label for="customRadio2" class="custom-control-label">Không kích hoạt</label>
                </div>

            </div>


            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
            </div>
    </form>
@endsection

{{-- @section
<script>
    CKEDITOR.replace('content');
</script>
@endsection --}}
