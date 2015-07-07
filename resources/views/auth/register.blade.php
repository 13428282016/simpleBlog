@extends('layout.main')

@section('content')
    <style>
        #register img {
            width: 80px;
            height: 80px;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="register" class="panel panel-default">
                    <div class="panel-heading">注册</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">用户名</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">邮箱</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">选择头像（可选）</label>

                                <div class="col-md-6">
                                    <button id="upload-btn" type="button" class="btn btn-success">点击上传</button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">密码</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">确认密码</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">邮箱验证码</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control "
                                           style="display: inline-block;width: 120px;vertical-align: middle;margin-right: 20px;"
                                           name="code">
                                    <button class="btn btn-success " id="get-code-btn" type="button">获取验证码</button>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        点击注册
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/js/jquery.iframe-transport/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('/js/imageUpload/image_upload.js')}}"></script>
    <script src="{{asset('/js/email.js')}}"></script>
    <script src="{{asset('/js/button.js')}}"></script>
    <link href="{{asset('/js/imageUpload/css/image_upload.css')}}" rel="stylesheet">
    <script>
        (function () {

            var register,
                    init,
                    getCode;
            register = {};
            init = function () {
                $('#upload-btn').imageUpload('imageUpload', {
                    initType: 'single',
                    name: 'portrait',
                    maxByte: 1024 * 1024 * 4,
                    url: "/upload/portrait",
                    suffixs: ['png', 'jpg', 'jpeg']
                });
                $('#get-code-btn').click(function () {
                    var $this,
                            email;
                    $this = $(this);

                    email = $('input[name=email]').val();
                    if (mailer.isEmail(email)) {
                        button.countDown($this,60,'获取验证码')
                        mailer.getCode(email, function () {
                            $this.tooltip('show');
                            setTimeout(function(){
                                $this.tooltip('hide')
                            },2000);
                        });
                    }
                    else {
                        alert('请填写正确的邮件格式')
                    }

                }).tooltip({
                    trigger: 'manual',
                    title: '验证码已发送，请注意查收！',
                    delay: {show: 1000, hide: 500}
                });
            }

            init();
        })();
    </script>
@endsection
