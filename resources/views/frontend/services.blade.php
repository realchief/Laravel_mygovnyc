@extends('layouts.app')
@section('title', 'Services')

@section('content')

<div class="demo-container mdl-grid">
    <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col" style="padding-top: 0;">
        <div class="container">
          <button type="button" class="btn btn-raised btn-block btn-primary btn-filter">Filter</button>
        </div>
        <div class="col-sm-3 side-filter" style="border-right: 1px solid #3f3f3f; height: 100%;">
            <div class="row">
                @include('layouts.service_sidebar')
            </div>
        </div>

        <div class="col-sm-9"  id="service_content" style="padding: 0;padding-top: 20px;">
            
            <div class="col-sm-8">
                @foreach($organization_services as $organization_service)
                    @if($organization_service->name!=null)
                    <div class="box box-service">
                        <p class="text-aqua" id="{{$organization_service->name}}">{{$organization_service->name}}</p>

                        <p>Category: <span class="taxonomyid" id="{{$organization_service->taxonomy}}">{{$organization_service->taxonomy()->first()->name}}</span></p>
        
                        <p>Proviced by: <span class="organizationid" id="{{$organization_service->organization}}">{{$organization_service->organization()->first()->organization_name}}</span></p>
                        <p>Phone: {!! $organization_service->phone_numbers !!}</p>
                    </div>
                    @endif
                @endforeach
                {{ $organization_services->links() }}
            </div>
            <div class="col-sm-4">
                <div class="box" style="border-top: 2px solid #d2d6de;">
                <div id="mymap_service"></div>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/frontend/organization_service_ajax.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
<script type="text/javascript">

    var locations = <?php print_r(json_encode($organization_map)) ?>;


    var mymap_service = new GMaps({
      el: '#mymap_service',
      lat: 40.712722,
      lng: -74.006058,
      zoom:10
    });

    $.each( locations, function( index, value){
        if (value.latitude && value.longitude) {

            mymap_service.addMarker({
                lat: value.latitude,
                lng: value.longitude,
                title: value.name,
                infoWindow: {
                maxWidth: 150,
                content: ('<a>'+value.name+'</a></br>' +value.services_address_1+', ' +value.services_address_city+', '+value.services_address_state_province+', '+value.services_address_postalcode)
                }
            });
        }
        // if (value.project_lat && value.project_long) {
        //     mymap_service.addMarker({
        //         lat: value.project_lat,
        //         lng: value.project_long,
        //         title: value.project_projectid,
        //         infoWindow: {
        //             content: ('<a style="color:red;" href="projects_'+value.project_recordid+'">'+value.project_projectid+'</a></br>')
        //         }
        //     });
        // }
    });


</script>
@endsection