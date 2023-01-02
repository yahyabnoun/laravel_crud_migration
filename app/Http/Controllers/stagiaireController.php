<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class stagiaireController extends Controller
{
    public  function index( )
    {
        return view('afficher',['stagiaires'=>DB::table('stagiaires')->get()]); 

    }

    public  function ajouter(Request $request)
    {
        $temp_now=new \DateTime();

        DB::table('stagiaires')->insert([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'age'=>$request->age,
            'created_at'=>$temp_now->format("Y-m-d H:i:s"),
            'updated_at'=>$temp_now->format("Y-m-d H:i:s")
        ]);
        return redirect('afficher')->with(['success_ajouté'=>'stagiaire ajouté avec success']);

    }

    public  function edit($id)
    {
        $stagiare=DB::table('stagiaires')->where('id',$id)->get();
        // print_r($stagiare) ;
        return view('edit')->with([
            'stagiare'=>$stagiare
        ]);

    }

    public  function update(Request $request,$id)
    {
        $temp_now=new \DateTime();
        DB::table('stagiaires')->where('id',$id)->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'age'=>$request->age,
            'updated_at'=>$temp_now->format("Y-m-d H:i:s")
            

        ]);
        return redirect('afficher')->with(['success_update'=>'stagiaire update avec success']);

    }



    public function destroy(Request $request) {
        DB::table('stagiaires')->where('id',$request->id)->delete();
        // DB::delete('delete from stagiaires where id = ?',[$id]);
        return redirect('afficher')->with(['success_destroy'=>'stagiaire destroy avec success']);
        

     }
}
