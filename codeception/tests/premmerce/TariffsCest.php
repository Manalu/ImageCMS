<?php

use \PremmerceTester;

/**
 * Для запуску тесту має бути створений магаз
 *  	imageqatarifftest.premme.com
 *      imageqa@tarrrif.test
 *      imageqa
 * 
 * Перейти на free > basic > standart > bussiness > premium
 * змінити в адмінці
 * перевірити які модулі доступні
 * створити максимум товарів( CSV )-  підготувати CSV файли
 * забити місце до максимума
 * 
 * 
 * Перейти на basik тариф
 */
class TariffsCest {
    private $url        = 'http://imageqatarifftest.premme.com';
    private $email      = 'imageqa@tarrrif.test';
    private $password   = 'imageqa';
    

    /**
     * @guy PremmerceTester\PremmerceSteps
     */
    public function controll(PremmerceTester\PremmerceSteps $I) {
        $I->amOnPage('/');
        $I->loginCabinet($this->email, $this->password);
        $I->wait(5);
        
//        $I->wait(5);
//        $this->createShop($I);
//        $joe = $I->haveFriend('Joe', 'PremmerceTester');
//        $joe->does(function(PremmerceTester $I) {
//            $I->comment('you too');
//            $I->wait(5);
//            $I->amOnUrl('http://google.com');
//        });
    }
}