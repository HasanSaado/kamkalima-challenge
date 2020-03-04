@extends('layouts.app')

@section('content')

<style>
  .fild{  -webkit-clip-path: polygon(19% 7%, 81% 7%, 100% 100%, 0% 100%);
           clip-path: polygon(0% 30%, 100% 30%, 100% 100%, 0% 100%);
  }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id='teamselection' />
                    <!-- <div id="root"> -->
                    <!-- </div> -->
                    <!-- <div id='dnd'></div>
                    <div id="test"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
