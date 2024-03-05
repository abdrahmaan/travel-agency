<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paytabscom\Laravel_paytabs\Facades\paypage; 

class FlightController extends Controller
{


    public function getToken_Amadeus(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://test.api.amadeus.com/v1/security/oauth2/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'grant_type=client_credentials&client_id=VwQWfdsKTLeCJ2nq6kyvEBI40xcFypC6&client_secret=Zgsu7AAWjw4RYrZN',
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response)->access_token;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function refresh() {
         if(session()->has("data")){

              $response = session()->get("data");
                
            return view("flights", ["Data" => $response]);
            } else {
            
                return dd($response,"error");
            }
    }
    public function search(Request $request)
    {
        
          $token = $this->getToken_Amadeus();

            $tripType = $request->tripType;

            $origin = $request->originLocation;
            $destination = $request->destination;
            $departureDate = $request->departureDate;
            $returnDate =  $request->returnDate;
            $adults = intval($request->adults);
            $childrens = intval($request->childrens);
            $infants = intval($request->infants);
            $travelClass = $request->travelClass;
            $maxPrice = intval($request->maxPrice);

            $oneWay_url = "https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=$origin&destinationLocationCode=$destination&departureDate=$departureDate&adults=$adults&children=$childrens&infants=$infants&travelClass=$travelClass&maxPrice=$maxPrice&max=5&currencyCode=EGP";
            $roundTrip_url = "https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=$origin&destinationLocationCode=$destination&departureDate=$departureDate&returnDate=$returnDate&adults=$adults&children=$childrens&infants=$infants&travelClass=$travelClass&maxPrice=$maxPrice&max=5&currencyCode=EGP";
               
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => $tripType == "roundTrip" ? $roundTrip_url : $oneWay_url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Bearer $token"
                    ),
                ));

                $response = json_decode(curl_exec($curl));

                if (isset($response->data) && count($response->data) > 0) {
                    session()->put("data",$response);
                // return dd($response);
                    return view("flights", ["Data" => $response]);
                    
                } else {
                    return dd($response,"error");
                }
       
    }

    public function payFlight(Request $request){
        $amount = $request->amount;
        $pay = paypage::sendPaymentCode('all')
            ->sendTransaction("sale","ecom")
            ->sendCart("21", $amount, "Hello From Ticket Airplane Ticket")
            ->sendCustomerDetails("Abdulrhaman", "xmbedo@gmail.com", "01110645479", "Street", "Cairo", "EG", "EG", "12668","")
            ->sendHideShipping(true)
            ->sendURLs("https://mallem.power-travels.com/en/", "https://webhook.site/05ec4d52-6712-4f1c-9357-95d34587e715")
            ->create_pay_page(); 

            return $pay;
            
    }

    public function payFlight_response(Request $request){
        return dd($request);

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
