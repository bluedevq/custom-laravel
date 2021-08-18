@extends('layouts.backend.register')
@section('content')
    @include('layouts.backend.elements.logo')
    <div class="row mx-auto col-md-4 d-flex align-items-center mt-4">
        <div class="row">
            <h2>Đăng ký thành công</h2>
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-12">
                    <p class="mt-4">
                        Chúng tôi đã gửi một liên kết xác nhận tới <a href="mailto:{{ $email }}" class="text-info">{{ $email }}</a>.
                        <br>
                        Vui lòng truy cập vào mail để xác nhận.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-12 text-start text-danger-custom register">
                    <a href="{{ route('backend.login') }}">Đăng nhập vào hệ thống</a>
                </div>
            </div>
        </div>
    </div>
@stop
