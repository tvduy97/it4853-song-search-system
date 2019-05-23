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

    public function basicSearch(Request $request)
    {
    	try {
    		$param = $request->all();
    		if (array_key_exists('q', $param)) {
    			if ($param['q'] == null) {
    				return back();
    			}

    			$input = $param['q'];
	    		$start = isset($param['start']) ? $param['start'] : 0;
		    	$filter = $param['filter'];
	    		$resultset = null;
		    	if ($filter == 'all') {
		    		$queryStr = '(title:"'.$input.'")^2.25 (singer:"'.$input.'")^2.0 (lyric:"'.$input.'")^1.75 (title:'.$input.')^1.5 (singer:'.$input.')^1.25 (lyric:'.$input.')';
		    	} else {
		    		$queryStr = '('.$filter.':"'.$input.'")^1.5 ('.$filter.':'.$input.')';
		    	}
		    	
	    		$query = $this->client->createSelect();
	    		$query->setOmitHeader(false);
		        $query->setQuery($queryStr);
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

		        return view('basic_result', compact('resultset', 'input', 'numFound', 'queryTime', 'currentPage', 'totalPage', 'link', 'filter'));
		    } else {
		    	return view('basic_search');
		    }
    	} catch (\Exception $e) {
    		return redirect()->back()
    			->withErrors(['somethng_went_wrong'=> 'Something went wrong!']);
    	}
    }

    public function advanceSearch(Request $request)
    {
        try {
            $param = $request->all();
            if (array_key_exists('title', $param) || array_key_exists('singer', $param) || array_key_exists('lyric', $param)) {
                if ($param['title'] == null && $param['singer'] == null && $param['lyric'] == null) {
                    return back();
                }
                $title = $param['title'];
                $singer = $param['singer'];
                $lyric = $param['lyric'];
                $start = isset($param['start']) ? $param['start'] : 0;
                $checkTitle = isset($param['checkTitle']) ? true : false;
                $checkSinger = isset($param['checkSinger']) ? true : false;
                $checkLyric = isset($param['checkLyric']) ? true : false;
                $resultset = null;
                $titleQuery = $checkTitle ? '((title:"'.$title.'")^1.5 (title:'.$title.'))' : '-((title:"'.$title.'")^1.5 (title:'.$title.'))';
                $singerQuery = $checkSinger ? '((singer:"'.$singer.'")^1.5 (singer:'.$singer.'))' : '-((singer:"'.$singer.'")^1.5 (singer:'.$singer.'))';
                $lyricQuery = $checkLyric ? '((lyric:"'.$lyric.'")^1.5 (lyric:'.$lyric.'))' : '-((lyric:"'.$lyric.'")^1.5 (lyric:'.$lyric.'))';
                $queryStr = '';
                if ($param['title'] != null && $param['singer'] != null && $param['lyric'] != null) {
                    $queryStr = $titleQuery.' AND '.$singerQuery.' AND '.$lyricQuery;
                } elseif ($param['title'] != null && $param['singer'] != null && $param['lyric'] == null) {
                    $queryStr = $titleQuery.' AND '.$singerQuery;
                } elseif ($param['title'] != null && $param['singer'] == null && $param['lyric'] != null) {
                    $queryStr = $titleQuery.' AND '.$lyricQuery;
                } elseif ($param['title'] == null && $param['singer'] != null && $param['lyric'] != null) {
                    $queryStr = $singerQuery.' AND '.$lyricQuery;
                } elseif ($param['title'] != null && $param['singer'] == null && $param['lyric'] == null) {
                    $queryStr = $titleQuery;
                } elseif ($param['title'] == null && $param['singer'] == null && $param['lyric'] != null) {
                    $queryStr = $lyricQuery;
                } elseif ($param['title'] == null && $param['singer'] != null && $param['lyric'] == null) {
                    $queryStr = $singerQuery;
                }
                $query = $this->client->createSelect();
                $query->setOmitHeader(false);
                $query->setQuery($queryStr);
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

                return view('advanced_result', compact('resultset', 'title', 'singer', 'lyric', 'numFound', 'queryTime', 'currentPage', 'totalPage', 'link', 'checkTitle', 'checkSinger', 'checkLyric'));
            } else {
                return view('advanced_search');
            }
        } catch (\Exception $e) {
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