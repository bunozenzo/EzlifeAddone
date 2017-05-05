@extends('layouts.home')
@section('title', ' day la trang info')
@section('content')
<div class="info-addons">
	<p>{!!$info->title!!}</p>
	<span><?php echo date('d/m/y',strtotime($info->date));?></span>
	<div>{!!$info->desc!!}</div>
	<?php $img=$info->imgLink;
	$image=explode(',',$img);
	$count=count($image);
	for($i=0; $i<$count; $i++) {?>
		<img src="<?php echo $image["$i"] ?>" alt="">
	<?php 
	}
	?>

</div>
@endsection
