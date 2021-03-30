@extends('admin.dashboard')
@section('content')
<table class="table table-dark mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Numéro</th>
        <th scope="col">Solde</th>
        <th scope="col">Propriétaire</th>
        <th scope="col">Date création</th>
        <th>
            Actions
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>12233</td>
        <td>12000</td>
        <td>Hadramy</td>
        <td>22/12/2020</td>
        <td>
            <a href="" class="btn btn-info mr-1"><i class="fas fa-edit"></i> Editer</a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>12233</td>
        <td>12000</td>
        <td>Hadramy</td>
        <td>22/12/2020</td>
        <td>
            <a href="" class="btn btn-info mr-1"><i class="fas fa-edit"></i> Editer</a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
        </td>
      </tr>
    </tbody>
  </table>
@endsection