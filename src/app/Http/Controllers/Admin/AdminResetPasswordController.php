<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;

class AdminResetPasswordController extends Controller
{
    use SendsPasswordResetEmails, ResetsPasswords;

    // パスワードリセット用のEloquentユーザープロバイダーを指定
    protected $userProvider = 'admins';
}
