    <div
    wire:ignore
    x-data
    x-init="() => {
        const post = FilePond.create($refs.input);
    }"
>
    <input type="file" x-ref="input" />
</div>

@push('styles')
    @once
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    @endonce
@endpush

@push('scripts')
    @once
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    @endonce
@endpush