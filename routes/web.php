<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->post('aisp', 'AispController@searchAisp')->name('aisp.search');
    $this->get('aisp', 'AispController@index')->name('admin.aisp');
    
    $this->get('cpr', 'CprController@index')->name('admin.cpr');
    
    $this->post('opm', 'OpmController@searchOpm')->name('opm.search');
    $this->get('opm', 'OpmController@index')->name('admin.opm');
    
    $this->get('/', 'AdminController@index')->name('admin.home');

});

    $this->get('/', 'Site\SGCOMController@index')->name('home');

Auth::routes();


