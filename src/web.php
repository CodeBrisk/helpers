<?php


Route::get('codebrisk', function(){
	echo 'Hello from the codebrisk package!';
});

Route::get('codebrisk/test', function(){
	return \CodeBrisk::test();
	// return \CodeBrisk\Helpers\Custom::test();
});