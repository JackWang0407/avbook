@extends('layout')
@section('title', $movie_info['censored_id'].$movie_info['movie_title'])
@section('content')
<link rel="stylesheet" type="text/css" href="avbook/movie.css">
<link rel="stylesheet" type="text/css" href="avbook/movie-box.css">
<link rel="stylesheet" href="avbook/star-rating.min.css" media="all" type="text/css"/>

<script src="avbook/star-rating.min.js" type="text/javascript"></script>
{{--<script src="avbook/themes/zh.js" type="text/javascript"></script>--}}
{{--<link rel="stylesheet" href="avbook/themes/krajee-fa/theme.css" media="all" type="text/css"/>--}}
{{--<script src="avbook/themes/krajee-fa/theme.js" type="text/javascript"></script>--}}

<link rel="stylesheet" href="avbook/font-awesome.min.css">
<script>
    var censored_id = "{{$movie_info['censored_id']}}";
    var gid = "{{$avbus->gid ??  ''}}";
    var code_36 = "<?php echo $movie_info['code_36'] ?>";
	var avbook_id = "<?php echo $movie_info['avbook_id'] ?>";
    var uc = 0;
    var img = 'https://pics.javbus.info/cover/5r2i_b.jpg';
</script>

<style type="text/css">
    #add-loading {
        position: fixed;
        width: 200px;
        height: 100px;
        z-index: 1000;
        left: 50%;
        top: 50%;
        margin-left: -100px;
        margin-top: -100px;
        opacity: 0.95;
        display: none;
    }
</style>

<div id="add-loading">
    <table class="search-loading-box" border="0" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td align="center">
                <table height="80" width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                        <td height="40" align="center">
                            <div class="search-loading-text" id='addmsg'>s...</div>
                        </td>
                    </tr>
                    <tr>
                        <td height="40" align="center">
                            <img src="avbook/search_loading.gif" border="0">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>


<div class="container">
    <?php
    //$b=3;
    if(isset($_GET['picurl'])){

    }

	$b=3;
	/*
	$urllist = array (
		'utry320.synology.me:5080',
		'jp.netcdn.space',
		'pics.dmm.co.jp',
		'pics.vpdmm.cc',
		
	);

	foreach($urllist as $url)
	{
		$curl = curl_init('https://'.$url.'/digital/video/'.$movie_info['movie_pic_cover']);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		
		$result = curl_exec($curl);
		if ($result !== false) {
			if (curl_getinfo($curl, CURLINFO_HTTP_CODE) == 200) {
				
				
			}
			$baseurl = $url;
			break;
		}
		curl_close($curl);
	}
	*/

    if ($b==1) {
        $picurl ='https://jp.netcdn.space/digital/video/';
        $picurl2 ='https://pics.dmm.co.jp/mono/movie/adult/';
        $baseurl ='jp.netcdn.space';
    }elseif ($b==2){
        $picurl ="https://pics.dmm.co.jp/digital/video/";
        $picurl2 ="https://pics.dmm.co.jp/mono/movie/adult/";
        $baseurl ='pics.dmm.co.jp';
    }elseif ($b==3){
        $picurl ='https://pics.vpdmm.cc/digital/video/';
        $picurl2 ='https://pics.vpdmm.cc/mono/movie/adult/';
        $baseurl ='pics.vpdmm.cc';
    }elseif ($b==4){
        $picurl ='http://utry320.synology.me:5080/digital/video/';
        $picurl2 ='https://jp.netcdn.space/mono/movie/adult/';
        $baseurl ='utry320.synology.me:5080';
    } 

    $picurl = 'https://'.$baseurl.'/digital/video/';
    $picurl2 ='https://'.$baseurl.'/mono/movie/adult/';
    
    ?>
    {{--<h3 >


    </h3>--}}
   
    @include('itemtag', ['movie_info' => $movie_info])
	
    <?php 
    	$sh = '';
    	if ($movie_info['owned'] == 1) {
			$sh = '<a class="btn btn-mini-new btn-danger disabled  "  >已擁有</a>'; 
		} 
		echo $sh;
	?>
	<h3 >
	<?php 
		echo mb_substr( $movie_info['movie_title'], 0, 500) ;
	?>
    </h3>
    <span id="edit-submit-show" style="cursor: pointer;" class="glyphicon glyphicon-cog"></span>

<script>
/*
window.onload=function(){
	document.body.setAttribute('background','{{$picurl.$movie_info['movie_pic_cover']}}'); 
	}
	*/
function CopyReName() {
	document.getElementById("film_rename").select();  
	document.execCommand('copy');
	//window.alert("複製完成");
	//window.prompt("sometext","defaultText");
};
function CopyNumber() {
	const film_number=document.createElement('input');
	document.body.appendChild(film_number);
	film_number.value='{{$movie_info['censored_id']}}'
	film_number.select(); 
	document.execCommand('copy');
	document.body.removeChild(film_number);
};

