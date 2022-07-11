@extends('layouts.backOffice')
@section('title')
Appartamenti
@endsection
@section('content')
@if (session('deleted'))
<div class="alert alert-danger">
    {{ session('deleted') }}
</div>
@elseif (session('modified'))
<div class="alert alert-success">
    {{ session('modified') }}
</div>
@elseif (session('created'))
<div class="alert alert-primary">
    {{ session('created') }}
</div>
@endif

<div class="flex-center">
    <div class="custom apartment-padding">
        <div class="flex-between section-padding">
            <div style="display: block">
                <h2 class="text-center h2-color">Appartamenti</h2>
            </div>
            <div>
                <a class="text_decoration_none button_accent" href="{{ route('admin.apartments.create') }}">
                    Aggiungi Appartamento
                </a>
            </div>
        </div>

        <div class="flex">
            <div class="apartment-margin">
                <table class="table flex">
                    <tbody>
                        @foreach ($apartments as $apartment)
                        <tr>

                            <td><img src="{{ $apartment->cover_image }}" alt=""
                                    style="width: 100px; height: 100px; margin-left: 20px;"></td>
                            <td>{{ $apartment->title }}</td>
                            <td>{{ $apartment->description }}</td>
                            <td>{{ $apartment->address }}</td>

                            <td class="between_tables">
                                <button class="button_crud">
                                    <a href="{{ route('admin.apartments.show', $apartment->id) }}" class="button-crud text_decoration_none">
                                        Visualizza
                                    </a>
                                </button>
                                <button class="button_crud">
                                    <a href="{{ route('admin.apartments.edit', $apartment->id) }}" class="button-crud text_decoration_none">
                                        Modifica
                                    </a>
                                </button>
                                {{-- DELETE --}}
                                <form action="{{ route('admin.apartments.destroy', $apartment->id) }}" method="POST"
                                    class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button_crud" type="submit" class="delete-form">
                                        Elimina
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/confirmDelete.js') }}"></script>
@endsection
