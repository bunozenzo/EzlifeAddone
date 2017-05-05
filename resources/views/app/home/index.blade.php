@extends('layouts.home')
@section('title', ' day la trang chu')
@section('content')

@foreach($data as $item) <!--lấy ra name, thông tin , ngày tạo và active -->
<div class="addons">
	<?php $img=$item->imgLink;
	 $image=explode(',',$img);?>
	 <img src="<?php  echo $image['0'];?>" alt="">
	 <p><?php echo date('d/m/y',strtotime($item->date));
	  ?>
	 </p>
	 <a href="{{ route('home.info', $item->id)}}">{{$item->title}}</a><br/>
	 <div class="desc">{{$item->desc}}</div>
	 <hr/>
</div>
@endforeach
@endsection
