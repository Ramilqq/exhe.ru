<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tarif;
use App\Models\TarifUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function organization ()
    {
        return view('web.user_organization');
    }

    public function organizationAdd ()
    {
        dd('Требуется АПИ');
        return view('web.user_organization');
    }
    
    public function organizationRemove ()
    {
        return view('web.user_organization');
    }

    public function tarif ()
    {
        $user = Auth::user();

        return view('web.user_tarif', [
            'tarifs' => Tarif::get(),
            'tarif_sub' => $user->tarif(),
        ]);
    }

    public function tarifSub (Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'tarif_id' => ['required', 'exists:tarifs,id'],
        ]);

        $data['user_id'] = $user->id;

        if ($tarifUser = $user->tarif())
        {
            $tarifUser->pivot->update($data);
        }
        else
        {
            TarifUser::create($data);
        }

        return redirect()->route('web.user_tarif');
    }

    public function tarifUnsub (Request $request)
    {
        $user = Auth::user();
        if ($tarifUser = $user->tarif())
        {
            $tarifUser->pivot->delete();
        }

        return redirect()->route('web.user_tarif');
    }

    public function profile ()
    {
        return view('web.user_profile', [
            'user' => auth()->user()
        ]);
    }

    public function profileUpdate (Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:30'],
            'email' => ['required', 'email', 'unique:users,email,'.$request->id, 'min:3', 'max:30'],
        ]);

        $user = Auth::user();
        $user->update($data);

        return redirect()->route('web.user_profile');
    }

    public function profilePasswordUpdate (Request $request)
    {
        $data = $request->validate([
            'password' => ['required', 'string', 'confirmed', 'min:3', 'max:30'],
        ]);

        $user = Auth::user();
        $user->update($data);
        
        return view('web.user_profile');
    }
}
