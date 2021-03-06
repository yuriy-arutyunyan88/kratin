<?php

namespace app\models;

use app\records\ActiveRecord;

class Content extends ActiveRecord
{
    public function table()
    {
        return 'content';
    }

    public function create()
    {
        return [
            'messageFiscalSign' => 'integer',
            'code' => 'integer',
            'fiscalDriveNumber' => 'string',
            'kktRegId' => 'string',
            'userInn' => 'string',
            'fiscalDocumentNumber' => 'integer',
            'dateTime' => 'integer',
            'fiscalSign' => 'integer',
            'shiftNumber' => 'integer',
            'requestNumber' => 'integer',
            'operationType' => 'integer',
            'totalSum' => 'integer',
            'fiscalDocumentFormatVer' => 'integer',
            'cashTotalSum' => 'integer',
            'ecashTotalSum' => 'integer',
            'prepaidSum' => 'integer',
            'creditSum' => 'integer',
            'provisionSum' => 'integer',
            'nds18' => 'integer',
            'nds10' => 'integer',
            'appliedTaxationType' => 'integer',
            'operator' => 'string',
            'operatorInn' => 'string',
            'user' => 'string',
            'retailPlace' => 'string',
            'region' => 'string',
            'numberKkt' => 'string',
            'redefine_mask' => 'integer',
        ];
    }

    public function fields()
    {
        return [];
    }
}