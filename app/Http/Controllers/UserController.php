<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        printf("ok\n");
        if ($request->method() === 'GET') {
            printf("error\n");
            printf(request("name"));
            return view("auth/signup");
        }

        printf("good\n");
        $name = request("name");
        $firstname = request("firstname");
        $email = request("email");
        $password = request("password");
        $phone = request("phone");

        $user = new User(['name' => $name, 'firstname' => $firstname, 'email' => $email, 'password' => Hash::make($password), 'phone' => $phone, 'isValid' => 0, 'isAdmin' => 0]);
        $user->save();
        // TODO: Check email
        return redirect($to = '/sites');
    }

    public function login(Request $request)
    {
        if ($request->method() === 'GET') {
            return view("auth/login");
        }

        // POST METHOD
        $email = request("email");
        $password = request("password");

        $user = User::where('email', '=', $email)->firstOrFail();
        printf($user->password);
        if (!Hash::check($password, $user->password)) {
            // TODO: Renvoyer vers la page d'accueil
            printf("\nnot ok");
            return view("auth/login");
        }
        printf("\nok");
        $request->session()->put("isAdmin", $user->isAdmin);
        $request->session()->put("id", $user->id);
        $request->session()->save();

        if ($user->isAdmin === 1) {
            return redirect($to = '/admin');
        }
        return redirect($to = '/sites');
    }

    public function userInfo($id)
    {
        return view("userInfo", ["user" => User::find($id)]);
    }

    public function allUsers()
    {
        return view("admin/allUsers", ["users" => User::all()]);
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
        return redirect($to = "admin/users");
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect($to = '/sites');
    }
}
