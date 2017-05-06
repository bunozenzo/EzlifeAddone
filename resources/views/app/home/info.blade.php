@extends('layouts.home')
@section('title', 'Trang thông tin')
@section('content')
	@if(isset($info))
<div class="info-addons">
	<p>{!!$info->title!!}</p>
	<span><?php echo date('d/m/y',strtotime($info->date));?></span>
	<div class="desc-info">{!!$info->desc!!}</div>
	<?php $img=$info->imgLink;
	$image=explode(',',$img);
	$count=count($image);
	for($i=0; $i<$count; $i++) {?>
		<img src="<?php echo $image["$i"] ?>" alt="">
	<?php 
	}
	?>
	<div class="link">
			@if(!empty($info->behaviorLink))
                <?php $behavior=$info->behaviorLink;
                $behaviorLink=explode(',',$behavior);
                $count=count($behaviorLink);
                for($i=0;$i<$count; $i++) {?>
				<a href="<?php echo $behaviorLink["$i"] ?>" target="_blank">Download .McWorld <?php	echo $i;?></a>
                <?php
                }
                ?>
			@endif
		@if(!empty($info->resourceLink))
            <?php $resource=$info->resourceLink;
            $resourceLink=explode(',',$resource);
            $count=count($resourceLink);
            for($i=0;$i<$count; $i++) {?>
			<a href="<?php echo $resourceLink["$i"] ?>" target="_blank">Download .ZIP <?php	echo $i;?></a>
            <?php
            }
            ?>

		@endif
	</div>
</div>
	@endif
@endsection
