<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test fail registration - Too long input')->
	
	info(' 01 - Registration form is visible')->
	get('/registrera-ny-anvandare')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/Registrera ny/')->
		checkElement('#sendButton', true)->
	end()->
	
	info(' 02 - User clicks "Skicka" with parameters')->
	setField('webschool_user[name]', 'Gustav Hansson')->
	setField('webschool_user[email]', 'gurkan_cool@hotmail.com')->
	setField('webschool_user[user]', 'Gurkan')->
	setField('webschool_user[pass]', '4ttBr4L4s4n4rd')->
	setField('webschool_user[passAgain]', '4ttBr4L4s4n4rd')->
	click('Skicka')->
	
	with('form')->begin()->
		hasErrors(true)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/Registrera ny/')->
		checkElement('#sendButton', true)->
		checkElement('small.error', true)->
	end()->
	
	info(' 03 - If all tests is ok, user not registrated and error messages is shown')
;
