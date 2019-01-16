<?php

namespace App\Http\Controllers\Auth;


use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Persons\Persons;

class SocialAuthController extends Controller
{
  // Metodo encargado de la redireccion a Facebook
      public function redirectToProvider($provider)
      {
          return Socialite::driver($provider)->redirect();
      }

      // Metodo encargado de obtener la información del usuario
      public function handleProviderCallback($provider)
      {
          // Obtenemos los datos del usuario
          $social_user = Socialite::driver($provider)->stateless()->user(); // Cambiar esta linea de codigo del tutorial con la finalidad

      //de no afectar la redireccion
          // Comprobamos si el usuario ya existe

          if ($user = User::where('email', $social_user->email)->first()) {
              return $this->authAndRedirect($user); // Login y redirección
          } else {
              // En caso de que no exista creamos un nuevo usuario con sus datos.
              Persons::create([   'nombre' => $social_user->name,
                                  'email' => $social_user->email]);
              $user = User::create([
                  'name' => $social_user->name,
                  'email' => $social_user->email,
                  'avatar' => $social_user->avatar,
              ]);
              return $this->authAndRedirect($user); // Login y redirección

          }

      }

      // Login y redirección
      public function authAndRedirect($user)
      {
          Auth::login($user);

          return redirect()->to('/home#');
      }
}