function CheckImageExists() {
	var picurl = "";
	var logs = "";
	var urllist = [
		'jp.netcdn.space',
		'pics.dmm.co.jp',
		'pics.vpdmm.cc',
		'utry320.synology.me:5080'
		];
	/*var http = new XMLHttpRequest();*/
	for (var url = 0; url < urllist.length; url++) {
	
		picurl = 'https://' + urllist[url] + '/digital/video/' + "{{$movie_info['movie_pic_cover']}}";;
		$.get(picurl).done(
			function() {logs += picurl + 'ok \n';}
		).fail(
			function() {logs += picurl + 'fail \n';}
			);
	};
	alert(logs);
};

window.onload=function(){
	//document.body.setAttribute('background','{{$picurl.$movie_info['movie_pic_cover']}}');
	//CheckImageExists();
	
	}
</script>
	<div id="show_rename_div" style="display: table;display: none;">
		<div class="input-group">
			<span class="input-group-btn">
		    <button type="button" class="btn btn-default" onclick="CopyReName()">Copy</button>
		    </span>
		    <input type="text" id="film_rename" class="form-control" rows="1" value="<?php 
		    		echo $movie_info['movie_title']." - ";
		    		foreach($res_star as $key=>$val):
						echo $val['star_name'];
						if (next($res_star)==true) echo ',';
					endforeach; 
					echo " - ";
					echo $movie_info['release_date'] ;
		    	?>">
	    </div>
    </div>
    <div class="row movie"><!-- https://pics.javbus.info/sample/5rvz_11.jpg   https://jp.netcdn.space/ https://pics.dmm.co.jp/digital/video/ipz00865/ipz00865jp-12.jpg-->
        <div class="col-md-9 screencap">
        
        					<?php 
        					if (file_exists("digital/video/".$movie_info['movie_pic_cover'])): 
								$picurl = "digital/video/";
							endif; 
							?>
							
            <a class="bigImage" href="<?php echo $picurl.$movie_info['movie_pic_cover'] ?>" >
                <img id="img_pic_cover" class = "bigImagesrc img-rounded" src="<?php echo $picurl.$movie_info['movie_pic_cover'] ?>"

                ></a>
		@if ($movie_info['movie_desc'])
        <h4 class="header">
        <span style="color:#333333;"><?php echo $movie_info['movie_desc'] ?></span>
		</h4>
		@endif
		<div id="edit-desc">
		<textarea type="text" class="form-control" rows="3" id="edit-desc-data"><?php echo $movie_info['movie_desc'] ?></textarea>
		<button type="button" class="btn btn-mini-new btn-default" onclick="change_info('movie_desc',document.getElementById('edit-desc-data').value,this);" >保存</button>
		</div>
		
        </div>
        <div class="col-md-3 info">

            <p>
            <span class="header">番號:</span>
            <?php $str=$movie_info['censored_id'];?>
            <a href="censored?&search=<?php echo explode('-', $str)[0] ?>"><span style="color:#33AAFF;"><?php echo explode('-', $str)[0]?></span></a><?php $str=$movie_info['censored_id']; echo '-'.explode('-', $str)[1]?> <button type="button" class="btn btn-default btn-xs" onclick="CopyNumber()">Copy</button></p>
            
            <p>
                <a title="上一個番號 {{$last_censored_id}}" href="movie?censored_id={{$last_censored_id}}"><span class="glyphicon glyphicon-chevron-left"></span>上一頁 |</a><a
                        title="下一個番號 {{$next_censored_id}}" href="movie?censored_id={{$next_censored_id}}"> 下一頁<span  style = "height:20px" class="glyphicon glyphicon-chevron-right" ></span></a> <a  href = '' title="//游标分页 wait to do " > </a>
                &nbsp;&nbsp;&nbsp;<a id = "a_img" class='blogjavimg' href = ''  ></a>
            </p>
            <p>
                <a></a>
            </p>

            <span class="header">磁力搜索:</span>
            <p>
            	<a target="_blank"  href="http://clm2.net/search?word=<?php echo ($movie_info['censored_id']) ?>&sort=length"> <span class="btn btn-mini-new btn-primary">磁力猫</span></a>
            	<a target="_blank"  href="https://btsow.com/search/<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">btsow</span></a>
            </p>

            <span class="header">訊息網站</span>
            <p>
	            <a target="_blank"  href="https://www.dmm.co.jp/mono/dvd/-/search/=/searchstr=<?php echo $movie_info['censored_id'] ?>/"> <span class="btn btn-mini-new btn-primary">DMM-DVD</span></a>
	            <a target="_blank"  href="https://www.dmm.co.jp/digital/videoa/-/detail/=/cid=<?php echo $movie_info['avbook_id'] ?>/"> <span class="btn btn-mini-new btn-primary">DMM-ビデオ</span></a>
	            <a target="_blank"  href="https://{{$url_config['javbushost']}}/<?php echo $movie_info['censored_id'] ?>"> <span class="btn btn-mini-new btn-primary">JavBUS</span></a>
	            <a target="_blank"  href="https://{{$url_config['avmoohost']}}/ja/movie/<?php echo $movie_info['code_36'] ?>"> <span class="btn btn-mini-new btn-primary">AVMoo</span></a>
	            <a target="_blank"  href="https://db.msin.jp/jp.search/movie?str=<?php echo $movie_info['censored_id'] ?>"> <span class="btn btn-mini-new btn-primary"><?php echo $movie_info['censored_id'] ?>の検索結果</span></a>
	            <a target="_blank"  href="https://{{$url_config['javlibhost']}}/ja/vl_searchbyid.php?keyword=<?php echo $movie_info['censored_id'] ?>"> <span class="btn btn-mini-new btn-primary">JavLibrary</span></a>
            	<a target="_blank"  href="https://javdb.com/search?q=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">JavDB</span></a>
            	<a target="_blank"  href="https://ggjav.com/main/search?string=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">GGJav</span></a>
            	<a target="_blank"  href="https://jav.land/ja/id_search.php?keys=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">Jav.Land</span></a>
            	<a target="_blank"  href="https://www.airav.wiki/?search=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">AirAV.Wiki</span></a>
            </p>
			<span class="header">下載網站</span>
            <p>
            <a target="_blank"  href="https://hpjav.tv/ja?s=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">HPJAV</span></a>
            <a target="_blank"  href="https://netflav.com/search?keyword=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">Netflav</span></a>
            
            <a target="_blank"  href="https://{{$url_config['7mmtvhost']}}/zh/censored_search/all/<?php echo ($movie_info['censored_id']) ?>/1.html"> <span class="btn btn-mini-new btn-primary">7mmTV</span></a>
            <a target="_blank"  href="https://missav.com/search/<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">MissAV</span></a>
            <a target="_blank"  href="https://javfull.net/search/<?php echo ($movie_info['censored_id']) ?>/"> <span class="btn btn-mini-new btn-primary">JavFull</span></a>
            <a target="_blank"  href="https://www.buzzav.com/search/videos/<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">BuzzAV</span></a>
            <a target="_blank"  href="https://javdisk.com/search/movie/<?php echo ($movie_info['censored_id']) ?>.html"> <span class="btn btn-mini-new btn-primary">JavDisk</span></a>
            <a target="_blank"  href="https://javhd.icu/?s=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">JavHD.ICU</span></a>
            <a target="_blank"  href="https://javleak.com/?s=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">JavLeak</span></a>
            <a target="_blank"  href="https://javhay.net/?s=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">JavHay</span></a>
            <a target="_blank"  href="https://oxlife.co/search/index?keyword=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">XOLife</span></a>
            <a target="_blank"  href="https://spankbang.com/s/<?php echo ($movie_info['censored_id']) ?>/?q=fhd&d=40"> <span class="btn btn-mini-new btn-primary">SpankBang</span></a>
            <a target="_blank"  href="https://freejavbt.com/search?wd=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">freejavbt</span></a>
            <a target="_blank"  href="https://jav.place/ja/magnet/index?q=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">jav.place</span></a>
            <a target="_blank"  href="https://18mag.net/search?q=<?php echo ($movie_info['censored_id']) ?>"> <span class="btn btn-mini-new btn-primary">18mag</span></a>
            
            </p>
			<!--
				<input class="btn btn-primary" type="button" value="btn-primary" /><br />
				<input class="btn btn-warning" type="button" value="btn-warning" /><br />
				<input class="btn btn-success" type="button" value="btn-success" /><br />
				<input class="btn btn-info" type="button" value="btn-info" /><br />
				<input class="btn btn-danger" type="button" value="btn-danger" /><br />
				<input class="btn btn-default" type="button" value="btn-default" /><br />
			-->
            <!--   //cc3001.dmm.co.jp/litevideo/freepv/o/ofj/ofje00070/ofje00070_dmb_w.mp4
            //cc3001.dmm.co.jp/litevideo/freepv/n/n_1/n_1010gihhd067/n_1010gihhd067_dmb_w.mp4
