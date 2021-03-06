@extends('layouts.blockActions')

@section('block-preview-'.$block->id)

<h5>{{ $block->data['title'] }}</h5>
<i class="material-icons left grey-text text-lighten-2">subdirectory_arrow_right</i>
<div class="tab">
  <div class="sortable-container">
    <div class="draggable">
      @foreach($block->children()->orderBy('order', 'asc')->get() as $child)
        @include('observation.blocks.'.$child->type.'.preview', ['block' => $child, 'questionaire' => $questionaire])
      @endforeach
    </div>
  </div>

  @if(!$block->children()->get()->count())
  <div class="list-row-wrapper">
    Nothing is added under this subtitle.
  </div>
  @endif
</div>

@endsection
