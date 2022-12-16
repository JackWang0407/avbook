<?php
return [
    'title' => 'Avbook',
    'cen_per_page' => 100,
    'filter' =>[
        'hd=1'=>'720P',
        'fhd=1'=>'1080P',
        'cl=1'=>'無碼流出',
        //'sub=1'=>'有字幕',
        'owned=1'=>'擁有',
        'owned=0'=>'未擁有',
        //'gc[]=b285abba3ba794eb'=>'主观视角',
        //'notgc[]=b285abba3ba794eb'=>'排除主观视角',
        'gc[]=134416e1658593dd'=>'VR',
        'gc[]=b22f4a6cca7aaaac'=>'VR専用',
        'notgc[]=134416e1658593dd'=>'排除VR',
		'gc[]=644ddb48c6a4db96'=>'寫真',
		'notgc[]=b22f4a6cca7aaaac'=>'排除VR専用',
        'notgc[]=644ddb48c6a4db96'=>'排除寫真',
        'orderby=release_date'=>'按日期排序',
        'orderby=censored_id'=>'按番號排序',
        'minbps=4500'=>'BPS小於4500',
        'maxbps=7000'=>'BPS大於7000',
        ]
];
