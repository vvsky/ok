@extends('layout.admin')

@section('title_1','分类修改 - 腾讯课堂后台管理系统')
@section('title_2','分类修改')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        分类管理
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <form role="form" action="/admin/cate/update" method="post">
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <h4>出错了!</h4>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </div>
                  @endif
                    <div class="form-group">
                        <label>分类名称:</label>
                        <input class="form-control" type="text" name="name" value="{{$cate->name}}">
                    </div>
                    <div class="form-group">
                        <label>父级分类</label>
                        <select class="form-control" name="pid">
                            <option value="0">请选择</option>
                            @foreach($cates as $k=>$v)
                            <option value="{{$v->id}}"  @if($v->id == $cate->pid) selected  @endif  >{{$v->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$cate->id}}">
                    <button type="submit" class="btn btn-lg btn-success btn-block">更新分类</button>
                </form>
            </div>
            <!-- /.col-lg-6 (nested) -->

        </div>
        <!-- /.row (nested) -->
    </div>
    <!-- /.panel-body -->
</div>
@endsection
