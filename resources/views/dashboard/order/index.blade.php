@extends('dashboard.layouts.app')

@section('content')

<livewire:orderlive />

@endsection

@push('js')

<script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>

@endpush