@props(['title', 'uriText', 'uri'])

<div class="row my-4">
  <div class="col-12">
      <div class="float-left">
          <h2>{{ $title }}</h2>
      </div>
      <div class="float-right">
          <a href="{{ $uri }}" class="btn btn-primary">{{ $uriText }}</a>
      </div>
  </div>
</div>