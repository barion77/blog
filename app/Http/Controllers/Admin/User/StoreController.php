<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $user_data = ['name' => $data['name'], 'email' => $data['email'], 'password' => $data['password']];
        $data['password'] = Hash::make($data['password']);

        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Mail::to($data['email'])->send(new PasswordMail($user_data));
        event(new Registered($user));

        return redirect()->route('admin.user.index');
    }
}
