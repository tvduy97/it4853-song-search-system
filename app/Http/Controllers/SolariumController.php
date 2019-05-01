<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

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
    		return redirect()->back()->withErrors(['somethng_went_wrong'=>'Something went wrong!']);
    	}
    }
}