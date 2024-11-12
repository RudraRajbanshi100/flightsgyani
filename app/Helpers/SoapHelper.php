<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use SoapClient;

class SoapHelper
{
    static function getSector()
    {
        $client = new SoapClient("http://dev.usbooking.org/us/UnitedSolutions?wsdl", array('soap_version' => SOAP_1_1, "trace" => false, 'exceptions' => 0));

        $params = array(
            'parameters' => array(
                'strUserId' => 'PARADI',
            )
        );
        $result = $client->__soapCall('SectorCode', $params);

        if(!isset($result->return))
        {
            return [];
        }

        $final_data = simplexml_load_string($result->return);

        if($final_data)
        {
            $count = 0;
            foreach($final_data as $fd)
            {
                if($fd->SectorCode == 'MTN')
                {
                    unset($final_data->Sector[$count]);

                }

                $count++;
            }
        }

        return $final_data;
    }

    static function checkFlightStatus($data = [])
    {
        $client = new SoapClient("http://dev.usbooking.org/us/UnitedSolutions?wsdl", array('soap_version' => SOAP_1_1, "trace" => false, 'exceptions' => 0));

        // $from = "KTM";
        // $to  = "PKR";
        // $flightDate = '15-11-2024';
        // $type = 'R';
        // $returnDate = "20-11-2024";
        // $nationality = "NP";
        // $adult = 1;
        // $child = 2;

        $params = array(
            'parameters' => array(
                'strUserId' => 'PARADI',
                'strPassword' => 'PASSWORD',
                'strAgencyId' => 'PLZ146',
                'strSectorFrom' => $data['from'],
                'strSectorTo' => $data['to'],
                'strFlightDate' => $data['flightDate'],
                'strTripType' => $data['type'],
                'strReturnDate' => $data['returnDate'],
                'strNationality' => $data['nationality'],
                'intAdult' => $data['adult'],
                'intChild' => $data['child'],
                'strClientIP' => "192.168.0.1"
            )
        );

        // dd($params);

        // $params = array(
        //     'parameters' => array(
        //         'strUserId' => 'PARADI',
        //         'strPassword' => 'PASSWORD',
        //         'strAgencyId' => 'PLZ146',
        //         'strSectorFrom' => $from,
        //         'strSectorTo' => $to,
        //         'strFlightDate' => $flightDate,
        //         'strTripType' => $type,
        //         'strReturnDate' => $returnDate,
        //         'strNationality' => $nationality,
        //         'intAdult' => $adult,
        //         'intChild' => $child,
        //         'strClientIP' => "192.168.0.1"
        //     )
        // );

        $result = $client->__soapCall('FlightAvailability', $params);

        if(!isset($result->return))
        {
            return [];
        }



        $final_data = simplexml_load_string($result->return);

        return $final_data;
    }

}
