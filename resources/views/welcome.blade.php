@extends('layout.main')
@section('content')


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                height: 80%;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>


        <div class="container">
            <div class="content">
                <div class="title">Laravel 5.1.4 </div>
                <div>
                    <ul>
                        <li><a href="/home/9" > 测试账号1</a></li>
                        <li><a href="/home/10" > 测试账号2</a></li>
                    </ul>
                </div>
                <div>
                    <p>
                       作品完成时间用了2.5天,包括数据库设计,后端,前端,服务器环境搭建等
                    </p>
                    <p>
                        本系统采用响应式布局,在手机,平板,电脑上浏览有不同的显示效果.
                    </p>
                    <p>
                        没收到注册邮件的,可以在邮箱垃圾箱里找找.
                    </p>
                    <p>
                         由于ssl证书是自签的,浏览器会警告证书不安全,需要手动信任证书
                    </p>

                </div>

            </div>
        </div>
@stop
