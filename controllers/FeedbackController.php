<?php
class FeedbackController

{
    public function index()
    {
        global $app;
        
        $feedback = $app['database']->selectAll('feedback');

        return view('feedback', compact('feedback'));
    }
    public function store() {
        global $app;
        
        $app['database']->insert('feedback', [
            'subject' => $_POST['subject'],
            'body' => $_POST['body']
            ]);
        
        return redirect('add.feedback');
    }
    
       
    }