<?php

class SaasUserListPage

{
     
    
    public static $URL = '/admin/components/run/saas/users/lists';
    public static $Title = '//body/div[1]/div[5]/div[3]/section/div[1]/div[1]/span[2]';
    public static $ButtonBack = '//section/div[1]/div[2]/div/a';
    public static $ButtonChancheData = '//section/div[1]/div[2]/div/button';
    public static $ButtonStatuses = '//section/div[1]/div[2]/div/a[2]/span';
    public static $ButtonDepartments = '//section/div[1]/div[2]/div/a[3]';
    
    
    //--- Вікно Зміни даних ---- Вікно Зміни даних ----Вікно Зміни даних --/
    
    public static $WindowChancheData = '//body/div[1]/div[5]/div[3]';
    public static $WindowChancheDataTitle = '//body/div[1]/div[5]/div[3]/div[1]/h3';
    public static $WindowChancheDataButtonClose = '//body/div[1]/div[5]/div[3]/div[1]/button';
    public static $WindowChancheDataButtonBack = '//body/div[1]/div[5]/div[3]/div[3]/a[2]';
    public static $WindowChancheDataButtonChange = '//body/div[1]/div[5]/div[3]/div[3]/a[1]';
    public static $WindowChancheDataSelectStatus = '//body/div[1]/div[5]/div[3]/div[2]/select[1]';
    public static $WindowChancheDataSelectStatusLabel = '//body/div[1]/div[5]/div[3]/div[2]/b[1]';
    public static $WindowChancheDataSelectManager = '//body/div[1]/div[5]/div[3]/div[2]/select[2]';
    public static $WindowChancheDataSelectManagerLabel = '//body/div[1]/div[5]/div[3]/div[2]/b[2]';
    public static $WindowChancheDataSelectDepartmens = '//body/div[1]/div[5]/div[3]/div[2]/select[3]';
    public static $WindowChancheDataSelectDepartmensLabel = '//body/div[1]/div[5]/div[3]/div[2]/b[3]';
    public static function WindowChancheDataSelectStatusOption ($number){
        return "//body/div[1]/div[5]/div[3]/div[2]/select[1]/option[$number]";
    }
    public static function WindowChancheDataSelectManagerOption ($number){
        return "//body/div[1]/div[5]/div[3]/div[2]/select[2]/option[$number]";
    }
    public static function WindowChancheDataSelectDepartmensOption ($number){
        return "//body/div[1]/div[5]/div[3]/div[2]/select[3]/option[$number]";
    }
    
   
    
    
    //---- Head ------- Head ------- Head ------- Head ------- Head ------- Head ---
    
    public static $HeadCheckBox = '//section/div[2]/div/div[1]/table/thead/tr/th[1]/span/span';
    public static $HeadID = '//section/div[2]/div/div[1]/table/thead/tr/th[2]';
    public static $HeadName = '//section/div[2]/div/div[1]/table/thead/tr/th[3]';
    public static $HeadEmail = '//section/div[2]/div/div[1]/table/thead/tr/th[4]';
    public static $HeadPhone = '//section/div[2]/div/div[1]/table/thead/tr/th[5]';
    public static $HeadDomain = '//section/div[2]/div/div[1]/table/thead/tr/th[6]';
    public static $HeadStatuse = '//section/div[2]/div/div[1]/table/thead/tr/th[7]';
    public static $HeadTarif = '//section/div[2]/div/div[1]/table/thead/tr/th[8]';
    public static $HeadBalanse = '//section/div[2]/div/div[1]/table/thead/tr/th[9]';
    public static $HeadDomainEnd = '//section/div[2]/div/div[1]/table/thead/tr/th[10]';
    public static $HeadDayLeft = '//section/div[2]/div/div[1]/table/thead/tr/th[11]';
    public static $HeadActive = '///section/div[2]/div/div[1]/table/thead/tr/th[12]';
    public static $HeadDateAdmin = '//section/div[2]/div/div[1]/table/thead/tr/th[13]';
    public static $HeadDateCabinet = '//section/div[2]/div/div[1]/table/thead/tr/th[14]';
    public static $HeadFillProducts = '//section/div[2]/div/div[1]/table/thead/tr/th[15]';
    public static $HeadAction = '//section/div[2]/div/div[1]/table/thead/tr/th[16]';
    


    //--- фільтр --- --- фільтр ------ фільтр ------ фільтр ------ фільтр ------ фільтр ---
    
