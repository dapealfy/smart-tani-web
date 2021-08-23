<?php

namespace App\Http\Controllers;

use App\Models\Pembibitan;
use Illuminate\Http\Request;

class PembibitanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembibitan['pembibitans'] = Pembibitan::orderBy('id', 'desc')->get();
        return view('dashboard.pembibitans.index', $pembibitan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pembibitans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagePath = '/assets/images/car_model_default.png';
        if ($request->hasFile('image')) {
            $save = $request->file('image')->store('public/image');
            $filename = $request->file('image')->hashName();
            $imagePath = url('/') . '/storage/image/' . $filename;
        }

        Pembibitan::create([
            'image' => $imagePath,
            'jenis' => $request->jenis,
            'lama_tanam' => $request->lama_tanam,
            'harga' => $request->harga,
        ]);

        return redirect()->back()->with("OK", "Pembibitan berhasil di tambah.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembibitan  $pembibitan
     * @return \Illuminate\Http\Response
     */
    public function show(Pembibitan $pembibitan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembibitan  $pembibitan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembibitan $pembibitan)
    {
        return view('dashboard.pembibitans.edit', compact('pembibitan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembibitan  $pembibitan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembibitan $pembibitan)
    {
        $imagePath = $pembibitan->image;
        if ($request->hasFile('image')) {
            $save = $request->file('image')->store('public/image');
            $filename = $request->file('image')->hashName();
            $imagePath = url('/') . '/storage/image/' . $filename;
        }
        $pembibitan->update([
            'image' => $imagePath,
            'jenis' => $request->jenis,
            'lama_tanam' => $request->lama_tanam,
            'harga' => $request->harga,
        ]);
        return redirect()->route('dashboard.pembibitans.index')
            ->with('OK', 'Pembibitan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembibitan  $pembibitan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembibitan $pembibitan)
    {
        $pembibitan->delete();

        return redirect()->route('dashboard.pembibitans.index')
            ->with('OK', 'Pembibitan berhasil dihapus');
    }
}