http://www.q30x.com/cn/vl_searchbyid.php?keyword=ABS-231

            <p><span class="header">預告片:</span>


                <a target="_blank"  href="https://cc3001.dmm.co.jp/litevideo/freepv/<?php
                $pic_video = $movie_info['movie_pic_cover'];
                if( is_numeric(substr($pic_video,0,1))){// 118abp00108/118abp00108pl.jpg
                    $pic_video = substr($pic_video,0,strpos($pic_video,'/'));
                    $idx = strpos($pic_video,'00');
                    $pic_video =substr($pic_video,0,$idx).substr($pic_video,$idx+2,strlen($pic_video)-$idx-2) ;
                    $pic_video = "$pic_video/{$pic_video}pl.jpg";
                }
                $pic_video = substr($pic_video,0,1)."/".substr($pic_video,0,3)."/".str_replace('pl.jpg','_dmb_w.mp4',$pic_video);
                echo  $pic_video ?>"> <span style="color:#CC0000;"><?php
                        echo str_replace('_dmb_w.mp4','',basename($pic_video))    ?></span></a>

            </p>
-->

            @if ($movie_info['release_date'])
				<p>
	                <span class="header">發行時間: </span>
	                <span style="color:#CC0000;"><?php echo $movie_info['release_date'] ?></span>
				</p>
				<!--
				<p>
					<span id="" style="cursor: pointer;" class="glyphicon glyphicon-cog"></span>
	                <span class="header">发行时间: </span>
	                <span style="color:#CC0000;"><?php echo $movie_info['release_date'] ?></span>
	                <span id="" class="glyphicon glyphicon-ok" style="cursor: pointer;"></span>
	                <span id="" class="glyphicon glyphicon-remove" style="cursor: pointer;"></span>
				</p>
				-->
            @endif
            @if ( $movie_info['movie_length'])
                <p>
					<span class="header">長度: </span>
					<span style="color:#CC0000;"><?php echo $movie_info['movie_length'] ?></span> 分钟
                </p>
            @endif
            </p>
            @if ($movie_info['Director'])
                <p>
                <span class="header">導演: </span> 
	                <a href="censored?director=<?php echo $movie_info['Director'] ?>">
	                	<span style="color:#CC0000;"><?php echo $movie_info['director_name']['director_name'] ?></span>
	                </a>
                <div id="edit-director" class="" >
					<div class="input-group"><input type="text" class="form-control" id="edit-director-data"></div>
					<button type="button" class="btn btn-mini-new btn-default" onclick="checktxt()" data-toggle="modal" data-target="#magneturlpost">保存</button>
				</div>
				</p>
            @endif

            @if ($movie_info['Studio'])
                <p>
                <span class="header">製作商: </span>
                <a href="censored?Studio=<?php echo $movie_info['Studio'] ?>">
                	<span style="color:#CC0000;"><?php echo $movie_info['studio_name']['studio_name'] ?></span>
                </a>
                <div id="edit-studio" class="" >
					<div class="input-group"><input type="text" class="form-control" id="edit-studio-data">
					<button type="button" class="btn btn-mini-new btn-default" onclick="checktxt()" data-toggle="modal" data-target="#magneturlpost">保存</button></div>
				</div>
				</p>
            @endif
            @if ($movie_info['Label'])
                <p>
                <span class="header">發行商: </span>
                <a href="censored?Label=<?php echo $movie_info['Label'] ?>">
                	<span style="color:#CC0000;"><?php echo $movie_info['label_name']['label_name'] ?></span>
                </a>
                <div id="edit-label" class="" >
					<div class="input-group"><input type="text" class="form-control" id="edit-label-data"></div>
					<button type="button" class="btn btn-mini-new btn-default" onclick="checktxt()" data-toggle="modal" data-target="#magneturlpost">保存</button>
				</div>
				</p>
            @endif

            @if ($movie_info['Series'])
                <style>
                    .sphfont{
                        color:#ff9918;
                    }
                </style>
                <p>
                <span class="header sphfont "  >系列:</span>
                <a target="_blank" href="censored?Series=<?php echo $movie_info['Series'] ?>"><?php echo $movie_info['series_name']['series_name'] ?>
                </a>
                <div id="edit-series" class="" >
					<div class="input-group"><input type="text" class="form-control" id="edit-series-data"></div>
					<button type="button" class="btn btn-mini-new btn-default" onclick="checktxt()" data-toggle="modal" data-target="#magneturlpost">保存</button>
				</div>
				</p>
            @endif

            <p>
                <span class="header">類別: </span>
                <?php $genre_map =[];//unset($genre_config[$val['genre_code']]); ?>
                <?php $genre_config =[];//unset($genre_config[$val['genre_code']]); ?>

                    <?php  foreach($res_genre as $key=>$val): ?>
                    <span class="genre">
	                    <a datagenre= "{{$val['genre_code']}}"  href="censored?gc[]=<?php echo $val['genre_code'] ?>&ltitle[]={{$val['genre_dsce']}}&orderby=release_date">
	                    	<span style="color:#CC0000;"><?php echo $val['genre_dsce'] ?></span>
	                    </a>
                    </span>
                    <?php  $genre_map[$val['genre_code']] = $val['genre_dsce']; ?>
                    <?php endforeach; ?>
            </p>
            <p>
                <span class="header">更改類別:</span>
                <?php  foreach($genre_map as $key=>$val): ?>
                    <a class="btn btn-mini-new   <?php if(isset($genre_map[$key])){
                        echo 'btn-warning" title = "删除类别：'.$val." $key" ;
                    }else{
                        echo 'btn-default" title = "添加类别：'.$val." $key" ;
                    }; ?>"

                       onclick="change_genre(this,'{{$key}}')" >{{$val}}</a>
                <?php endforeach; ?>

            </p>

            <p>
                <input type="text" class="kv-fa-heart rating-loading" value="{{$movie_info['favorite']}}" data-size="xs" title="评分">
            </p>

            <p>
                <span class="header">更改狀態:</span>
                <!--<p><a class="btn btn-mini-new btn-default" title = "無字幕水印OK"
                   onclick="change_state('no_watermark','1',this);change_state('no_subtitles','1',this)" >無字幕水印OK</a></p>-->
                <?php $state_config =
                [
                    'no_watermark'  => ['影片無浮水印',''],
                    'no_subtitles'  => ['影片無字幕',''],
                    'censored_leak' => ['無碼流出',''],
                    'needupdate' => ['等待更新',''],
                    'owned'         => ['已拥有',''] 
                ]; 
                foreach($state_config as $key=>$val): ?>

                <a class="btn btn-mini-new btncl-{{$key}}  <?php
                        //没有高清资源 有高清资源无法下载

                if($movie_info[$key]>0){

                    echo 'btn-success" title = "删除状态：'.$val[0]." $key ".$val[1] ;

                }else{
                    echo 'btn-default" title = "添加状态：'.$val[0]." $key " .$val[1] ;
                };
                $newstate = !$movie_info[$key];
                ?>"

                   onclick="change_state('{{$key}}','{{$newstate}}',this)" >{{$val[0]}}</a>
                <?php endforeach; ?>

            </p>


            <p class="star-show">
                <span class="header" style="cursor: pointer;">演員</span>:
                <!--<span id="star-toggle" class="glyphicon glyphicon-plus" style="cursor: pointer;"></span>-->
                <span id="star-toggle" class="glyphicon glyphicon-minus" style="cursor: pointer;"></span>
            </p>

            <ul>


                <?php  foreach($res_star as $key=>$val): ?>
                <div id="star_<?php echo $val['code_36'] ?>" class="star-box star-box-common star-box-up idol-box" style="left: 1047px; top: 326px; position: fixed; display: none;">
                    <li>
                        <a href="censored?st=<?php echo $val['code_36'] ?>">
						<?php if (!file_exists("mono/actjpgs/".$val['star_pic'])): ?>
							<img dsrc="https://<?php echo $baseurl ?>/mono/actjpgs/<?php echo $val['star_pic'] ?>" src="https://<?php echo $baseurl ?>/mono/actjpgs/<?php echo $val['star_pic'] ?>" title="<?php echo $val['star_name'] ?>">
						<?php else :?>
							<img src="mono/actjpgs/<?php echo $val['star_pic'] ?>" title="<?php echo $val['star_name'] ?>">
						<?php endif ?>
						</a>
                        <div class="star-name"><a href="censored?st=<?php echo $val['code_36'] ?>&ltitle[]={{$val['star_name']}}&orderby=release_date" title="<?php echo $val['star_name'] ?>"><?php echo $val['star_name'] ?></a></div>

                    </li>
                </div>
                <?php endforeach; ?>

                 <?php  if(count($res_star)<1):?>
                    暫無出演者資訊
                <?php endif; ?>
            </ul>

            <p>
                <?php  foreach($res_star as $key=>$val): ?>
                <span class="genre" onmouseover="hoverdiv(event,'star_<?php echo $val['code_36'] ?>')" onmouseout="hoverdiv(event,'star_<?php echo $val['code_36'] ?>')">
					<a href="censored?st=<?php echo $val['code_36'] ?>&ltitle[]={{$val['star_name']}}&orderby=release_date"><?php echo $val['star_name'] ?></a>
				</span>
                <?php endforeach; ?>
            </p>



        </div>
    </div>

   
    <div id="star-div">
        <h4 id="star-hide" style="cursor: pointer;">演員 <span class="glyphicon glyphicon-minus"></span></h4>
        <div id="avatar-waterfall">
            <?php  foreach($res_star as $key=>$val): ?>
            <a class="avatar-box" href="censored?st=<?php echo $val['code_36'] ?>">
	    		<div class="photo-frame">
					<?php if (!file_exists("mono/actjpgs/".$val['star_pic'])): ?>
						<img src="https://<?php echo $baseurl ?>/mono/actjpgs/<?php echo $val['star_pic'] ?>" title="<?php echo $val['star_name'] ?>">
					<?php else :?>
						<img src="mono/actjpgs/<?php echo $val['star_pic'] ?>" title="<?php echo $val['star_name'] ?>">
					<?php endif; ?>
	            </div>
	            <?php if (!file_exists("mono/actjpgs/".$val['star_pic'])): ?>
                <span><?php echo $val['star_name'] ?></span>
                <?php else :?>
                <span style="color:#42b4e094;"><?php echo $val['star_name'] ?></span>
                <?php endif; ?>
            </a>
            <?php endforeach; ?>

        </div>

    </div>
    	


	<div id="edit-sample-dmm">
	
    <h4 class="header">
    <span style="color:#333333;">截圖數量: <?php echo $movie_info['sample_dmm'] ?></span>
	</h4>
	
	<input type="text" class="form-control" rows="1" id="edit-sample-dmm-data" value="<?php echo $movie_info['sample_dmm'] ?>">
	<button type="button" class="btn btn-mini-new btn-default" onclick="change_info('sample_dmm',document.getElementById('edit-sample-dmm-data').value,this);" >保存</button>
	</div>
	
	{{--<h4>樣品圖像</h4>--}}
    <div id="sample-waterfall">
        <?php
        // var_dump(strrpos('digital', $movie_info['sample_dmm']));die;
