<?php
$val = array(
    'name'=>'tom',
    'sex'=>15
);
$val = array(
    'status'=>0,
);
if ($_POST['name']=='jay'){
    $val['status']=1;
}
echo json_encode($val);


$areas = array(
    '101'=>array(
        'name'=>'宁夏',
        'childs' => array(
            '10201'=>array(
                'name'=>'银川'
            ),
            '10202'=>array(
                'name'=>'固原'
            ),
        ),
    ),
    '102'=>array(
        'name'=>'甘肃',
        'childs'=> array(
            '10201'=>array(
                'name'=>'兰州'
            ),
            '10202'=>array(
                'name'=>'武威'
            ),
        ),
    ),
);
if (isset($_GET['id'])&&$_GET['id']) {
    foreach ($areas[$_GET['id']]['childs'] as $k=>$v){
        $rs[$k]['name'] = $v['name'];
    }
}else{
    foreach ($areas as $k=>$v){
        $rs[$k]['name']=$v['name'];
    }
}
echo json_encode($rs);