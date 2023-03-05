@extends('layouts.app')

@section('content')
  <form class="mt-4" action="">
    @csrf
    <div class="container">
      <div class="form-group" id="plateforme">
        <select class="form-group" name="" >
          <option value="angage SQL">langage SQL</option>
          <option value="R">R</option>
          <option value="UML">UML</option>
          <option value="MERISE">MERISE</option>
          <option value="JAVA FX">JAVA FX</option>
        </select>
      </div>
      <button type="button" name="button" class="btn btn-primary mt-2" id="confirm_search">Rechercher</button>
      <table class="table table-hover mt-4" id="resultatTable" style="display: none;">
        <thead>
          <th>Formation</th>
        </thead>
        <tbody id="resultat">

        </tbody>
      </table>
    </div>
  </form>
@endsection
