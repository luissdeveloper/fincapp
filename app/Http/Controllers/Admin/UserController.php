<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Validation\Rule;
use Validator, Input, Redirect; 

use App\CartDetail;
use App\Http\Controllers\Controller;

use App\ProductImage;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
use App\Cart;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::paginate(10);
    	return view('admin.users.index')->with(compact('users')); // listado
    }

    public function create()
    {
    	return view('admin.users.create'); // formulario de registro
    }

    public function store(Request $request)
    {
        // validar
        $messages = [
            'name.required' => 'Es necesario que ingrese su nombre.',
            'name.min' => 'El campo nombre debe tener al menos 10 caracteres.',

            'username.required' => 'Es necesario ingresar el nombre de usuario o alias',
            'username.min' => 'El campo nombre de usuario debe tener al menos 5 caracteres.',

            'password.required' => 'Es necesario ingresar una contraseña',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',

            'email.required' => 'Es necesario ingresar el correo electrónico',
            'email.unique' => 'Correo electronico ya registrado',

            'address.required' => 'Es necesario que ingrese su dirección',
            'address.min' => 'La dirección debe tener al menos 5 caracteres.',

            'admin.required' => 'Ingrese el tipo de usuario: true para administrador y false para usario estándard' ,

            'phone.required' => 'Es necesario ingresar su número de telefono',
            'phone.min' => 'El campo teléfono debe tener minimo 7 caracteres',
            'phone.numeric' => 'El campo teléfono es un número, sin negativos',
        ];
        $rules = [
            'name' => 'required|min:10',
            'username' => 'required|min:5',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users',
            'address' => 'required|min:5',
            'admin' => 'required',
            'phone' => 'required|numeric|min:7'
        ];
        $this->validate($request, $rules, $messages);

    	// registrar el nuevo usuario en la bd
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->admin = $request->input('admin');
        $user->phone = $request->input('phone');
        $user->save(); // INSERT

        return redirect('/admin/users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with(compact('user')); // form de edición
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'name.required' => 'Es necesario que ingrese su nombre.',
            'name.min' => 'El campo nombre debe tener al menos 10 caracteres.',

            'username.required' => 'Es necesario ingresar el nombre de usuario o alias',
            'username.min' => 'El campo nombre de usuario debe tener al menos 5 caracteres.',

            'password.required' => 'Es necesario ingresar una contraseña',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',

            'email.required' => 'Es necesario ingresar el correo electrónico',
            'email.unique' => 'Correo electronico ya registrado',

            'address.required' => 'Es necesario que ingrese su dirección',
            'address.min' => 'La dirección debe tener al menos 5 caracteres.',

            'admin.required' => 'Ingrese el tipo de usuario: true para administrador y false para usario estándard' ,

            'phone.required' => 'Es necesario ingresar su número de telefono',
            'phone.min' => 'El campo teléfono debe tener minimo 7 caracteres',
            'phone.numeric' => 'El campo teléfono es un número, sin negativos',
        ];

        $user = User::find($id);
        $rules = [
            'name' => 'required|min:10',
            'username' => 'required|min:5',
            'password' => 'required|min:8',
            'email' => Rule::unique('users', 'email')->ignore($user->id),
            'address' => 'required|min:5',
            'admin' => 'required',
            'phone' => 'required|numeric|min:7'
        ];

     


        $this->validate($request, $rules, $messages);
        // dd($request->all());
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->admin = $request->input('admin');
        $user->phone = $request->input('phone');
        $user->save(); // UPDATE

        return redirect('/admin/users');
    }

    public function destroy($id)
    {
        Cart::where('user_id', $id)->delete();
        $user = User::find($id);
        $user->delete(); // DELETE

        return back();
    }

}
