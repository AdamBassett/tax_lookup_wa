<?php
namespace SalesTaxWA;

class SalesTax
{
    public function getTax(string $adress, string $city, string $zip): float {
        $tax_url = 'http://dor.wa.gov/AddressRates.aspx?output=xml&addr='.urlencode($adress).
                        '&city='.urlencode($city).
                        '&zip='.$zip;
        return (float) $this->getRate($tax_url);
    }

    private function getRate(string $callString): string {
		$respons = simplexml_load_string($this->callAPI($callString));
		return (string)$respons['rate'];
    }

    private function callAPI(string $url){
        $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$respons = curl_exec($ch);
		curl_close($ch);
        return $respons;
    }
}
