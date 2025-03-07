@extends('navbar')

@section('content')
    <div class="container">
        <a class="btn btn-success mt-5" href="{{route('cour.addCour')}}">Ajouter</a>
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <br>
        <h1>Les Cours</h1>
        <table class="table ">
            <tr>
                <th>Nom</th>
                <th>Action</th>

            </tr>
            @foreach($cours as  $e)
                <tr>

                    <td>{{$e->nom_cours}}</td>
                    <td class="d-flex gap-3">
                        <a class="btn btn-primary" href="{{route('cour.editCour',$e->id)}}"><ion-icon name="create-outline"></ion-icon></a>
                        <form action="{{route('cour.deleteCour',$e->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" ><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                        <a class="btn btn-success" href="{{route('cour.showCour',$e->id)}}"><ion-icon name="information-circle-outline"></ion-icon></a>

                    </td>
                </tr>
            @endforeach
        </table>



    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

@endsection
