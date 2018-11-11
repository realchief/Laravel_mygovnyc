@foreach($organization_services as $organization_service)
    <div class="box box-service">
    	<p class="text-aqua" id="{{$organization_service->name}}">{{$organization_service->name}}</p>
    	
        <p>Category: <span class="taxonomyid" id="{{$organization_service->taxonomy}}">{{$organization_service->taxonomy()->first()->name}}</span></p>
        
        <p>Proviced by: <span class="organizationid" id="{{$organization_service->organization}}">{{$organization_service->organization()->first()->organization_name}}</span></p>
        <p>Phone: {!! $organization_service->services_phone_number !!}</p>
    </div>
@endforeach
<script src="{{ asset('js/frontend/organization_service_ajax.js') }}"></script>