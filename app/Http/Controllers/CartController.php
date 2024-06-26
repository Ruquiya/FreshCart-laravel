<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $user_id = Auth::id();

        Cart::create([
            'user_id' => $user_id,
            'item_name' => $request->item_name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return back()->with('success', 'Item added to cart!');
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        
        $item = [
            "name" => $request->item_name,
            "price" => $request->price,
            "quantity" => $request->quantity,
            "image" => $request->image // Ensure this field is included in the form
        ];
        
        $cart[] = $item;
        
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Item added to cart!');
    }
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('cart.index', compact('cartItems'));
    }

    public function destroy($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();
        return back()->with('success', 'Item removed from cart!');
    }
}
