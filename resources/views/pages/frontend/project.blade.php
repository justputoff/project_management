@extends('layouts.frontend.main')

@section('content')
<div class="mt-4 container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="description-container bg-white text-dark" style="max-height: 1080px; overflow-y: auto;">
                        <p class="mt-3 description text-dark bg-white">{!! $project->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
      .description-container {
          max-width: 100%;
      }

      .description-container .description {
          width: 100%;
          word-wrap: break-word;
          overflow-wrap: break-word;
      }

      .description-container img {
        max-width: 720px;
      }

      .description-container figcaption{
        text-align: center;
      }

      .description-container figure .media{
        border: 1px solid #000;
        width: 100px;
      }
      
    .ck-editor__editable[role="textbox"] {
      /* editing area */
      min-height: 200px;
    }

    .ck-content .image {
      /* block images */
      max-width: 80%;
      margin: 20px auto;
    }
</style>
@endpush