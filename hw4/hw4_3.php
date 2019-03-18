<?php
	$student = array(array('姓名'=>李大大,'生日'=>'2000/3/14', '電話'=>'0227042726'), 
				array('姓名'=>黃中中, '生日'=>'2000/5/5', '電話'=>'0733385321'),
				array('姓名'=>張小小, '生日'=>'2000/5/16', '電話'=>'0325021341'),
				array('姓名'=>劉哈哈, '生日'=>'2000/3/8', '電話'=>'0425307966'),
				array('姓名'=>王政書, '生日'=>'2000/12/25', '電話'=>'0227408999'));
				
	foreach($student as $data){
		$wantdate=sscanf($data['生日'],"%d/%d/%d");
		$wantdatefinal=vsprintf("生日:%02d年%02d月%02d日、",$wantdate);
		
		$phonefront=substr($data['電話'],0,2);
		$phoneback=substr($data['電話'],2,8);
		
		$echoname=sprintf("姓名:%s、",$data['姓名']);
		$echophone=sprintf("電話:(%s)%s。",$phonefront,$phoneback);
		echo $echoname.$wantdatefinal.$echophone."</br>";
	}
	/*foreach($student as $data){
		$birth=sscanf($data['生日'],"%d/%d/%d");
		$cbirth=vsprintf("%02d年%02d月%02d日",$birth);
		$phone=sprintf("(%02d)%08d",substr($data['電話'],0,2),substr($data['電話'],2,10));
		echo "姓名".$data['姓名']."、生日:".$cbirth."、電話:".$phone."。<br />";
	}*/	
?>
