@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Breadcrumbs::render('blog'); !!}
            <ul class="list-unstyled">
                <li>When there is no desire, all things are at peace. - Laozi</li>
                <li>Simplicity is the ultimate sophistication. - Leonardo da Vinci</li>
                <li>Simplicity is the essence of happiness. - Cedric Bledsoe</li>
                <li>Smile, breathe, and go slowly. - Thich Nhat Hanh</li>
                <li>Simplicity is an acquired taste. - Katharine Gerould</li>
                <li>Well begun is half done. - Aristotle</li>
                <li>He who is contented is rich. - Laozi</li>
                <li>Very little is needed to make a happy life. - Marcus Antoninus</li>
            </ul>
        </div>
    </div>
</div>
@endsection
