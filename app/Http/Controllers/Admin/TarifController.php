<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TarifRequest;
use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index ()
    {   
        $tarifs = Tarif::get()->toArray();
        return view('admin.tarif_index', [
            'tarifs' => $tarifs
        ]);
    }

    public function show (Tarif $tarif)
    {   
        $users = $tarif->users();

        return view('admin.tarif_show', [
            'tarif' => $tarif,
            'users' => $users,
        ]);
    }

    public function create ()
    {
        return view('admin.tarif_create');
    }

    public function store (TarifRequest $request)
    {
        Tarif::create($request->validated()) ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.tarif_index');
    }

    public function edit (Tarif $tarif)
    {
        return view('admin.tarif_edit', [
            'tarif' => $tarif
        ]);
    }

    public function update (TarifRequest $request, Tarif $tarif)
    {   
        $tarif->update($request->validated()) ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.tarif_show', $tarif->id);
    }

    public function delete (Tarif $tarif)
    {
        $tarif->delete() ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.tarif_index');
    }
}
