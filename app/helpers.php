<?php


//use Hash;
define('Paginate_number',10);
define('Limit',10);




function validationErrorsToString($errArray) {
    $valArr = array();
    foreach ($errArray->toArray() as $key => $value) {
        $newVal=(isset($valArr[$value[0]]))?$valArr[$value[0]].',' :'';
        $key=__('validation.attributes.'.$key);
        $valArr[$value[0]]=(!empty($valArr[$value[0]]))? $newVal.$key:$key ;

    }
    if(!empty($valArr)){
        $errorArr=array();
        foreach ($valArr as $errorMsg => $attributes) {

            $errorArr[]=__('validation.attributes.field')." (".$attributes.") ".$errorMsg;
        }
        $errStrFinal = implode(',', $errorArr);
    }
    return $errStrFinal;
}





?>
