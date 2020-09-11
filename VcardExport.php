<?php
use JeroenDesloovere\VCard\VCard;
class VcardExport
{
    public function contactVcardExportService($complete_array)
    {
        require_once 'vendor/Behat-Transliterator/Transliterator.php';
        require_once 'vendor/jeroendesloovere-vcard/VCard.php';
        // define vcard
        $vcardObj = new VCard();
        // add personal data
        for($i=0;$i<=5;$i++){
        $vcardObj->addName($complete_array[0]. " " .$complete_array[1]);
        // $vcardObj->addBirthday($complete_array[5]);
        $vcardObj->addEmail($complete_array[2]);
        $vcardObj->addPhoneNumber($complete_array[3]);
        $vcardObj->addAddress($complete_array[4]);
        // $vcardObj->addRole($complete_array[5]);  
        $vcardObj->addCompany('QuadB','QuadbTech');   
        $vcardObj->addJobtitle('WebDeveloper'); 
         $vcardObj->addUrl('http://vcfconvertor.quadbtech.com/'); 
        $vcardObj->addNote('Hwllo freinds welcome to our vcf converter'); 
      
        return $vcardObj->download();
        }
    }
}