//        if (strrpos($movie_info['sample_dmm'],'digital')!==false) {
//            $movie_info['sample_dmm'] = str_replace('digital/', '',  $movie_info['sample_dmm']);
//            $movie_info['sample_dmm'] = str_replace('-', 'jp-',  $movie_info['sample_dmm']);
//
//        }
        $heade=str_replace('digital/', '', str_replace('pl.jpg', '', $movie_info['movie_pic_cover']));
        $m= '';
        if ($movie_info['sample_dmm']==0) {
            for ($i = 0; $i < 31; $i++) {
                $a=$heade.'jp-'.$i.'.jpg';
                $m =$m."|".$a;
            }
        }elseif(strlen($movie_info['sample_dmm']) < 10 ){
            for ($i = 1; $i < intval($movie_info['sample_dmm'])+1; $i++) {
                $a=$heade.'jp-'.$i.'.jpg';
                $m =$m."|".$a;
            }
        }
        $movie_info['sample_dmm']=$m ?$m :$movie_info['sample_dmm'] ;

        $arr = explode('|', $movie_info['sample_dmm']);

        foreach($arr as $key=>$val): ?>
        <?php  if($val):?>
        <a class="sample-box" href="<?php echo $picurl.$val ?>" title="<?php echo $val ?>">
            <div class="photo-frame">
                <img  class="sample-img-load"  src="<?php echo $picurl.str_replace('jp-', '-', $val)?>"

                >
            </div>

        </a>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>

            <a title="上一个识别码 {{$last_censored_id}}" href="movie?censored_id={{$last_censored_id}}"><span class="glyphicon glyphicon-chevron-left"></span> </a><a
                    title="下一个识别码 {{$next_censored_id}}" href="movie?censored_id={{$next_censored_id}}"> <span  style = "height:20px" class="glyphicon glyphicon-chevron-right" ></span></a>
            <?php $sh = '';if ($movie_info['have_file'] == 3){ $sh = '<span style="color:red;">[已有文件]</span>'; }  echo $sh .$movie_info['censored_id'].' '.  $movie_info['movie_title']  ?>