    public static $FilterDomainLabel = '//section/div[2]/div/div[2]/form/div/ul/li[1]/label/span';
    public static $FilterDomainInput = '//section/div[2]/div/div[2]/form/div/ul/li[1]/input';
    public static $FilterActiveLabel = '//section/div[2]/div/div[2]/form/div/ul/li[2]/label/span';
    public static $FilterActiveSelect = '//section/div[2]/div/div[2]/form/div/ul/li[2]/select';
    public static function FilterActiveSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[2]/select/option[$number]";
    }
    public static $FilterPhoneLabel = '//section/div[2]/div/div[2]/form/div/ul/li[3]/label/span';
    public static $FilterPhoneInput = '//section/div[2]/div/div[2]/form/div/ul/li[3]/input';
    public static $FilterNameLabel = '//section/div[2]/div/div[2]/form/div/ul/li[4]/label/span';
    public static $FilterNameInput = '//section/div[2]/div/div[2]/form/div/ul/li[4]/input';
    public static $FilterEmailLabel = '//section/div[2]/div/div[2]/form/div/ul/li[5]/label/span';
    public static $FilterEmailInput = '//section/div[2]/div/div[2]/form/div/ul/li[5]/input';
    public static $FilterCountryLabel = '//section/div[2]/div/div[2]/form/div/ul/li[6]/label/span';
    public static $FilterCountrySelect = '//section/div[2]/div/div[2]/form/div/ul/li[6]/select/option';
    public static function FilterCountrySelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[6]/select/option[$number]";
    }
    public static $FilterCityLabel = '//section/div[2]/div/div[2]/form/div/ul/li[7]/label/span';
    public static $FilterCityInput = '//section/div[2]/div/div[2]/form/div/ul/li[7]/input';
    public static $FilterTarifLabel = '//section/div[2]/div/div[2]/form/div/ul/li[8]/label/span';
    public static $FilterTarifSelect = '//section/div[2]/div/div[2]/form/div/ul/li[8]/select';
    public static function FilterTarifSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[8]/select/option[$number]";
    }
    public static $FilterLevelLabel = '//section/div[2]/div/div[2]/form/div/ul/li[9]/label/span';
    public static $FilterLevelSelect = '//section/div[2]/div/div[2]/form/div/ul/li[9]/select';
    public static function FilterLevelSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[9]/select/option[$number]";
    }
    
    public static $FilterCategoryLabel = '//section/div[2]/div/div[2]/form/div/ul/li[10]/label/span';
    public static $FilterCategorySelect = '//section/div[2]/div/div[2]/form/div/ul/li[10]/select';
    public static function FilterCategorySelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[10]/select/option[$number]";
    }
    public static $FilterAmountProducntLabel = '//section/div[2]/div/div[2]/form/div/ul/li[11]/label/span';
    public static $FilterAmountProducntInputFrom = '//section/div[2]/div/div[2]/form/div/ul/li[11]/div/label/input[1]';
    public static $FilterAmountProducntInputTo = '//section/div[2]/div/div[2]/form/div/ul/li[11]/div/label/input[2]';
    public static $FilterDiskLimitLabel = '//section/div[2]/div/div[2]/form/div/ul/li[12]/label/span';
    public static $FilterDiskLimitInputFrom = '//section/div[2]/div/div[2]/form/div/ul/li[12]/div/label/input[1]';
    public static $FilterDiskLimitInputTo = '//section/div[2]/div/div[2]/form/div/ul/li[12]/div/label/input[2]';
    public static $FilterBalansLabel = '//section/div[2]/div/div[2]/form/div/ul/li[13]/label/span';
    public static $FilterBalansInputFrom = '//section/div[2]/div/div[2]/form/div/ul/li[13]/div/label/input[1]';
    public static $FilterBalansInputTo = '//section/div[2]/div/div[2]/form/div/ul/li[13]/div/label/input[2]';
    public static $FilterManagerLabel = '//section/div[2]/div/div[2]/form/div/ul/li[14]/label/span';
    public static $FilterManagerSelect = '//section/div[2]/div/div[2]/form/div/ul/li[14]/select';
    public static function FilterManagerSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[14]/select/option[$number]";
    }
    public static $FilterDomainEndLabel = '//section/div[2]/div/div[2]/form/div/ul/li[15]/label/span';
    public static $FilterDomainEnSelect = '//section/div[2]/div/div[2]/form/div/ul/li[15]/select';
    public static function FilterDomainEndSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[15]/select/option[$number]";
    }
    public static $FilterActivatedByEmailLabel = '//section/div[2]/div/div[2]/form/div/ul/li[16]/label/span';
    public static $FilterActivatedByEmailSelect = '//section/div[2]/div/div[2]/form/div/ul/li[16]/select';
    public static function FilterActivatedByEmailSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[16]/select/option[$number]";
    }
    public static $FilterFillProductsLabel = '//section/div[2]/div/div[2]/form/div/ul/li[17]/label/span';
    public static $FilterFillProductsSelect = '//section/div[2]/div/div[2]/form/div/ul/li[17]/select';
    public static function FilterFillProductsSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[17]/select/option[$number]";
    }
    public static $FilterStatusesLabel = '//section/div[2]/div/div[2]/form/div/ul/li[18]/label/span';
    public static $FilterStatusesSelect = '//section/div[2]/div/div[2]/form/div/ul/li[18]/select';
    public static function FilterStatusesSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[18]/select/option[$number]";
    }
    public static $FilterDepartmentsLabel = '//section/div[2]/div/div[2]/form/div/ul/li[19]/label/span';
    public static $FilterDepartmentsSelect = '//section/div[2]/div/div[2]/form/div/ul/li[19]/select';
    public static function FilterDepartmentsSelectOption ($number){
        return "//section/div[2]/div/div[2]/form/div/ul/li[19]/select/option[$number]";
    }
    public static $FilterButtonFilter = '//section/div[2]/div/div[2]/form/div/input';
    public static $FilterButtonCancel = '//section/div[2]/div/div[2]/form/div/a';
      
   
    

    
    //---- Рядки таблиці
   
    public static function lineCheckBox($row)               { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[1]/span/span"; }
    public static function lineIDText($row)                 { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[2]/p"; }
    public static function lineNameText($row)               { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[3]/p"; }
    public static function lineEmailLink($row)              { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[4]/p/a"; }
    public static function linePhoneText($row)              { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[5]"; }
    public static function lineDomainLink($row)             { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[6]/p/a"; }
    public static function lineStatuseText($row)            { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[7]/p/a"; }
    public static function lineTarifText($row)              { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[8]"; }
    public static function lineBalansText($row)             { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[9]/input"; }
    public static function lineDomainEndText($row)          { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[10]"; }
    public static function lineDayLeftText($row)            { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[11]"; }
    public static function lineActiveText($row)             { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[12]"; }
    public static function lineDateAdminText($row)          { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[13]"; }
    public static function lineDateCabinetText($row)        { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[14]"; }
    public static function lineFillProductsText($row)       { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[15]"; }
    public static function lineActionlink($row)             { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/label/span"; }
    
    
    
    
    
     //-----Силка Список Дій: кнопки, селекти, поля.                                
    
    public static function ButtonAddModule ($row)           { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[1]/a"; }
    public static function ButtonRemoveModule ($row)        { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[2]/a"; }
    public static function ButtonDisable ($row)             { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[3]/a"; }
                                                                      
                                            
    public static function ButtonDelete ($row)              { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[4]/a"; }
    public static function SelectActivate ($row, $number){
        return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[5]/select/option[$number]";
    }
    public static function SelectManager ($row, $number){
        return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[6]/select/option[$number]";
    }
    public static function SelectTarif ($row, $number){
        return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[7]/select/option[$number]";
    }
    public static function InputAmountPoints ($row)         { return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[8]/input"; }
    public static function SelectStatuses ($row, $number){
        return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[9]/select/option[$number]";
    }    
    public static function SelectDepartments ($row, $number){
        return "//section/div[2]/div/div[1]/table/tbody/tr[$row]/td[16]/div/div[10]/select/option[$number]";
    }    
    
    
    
        //----- вікно Додати Модуль
    
    public static $WindowAddModule = '#addModuleModal';
    public static $WindowAddModuleTitle = '//body/div[1]/div[5]/div[1]/div[1]/h3';
    public static $WindowAddModuleSelect = '//body/div[1]/div[5]/div[1]/div[2]/select';
    public static function WindowAddModuleSelectOption ($number) {
        return "//body/div[1]/div[5]/div[1]/div[2]/select/option[$number]";
    }
    public static $WindowAddModuleButtonClose = '//body/div[1]/div[5]/div[1]/div[1]/button';
    public static $WindowAddModuleButtonBack = '//body/div[1]/div[5]/div[1]/div[3]/button[1]';
    public static $WindowAddModuleButtonSave = '//body/div[1]/div[5]/div[1]/div[3]/button[2]';

    
    
    
  
        //------ вікно Видалити Модуль

    public static $WindowRemoveModule = '#delModuleModal';
    public static $WindowRemoveModuleTitle = '//body/div[1]/div[5]/div[2]/div[1]/h3';
    public static $WindowRemoveModuleSelect = '//body/div[1]/div[5]/div[2]/div[2]/select';
    public static function WindowRemoveModuleSelectOption ($number) {
        return "//body/div[1]/div[5]/div[2]/div[2]/select/option[$number]";
    }
    public static $WindowRemoveModuleButtonClose = '//body/div[1]/div[5]/div[2]/div[1]/button';
    public static $WindowRemoveModuleButtonBack = '//body/div[1]/div[5]/div[2]/div[3]/button[1]';
    public static $WindowRemoveModuleButtonSave = '//body/div[1]/div[5]/div[2]/div[3]/button[2]';

}
