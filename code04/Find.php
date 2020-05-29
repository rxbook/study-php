<?php

/*顺序查找法*/
function search(&$arr,$findVal){
	  $flag=false;	 
	  foreach($arr as $k=>$v){			 
		 if($findVal==$arr[$k]){
				echo "找到了，下标为:$k".'<br>';
				$flag=true;
				//break;
		 }
	  }
	  if(!$flag){
		 echo '没有找到！';
	  }
}

/*二分查找法，必须是有序数组*/
function binarySearch(&$arr,$findVal,$leftIndex,$rightIndex){              
	  //$leftIndex为数组最左端下标[0]，$rightIndex为最右端下标[count($arr)]
	  //当 $leftIndex>$rightIndex 说明没有数
	  if($leftIndex>$rightIndex){
		   echo "没有找到...";
		   return; //必须有
	  }
	  
	  //找到中间这个数
	  $middleIndex=round(($rightIndex+$leftIndex)/2);
	  //如果大于中间这个数，则向后面找
	  if($findVal>$arr[$middleIndex]){                     
			 binarySearch($arr,$findVal,$middleIndex+1,$rightIndex);
	  }
	  //如果小于中间这个数，则向前面找
	  elseif($findVal<$arr[$middleIndex]){
			 binarySearch($arr,$findVal,$leftIndex,$middleIndex-1);
	  }else{
		  echo "找到这个数，下标是：$middleIndex";
	  }              
}

?>