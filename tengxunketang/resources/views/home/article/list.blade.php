@extends('layout.home')
@section('title', '网站公告')

@section('content')
<div class="position"> <span>您当前的位置：</span> <a href="/tpl/txkt/"> 首页</a> » 商城公告 </div>
<div class="wrapper clearfix container_2">
<div class="sidebar f_l">
	<div class="box m_10">
		<div class="title">热卖商品</div>
		<div class="content">
		  <ul class="ranklist">
        <li class='current'><a href="/tpl/txkt/site/products/id/59"><img src="http://www.8sk.cn/tpl/txkt/pic/thumb/img/upload@_@2015@_@08@_@03@_@20150803171532323.jpg/w/440/h/248" width="58" height="58" /></a><a href="/tpl/txkt/site/products/id/59" class="p_name">初升高物理衔接课</a><b>￥0.00</b></li>
        <li class='current'><a href="/tpl/txkt/site/products/id/49"><img src="http://www.8sk.cn/tpl/txkt/pic/thumb/img/upload@_@2015@_@08@_@03@_@20150803171626120.jpg/w/440/h/248" width="58" height="58" /></a><a href="/tpl/txkt/site/products/id/49" class="p_name">股市精讲研究直播</a><b>￥0.00</b></li>
        <li class='current'><a href="/tpl/txkt/site/products/id/39"><img src="http://www.8sk.cn/tpl/txkt/pic/thumb/img/upload@_@2015@_@08@_@03@_@20150803172004190.jpg/w/440/h/248" width="58" height="58" /></a><a href="/tpl/txkt/site/products/id/39" class="p_name">PHP从零基础到项目实战高薪入职课【潭州学院】</a><b>￥0.00</b></li>
        <li class='current'><a href="/tpl/txkt/site/products/id/36"><img src="http://www.8sk.cn/tpl/txkt/pic/thumb/img/upload@_@2015@_@08@_@05@_@20150805184523255.jpg/w/440/h/248" width="58" height="58" /></a><a href="/tpl/txkt/site/products/id/36" class="p_name">7-平面设计入门</a><b>￥0.00</b></li>
        <li class='current'><a href="/tpl/txkt/site/products/id/35"><img src="http://www.8sk.cn/tpl/txkt/pic/thumb/img/upload@_@2015@_@08@_@03@_@20150803172151269.jpg/w/440/h/248" width="58" height="58" /></a><a href="/tpl/txkt/site/products/id/35" class="p_name">3Dmax建模（快速搞定入门)【云中帆教育】</a><b>￥0.00</b></li>
        <li class='current'><a href="/tpl/txkt/site/products/id/34"><img src="http://www.8sk.cn/tpl/txkt/pic/thumb/img/upload@_@2015@_@08@_@03@_@20150803172251799.jpg/w/440/h/248" width="58" height="58" /></a><a href="/tpl/txkt/site/products/id/34" class="p_name">版权专利：乖孩子速成法</a><b>￥18.00</b></li>
        <li class='current'><a href="/tpl/txkt/site/products/id/20"><img src="http://www.8sk.cn/tpl/txkt/pic/thumb/img/upload@_@2015@_@08@_@03@_@20150803172243966.jpg/w/440/h/248" width="58" height="58" /></a><a href="/tpl/txkt/site/products/id/20" class="p_name">2016国考全面基础班【尚政公考】（限招100人）</a><b>￥98.00</b></li>
        <li class='current'><a href="/tpl/txkt/site/products/id/6"><img src="http://www.8sk.cn/tpl/txkt/pic/thumb/img/upload@_@2015@_@08@_@03@_@20150803172547654.jpg/w/440/h/248" width="58" height="58" /></a><a href="/tpl/txkt/site/products/id/6" class="p_name">3d游戏3dmax基础网络游戏原画建模快速入门技巧 邢帅教育</a><b>￥0.00</b></li>
		</div>
	</div>
</div>
<div class="main f_r">
	<div class="box m_10">
		<div class="title2">商城公告</div>
		<div class="cont">
			<h5 class="list_title gray"><span class="f_l">标题</span>发表时间</li></h5>
			<ul class="newslist">
            @foreach($article as $k=>$v)
						<li><a class="" href="/article/{{$v->id}}">{{$v->title}}</a><span>{{date("Y-m-d H:i:s",$v->time)}}</span></li>
            @endforeach
      </ul>
			<div class='pages_bar'><a href='/article?page=1' >首页</a><a class='current_page' href='/article?page=1' >1</a><a href='/article?page=1' >尾页</a><span>当前第1页/共1页</span></div>		</div>
	</div>
</div>
</div>

@endsection
