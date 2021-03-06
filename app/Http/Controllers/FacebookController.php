<?php namespace App\Http\Controllers;
use Laravel\Socialite\Contracts\Factory as Socialite;


use App\User;
use Auth;

class FacebookController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Socialite $socialite)
	{
		$this->socialite = $socialite;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getSocialAuth($provider=null)
	{
   if(!config("services.$provider")) abort('404');

   return $this->socialite->with($provider)->redirect();
 }


 public function getSocialAuthCallback($provider=null)
 {


  if($fbuser = $this->socialite->with($provider)->user())
  {


   if(User::where('fbuserid', '=', $fbuser->id)->orWhere('email','=',$fbuser->email)->first())
   {

    $checkUser = User::where('fbuserid', '=', $fbuser->id)->orWhere('email','=',$fbuser->email)->first();

    
    Auth::login($checkUser);
    return redirect('home');
    
  }

  $user = new User();


  $user->name = $fbuser->getName();
  if($fbuser->getEmail() == "")
  {
    $user->email = $fbuser->id . "@mymagical.com";

  }
  else
  {
    $user->email = $fbuser->getEmail();

  }




            $user->fbuserid = $fbuser->getId();//facebook Id

            $user->save();   
            Auth::login($user);
            return redirect('home');
            
          }
          else
          {
           return 'something went wrong';
         }
       }
     }
