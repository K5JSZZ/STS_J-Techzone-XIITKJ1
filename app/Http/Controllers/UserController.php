<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Address;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('user.login');
    }

    public function SignUp( ) {
        return view('user.SignUp');
    }

    public function personal(){

        return view('profile-user.personal');
    }

    public function wishlist(){
        $products = [
            [
                "name" => "ASUS TUF Gaming A15 FA506",
                "price" => 13024999,
                "image" => "img/barang/image 15.png"
            ],
            [
                "name" => "PS5 Slim Console Disc",
                "price" => 9679998,
                "image" => "img/barang/image 16.png"
            ],
            [
                "name" => "Logitech G715 TKL",
                "price" => 2699998,
                "image" => "img/barang/image 17.png"
            ],
            [
                "name" => "Logitech G502 Lightspeed",
                "price" => 2089999,
                "image" => "img/barang/image 13.png"
            ],
            [
                "name" => "Razer DeathAdder V3 Hyperspeed",
                "price" => 1399099,
                "image" => "img/barang/image 14.png"
            ],
        ];

        return view('profile-user.wishlist' , compact('products'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $userId = auth()->id();

        // cek apakah sudah ada di cart
        $cart = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($cart) {
            // tambahkan quantity
            $cart->quantity += 1;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil menambah ke keranjang');
    }

    public function cart()
    {
        $cartItems = Cart::where('user_id', Auth::id())
            ->with('product')
            ->get();

        return view('profile-user.cart', compact('cartItems'));
    }

    public function updateName(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        auth()->user()->update(['name' => $request->name]);
        return back()->with('success', 'Name updated successfully.');
    }

    public function updateBirthday(Request $request)
    {
        $request->validate(['birthday' => 'required|date']);
        auth()->user()->update(['birthday' => $request->birthday]);
        return back()->with('success', 'Birthday updated successfully.');
    }


    public function updateGender(Request $request)
    {
        $request->validate(['gender' => 'required']);
        auth()->user()->update(['gender' => $request->gender]);
        return back()->with('success', 'Gender updated successfully.');
    }

    public function updatePhone(Request $request)
    {
        $request->validate(['phone' => 'required']);
        auth()->user()->update(['phone' => $request->phone]);
        return back()->with('success', 'Phone updated successfully.');
    }

    public function updateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        auth()->user()->update(['email' => $request->email]);
        return back()->with('success', 'Email updated successfully.');
    }

    public function history(){
        $history = [
            [
                "name" => "Logitech G502 Lightspeed",
                "price" => 2089999,
                "image" => "img/barang/image 13.png",
                "status" => "Order Completed",
                "date" => "12 September 2025"
            ],
            [
                "name" => "Razer DeathAdder V3 Hyperspeed",
                "price" => 1399099,
                "image" => "img/barang/image 14.png",
                "status" => "Order Completed",
                "date" => "28 Agustus 2025"
            ]
        ];

        return view('profile-user.history', compact('history'));
    }


    public function payment(){
        return view('profile-user.payment');
    }

    public function help(){
        return view('profile-user.help');
    }

    public function address()
    {
        $addresses = Address::where('user_id', auth()->id())->get();
        return view('profile-user.address', compact('addresses'));
    }

    public function addressStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'province' => 'required',
            'detail' => 'required',
        ]);

        Address::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'phone' => $request->phone,
            'province' => $request->province,
            'city' => $request->city,
            'detail' => $request->detail,
        ]);

        return back()->with('success', 'Alamat berhasil ditambahkan!');
    }

    public function addressUpdate(Request $request, $id)
    {
        $address = Address::where('user_id', auth()->id())->findOrFail($id);

        $address->update($request->all());

        return back()->with('success', 'Alamat berhasil diperbarui!');
    }

    public function addressDelete($id)
    {
        $address = Address::where('user_id', auth()->id())->findOrFail($id);
        $address->delete();

        return back()->with('success', 'Alamat berhasil dihapus!');
    }

    public function success()
    {
        return view('produk.success');
    }




}
