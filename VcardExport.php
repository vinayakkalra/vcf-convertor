<?php
use JeroenDesloovere\VCard\VCard;
class VcardExport
{
    public function contactVcardExportService($contactResult)
    {
        require_once 'vendor/Behat-Transliterator/Transliterator.php';
        require_once 'vendor/jeroendesloovere-vcard/VCard.php';
        // define vcard
        $vcardObj = new VCard();
        // add personal data
        $vcardObj->addName($contactResult[0]["first_name"] . " " . $contactResult[0]["last_name"]);
        $vcardObj->addBirthday($contactResult[0]["date_of_birth"]);
        $vcardObj->addEmail($contactResult[0]["email"]);
        $vcardObj->addPhoneNumber($contactResult[0]["phone"]);
        $vcardObj->addAddress($contactResult[0]["address"]);
        $vcardObj->addRole('Intern');  
        $vcardObj->addCompany('QuadB','QuadbTech');   
        $vcardObj->addJobtitle('WebDeveloper'); 
         $vcardObj->addUrl('http://vcfconvertor.quadbtech.com/'); 
        $vcardObj->addNote('Hwllo freinds welcome to our vcf converter'); 
      
        return $vcardObj->download();
    }
}

