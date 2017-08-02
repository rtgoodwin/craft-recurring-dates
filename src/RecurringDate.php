<?php
namespace s1lentium\recurring;
use yii\base\Event;
use Craft;
use craft\base\Plugin;

class RecurringDate extends Plugin
{
	public function init()
	{
		parent::init();

        Event::on('content.onSaveContent', function(Event $event) {
			craft()->recurringDate->contentSaved($event->params['content'], $event->params['isNewContent']);
		});
	}

	function getName()
	{
		return Craft::t('Recurring Dates');
	}

	function getVersion()
	{
		return '2.0.0';
	}

	function getDeveloper()
	{
		return 'Safarov Alisher';
	}

	function getDeveloperUrl()
	{
		return 'https://github.com/S1lentium/craft-recurring-dates';
	}
}