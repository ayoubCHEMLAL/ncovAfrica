<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;
use Goutte\Client;


class getApiCoronaController extends Controller
{
    public function page_index(){
        $africa=$this->getapi('africa')['response'][0];
        return view('index',compact('africa'));
    }
    public function carte_covid(){
        return view('carte_covid');
    }
    public function prevention(){
        return view('prevention');
    }
    
    public function index(Request $request){
        $list_country=$this->getcountrys()['response'];
           $country_array=[];
           foreach($list_country as $result){
               if($result['continent']=='Africa'){
            $country_array[]=$result;}
           }
           $countrys=collect($country_array)->unique();
           
           if($request->has('country')){
               $country=$request->country;
           }else{
            $country='morocco';
           }
        //    $list_data=$this->getapi($country)['response'][0];
        //  return $list_data;
        // $list_data=$this->getcountrys()['response'];
        return view('statistics',compact('countrys'));
    }

    private function getcountrys(){
        return  Http::withHeaders(array(
        'x-rapidapi-host' => 'covid-193.p.rapidapi.com',
        'x-rapidapi-key' => 'ce73da4778msha75b520c3a9c2f5p1bac0cjsn0a2b9170a554',
        ))->get('https://covid-193.p.rapidapi.com/statistics'
        );
    }
    private function getapi($country){
        return  Http::withHeaders(array(
        'x-rapidapi-host' => 'covid-193.p.rapidapi.com',
        'x-rapidapi-key' => 'ce73da4778msha75b520c3a9c2f5p1bac0cjsn0a2b9170a554',
        ))->get('https://covid-193.p.rapidapi.com/statistics',['country' => $country]
        );
    }

    public $provinces_morroco=[];
    public $i;
    public $total_cases=[];
    public $kk;
    // public $cases_total=[];
    public function getdata(Request $request){
        $li= Http::withHeaders(array(
            'x-rapidapi-host' => 'covid-193.p.rapidapi.com',
            'x-rapidapi-key' => 'ce73da4778msha75b520c3a9c2f5p1bac0cjsn0a2b9170a554',
            ))->get('https://covid-193.p.rapidapi.com/history',['country' => $request['country']]
            );
        $li=$li['response'];
        
        $kk=$this->getapi($request['country'])['response'][0];
        if($request['country']=='Morocco'){
                $client = new Client();
                $page = $client->request('GET', 'https://covid.hespress.com/');
                // $page->filter('div>div>div')->each(function ($h){
                //     $a=$h->filter('div>h5')->text();
                //     $b=$h->filter('div>h5')->text();
                //      array_push($this->cases_total,array($a,$b));
                // });
                //  echo '<pre>';
                    // print_r($this->$cases_total);
                
                $page->filter('div > table>tbody>tr')->each(function ($item) {
                    
                    
                    $this->i=0;
                    // print $item->text()."</br>";
                    $province=$item->filter('th>a')->text();
                    $item->filter('td')->each(function ($td){
                        $this->total_cases[$this->i]=$td->text();
                        $this->i=$this->i+1;
                        
                    });
                    array_push($this->provinces_morroco,array($province,$this->total_cases[0],$this->total_cases[1]));
                    
                });
                $a=$this->provinces_morroco;
                return view('countries',compact('a','kk','li'))->with('sym',$request['country']);
        }else{
            return view('countries',compact('kk','li'))->with('sym',$request['country']);
        }
        
            
        
    }
}
