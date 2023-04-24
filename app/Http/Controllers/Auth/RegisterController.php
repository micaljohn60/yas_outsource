<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserAccessType;
use App\Enums\UserType;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\PricePlan;
use App\Models\User;
use App\Models\UserPricePlan;
use App\Providers\RouteServiceProvider;
use App\Services\PricePlanService;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Enum;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'type' => ['required', new Enum(UserType::class)],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'card_number' => 'required_if:access_type,==,PREMIUM',
            'card_holder_name' => 'required_if:access_type,==,PREMIUM',
            // 'expire_date' => 'required_if:access_type,==,PREMIUM',
            'cvc' => 'required_if:access_type,==,PREMIUM',
            'planId' => 'required',
            'duration' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data): User
    {
        if(! PricePlan::where('id',(int) $data['planId'])->first())
        {
            throw new NotFound("Plan ID Invalid");
        }

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'type' => $data['type'] ?? 'buyer',
            'email' => $data['email'],
            'access_type' => $data['access_type'],
            'password' => Hash::make($data['password']),
        ]);

        if ($user->access_type->value == UserAccessType::PREMIUM->value) {
            Payment::create([
                'card_number' => $data['card_number'],
                'card_holder_name' => $data['card_holder_name'],
                'expire_date' => $data['expire_date'],
                'cvc' => $data['cvc'],
                'user_id' => $user->id,
            ]);
//            $plan = new \stdClass();
//            $plan->price_plan_id = $data['price_plan_id'];
//            $plan->duration = 'monthly';
//            $plan->user_id = $user->id;
//            app(PricePlanService::class)->insertPricePlan($plan);
        }

        $pricePlan = PricePlan::findOrFail((int) $data['planId']);

        UserPricePlan::create([
            'price_plan_id' => $pricePlan->id,
            'user_id' => $user->id,
            'duration' => $data["duration"],
            'expired_at' => app(PricePlanService::class)->calculateExpireDate($data["duration"]),
            'is_active' => true,
        ]);

        return $user;
    }
}
