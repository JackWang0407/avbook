@extends('layout')
@section('navbar_right')
@section('title', '有码类别')
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="/genre#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-filter" style="font-size:12px;"></span> <span class="hidden-md hidden-sm">多選類別</span> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li class="mypointer" id="showgr_single"><a><span class="glyphicon glyphicon-filter"></span>單選類別</a></li>
            </ul>
        </li>
    </ul>


@endsection

@section('content')

    <div class="container-fluid pt10">

        <style type="text/css">
            @media screen and (max-width: 1490px) {
                .ad-table {display:none;}
            }
            @media screen and (min-width: 1490px) {
                .ad-list {display:none;}
            }
        </style>

        {{--<table class="ad-table">--}}
        {{--<tbody><tr>--}}
        {{--<td><a href="https://www.77167w.com:2885/?a=403381" target="_blank" rel="nofollow"><img src="avbook/znj_xyc_728x90_1.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="http://103.214.164.35/javbus.htm" target="_blank" rel="nofollow"><img src="avbook/ylg728x90_1.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><a href="http://sb99z.net/?Intr=25360117" target="_blank" rel="nofollow"><img src="avbook/hg728x90_10.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="http://pu.p99998888.com:888/297603.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_30.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><script data-cfasync="false" async="" src="https://adserver.juicyads.com/js/jads.js"></script><ins id="708048" data-width="728" data-height="90"></ins><script type="text/javascript" data-cfasync="false" async="">(adsbyjuicy = window.adsbyjuicy || []).push({"adzone":708048});</script></td>--}}
        {{--<td><a href="http://www.7003666.com:8859/?aff=646884" target="_blank" rel="nofollow"><img src="avbook/hg728x90_3.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><a href="http://www.7711888888.com:1188/4387.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_41.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="http://hg.g77775555.com:888/720698.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_43.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><a href="http://yin.5562666.com:8080/5566.html" target="_blank" rel="nofollow"><img src="avbook/yh728x90_13.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="https://48855268.com/javbus.html" target="_blank" rel="nofollow"><img src="avbook/c89_728x90_8.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><a href="https://58qp365.com/?c=U9LVB" target="_blank" rel="nofollow"><img src="avbook/c89_728x90_9.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="http://dj.q77777777.com:901/1782268.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_38.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><a href="http://ky.g66667777.com:8001/JBWEC.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_44.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="https://617c93.com/vote_topic_5072490.do" target="_blank" rel="nofollow"><img src="avbook/c89_728x90_7.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><a href="https://www.99006v.com:3369/?a=234461" target="_blank" rel="nofollow"><img src="avbook/znj_xyc_728x90_2.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="http://www.142904.com/javb.html" target="_blank" rel="nofollow"><img src="avbook/ylg728x90_2.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><a href="http://www.20171444.com:8888/Register/?a=15771866" target="_blank" rel="nofollow"><img src="avbook/mw728x90_42.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="http://bcbm.bcbm66666.com:890/bs18.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_35.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
        {{--<td><a href="http://hao.6955000.com:2020/7078.html" target="_blank" rel="nofollow"><img src="avbook/yh728x90_14.gif" width="728" height="90"></a></td>--}}
        {{--<td><a href="https://www.724c51.com/vote_topic_42431.do" target="_blank" rel="nofollow"><img src="avbook/c63_728x90_7.gif" width="728" height="90"></a></td>--}}
        {{--</tr>--}}

        {{--</tbody></table>--}}


        {{--<div class="ad-list">--}}
        {{--<div class="pb10 text-center bn728-93"><a href="https://www.77167w.com:2885/?a=403381" target="_blank" rel="nofollow"><img src="avbook/znj_xyc_728x90_1.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://103.214.164.35/javbus.htm" target="_blank" rel="nofollow"><img src="avbook/ylg728x90_1.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://sb99z.net/?Intr=25360117" target="_blank" rel="nofollow"><img src="avbook/hg728x90_10.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://pu.p99998888.com:888/297603.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_30.gif" width="728" height="90"></a></div> <div class="hidden-xs text-center"><script data-cfasync="false" async="" src="https://adserver.juicyads.com/js/jads.js"></script><ins id="708048" data-width="728" data-height="90"></ins><script type="text/javascript" data-cfasync="false" async="">(adsbyjuicy = window.adsbyjuicy || []).push({"adzone":708048});</script></div> <div class="pb10 text-center bn728-93"><a href="http://www.7003666.com:8859/?aff=646884" target="_blank" rel="nofollow"><img src="avbook/hg728x90_3.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://www.7711888888.com:1188/4387.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_41.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://hg.g77775555.com:888/720698.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_43.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://yin.5562666.com:8080/5566.html" target="_blank" rel="nofollow"><img src="avbook/yh728x90_13.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="https://48855268.com/javbus.html" target="_blank" rel="nofollow"><img src="avbook/c89_728x90_8.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="https://58qp365.com/?c=U9LVB" target="_blank" rel="nofollow"><img src="avbook/c89_728x90_9.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://dj.q77777777.com:901/1782268.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_38.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://ky.g66667777.com:8001/JBWEC.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_44.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="https://617c93.com/vote_topic_5072490.do" target="_blank" rel="nofollow"><img src="avbook/c89_728x90_7.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="https://www.99006v.com:3369/?a=234461" target="_blank" rel="nofollow"><img src="avbook/znj_xyc_728x90_2.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://www.142904.com/javb.html" target="_blank" rel="nofollow"><img src="avbook/ylg728x90_2.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://www.20171444.com:8888/Register/?a=15771866" target="_blank" rel="nofollow"><img src="avbook/mw728x90_42.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://bcbm.bcbm66666.com:890/bs18.html" target="_blank" rel="nofollow"><img src="avbook/mw728x90_35.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="http://hao.6955000.com:2020/7078.html" target="_blank" rel="nofollow"><img src="avbook/yh728x90_14.gif" width="728" height="90"></a></div> <div class="pb10 text-center bn728-93"><a href="https://www.724c51.com/vote_topic_42431.do" target="_blank" rel="nofollow"><img src="avbook/c63_728x90_7.gif" width="728" height="90"></a></div></div>--}}

        {{--<div class="alert alert-info alert-dismissable alert-common" style="position:relative">--}}
        {{--<button type="button" class="close" style="position:absolute; right:8px; top:3px;" data-dismiss="alert" onclick="javascript:$.cookie(&quot;cnadd10&quot;, &quot;off&quot;,{expires: 365,path: &quot;/&quot;})">×</button>--}}
        {{--<div class="row">--}}
        {{--<div class="col-xs-12 col-md-6 col-lg-3 text-center"><strong>永久域名：</strong><a href="https://www.javbus.com/" target="_blank">https://www.javbus.com</a></div>--}}
        {{--<div class="col-xs-12 col-md-6 col-lg-3 text-center"><strong>防屏蔽地址：</strong><a href="https://www.busjav.us/" rel="nofollow">https://www.busjav.us</a></div><div class="col-xs-12 col-md-6 col-lg-3 text-center"><strong>防屏蔽地址：</strong><a href="https://www.dmmbus.us/" rel="nofollow">https://www.dmmbus.us</a></div><div class="col-xs-12 col-md-6 col-lg-3 text-center"><strong>防屏蔽地址：</strong><a href="https://127.0.0.1/" rel="nofollow">https://127.0.0.1</a></div>--}}
        {{--</div>--}}
        {{--</div>--}}



        <h4>主題</h4>
        <div class="row genre-box">
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="dd21aefe7ae3228c">企画</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7afb6cebca6aa336">レズ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="3c21efc1c879b579">ナンパ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b9ce34f61b399296">野外・露出</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="998ecc028c00f104">アイドル・芸能人</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e737739e91600156">その他フェチ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9da0b59eb1f5c94d">近親相姦</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ce4f786eb328cb6b">巨乳フェチ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="62b917832fe4563e">カップル</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f2b33b0f38724411">ゲイ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1d845bf3af10f908">淫乱・ハード系</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="395a71d59a168477">盗撮・のぞき</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="83ed15ccd981e11b">脚フェチ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="97e0f8151f22afc4">痴漢</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="4d1ca97113e6dd50">逆ナン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="50df2f325f722c1a">調教・奴隷</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8293b18d5c6337ab">ダンス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9e643355e680d15a">ふたなり</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="3d0d8921ebbf9445">姉・妹</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="bb8d543cbeb317a7">不倫</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="fdf3210612fe509d">鬼畜</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="bf7df9d947983139">学園もの</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5f8b327a34efd65e">イタズラ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c14e64bf5a834c44">妄想</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="aa9cf03ce3709cf9">残虐表現</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="66022b7030b6024f">泥酔</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f090df5eb9a01f11">処女</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="de567f337aa622c2">エステ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="01eb1aba99aac8da">セクシー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ad3b5ee4066bc285">レズキス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="2f33a6f1e8160226">スポーツ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9ad391bb48969874">くすぐり</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="695ff12b298f6f66">寝取り・寝取られ・NTR</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="92d6e5e844b89c5b">ショタ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="d15a30c8820caea1">童貞</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="0f1c55c120c09561">ツンデレ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="fea709da22db7d1c">触手</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="186e965d332a9cd5">ゲロ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e0e1e1285faa0212">拷問</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="3641c4335e8cd10a">温泉</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f08bfd4645689f20">原作コラボ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ec2e3cecda52c5de">デカチン・巨根</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f3dcb526ec22c5e8">ファン感謝・訪問</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="2221e9c59b21545a">ハーレム</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="63072ecbac683d14">早漏</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f19775d3dc23f16b">キス・接吻</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a33f4c2859e6936f">汗だく</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8c2cba520fd6ad35">ボーイズラブ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="632178585a249ec6">ビッチ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ba372020980424d9">時間停止</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b22f4a6cca7aaaac">VR専用</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="134416e1658593dd">ハイクオリティVR</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="18327ddde8aa335d">M女</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="79e7be98e81a75ac">ノーブラ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8880ddcab213149f">花嫁</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c0109c536211c51c">軟体</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c6075b2c2a061b5f">飲み会・合コン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="92aff5d24ffede4f">デート</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="99b746dfb00c6cff">面接</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="cef615d3acffae03">オタク</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1e457aaa7b528177">部下・同僚</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="0085ed7cd400e3ba">レズ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9db19d85ab041623">ディルド</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="fac86d8b14da8580">セレブ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="45f0823f1244516b">お爺ちゃん</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7f232f6738aac34e">ヨガ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8ad8fec50f4ef0eb">叔母さん</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f971525bb7bcb2ab">アスリート</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="15b854166817c44d">スワッピング・夫婦交換</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="76cd849224a91154">病院・クリニック</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="38acfeb9e0b949d2">スパンキング</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7f390ac961b5af73">ホテル</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6b77bec051e36ace">鼻フック</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7ce757ecb340de7a">女王様</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="336889ecefaff565">ママ友</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="4f7f9d1c3f6e02b5">チアガール</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="69c9a00da46352ab">白目・失神</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9defb9ec295879fa">お婆ちゃん</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f1ab9a80780ceb36">部活・マネージャー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b0b3be30e6bf490f">妄想族</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5c612b0d38806b0a">エマニエル</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="310d2e9f99797ce3">新人ちゃん続々デビュー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="32ab4da6a2591d96">放置</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9ba1f825d0f99b9b">サイコ・スリラー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="68eec0ac6a7a72e9">4K</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="779f70dec4249ea4">福袋</label></a>
        </div>

        <h4>角色</h4>
        <div class="row genre-box">
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9f63749d2b1be4fc">ウェイトレス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ce53dfd4157de35c">女子校生</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5cfb5e2e6144f28d">女子アナ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e7aca8167fc59065">ギャル</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="3e2e0909ce93fb34">黒人男優</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f89dd9adf9d22ecf">痴女</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8072f38f2997c7c0">看護婦・ナース</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9b0c98693a73d502">家庭教師</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b63ab58528339b7f">お母さん</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9367d81b02786cfd">女教師</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8b65dedf5af2820e">キャンギャル</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f545ddeb2f2c0f1f">女子大生</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="64b14beb9f82d5a9">レースクィーン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c9150357fe0eaf44">キャバ嬢・風俗嬢</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="3490e0767d0113ce">職業色々</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="130a4109f4798852">女医</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6accf54e3a21048b">人妻・主婦</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="794edd1f8e1a5964">白人女優</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="80619acb55b08b82">お嬢様・令嬢</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9ebf1625caa4ffda">未亡人</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8936c2135b834533">バスガイド</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a551489263acaec3">格闘家</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8a7bcb8e88ef8fa6">お姉さん</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="40e4acb423fccdeb">若妻・幼妻</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b0eaad139052cec8">美少女</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="59dbfcc9d2e0f48e">秘書</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ce3c5e29309bd879">モデル</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="95b82295054855d4">女将・女主人</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="240aabc93e22effc">そっくりさん</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a0d6eacb2b63d25e">女捜査官</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c13d533ef83ae7d0">アクション・格闘</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9be1b1119d81728a">義母</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="2fb263d9af62ebb1">インストラクター</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6811a4f055bae3ca">コンパニオン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="93ef6738bd131dd2">アジア女優</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="27339f988e1b13eb">お姫様</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c34e95f000866956">幼なじみ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f3999f5aed55f966">極道・任侠</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="94b581a4417a6654">M男</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ceef7f6037da5caa">女上司</label></a>
        </div>

        <h4>服裝</h4>
        <div class="row genre-box">
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e4db8b2a7043a74a">コスプレ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b1623a34d95c19eb">めがね</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="baba45da94ea2171">水着</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5a07be553e5ab0fd">学生服</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="194d30fd711e897b">ミニスカ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e4cb064353570e17">メイド</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b0b282e772f8852f">チャイナドレス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="269774848c04bed5">競泳・スクール水着</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="795e6b018cdb8cd5">セーラー服</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="3d5ead0de69520f9">ランジェリー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="410ec41bcb28f599">体操着・ブルマ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="99ea11e16284447a">和服・浴衣</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="86242c430fbe643e">OL</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6868b21407a4199a">ボディコン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="47251408c7a81957">パンスト・タイツ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b8b2bd826e38bb9a">スチュワーデス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="12f4ed653ce6dc83">ミニスカポリス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f6d35ab18a708657">裸エプロン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="74a9d0e356f0b5b8">レオタード</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="64aa2cab5cb1d6f9">制服</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="0535c7902aee0a40">ルーズソックス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f2409d601a604bdb">巫女</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5f3df4323009cb65">ネコミミ・獣系</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="858e892d6999dc58">バニーガール</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="43e3d62f632d6f88">着エロ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="fa5deb7d4d1b7e2b">パンチラ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c5a720ef32918cfc">女装・男の娘</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a71d519b76a3d894">くノ一</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7f699073b89d0745">ドール</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ff97abc58c7dc31c">ニーソックス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1416cd14ca9bdedf">女戦士</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6b05124daa9e1ce1">制服</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e363f89b5217fa7c">コスプレ</label></a>
        </div>

        <h4>體型</h4>
        <div class="row genre-box">
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6387ceb8946b83c3">巨乳</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="eaa8cebf3db8b605">貧乳・微乳</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e593c0d21f16b2a1">ミニ系</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="63e2ff814ca15747">熟女</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a556eddafdf24039">妊婦</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e2ae4105278002da">スレンダー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="bcd718578740c3a5">ぽっちゃり</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="0b83576a61310941">パイパン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="0c65c5db6063e967">ニューハーフ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="208079923c63ada8">長身</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="138b1ead40359cea">尻フェチ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="00f15d8f74f7fb95">小柄</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ba1963f970a610af">美乳</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="99cbf5584a774cde">筋肉</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8e6c8cf10c52df0a">超乳</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ca740d03ea3f7e6e">巨尻</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8ca70aac21a418c6">日焼け</label></a>
        </div>

        <h4>行為</h4>
        <div class="row genre-box">
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7a1c2d8cf575ee0f">中出し</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="4381bc13514bd8a9">顔射</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ca76971d71370971">オナニー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="22523cc0f3d6ed03">ぶっかけ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ed1a251836b8fa43">アナル</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="73bd407530f2e2eb">ごっくん</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="dc63a1b05fb6d45a">手コキ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6cb2e658508e1c2e">放尿・お漏らし</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="3e02b9ce6931d674">乱交</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="428875c0f04324d6">フェラ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8dd9e7b22100b50d">飲尿</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="82ecd67cc1dbffa5">脱糞</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="4fb4e70c595ecd77">パイズリ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e2bc8fc08f9d0281">潮吹き</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="2518b61298803e75">淫語</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="aa519b735e04e301">シックスナイン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6ed4c51058cfae58">イラマチオ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c134e3d658cf6e3b">フィスト</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="4edad1d7d22acb56">クンニ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8cb503f3126ac8dd">騎乗位</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="21b743106c504a62">マッサージ・リフレ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="73fbe52078d85fa9">指マン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5ae04653a90b95d6">母乳</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b5cf41d3b60953cd">足コキ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a8a4566d05abaec0">食糞</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c9f4eeaad392142d">顔面騎乗</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="d5500ac3d70a33c3">アナルセックス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="57fc0545585013f7">アクメ・オーガズム</label></a>
        </div>

        <h4>玩法</h4>
        <div class="row genre-box">
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="137d5a77478f724c">3P・4P</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b64d55c0609046eb">バイブ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b517d734c0d87f49">ボンテージ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e619cc4e48c8cc20">ローター</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ad66d7f8a18ff53a">おもちゃ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c9301289712fa5a7">スカトロ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="bf8ded50b330e932">SM</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="d63d81a42e78a210">カーセックス</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1410cb4f0761f4e6">ドラッグ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="52684da660acaf23">強姦</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="146cb814900f6b36">縛り・緊縛</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a85dc5e367958839">監禁</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="557ad6db09aea282">浣腸</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="42922345e53f9818">クスコ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="6aa5c06bb3d805f2">異物挿入</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="19eba31a8e51104e">輪姦</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ed636ef3335b3e28">拘束</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b6dd7905ec0d7da4">辱め</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="41649f24fb1eedd4">羞恥</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f6afb2e2522aa18d">ローション・オイル</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="041c7d61be248964">催眠・洗脳</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="09f9b1633c3aea1d">ポルチオ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b97766f924ca7d10">電マ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="adf0cb9dc8ae7e3d">即ハメ</label></a>
        </div>

        <h4>類別</h4>
        <div class="row genre-box">
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="4001e6ffc2c9fbf6">ベスト・総集編</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c4145926405d550f">単体作品</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="bfcaa1b424700e19">独占配信</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e631d945d435d30d">インディーズ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="f16815aece50e399">局部アップ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="fbe3041e96f7c4c0">素人</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9e9b4458cc6a88a7">ハメ撮り</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1dc471d15ce374ce">洋ピン・海外輸入</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7f4e92b7d5e3668e">ドキュメンタリー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="ca6a698b8b41f967">投稿</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="63ab040b9dca7318">その他</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="d65b5063f5aaeaed">デジモ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="40c10e35bee35487">デビュー作品</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="26fcfcbeff359631">クラシック</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="662767002a041b08">ギリモザ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="64dbe6a80ede2770">4時間以上作品</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="644ddb48c6a4db96">イメージビデオ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b285abba3ba794eb">主観</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5f9f62d40baa77cf">ハイビジョン</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="2b08108131f6ca94">恋愛</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="74078c8f095e3348">ドラマ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="2ef8dba8626baed9">復刻</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1467ec016dc4bd6a">期間限定セール</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="34d335cddb396ff6">複数話</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="8291ce808e8d37ab">特撮</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="aa652f3b63c1c619">3D</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="14e568e0337a0e4f">ドラマ</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1e163590d2f4a74e">R-18</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="fe26e71539ecc54a">R-15</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="023f6b8c322df11a">FANZA配信限定</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="d54d2d16a28df5b9">How To</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="d36ac2afca053caf">女性向け</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="07ecc940bfd5db4c">ホラー</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1f0ed55a63eecde5">コラボ作品</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="143609c0de911729">10枚組</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7829d2f8bba2b7ea">女優ベスト・総集編</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b432c6fc2e6976a1">16時間以上作品</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="05ced8a615ee17d4">動画</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="818f782c1c8970bb">スマホ推奨縦動画</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="90d108f855b1bcd3">Vシネマ</label></a>
        </div>
		
        <h4>其他</h4>
        <div class="row genre-box">
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="aaa468ba01e5a7f8">AV OPEN 2016 人妻・熟女部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="e9677d1882fbdf46">AV OPEN 2016 企画部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="97f90121ae01deb3">AV OPEN 2016 ハード部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="33575e6f587a4843">AV OPEN 2016 マニア・フェチ部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="bcea88abc5a239f3">AV OPEN 2016 乙女部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="b68c0c68a3a62d10">AV OPEN 2016 女優部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="80be243ea6164094">AV OPEN 2016 ドラマ・ドキュメンタリー部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5a66efc5324cd5dc">AV OPEN 2016 素人部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="5f92aa9003db7a13">AV OPEN 2016 バラエティ部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="535447705d647cbe">AVベースボール特典</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="77c29af011dede0e">AV OPEN 2017 フェチ部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="9c5c300cd4b13606">AV OPEN 2017 人妻・熟女部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a0f122c8bad87073">AV OPEN 2017 素人部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="990d3beae26e32c6">AV OPEN 2017 ドラマ部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="373da7d8f931f954">AV OPEN 2017 乙女部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="0a67a6d1aaa31d40">AV OPEN 2017 ハード部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="2039efaef739124d">AV OPEN 2017 女優部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="72818c2e81e01a5e">AV OPEN 2017 ドキュメンタリー部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="7ddc6e5b5b1fed5f">AV OPEN 2017 マニア部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="a5a296894ab894f0">AV OPEN 2017 企画部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="817e15249591e227">AV OPEN 2018 素人部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="22fc00f24b2bb018">AV OPEN 2018 ハード部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="1fcc7bab49b0d1fc">AV OPEN 2018 人妻・熟女部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="d3e9dde3e28a01ad">AV OPEN 2018 マニア・フェチ部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="0fea3b3729a8a955">AV OPEN 2018 女優部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="48e9cbf1e3563f20">AV OPEN 2018 企画部門</label></a>
        <a class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center"><label><input type="checkbox" name="gr_sel" value="c6a00caf1ec78749">AV OPEN 2018 乙女部門</label></a>
        
        </div>
        <button type="button" class="btn btn-danger btn-block btn-genre" onclick="genres_sel()">提交</button>

    </div>

    <script>
        $("#showgr_single,#cellshowgr_single").click(function(){
            $.cookie("existisgenres", "gr_single",{expires:365,path:'/'});
            location.reload()
        });

        $("#showgr_multi,#cellshowgr_multi").click(function(){
            $.cookie("existisgenres", "gr_multi",{expires:365,path:'/'});
            location.reload()
        });

        function genres_sel(){
            var curGenres = "";
            var curGenrestitle = "";
            $("input[name='gr_sel']:checkbox").each(function () { if($(this).is(":checked")){ curGenres += $(this).val() + "-";curGenrestitle += $(this).parent().html().replace(new RegExp($(this).prop("outerHTML"),'g'),"") + "-"; } });
            if (curGenres != "") {
                curGenres = curGenres.substring(0, curGenres.length - 1);
                window.location.href="/censored?strgc="+curGenres +"&ltitle[]=类别:" +curGenrestitle;
            }
            else {
                return;
            }

        }
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('avbook/genre.css') }}">

@endsection