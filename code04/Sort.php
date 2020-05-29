<?php
/*冒泡排序的方法*/
function bubbleSort(&$arr){	//注意这里&
	$temp=0; 
	for($i=0;$i<count($arr)-1;$i++){
		for($j=0;$j<count($arr)-1-$i;$j++){
			if($arr[$j]>$arr[$j+1]){  
				$temp=$arr[$j];
				$arr[$j]=$arr[$j+1];
				$arr[$j+1]=$temp;
			}
		}
	}
}

/*选择排序的方法*/
function selectSort(&$arr){	 
	  $temp=0;
	  for($i=0;$i<count($arr)-1;$i++){			 
		 //假设 $i就是最小的数
		 $minVal=$arr[$i];
		 //记录我认为的最小数的下标
		 $minIndex=$i;
		 for($j=$i+1;$j<count($arr);$j++){
			//说明我们认为的最小值，不是最小值
			if($minVal>$arr[$j]){
			   $minVal=$arr[$j];
			   $minIndex=$j;
			}
		 }
		 //最后交换		 
		 $temp=$arr[$i];
		 $arr[$i]=$arr[$minIndex];
		 $arr[$minIndex]=$temp;
	  }
}

/*插入排序法*/
function insertSort(&$arr){              
	  //先默认下标为0 这个数已经是有序
	  //1. 知道思想->看懂代码->写(灵活)
	  for($i=1;$i<count($arr);$i++){
			 //$insertVal是准备插入的数
			 $insertVal=$arr[$i];
			 //准备先和$insertIndex比较
			 $insertIndex=$i-1;
			 
			 //如果这个条件满足，说明，我们还没有找到适当的位置
			 while($insertIndex>=0&&$insertVal<$arr[$insertIndex]){				   
					//同时把数后移
					$arr[$insertIndex+1]=$arr[$insertIndex];
					$insertIndex--;
				   
			 }
			 //插入(这时就给$insertVal找到适当位置)			 
			 $arr[$insertIndex+1]=$insertVal;   
	  }              
}

?>