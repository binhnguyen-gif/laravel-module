@extends("core::web.master")
@section("seo-meta")
    {!! SeoData::generate($post) !!}
@endsection
@section('content')
            <h1>{{ $post->name }}</h1>
            <b>{{ $post->description }}</b>
            <hr>
            <p>{{ $post->content }}</p>
@endsection

@push('styles')
@endpush
@push('scripts')
@endpush
