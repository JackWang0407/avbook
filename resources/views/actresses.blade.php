@extends('layout')


@section('content')
    <link rel="stylesheet" type="text/css" href="avbook/main.css">
    <script src="avbook/jquery.masonry.min.js"></script>


    <div class="container-fluid">
        <div class="row">


				<?php
					function CheckPicUrl($url){
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); //是否跟着爬取重定向的页面
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //将curl_exec()获取的值以文本流的形式返回，而不是直接输出。
						curl_setopt($ch, CURLOPT_HEADER,  1); // 启用时会将头文件的信息作为数据流输出
						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); //设置超时时间
						curl_setopt($ch, CURLOPT_URL, $url);  //设置URL
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
						$content = curl_exec($ch);
						$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);  //curl的httpcode
						$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE); //获取头大小
						curl_close($ch);
						return $httpcode;
					};

					function SelectPicUrl($jpgname){
						$url = "https://pics.vpdmm.cc/mono/actjpgs/";
						if (CheckPicUrl($url.$jpgname)==200):
							return $url;
						endif;
						$url = "https://pics.dmm.co.jp/mono/actjpgs/";
						if (CheckPicUrl($url.$jpgname)==200):
							return $url;
						endif;
						$url = "https://jp.netcdn.space/mono/actjpgs/";
						if (CheckPicUrl($url.$jpgname)==200):
							return $url;
						endif;

						return $url;
					};
					$srcurl = SelectPicUrl("iori_hinano.jpg");
				?>

            <div id="waterfall" class="masonry" style="position: relative; height: 2173px; width: 1309px;">
                <?php  foreach($actresses as $res_star):  ?>
                <a href = 'censored?&st=<?php echo $res_star['code_36'] ?>'>
                    <div class="item masonry-brick" style="position: absolute; top: 0px; left: 0px;">
                        <div class="avatar-box">
                            <div class="photo-frame">
							<?php
								if (file_exists("mono/actjpgs/".$res_star['star_pic'])):
									$srcurl = "mono/actjpgs/";
								endif;
							?>
							<img src="<?php echo $srcurl.$res_star['star_pic'] ?>" title="<?php echo $res_star['star_name'] ?>">

                            </div>
                            <div class="photo-info">
								<a target="_blank" href="https://actress.dmm.co.jp/-/search/=/searchstr=<?php echo $res_star['star_name'] ?>/">
								<?php if (file_exists("mono/actjpgs/".$res_star['star_pic'])): ?>
								<span style="color:#fff; background-color:#000">
								<?php else :?>
								<span>
								<?php endif; ?>
								<?php echo $res_star['star_name'] ?></span></a>
								<!--<span class="pb10"><?php echo $res_star['star_name'] ?></span>
								<span><?php echo $res_star['star_name'] ?></span>-->
								<!--<span class="pb10"><?php echo $res_star['star_birthday'] ?></span>-->
								<span><?php echo $res_star['star_birthday'] ?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script language="JavaScript">
        (function($) {
            $('#waterfall').masonry({
                itemSelector: ".item",
                isAnimated: false,
                isFitWidth: true
            });
        })(jQuery);
    </script>


    <div class="text-center hidden-xs">
        {!! $actresses->links() !!}
    </div>

@endsection


