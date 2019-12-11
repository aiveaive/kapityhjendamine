<?php
class MaterialController{

    //public function Avaleht(){
     
     //   return view('index');
        
   // }
        
    
        public function index()
        {
            global $app;
            
            $materials = $app['database']->selectAll('ingredients');

            return view('add-material', compact('materials'));
           // return view('about', ['company' => $company]);
           //return view('material', compact('material'));
          
    }
    public function store() {
        global $app;
        $app['database']->insert('ingredients', [
            'name' => $_POST['name'],
            'unit' => $_POST['unit']
        ]);
        
        return redirect('addmaterial');
    }
    
       // public function add()
       // {
          //  $material = $app['database']->selectAll('material');
            //require view('views/add.material.view.php');
            //App::get('database')->insert('material'); 
       // }  
            //return view('material');
    }
        