<?php
use Jefersonkasper\Ontosmart\OntoSmart;
it('Should return an array with keys and values, using color value', function(){
	$fakeClient = new OntoSmart();
	$arr = $fakeClient->getArrayValues('color');
	expect($arr[0])->toBe('blue');

});