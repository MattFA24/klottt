<?php

    namespace App\Http\Controllers;

    use App\Models\User; // Use the User model
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth; // To log the user in
    use Illuminate\Support\Facades\Mail; // To send emails
    use App\Mail\TestMail; // <-- CORRECTION: Import TestMail
    use Illuminate\Validation\Rules\Password; // For password rules

    class RegisterController extends Controller
    {
   
        public function create()
        {
            return view('register'); 
        }

    
        
        public function store(Request $request)
        {
            // 1. Validate the incoming data from the form
            $details = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => ['required', 'confirmed', Password::min(8)],
                'birthdate' => 'required|date',
            ]);

            $user = User::create($details);

         
            Auth::login($user);

        
            Mail::to($user->email)->send(new TestMail($user));

        
            return redirect()->route('register.success');
        }

  
        public function success()
        {
            return view('success'); 
        }
    }

