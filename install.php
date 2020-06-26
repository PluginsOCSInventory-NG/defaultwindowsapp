<?php


function extension_install_defaultapp()
{
    
     $commonObject = new ExtensionCommon;

     $commonObject -> sqlQuery("DROP TABLE `defaultapp`");

     $commonObject -> sqlQuery("CREATE TABLE `defaultapp`(
                                `ID` INT(11) NOT NULL AUTO_INCREMENT,
                                `HARDWARE_ID` INT (11) NOT NULL,
                                `NAME` VARCHAR(255) DEFAULT NULL,
                                `TYPE` VARCHAR(255) DEFAULT NULL,
                                PRIMARY KEY (`ID`, `HARDWARE_ID`)
                                ) ENGINE=INNODB ;"); 
     
}


function extension_delete_defaultapp()
{
    $commonObject = new ExtensionCommon;
    
    $commonObject -> sqlQuery("DROP TABLE `defaultapp`");
}


function extension_upgrade_defaultapp()
{

}

    
