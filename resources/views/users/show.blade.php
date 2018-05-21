@extends('layouts.app')
@section('title', $user->name . ' 的个人中心')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div align="center">
                        <img class="thumbnail img-responsive" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="300px" height="300px">
                    </div>
                    <div class="media-body">
                        <hr>
                        <h4><strong>个人简介</strong>-{{ $user->name }}</h4>
                        <p>格言：我就是我，不一样的烟火</p>
                        <hr>
                        <span>注册于：{{ $user->created_at }}</span><br>
                        <span>最后更新于： {{ $user->updated_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size: 30px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                </span>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                暂无数据  哈哈哈哈
            </div>
        </div>
    </div>
</div>
@endsection