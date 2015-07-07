@extends('layout.ucenter')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">发微博</div>
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

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('ucenter/blog') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-1 control-label">标题</label>
                                <div class="col-md-11">
                                    <input type="text" class="form-control" name="title"  required  value="{{ old('title') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-1 control-label">正文</label>
                                <div class="col-md-11">
                                    <textarea   name="content" id="content" runat="server"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-5">
                                    <button type="submit" class="btn btn-primary">
                                        发微博
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/ckeditor/ckeditor.js')}}"> </script>
    <script type="text/javascript"> CKEDITOR.replace('content'); </script>
@endsection
