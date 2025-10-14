<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman profil customer yang sedang login.
     */
    public function index()
    {
        $customer = Auth::user(); // Mengambil data customer yang sedang login
        return view('customer.profil.index', compact('customer'));
    }

    /**
     * Memperbarui data profil customer.
     */
    public function update(Request $request)
    {
        $customer = Auth::user();

        $request->validate([
            'nama' => 'required|string|max:255',
            'no_whatsapp' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:customer,email,' . $customer->id_customer . ',id_customer',
        ]);

        $customer->update($request->only(['nama', 'no_whatsapp', 'email']));

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Memperbarui password customer.
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|string|min:8|confirmed',
        ]);

        $customer = Auth::user();

        if (!Hash::check($request->password_lama, $customer->password)) {
            return back()->withErrors(['password_lama' => 'Password lama tidak sesuai.']);
        }

        $customer->update([
            'password' => Hash::make($request->password_baru)
        ]);

        return redirect()->route('profil.index')->with('success', 'Password berhasil diubah.');
    }
}