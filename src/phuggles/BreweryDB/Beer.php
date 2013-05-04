<?php

namespace Phuggles\BreweryDB;

class Beer {
    static public function all($parameters = array()) {
        return Request::get("beers/", $parameters);
    }
	
	static public function search($parameter){
		$search = array("q"=>$parameter);
		return Request::search("search/", $search);
	}
	
    static public function create($parameters = array()) {
        return Request::post("beers/", $parameters);
    }

    static public function delete($id) {
        return Request::delete("beers/" . $id);
    }

    static public function get($id) {
        return Request::get("beers/" . $id . ".json");
    }
    public function getName(){
    	return "Beer";
    }
}
