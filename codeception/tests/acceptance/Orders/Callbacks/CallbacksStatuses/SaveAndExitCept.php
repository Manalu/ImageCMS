<?php

$I = new AcceptanceTester($scenario);
initTest::login($I);
$I->amOnPage('/admin/components/run/shop/callbacks/statuses');
$I->click('.//*[@id="orderStatusesList"]/section/div[2]/div/table/tbody/tr[1]/td[2]/a');
$I->waitForText('Редактирование статуса обратного звонка');
$I->fillField(CallbacksPage::$NameStatus, 'sss');
$I->click(CallbacksPage::$SaveAndExitButton);
$I->waitForElementVisible('.alert.in.fade.alert-success');
$I->see('Изменения сохранены');
$I->waitForElementNotVisible('.alert.in.fade.alert-success');
$I->waitForText('Статусы обратных звонков');
$I->see('sss', './/*[@id="orderStatusesList"]/section/div[2]/div/table/tbody/tr[1]/td[2]/a');