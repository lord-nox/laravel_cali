<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Method to handle the search request
    public function search(Request $request)
    {
        // Retrieve the search query from the user input
        $query = $request->input('query');

        // If a query exists, perform a search on the users
        if ($query) {
            // Search for users by name or email
            $users = User::where('name', 'like', '%' . $query . '%')
                         ->orWhere('email', 'like', '%' . $query . '%')
                         ->get();
        } else {
            // If no query, return an empty collection
            $users = collect();
        }

        // Return the search results view with the users
        return view('faqs.search', compact('users'));
    }
}
