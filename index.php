<?php

function finder($estan , $todas = "en aceituno?"){
    $aceituno = ['a','c','e','i','t','u','n','o'];
    if(in_array("a",$aceituno , true)){
        echo'true';
    }
    if(in_array("e",$aceituno , true)){
        echo'true';
    }
    if(in_array("i",$aceituno , true)){
        echo'true';
    }
    if(in_array("o",$aceituno , true)){
        echo'true';
    }
    if(in_array("u",$aceituno , true)){
        echo'true';
    }
}

finder('aceituno');