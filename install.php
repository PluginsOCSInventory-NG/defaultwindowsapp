<?php


function extension_install_defaultwindowsapp()
{
    
     $commonObject = new ExtensionCommon;

     $commonObject -> sqlQuery("DROP TABLE IF `defaultwindowsapp`");

     $commonObject -> sqlQuery("CREATE TABLE `defaultwindowsapp`(
                                `ID` INT(11) NOT NULL AUTO_INCREMENT,
                                `HARDWARE_ID` INT (11) NOT NULL,
                                `NAME` VARCHAR(255) DEFAULT NULL,
                                `TYPE` VARCHAR(255) DEFAULT NULL,
                                PRIMARY KEY (`ID`, `HARDWARE_ID`)
                                ) ENGINE=INNODB ;"); 
     
}


function extension_delete_defaultwindowsapp()
{
    $commonObject = new ExtensionCommon;
    
    $commonObject -> sqlQuery("DROP TABLE `defaultwindowsapp`");
}


function extension_upgrade_defaultwindowsapp()
{

}

    
