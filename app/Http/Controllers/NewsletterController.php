<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:newsletters',
            ]);

            // If validation fails, return with errors
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            Newsletter::create($request->all());

            return response()->json(['message' => 'Newsletter subscription successful'], 200);
        } catch (\Exception $e) {
            // Handle exceptions here
            return response()->json(['error' => 'An error occurred while processing your request'], 500);
        }
    }
}
