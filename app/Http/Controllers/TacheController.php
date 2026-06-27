<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\Routing\Route;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $all=  Tache::all();
        //dd($all);
        return view('tache.index',["all"=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view("tache.create",);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate=$request->validate(
            ["titre"=>"required | min:3",
            "description"=>"min:5",
            "date"=>"required|date||after_or_equal:today",
            "duree"=>"required"
            ]
        );

         $titre=htmlspecialchars($request->titre);
        $description=htmlspecialchars($request->description);
        $date=htmlspecialchars($request->date);
        $heur=htmlspecialchars($request->heur);
        $duree=htmlspecialchars($request->duree);


    return redirect()->route('taches.index');



  }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // On trouve la tâche ou on renvoie une erreur 404 si elle n'existe pas
    $tache = Tache::findOrFail($id);

    // On supprime l'instance
    $tache->delete();

    return redirect()->route('taches.index');
    }
}
