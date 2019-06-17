<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $guarded=[];

    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }

    public function algorithm($arr,$n)
    {
    	$ar = explode(' ', $arr);
    	$res=-1;
	    $m=count($ar);
	    if ($m<2)
	    {
	    	$res=-1;
	    }
	    else
	    {
		    $d=intdiv($m,2)-1;
		    $nl=0; $np=0;
		    for($i=0;$i<$d+1;$i++)
		        if($ar[$i]==$n) $nl++;
		    for($i=$m-1;$i>$d;$i--)
		        if($ar[$i]!=$n) $np++;
		    if($np==$nl) $res=$d+1;
		    else
		    {
		        $j=$d;
		        if($nl<$np)
		        {
		            while(($j<$m-1)&&($nl!=$np))
		            {
		                if($ar[$j]==$n) $nl++;
		                else $np--;
		                $j++;
		            }
		            if($nl==$np) $res=$j+1;
		            if($j==$m-1) $res=-1;
		        }
		        else
		        {
		            while(($j>=0)&&($nl!=$np))
		            {
		                if($ar[$j]!=$n) $np++;
		                else $nl--;
		                $j--;
		            }
		            if($nl==$np) $res=$j+1;
		            if($j<0) $res=-1;
		        }
		    }
		}
	    if ($res>-1) 
	    	$ans=array("ind"=>$res,"value"=>$ar[$res]); 
	    else $ans=array("ind"=>$res,"value"=>NAN); 
	    return implode(' ',$ans);
    }

}
