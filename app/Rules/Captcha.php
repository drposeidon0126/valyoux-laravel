<?php
 
namespace App\Rules;
 
use Illuminate\Contracts\Validation\Rule;
use ReCaptcha\ReCaptcha;
 
class Captcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
 
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $captcha = new ReCaptcha(env('CAPTCHA_SECRET_KEY'));
        $response = $captcha->verify($value, $_SERVER['REMOTE_ADDR']);
 
        return $response->isSuccess();
    }
 
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Complete the reCAPTCHA to submit the form';
    }
}