<?php

require_once(__DIR__ . '/crest.php');

switch(strtoupper($_REQUEST['event']))
{
	case 'ONIMBOTJOINCHAT':
		// send help message how to use chat-bot. For private chat and for group chat need send different instructions.
		CRest::call(
			'imbot.message.add',
			[
				'DIALOG_ID' => $_REQUEST['data']['PARAMS']['DIALOG_ID'],
				'MESSAGE' => 'Hi! I am an example-bot. I repeat what you say',
			]
		);

		break;
	case 'ONIMBOTMESSAGEADD':
		// response from our bot
		$report = getAnswer($_REQUEST['data']['PARAMS']['MESSAGE']);

		// send answer message
		CRest::call(
			'imbot.message.add',
			[
				"DIALOG_ID" => $_REQUEST['data']['PARAMS']['DIALOG_ID'],
				"MESSAGE" => $report['title'] . "\n" . $report['report'] . "\n",
			]
		);

		break;
}

function getAnswer($command = '')
{
	return [
		'title' => 'You said: ',
		'report' => $command,
	];
}