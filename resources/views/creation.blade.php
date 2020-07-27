@extends('agency.groupe')

@section('contenu')
    <form action="/creation" method="post">
        @csrf
        <label for="nom">nom du groupe : </label>
        <input type="text" name="nom" id="nom"></br>
        <label for="nombre">nombre d'adulte</label>
        <input type="number" name="nom" id="nombre_adulte"></br>
        <label for="nombre">nombre d'enfant</label>
        <input type="number" name="nom" id="nombre_enfant"></br>
        <label for="date">date de création</label>
        <input type="date" name="nom" id="date_creation"></br>
        <label for="nombre">prix par personne</label>
        <input type="number" name="nom" id="nom"></br>
        <label for="nombre">nombre d'adulte</label>
        <input type="number" name="nom" id="nom"></br>
        <label for="nombre">reduction</label>
        <input type="number" name="nom" id="nom"></br>

        <input type="submit" value="créer">
    </form>
@endsection