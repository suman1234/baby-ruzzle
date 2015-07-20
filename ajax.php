<?php
ini_set('display_error', 1);

include_once 'dbconn.php';
dbconn();
global $dbh;
$input[0][0]=$_POST['cell-input-1'];
$input[0][1]=$_POST['cell-input-2'];
$input[0][2]=$_POST['cell-input-3'];
$input[0][3]=$_POST['cell-input-4'];


$input[1][0]=$_POST['cell-input-5'];
$input[1][1]=$_POST['cell-input-6'];
$input[1][2]=$_POST['cell-input-7'];
$input[1][3]=$_POST['cell-input-8'];


$input[2][0]=$_POST['cell-input-9'];
$input[2][1]=$_POST['cell-input-10'];
$input[2][2]=$_POST['cell-input-11'];
$input[2][3]=$_POST['cell-input-12'];

$input[3][0]=$_POST['cell-input-13'];
$input[3][1]=$_POST['cell-input-14'];
$input[3][2]=$_POST['cell-input-15'];
$input[3][3]=$_POST['cell-input-16'];

// Global variables
$total_flag=8;
$flag=0;
$cnt = 0;
$wordsArr = array();

// Right-Top-Diagonal traverse

$k=0;

for($i=3;$i>=0;$i--){//Row
        
    $words='';    
    
    for($j=3;$j>=0;$j--){//Column
                
        $letterGet = $input[$i][$j];
        $words.=$letterGet;
        
        if(strlen($words)>2)
            $wordsArr[] =  "'".$words."'";
        
        if($j>0){
        
            $words1='';
            for($k=$i-1;$k>=0;$k--){
                
                $letterGet = $input[$k][$j];
                $words1.=$letterGet;
                
                $wordsArr[] = "'".$words.$words1."'";
                
            }
        }
    }
}


// Left-bottom Diagonal traverse

$k=0;

for($i=0;$i<=3;$i++){//Row
        
    $words='';    
    
    for($j=0;$j<=3;$j++){//Column
                
        $letterGet = $input[$i][$j];
        
        $words.=$letterGet;
        
        if(strlen($words)>2){
            $wordsArr[] = "'".$words."'";
        }
        
        if($j>0){
        
            $words1='';
            for($k=$i+1;$k<=3;$k++){
                
                $letterGet = $input[$k][$j];
                $words1.=$letterGet;
                
                $wordsArr[] = "'".$words.$words1."'";
                
            }
        }
    }
}





// Left traverse

for($i=0;$i<=3;$i++){//Row
		
		for($k=0;$k<=3;$k++){//Column counter
		
			$words='';
			
			for($j=$k;$j<=3;$j++){//Column
							
				$letterGet = $input[$i][$j];
				
				$words.=$letterGet;
				
				$wordsArr[] = "'".$words."'";
				
			}
		}
}


// Down traverse
$l=0; $words='';
for($k=0; $k<5; $k++) // next rows
{
	$letter = '';
	
	while($l<4) // next column
	{	
		if($k >3)
		{
			$l++;
			$k = 0;
			$words = '';
		}
		else if($k<=3)
		{
			$letter = $input[$k][$l];
			$words = '';
			
			for($j=$k;$j<=3;$j++){//Column
							
				$letterGet = $input[$j][$l];
				
				$words.=$letterGet;
				
				$wordsArr[] = "'".$words."'";
			}
			
			break;
		}
	}
}


// Right traverse
for($i=0;$i<=3;$i++){//Row
	
	for($k=3;$k>=0;$k--){//Column counter	
	
		$words='';
	
		for($j=$k;$j>=0;$j--){//Column
						
			$letterGet = $input[$i][$j];
			
			$words.=$letterGet;
			
			$wordsArr[] = "'".$words."'";
			
		}
	}
}

// Up traverse
$l=0; $words='';
for($k=3; $k>=-1; $k--) // next row
{
	$letter = '';
	
	while($l<4) // next column
	{
		$letter = $input[$k][$l];
		$words = '';
		if($k<0)
		{
			$l++;
			$k = 3;
			$words = '';
		}
		else if($k<=3)
		{
			for($j=$k;$j>=0;$j--){//Column
							
				$letterGet = $input[$j][$l];
				
				$words.=$letterGet;
				
				$wordsArr[] = "'".$words."'";
			}
			break;
		}
	}
}

$wordsArr = array_unique($wordsArr);

/**
  * @internal Match with the database 
  */

$sel_qry = $dbh->prepare('SELECT word FROM word_list WHERE word IN ( '.implode(', ', $wordsArr).' ) ');
//~ print_r($sel_qry);
$sel_qry->setFetchMode(PDO::FETCH_OBJ);

if($sel_qry->execute())
	$sel_qry_res = $sel_qry->fetchAll();

if(!empty($sel_qry_res))
{
	$aOutput = array();
	
	//~ echo 'Total no. of correct words : '.count($sel_qry_res).'<br/>';
	
	$aOutput['corr_wrd']=count($sel_qry_res);
	
	$long_word  = '';
	$word_cnt = 0;
	foreach($sel_qry_res as $key=>$val)
	{
		if($word_cnt < strlen($val->word))
		{
			$word_cnt = strlen($val->word);
			$long_word = $val->word;
			
		}
		//~ $wordList .= $val->word.'<br/>';
		$wordList[]= $val->word;
	}
	
	//~ echo 'Longest Word : '.$long_word.'<br/>';
	//~ echo 'Maximum word\'s letter count  : '.$word_cnt.'<br/>';
	//~ echo 'Correct Word List : <br/>'.$wordList;

	$aOutput['long_wrd']=$long_word;
	$aOutput['cnt_wrd']=$word_cnt;
	$aOutput['corr_wrd_list']=$wordList;

	echo json_encode($aOutput);

}
else
{
	echo 'No results found';
}

?>