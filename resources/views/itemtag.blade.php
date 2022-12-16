
<?php if ($movie_info['owned'] == 1): ?>
<span class="glyphicon glyphicon-folder-close" title="已拥有"  style =" font-size: 16px; color: green;"></span>
<?php endif; ?>

<?php if ($movie_info['have_hd'] == 1): ?>
<span class="glyphicon glyphicon glyphicon-hd-video" title="7200p"  style =" font-size: 16px; color: green;"></span>
<?php endif; ?>

<?php if ($movie_info['have_fhd'] == 1): ?>
<span class="glyphicon glyphicon glyphicon-hd-video" title="1080p"  style =" font-size: 16px; color: red;"></span>
<?php endif; ?>

<?php if (($movie_info['no_watermark'] == 1) && ($movie_info['no_subtitles'] == 1)): ?>
<span class="btn btn-mini-new btn-warning disabled  " title="check ok" >確認</span>
<?php endif; ?>

<?php if ($movie_info['censored_leak'] == 1): ?>
<span class="btn btn-mini-new btn-info disabled  " title="check ok" >流出</span>
<?php endif; ?>

<?php if (($movie_info['bps'] > 5000) && ($movie_info['bps'] < 7100)): ?>
<span class="btn btn-mini-new btn-primary disabled  " title="bps" ><?php echo $movie_info['bps']."BPS" ?></span>
<?php elseif ($movie_info['bps'] >= 7100): ?>
<span class="btn btn-mini-new btn-danger disabled  " title="bps" ><?php echo $movie_info['bps']."BPS" ?></span>
<?php elseif ($movie_info['bps'] != 0): ?>
<span class="btn btn-mini-new btn-success disabled  " title="bps" ><?php echo $movie_info['bps']."BPS" ?></span>
<?php endif; ?>

<?php if ($movie_info['favorite'] >0): ?>
<span   title="已收藏" class="glyphicon glyphicon-heart" style =" font-size: 16px; color: #fde16d;-webkit-text-stroke: 1px #777;
    text-shadow: 1px 1px #999;"></span>
<?php endif; ?>

<?php if (!isset($_GET['mg']) && $movie_info['have_mg'] == 0 ): ?>
<!--<span title="暫時沒有磁力連結"  class="glyphicon glyphicon-ban-circle" style ="font-size: 16px; color: #FF0000 ;"></span>-->
<?php endif; ?>

<?php if ($movie_info['have_mg'] == 1 && !$movie_info['have_hd'] ): ?>
<!--<span title="包含 磁力連結"  class="glyphicon glyphicon-magnet" style ="font-size: 16px; color: #e38d13;"></span>-->
<?php endif; ?>


<?php if ($movie_info['have_hd'] == 1): ?>
<!--<span title="包含高清HD的磁力連結"  class="glyphicon glyphicon-hd-video" style ="font-size: 16px; color: #265a88;"></span>-->
<?php endif; ?>
<?php if ($movie_info['have_sub'] == 1): ?>
<!--<span title="包含字幕的磁力連結"  class="glyphicon glyphicon-subtitles" style ="font-size: 16px; color: #eb9316;"></span>-->
<?php endif; ?>

<?php if (strrpos($movie_info['Genre'], '[4m]') !== false ): ?>
<span title="包含类别 主观视角"  class=" glyphicon glyphicon-eye-open " style ="font-size: 16px; color: #FF0000;"></span>

<?php endif; ?>

<?php if (strrpos($movie_info['Genre'], '[8]') !== false ): ?>
<span title="包含类别 眼镜"  class="glyphicon glyphicon-sunglasses" style ="font-size: 16px; color: #FF2400;"></span>
<?php endif; ?>

<?php if ($movie_info['wanted'] == 1  ): //&& $movie_info['owned'] == 0?>
<span title="想要的"  class="glyphicon glyphicon-search" style ="font-size: 16px; color: #337ab7;"></span>
<?php endif; ?>
