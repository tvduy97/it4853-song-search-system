<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class SolariumController extends Controller
{
    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    public function search()
    {
    	try {
    		$resultset = null;
	    	$input = Input::get('q');
	    	$start = Input::get('start');
	    	$start = isset($start)?$start:0;
	    	if ($input) {
	    		$query = $this->client->createSelect();
	    		$query->setOmitHeader(false);
		        $query->setQuery('lyric:"' . $input . '"');
		        $query->setStart($start);
		        $query->setRows(10);
		        $resultset = $this->client->select($query);
		        $numFound = $resultset->getNumFound();
		        $queryTime = number_format((float)$resultset->getQueryTime() / 1000, 6);
		        $currentPage = $start/10 + 1;
		        $totalPage = ceil($numFound/10);
		        $templink = url('/').\Request::getRequestUri();
		        $posToCut = strpos($templink, '&start');
		        if ($posToCut > 0) {
		        	$link = substr($templink,0,$posToCut).'&start=';
		        }else {
		        	$link = $templink.'&start=';
		        }
	    	}

	        return view('search', compact('resultset', 'input', 'numFound', 'queryTime', 'currentPage', 'totalPage', 'link'));
    		
    	} catch (\Exception $e) {
    		#var_dump($e);
    		return redirect()->back()
    			->withErrors(['somethng_went_wrong'=> 'Something went wrong!']);
    	}
    }
    public function ping()
    {
        // create a ping query
        $ping = $this->client->createPing();
        // execute the ping query
        try {
            $this->client->ping($ping);
            return "ok";
            //return response()->json('OK');
        } catch (\Exception $e) {
        	return "error";
            return response()->json('ERROR', 500);
        }
    }
    public function SearchFullText(Request $req){
    	$q = $req->q;
    	echo $q;
    	try
    	{
    		echo "haha";
    		$query = $this->client->createSelect();
    		$query->setQuery("q: '" . $q . "'");
    		echo "hehe";
	        $resultset = $this->client->select($query);
	        
	        var_dump($resultset);

    	}
    	catch(\Exception $e){
    		return "error";
    	}
    }
}