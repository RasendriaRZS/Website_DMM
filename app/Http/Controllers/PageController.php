<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { 
        
        
        return view('index'); 
    
    }
    public function about() { 
        
        return view('about'); 
    
    }
    
    public function business() { 
        
        return view('business');
    
    }
    
    public function vision() { 
        
        return view('vision'); 
    
    }
    
    public function management() { 
        
        return view('management'); 
    
    }
    
    public function resources() { 
        
        return view('resources'); 
    
    }
    
    public function businessplan() { 
        
        return view('businessplan'); 
    
    }
    
    public function clients() { return view('clients'); 
    
    }
    
    public function gallery() { 
        
        return view('gallery'); 
    
    }
    
    public function contact() { 
        
        return view('contact'); 
    
    }
}
