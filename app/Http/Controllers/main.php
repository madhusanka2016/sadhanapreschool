<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class main extends Controller
{
    public function home()// Home Page
    {
       return view('index');
    }
    public function about()// About Page
    {
        return view('about');
    }
    public function academics()// About Page
    {
        return view('academics');
    }
    public function services()// About Page
    {
        $social = DB::select("SELECT * FROM `db_social` WHERE `active`='1'");
                $work = DB::select("SELECT * FROM `tb_works`");
        $testim = DB::select("SELECT * FROM `tb_testi`");
        $services = DB::select("SELECT * FROM `tb_services`");
        $heading = DB::select("SELECT * FROM `tb_content` WHERE Type ='portfolio_head'");
        return view('services', [ 'social' => $social , 'work' => $work , 'testim' => $testim, 'services' => $services , 'heading' => $heading]);
    }
    public function portfolio()// About Page
    {
        $social = DB::select("SELECT * FROM `db_social` WHERE `active`='1'");
                $albums = DB::select("SELECT * FROM `db_album` ");
        $heading = DB::select("SELECT * FROM `tb_content` WHERE Type= 'service_head'");
        return view('portfolio', [ 'social' => $social , 'albums' => $albums , 'heading' => $heading]);
    }
    public function contact()// About Page
    {
        $heading = DB::select("SELECT * FROM `tb_content` WHERE Type ='contact_head'");
        $social = DB::select("SELECT * FROM `db_social` WHERE `active`='1'");
                $Title="";
        return view('contact', [ 'social' => $social, 'heading' => $heading, 'Title' => $Title ]);
    }
    public function album($id)// About Page
    {
        $social = DB::select("SELECT * FROM `db_social` WHERE `active`='1'");
        $album = DB::select("SELECT * FROM `db_album` where id='" . $id . "'");
        $photos = DB::select("SELECT * FROM `tb_photo` where album='" . $id . "'");
                return view('album', [ 'social' => $social , 'album' => $album, 'photos' => $photos ]);
    }
    public function submit(Request $request)
    {
        //dd($request);
            $name = $request->input('name');
            $email = $request->input('email');
            $Head = $request->input('Head');
            $contactno = $request->input('contactno');
            $country = $request->input('country');
            $message = $request->input('message');
            $action = 1;
            $Title="Thank you for contact me. I will reply you soon !";
            DB::table('tb_comment')->Insert(['name' => $name,'email' => $email,  'subject' => $Head , 'country' => $country, 'contact' => $contactno, 'message' => $message, 'action' => $action]);


            $heading = DB::select("SELECT * FROM `tb_content` WHERE Type ='contact_head'");
            $social = DB::select("SELECT * FROM `db_social` WHERE `active`='1'");
                    return view('contact', [ 'social' => $social, 'heading' => $heading , 'Title' => $Title ]);


    }
}
