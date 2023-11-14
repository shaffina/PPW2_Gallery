<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                ->withErrors([
                    'email' => 'Please login to access the dashboard.',
                ])->onlyInput('email');
        }

        $users = User::get();

        return view('users')->with('userss', $users);
    }
    public function edit($id)
    {
        // Mengambil data pengguna yang akan diedit berdasarkan $id
        $user = User::find($id);

        // Menampilkan formulir edit dengan data pengguna
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input pengguna yang diedit
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250',
            'photo' => 'image|nullable|max:1999'
        ]);

        // Mengambil data pengguna yang akan diedit berdasarkan $id
        $user = User::find($id);

        // Menyimpan perubahan data pengguna
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->hasFile('photo')) {
            // Proses upload foto dan simpan ke storage
            $filename = $request->file('photo')->store('photos');
            $user->photo = $filename;
        }
        $user->save();

        return redirect()->route('users')->withSuccess('Profil pengguna berhasil diperbarui!');
    }

    public function delete($id)
    {
        // Mengambil data pengguna yang akan dihapus berdasarkan $id
        $user = User::find($id);

        // Menghapus foto dari storage jika ada
        if ($user->photo) {
            Storage::delete($user->photo);
        }

        // Menghapus pengguna dari database
        $user->delete();

        return redirect()->route('users')->withSuccess('Pengguna berhasil dihapus!');
    }

}