<script type="text/javascript">
    var n=0;
// function check_remove(obj) {  // onload  ="check_remove(this)"  onerror="this.src='avbook/defts.jpg'"
//     if (obj.width==66 && obj.height==90){
//         $(obj).remove();
//     }
// }
    //console.log( this.width+'=='+this.height);

    $(function () {
        $(".sample-img-load").each(function() {
            //console.log(n++);
            var img = $(this);
            img.load(function () {
                // img.attr("isLoad", "true");
                // console.log(img.height());
                if(img.width()==66 ){
                    //img.remove();
                }
                //console.log( img.width+'ee=='+img.height);
            });
            img.error(function() {
               // console.log(6);
                //可以选择替换图片
            });
        });
    });
</script>
        <h4 id="mag-submit-show" style="cursor: pointer;">磁力連結投稿 <span id="mag-submit-toggle" class="glyphicon glyphicon-plus"></span><?php  if( $movie_info['owned']==1 || $movie_info['have_file']==3 ||$movie_info['have_file']==1):?>
            <a class="btn btn-mini-new btn-danger disabled  "  >已拥有</a>
            <?php  endif;?>

            <?php  if( $movie_info['have_file']!=0):?>
            <a class="btn btn-mini-new btn-primary disabled  "  ><?php echo $movie_info['have_file']?></a>
            <?php  endif;?>

        </h4>
        <div id="mag-submit" class="movie" style="padding:30px 20px 30px 5px;">
            <div id="mag-submit-hide" class="close" style="margin:-25px -13px 0 0;">×</div>
            <div class="col-md-11 col-xs-10">
                <div class="input-group">
                    <div class="input-group-addon">magnet地址:</div>
                    <input type="text" class="form-control" id="appendedInputButton">
                </div>
            </div>
            <button type="button" class="btn btn-default col-md-1 col-xs-2" onclick="checktxt()" data-toggle="modal" data-target="#magneturlpost">分享</button>
        </div>
        <!-- Magnet Verify Modal -->
        <div id="magneturlpost" class="modal fade" tabindex="-1" role="dialog"></div>
        <div class="movie" style="padding:12px; margin-top:15px">
            <table id="magnet-table" class="table table-condensed table-striped table-hover" style="margin-bottom:0;">
                <tbody><tr style="font-weight:bold;">
                    <td>磁力名稱 <span class="glyphicon glyphicon-magnet"></span></td>
                    <td style="text-align:center;white-space:nowrap">檔案大小</td>
                    <td style="text-align:center;white-space:nowrap">分享日期</td>
                </tr>
                </tbody>
            </table>
            <div id="movie-loading" style="display: none;">
                <table width="120" border="0" cellpadding="5" cellspacing="0">
                    <tbody>
                    <tr>
                        <td align="center">
                            <font class="ajax-text"><img src="avbook/movie_loading.gif" border="0"></font>
                        </td>
                        <td align="center">
                            <font class="ajax-text">讀取中...</font>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <table id="magnet-table2" class="table table-condensed table-striped table-hover" style="margin-bottom:0;">

            </table>
        </div>

        <div class="row ptb30">
            <div class="col-xs-6 text-center">
                <a href="" class="btn btn-lg btn-primary btn-block" target="_blank" rel="nofollow"><span class="glyphicon glyphicon-play"></span> 在線播放</a>
            </div>
            <div class="col-xs-6 text-center">
                <a href="" class="btn btn-lg btn-warning btn-block" target="_blank" rel="nofollow"><span class="glyphicon glyphicon-save"></span> 下載觀看</a>
            </div>
        </div>
        
        <div class="clearfix"></div>


        <h4>同類影片</h4>
        <div id="related-waterfall" class="mb20">

            <?php  foreach($res_more as $key=>$val): ?>
            <a  title="<?php echo $val['movie_title'] ?>"  class="movie-box" href="/movie?censored_id=<?php echo $val['censored_id'] ?>&id=<?php echo $val['code_36'] ?>" style="display:inline-block; margin:5px;">
                <div class="photo-frame">
                    <img src="<?php echo $picurl.str_replace('pl.jpg', 'ps.jpg', $val['movie_pic_cover'] )?>"
                    >
                </div>
                <div class="photo-info" style="height:36px; overflow:hidden; text-align:center;">
                    <span><?php echo $val['censored_id'] ?></span> @include('itemtag', ['movie_info' => $val])
                </div>
            </a>


            <?php endforeach; ?>



        </div>

        <div class="col-md-3 info i4444">
            <br><br>
        </div>
        <div id="related-waterfall2" class="mb20">



        </div>

        <script>

            function change_genre(obj,s){
                var t = "/api/change_genre?Genre="+s+"&avbook_id="+avbook_id  ;
                var obj = $(obj);
                $.ajax({
                    url: t,
                    type: "GET",
                    success: function(res) {
                        ShowMsg(res.msg);
                        if(res.code==1){
                            obj.removeClass('btn-default')
                            obj.addClass('btn-warning')
                        }else{
                            obj.removeClass('btn-warning')
                            obj.addClass('btn-default')
                            // $("a[datagenre='"+s+"']").remove()
                        }
                       // location.reload()
                    }
                });
            };
            function change_state(key,value,objs){
                var t = "/api/change_state?statekey="+key+"&statevalue="+value  +"&avbook_id="+avbook_id  ;
                var obj = $(objs);
                $.ajax({
                    url: t,
                    type: "GET",
                    success: function(res) {
                         ShowMsg(res.msg);
                        if (!objs)
                            return
                        //location.reload()
                        if(res.code==0){
                            obj.removeClass('btn-success')
                            obj.addClass('btn-default')
                        }else{
                            obj.removeClass('btn-default')
                            obj.addClass('btn-success')
                        }

                    }
                });
            };
			
            function change_info(key,value,objs){
                var t = "/api/change_info?key="+key+"&value="+value  +"&avbook_id="+avbook_id  ;
                var obj = $(objs);
                $.ajax({
                    url: t,
                    type: "GET",
                    success: function(res) {
                         ShowMsg(res.msg);
                        if (!objs)
                            return
                        //location.reload()
                        if(res.code==0){
                            obj.removeClass('btn-success')
                            obj.addClass('btn-default')
                        }else{
                            obj.removeClass('btn-default')
                            obj.addClass('btn-success')
                        }
						location.reload()
                    }
                });
            };
			
            (function($){
                $('.bigImage').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    closeBtnInside: false,
                    fixedContentPos: true,
                    mainClass: 'mfp-no-margins mfp-with-zoom',
                    image: {
                        verticalFit: true,
                        titleSrc: function(item) {
                            //return 'fg';
							return '<?php  echo $movie_info['movie_title']  ?>';
                        }
                    },
                    zoom: {
                        enabled: true,
                        duration: 300
                    }
                });
                var config ={
                    delegate: 'a',
                    type: 'image',
                    closeOnContentClick: false,
                    closeBtnInside: false,
                    mainClass: 'mfp-with-zoom mfp-img-mobile ',
                    image: {
                        verticalFit: true,
                        titleSrc: function(item) {
                            return '<?php  echo $movie_info['movie_title']  ?>';
                        }
                    },
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300,
                        opener: function(element) {
                            return element.find('img');
                        }
                    }

                }

                $('#sample-waterfall').magnificPopup(config);
            })(jQuery);

            // console.log(blurimg);



            $(function() {
                //var t = "../ajax/uncledatoolsbyajax.php?gid=" + gid + "&lang=" + lang + "&img=" + img + "&uc=" + uc + "&floor=" + Math.floor(Math.random() * 1e3 + 1);
                var t = '/api/magnetlinks?gid='+gid +'&censored_id=' +censored_id ;
                $.ajax({
                    url: t,
                    type: "GET",
                    success: function(e) {
                        //alert()
                        $("#magnet-table").append(e);
                      //  $('#mag-submit-show').click();
                    }
                });

                $('.kv-fa-heart').rating({
                    // showClear: false,
                    clearButtonTitle:"",
                    clearCaption:'',
                    min: 0, max: 10, step: 1, size: "xl", stars: "5",
                    starCaptionClasses: function(val) {
                        if (val == 0) {
                            return 'label label-default badge-default';
                        }else if (val < 3) {
                            return 'label label-default badge-default';
                        }else if (val < 5) {
                            return 'label label-warning badge-warning';
                        }else if (val < 7) {
                            return 'label label-info badge-info';
                        }else if (val < 9) {
                            return 'label label-primary badge-primary';
                        }else {
                            return 'label label-success badge-success';
                        }
                    },
                    showCaptionAsTitle: false,
                    clearButton: '<span class="header" style = "color: #333">收藏评分: <i  title = "点击取消收藏" class="glyphicon glyphicon-minus-sign"></i></span>',
                    // showCaption: false,
                    defaultCaption: '{rating} hh',
                    starCaptions: function (rating) {
                        return rating;
                    },
                    theme: 'krajee-fa',
                    filledStar: '<i class="fa fa-heart"></i>',
                    emptyStar: '<i class="fa fa-heart-o"></i>'
                });

                $('.kv-fa-heart').on('rating:change', function(event, value, caption) {
                    console.log(value);
                    console.log(caption);
                    change_state('favorite',value)
                });
                $('.kv-fa-heart').on('rating:clear', function(event) {
                    change_state('favorite','0');
                });
            })
