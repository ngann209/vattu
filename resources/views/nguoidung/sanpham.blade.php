@extends('nguoidung.master')
@section('content')
    <div class="container">
        <div class="cach15"></div>
        <div class="row">
            <div class="col-md-12 tieudesp">
                <h1><b>TILT SUPER 300 EC 100ml</b></h1>
            </div>
        </div>
        <div class="row">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Loại sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">TILT SUPER 300 EC 100ml</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-5 anhchitietsp">
                <img class="img-fluid" src="{{url('image/sp.png')}}" alt="">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="thongtinsanpham">
                            <h4><b>TILT SUPER 300 EC 100ml</b></h4>
                            <table class="table table-bordered bangchitietsp">
                                <tr>
                                    <td class="dongdau">Mã sản phẩm</td>
                                    <td>tilt super</td>
                                </tr>
                                <tr>
                                    <td class="dongdau">Thể tích</td>
                                    <td>100ml</td>
                                </tr>
                                <tr>
                                    <td class="dongdau">Quy cách</td>
                                    <td>chai</td>
                                </tr>
                                <tr>
                                    <td class="dongdau">Hoạt chất</td>
                                    <td>Propiconazole 150 g/l</td>
                                </tr>
                                <tr>
                                    <td class="dongdau">Hãng SX</td>
                                    <td>Syngenta
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="nguoiban">
                            <div class="giachitietsp">
                                1.000.000 VNĐ
                            </div>
                            <div class="btngoingay">
                                <button class="btn btn-danger">Gọi Ngay</button>
                            </div>
                            {{--<hr>--}}
                            <div class="thongtinnguoiban">
                                <div class="tennguoiban">
                                    Cung cấp bởi <br>
                                    <a href="">congtykff</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cach">
    </div>
@endsection