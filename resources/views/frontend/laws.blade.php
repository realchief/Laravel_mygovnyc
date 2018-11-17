@extends('layouts.app')
@section('title', 'Laws')

@section('content')


<div class="demo-container mdl-grid">
    <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
        <div class="page-title row">
            <div class="pull-left">{{$laws->title}}</div>
        </div>
        <div class="menu-bar row">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="about">
                    <div class="box" style="padding: 40px;border-top: 2px solid #d2d6de;">
                        <div class="row">
                            <div class="col-md-8" style="padding-top: 5px;">
                                <p>The New York City Council creates the laws that govern the city. These laws can change the city charter, administrative code and agency rules, affecting how agencies operate.</p>
                            </div>
                            <div class="col-md-4">

                                    <iframe src="https://feed.mikle.com/widget/v2/95920/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
                            
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box" style="padding: 40px;border-top: 2px solid #d2d6de;min-height: 345px;">
                                <div class="row">
                                    <div class="col-md-12" style="padding-top: 5px;">
                                    <p>{!! $laws->body !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @include('partials.footer')
    </div>

</div>
@include('layouts.script')
@endsection