//<span class="glyphicon glyphicon-heart"></span>
            var heartstate = true;

            function resetheartstate(obj,state) {
                if(state){
                    obj.html('<span class="glyphicon glyphicon-heart"></span>');
                }else{
                    obj.html('<span class="glyphicon glyphicon-heart-empty"></span>');
                }
                return !heartstate
            }

            $(".info .mypointer").click(function(){
                var obj = $(this);
                var code = obj.attr('value');
                var token = $("#token").val();
                var e = "../ajax/addfavorite.php?code=" + encodeURIComponent(code) + "&token=" + encodeURIComponent(token) + "&floor=" + Math.floor(Math.random() * 1e3 + 1);

                heartstate = resetheartstate(obj,heartstate)
                // $.ajax({
                //     url: e,
                //     type: "POST",
                //     //dataType: "json",
                //     cache:false,
                //     success: function (json) {
                //         //obj.html(json);
                //         ajaxobj=eval("("+json+")");
                //         if(ajaxobj.act=='err'){
                //             alert('收藏次數達上限，請稍候再試');
                //         }else{
                //             obj.html(ajaxobj.act);
                //             obj.attr('value',ajaxobj.code);
                //             obj.attr('title',ajaxobj.title);
                //             $("#token").val(ajaxobj.token);
                //         }
                //     }
                // });
            });

            $(".glyphicon-heart-empty").hover(function () {
                $(this).removeClass('glyphicon-heart-empty');
                $(this).addClass('glyphicon-heart');
            }, function () {
                $(this).removeClass('glyphicon-heart');
                $(this).addClass('glyphicon-heart-empty');
            });
            $(".glyphicon-heart").hover(function () {
                $(this).removeClass('glyphicon-heart');
                $(this).addClass('glyphicon-heart-empty');
            }, function () {
                $(this).removeClass('glyphicon-heart-empty');
                $(this).addClass('glyphicon-heart');
            });

        </script>
</div>

<script src="avbook/gallery.js"></script>

@endsection
