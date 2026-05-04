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
        return view('dashboard',["all"=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $token=csrf_token();
        return view("tache_create",['token'=>$token]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $titre=htmlspecialchars($request->titre);
        $description=htmlspecialchars($request->description);
        $date=htmlspecialchars($request->date);
        $heur=htmlspecialchars($request->heur);
        $duree=htmlspecialchars($request->duree);
        $tache = new Tache();
        $tache->titre=$titre;
        $tache->description=$description;
        $tache->date=$date;
        $tache->heur=$heur;
        $tache->duree=$duree;
        $tache->save();

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
