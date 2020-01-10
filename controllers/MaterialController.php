<?php
class MaterialController{

    public function index()
    {
        global $app;
        
        $materials = $app['database']->selectAll('ingredients');

        return view('add-material', compact('materials'));     
          
    }

    public function store() {
        global $app;
        $app['database']->insert('ingredients', [
            'name' => $_POST['name'],
            'unit' => $_POST['unit']
        ]); 
        
        return redirect('addmaterial');
    } 
    public function edit(){
        $id = $_POST['id'];

        global $app;
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $ingredients = $app['database']->selectById('ingredients', $id);
        return view('material_edit', ['ingredients' => $ingredients]);
    }
    public function editingredient(){
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        
        global $app;
        $ingredients = $app['database']->selectById('ingredients', $id);
        $app['database']->updateByID('ingredients', $id , [
            'name' => $_POST['name'],
            'unit' => $_POST['unit']
        ]);
        return redirect('addmaterial');
    }

    public function delete () {
        global $app;
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $ingredients = $app['database']->selectById('ingredients', $id);

        if (is_object($ingredients)) {
            $dbResult = $app['database']->deleteById('ingredients', $ingredients->ID);
            $result = 'ingredients deleted!';
        }

        $result = empty ($result) ? 'cannot delete' : $result;
        
        ?><meta http-equiv="refresh" content= "0; URL='/addmaterial?message=<?php echo $result; ?>'" /><?php
                
    }
       
}
        