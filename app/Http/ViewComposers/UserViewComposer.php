<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;


class UserViewComposer {

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $guard;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Guard $guard)
    {
        // service container 会自动解析所需的参数
        $this->guard=$guard;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
       $view->with('user', $this->guard->user());

    }

}