<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('student_no','s[0-9]{10}');
Route::get('/','HomeController@index');
Route::group(['prefix'=>'student'],function() {
    Route::get('{student_no}', [
        'as'=>'student',
        'uses'=>function ($student_no){
            return "學號" . $student_no;
        }
    ]);

    Route::get('{student_no}/score/{subject?}', [
        'as'=>'student.score',
        'uses'=>function ($student_no){
            return '學號:' . $student_no . '的' . '所有科目'  &subject.'成績' ;
    }

])->where(['subject' => '(chinese| english| math']);
});
