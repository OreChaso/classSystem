<?php

namespace App\Http\Controllers;
use App\Http\Requests\loginRequest;
use App\Http\Requests\createUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Room;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function loginShow()
    {
        return view('/login');
    }

    /**
     * @param App\Http\Requests\loginRequest
     * $request
     */
    public function login(loginRequest $request) {
        /**
         * 認証の試行を処理
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        $credentials = $request->only('user_no', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('login_success', 'ログインに成功しました');
        }

        return back()->withErrors([
            'login_error' => '学籍番号かパスワードが間違っています。',
        ]);
    }
    
    /**
     * ログアウト
     */
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('loginShow'))->with('logout', 'ログアウトしました。');
    }

    /**
     * 新規作成画面に飛ぶ
     */
    public function createShow() {
        return view('/create');
    }

    /**
     * 新規ユーザー作成
     */
    public function userCreate(createUserRequest $request) {

        //新規ユーザー情報を取得
        $data = $request->all();

        \DB::beginTransaction();
        try {
            //ユーザー登録
            User::create([
                'user_no' => $data['user_no'],
                'password' => Hash::make($data['password']),
            ]);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('create_success', 'ユーザーを登録しました。');
        return redirect(route('loginShow'))->with('create_user', 'ユーザーを作成しました。');
    }

    /**
     * 教室番号の取得
     *
     * @return \Illuminate\Http\Response
     */
    public function roomNumber()
    {
        //データベースから教室情報取得
        $rooms = DB::table('rooms')->get();
        //ホーム画面に飛ぶ
        return view('admin.home', ['rooms' => $rooms]);
    }
}

