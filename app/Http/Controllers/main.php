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
    public function academics()// Academic Page
    {
        $academics = DB::select("SELECT * FROM `academics`");

        return view('academics', ['academics' => $academics]);
    }
    public function academicspages($id)// Academic Page
    {

        $academic = DB::select("SELECT * FROM `academics` WHERE `aca_link` = '" . $id . "' ");
        $academics = DB::select("SELECT * FROM `academics` LIMIT 4");

        return view('academicspage', ['academics' => $academics,'academic' => $academic]);
    }
    public function extra()// Academic Page
    {
        $extras = DB::select("SELECT * FROM `extra`");

        return view('extra', ['extras' => $extras]);
    }

    public function extrapages($id)// Academic Page
    {
        $extra = DB::select("SELECT * FROM `extra` WHERE `ex_link` = '" . $id . "' ");
        $extras = DB::select("SELECT * FROM `extra` LIMIT 4");
        return view('extrapage', ['extras' => $extras,'extra' => $extra]);
    }

    public function achievements()// Academic Page
    {
        $achievements = DB::select("SELECT * FROM `achievements` ORDER BY ach_date DESC");
        return view('achievements', ['achievements' => $achievements]);
    }
    public function achievementspages($id)// Academic Page
    {
        $achievement = DB::select("SELECT * FROM `achievements` WHERE `ach_link` = '" . $id . "' ");
        $achievements = DB::select("SELECT * FROM `achievements` ORDER BY ach_date DESC LIMIT 4");

        return view('achievementspage', ['achievements' => $achievements,'achievement' => $achievement]);
    }
    public function gallery()// Academic Page
    {
        $albums = DB::select("SELECT * FROM `album` ORDER BY a_date DESC");
        return view('gallery', ['albums' => $albums]);
    }
    public function album($id)// Academic Page
    {
        
        $album = DB::select("SELECT * FROM `album` WHERE a_link = '" . $id . "'");
        return view('album', ['album' => $album]);
    }
    public function registration()// Academic Page
    {
        return view('registration');
    }
    public function eventannual()// Academic Page
    {
        return view('eventannual');
    }
    public function eventannualpage($id)// Academic Page
    {
        return view('eventannualpage');
    }
    public function event($id)// Academic Page
    {
        return view('eventpage');
    }
    public function contact()// Academic Page
    {
        return view('contact');
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
    

    // public function submit(Request $request)
    // {
    //     //dd($request);
    //         $name = $request->input('name');
    //         $email = $request->input('email');
    //         $Head = $request->input('Head');
    //         $contactno = $request->input('contactno');
    //         $country = $request->input('country');
    //         $message = $request->input('message');
    //         $action = 1;
    //         $Title="Thank you for contact me. I will reply you soon !";
    //         DB::table('tb_comment')->Insert(['name' => $name,'email' => $email,  'subject' => $Head , 'country' => $country, 'contact' => $contactno, 'message' => $message, 'action' => $action]);


    //         $heading = DB::select("SELECT * FROM `tb_content` WHERE Type ='contact_head'");
    //         $social = DB::select("SELECT * FROM `db_social` WHERE `active`='1'");
    //                 return view('contact', [ 'social' => $social, 'heading' => $heading , 'Title' => $Title ]);


    // }
}
