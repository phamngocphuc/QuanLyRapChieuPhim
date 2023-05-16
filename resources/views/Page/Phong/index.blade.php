@extends('Share.master')
@section('tieu-de')
    Quản Lý Phòng
@endsection

@section('noi-dung')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Nhập thông tin Phòng
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tên Phòng</label>
                        <input type="text" class="form-control" placeholder="Nhập vào tên phòng" id="ten_phong">
                    </div>

                    <div class="form-group">
                        <label for="">Tình trạng</label>
                        <select name="" class="form-control" id="tinh_trang">
                            <option value="1">Đang kinh doanh</option>
                            <option value="0">Dừng knh doanh</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Số Ghế hàng ngang</label>
                        <input type="number" class="form-control" id="hang_ngang">
                    </div>

                    <div class="form-group">
                        <label for="">Số Ghế hàng dọc</label>
                        <input type="number" class="form-control" id="hang_doc">
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary" id="add">Thêm mới Phòng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8"></div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            $("#add").click(function(){
                var payload = {
                'ten_phong'     : $("#ten_phong").val(),
                'tinh_trang'    : $("#tinh_trang").val(),
                'hang_ngang'    : $("#hang_ngang").val(),
                'hang_doc'      : $("#hang_doc").val(),
                }

                axios
                    .post('/admin/phong/index', payload)
                    .then((res) => {

                    });
            });
        });
    </script>
@endsection
