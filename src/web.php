<?php


Route::get('codebrisk', function(){
	echo 'Hello from the codebrisk package!';
});

Route::get('codebrisk/test', function(){
	return \CodeBrisk::test();
	// return \CodeBrisk\Helpers\Custom::test();
});

Route::get('codebrisk/user', function(){
	return user();
	// return \CodeBrisk\Helpers\Custom::test();
});