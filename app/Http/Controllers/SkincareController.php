<?php

namespace App\Http\Controllers;
use App\Models\SkincareProduct; 
use Illuminate\View\View;
use App\Models\Feedback;
use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index()
    {
        $products = SkincareProduct::with('feedback')->get();
        return view('skincare.index', compact('products'));
    }

    public function show(SkincareProduct $skincareProduct)
    {
        return view('skincare.show', compact('skincareProduct'));
    }

    public function storeFeedback(Request $request, SkincareProduct $skincareProduct)
    {
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Feedback::create([
            'user_id' => auth()->id(),
            'skincare_product_id' => $skincareProduct->id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}
