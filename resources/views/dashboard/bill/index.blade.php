@extends('dashboard.layouts.app')

@section('content')

<livewire:billlive />

@endsection

@push('js')

<script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>

@endpush