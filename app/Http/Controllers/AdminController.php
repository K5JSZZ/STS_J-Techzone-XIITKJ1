<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{

    public function loginForm()
    {
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }


    public function dashboard() {
        return view('admin.dashboard');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }

    public function manageUsers(Request $request)
    {
        $search = $request->search;

        $users = User::where('name', 'like', "%$search%")
            ->orWhere('email', 'like', "%$search%")
            ->paginate(5)
            ->withQueryString();

        return view('admin.manage', compact('users'));
    }
    public function manage()
    {
        $users = User::paginate(5);

        return view('admin.manage', compact('users'));
    }

    public function product(Request $request)
    {
        $search = $request->input('search');

        $products = Product::when($search, function ($query, $search) {
            return $query->where('name', 'LIKE', "%{$search}%");
        })->paginate(10);

        return view('admin.product', compact('products'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'image'     => 'nullable|image|mimes:png,jpg,jpeg',
            'category'  => 'required',
            'price'     => 'required|numeric',
            'quantity'  => 'required|integer',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name'     => $request->name,
            'image'    => $imagePath,
            'category' => $request->category,
            'price'    => $request->price,
            'quantity' => $request->quantity,
        ]);

        return back()->with('success', 'Product added successfully!');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->created_at = $request->created_at;

        if ($request->hasFile('image')) {
            $filename = time().'.'.$request->image->extension();
            $request->image->storeAs('products', $filename, 'public');
            $product->image = $filename;
        }

        $product->save();

        return redirect()->route('admin.product')->with('success', 'Product Updated!');
    }

    public function delete($id)
    {

        $product = Product::findOrFail($id);


        $product->delete();


        return redirect()->route('admin.product')->with('success', 'Product berhasil dihapus!');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit', compact('product'));
    }
}
