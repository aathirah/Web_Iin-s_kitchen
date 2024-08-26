<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use App\Models\menu;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function updateStatus(Request $request)
    {
        Transaction::where('id_transaction', $request->id)->update([
            "status" => $request->status,
        ]);

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function decreaseQuantity($id)
    {
        $cart = Cart::where("id_cart", $id)->first();

        // NGURANGIN SATU KUANTITAS

        $quantity = $cart->qty - 1;

        // NGURANGIN TOTAL KUANTITAS

        $total = $cart->total - $cart->menu->harga;

        // NGE CHECK APAKAH KUANTITAS YANG SKRNG KURANG DARI 1 ATAU STOK MENU SUDAH TIDAK TERSEDIA

        if ($quantity < 1 || $cart->menu->stok == "unavailable") {
            $cart->delete();
        } else {
            $cart->update([
                "qty" => $quantity,
                "total" => $total,
            ]);
        }

        return redirect()->back();
    }

    public function increaseQuantity($id)
    {
        $cart = Cart::where("id_cart", $id)->first();

        // NGURANGIN SATU KUANTITAS

        $quantity = $cart->qty + 1;

        // NGURANGIN TOTAL KUANTITAS

        $total = $cart->total + $cart->menu->harga;

        // NGE CHECK APAKAH STOK MENU SUDAH TIDAK TERSEDIA
        if ($cart->menu->stok == "unavailable") {
            $cart->delete();
        } else {
            $cart->update([
                "qty" => $quantity,
                "total" => $total,
            ]);
        }

        return redirect()->back();
    }

    public function detailtransaksi(Request $request)
    {
        $items = Item::join("tbl_menu", "tbl_menu.id_menu", "=", "tbl_item.id_menu")->where("id_transaction", $request->id)->get();

        return view('admin/transaksi.detail', compact('items'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_menu" => "required",
            "qty" => "required",
        ]);

        $menu = menu::where("id_menu", $request->id_menu)->first();

        $total = $menu->harga * $request->qty;

        $data = [
            "id_user" => auth()->user()->id,
            "id_menu" => $request->id_menu,
            "qty" => $request->qty,
            "total" => $total,
        ];

        Cart::create($data);

        return redirect()->to("/home")->with("message", "Success add to cart");
    }

    public function orderTransaction(Request $request)
    {
        $data = [];

        $carts = Cart::where("id_user", auth()->user()->id)->get();

        $total = 0;

        foreach ($carts as $cart) {
            if ($cart->menu->stok == "available") {
                $total += $cart->total;
                $data[] = [
                    "id_menu" => $cart->id_menu,
                    "qty" => $cart->qty,
                    "total" => $cart->total,
                ];
            }
        }

        $transaction = Transaction::create([
            "id_user" => auth()->user()->id,
            "total" => $total,
        ]);

        for ($i = 0; $i < count($data); $i++) {
            $data[$i]["id_transaction"] = $transaction["id_transaction"];
        }

        Item::insert($data);

        Cart::where("id_user", auth()->user()->id)->delete();

        return redirect()->to("/home")->witH("message", "Transaksi Berhasil");
    }
    public function cetakTransaksi(Request $request)
    {
        $transaksi = Transaction::with('user')->where('id_transaction', $request->id)->first();

        $items = Item::join("tbl_menu", "tbl_menu.id_menu", "=", "tbl_item.id_menu")->where('id_transaction', $request->id)->get();

        return view('admin/menu/cetak', compact('transaksi', 'items'));
    }
    public function cari(Request $request)
    {
        $transaksi = Transaction::with("user")->whereBetween('created_at', [$request->dari, $request->sampai])->paginate(20);

        foreach ($transaksi as $transaksis) {
            $transaksis["items"] =
                Item::where(
                    "id_transaction",
                    $transaksis->id_transaction
                )->count();
        }

        return view('admin/transaksi.index', compact('transaksi'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
