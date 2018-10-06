<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

use App\Logic\User\UserRepository;
use App\Models\Agency;
use App\Models\Address;
use App\Models\Taxonomy;
use App\Models\Service;
use App\Models\Location;
use App\Models\Project;
use App\Models\Organization;
use App\Services\Numberformat;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {

      

        $types = Organization::distinct()->get(['type']);
        $tags = DB::table('tags')->get();

        $organizations = Organization::where('type', '=', 'City Agency')->leftjoin('tags', 'organizations.tags', 'like', DB::raw("concat('%', tags.tag_id, '%')"))->select('organizations.*', DB::raw('group_concat(DISTINCT(tags.tag_name)) as tag_names'))->groupBy('organizations.organization_id')->get();

        return view('frontend.organizations', compact('types', 'tags','organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find($id)
    {   
        $organization_type = $organization = Organization::where('organizations_id','=',$id)->first()->type;
        $organizations = Agency::orderBy('magencyacro', 'asc')->get();

        $original_organization = Organization::where('organizations_id','=',$id)->first();
        $original_agency = DB::table('agencies')->where('magency','=',$id)->first();

        // var_dump($organization_services);
        // exit();

        $organization = Organization::where('organizations_id','=',$id)->leftjoin('agencies', 'organizations.organizations_id', '=', 'agencies.magency')->leftjoin('tags', 'organizations.tags', 'like', DB::raw("concat('%', tags.tag_id, '%')"))->leftjoin('expenses', 'agencies.expenses', 'like', DB::raw("concat('%', expenses.expenses_id, '%')"))->leftjoin('phones', 'organizations.phones', 'like', DB::raw("concat('%', phones.phone_id, '%')"))->leftjoin('address', 'organizations.main_address', '=', 'address.address_id')->select('organizations.*', 'organizations.description as organization_description', 'agencies.*', 'phones.*', DB::raw('sum(expenses.year1_forecast) as expenses_budgets', 'address.*'), DB::raw('group_concat(DISTINCT(tags.tag_name)) as tag_names'))->groupBy('organizations.organization_id')->first();

        // var_dump($organization->total_project_cost);
        // exit();
        $budgetclass = new Numberformat();
        $capital_budget = $organization->total_project_cost;
        $expense_budget = $organization->expenses_budgets;
        $organization->total_project_cost=$budgetclass->custom_number_format($organization->total_project_cost, 1);
        $organization->expenses_budgets=$budgetclass->custom_number_format($organization->expenses_budgets, 1);

        $agency_map = Address::where('organizations','=', $original_organization->organization_id)->first();

        $organization_map = DB::table('services_organizations')->where('organization_x_id','=', $id)->leftjoin('locations', 'services_organizations.organization_locations', 'like', DB::raw("concat('%', locations.location_id, '%')"))->leftjoin('address', 'locations.address', 'like', DB::raw("concat('%', address.address_id, '%')"))->leftjoin('agencies', 'services_organizations.organization_recordid', 'like', DB::raw("concat('%', agencies.magency, '%')"))->leftjoin('projects', 'agencies.projects', 'like', DB::raw("concat('%', projects.project_recordid, '%')"))->groupBy('projects.project_recordid')->select('services_organizations.*', 'locations.*', 'projects.*', 'address.*')->groupBy('locations.id')->get();

        // var_dump($organization_services);
        // exit();

        $organization_expenses = Organization::where('organizations_id','=', $id)->leftjoin('agencies', 'organizations.organizations_id', 'like', DB::raw("concat('%', agencies.magency, '%')"))->leftjoin('expenses', 'agencies.expenses', 'like', DB::raw("concat('%', expenses.expenses_id, '%')"))->groupBy('expenses.expenses_id')->orderBy('expenses.line_number')->get();

        $expenses_sum = Organization::where('organizations_id','=', $id)->leftjoin('agencies', 'organizations.organizations_id', 'like', DB::raw("concat('%', agencies.magency, '%')"))->leftjoin('expenses', 'agencies.expenses', 'like', DB::raw("concat('%', expenses.expenses_id, '%')"))->select(DB::raw('sum(expenses.year1_forecast) as expenses_year1'), DB::raw('sum(expenses.year2_estimate) as expenses_year2'), DB::raw('sum(expenses.year3_estimate) as expenses_year3'))->first();  


        return view('frontend.organization', compact('organization', 'organization_peoples', 'organization_expenses', 'organization_map', 'expenses_sum', 'original_organization', 'capital_budget', 'expense_budget', 'organization_type', 'organizations', 'organization_projects', 'agency_map'));
    }

    public function projects($id)
    {
        $organization = Agency::where('magency','=',$id)->first();
        $organization_projects = Organization::where('organizations_id','=', $id)->leftjoin('agencies', 'organizations.organizations_id', '=', 'agencies.magency')->leftjoin('projects', 'agencies.projects', 'like', DB::raw("concat('%', projects.project_recordid, '%')"))->groupBy('projects.project_recordid')->get();

        $organization_map = DB::table('services_organizations')->where('organization_x_id','=', $id)->leftjoin('locations', 'services_organizations.organization_locations', 'like', DB::raw("concat('%', locations.location_id, '%')"))->leftjoin('address', 'locations.address', 'like', DB::raw("concat('%', address.address_id, '%')"))->leftjoin('agencies', 'services_organizations.organization_recordid', 'like', DB::raw("concat('%', agencies.magency, '%')"))->leftjoin('projects', 'agencies.projects', 'like', DB::raw("concat('%', projects.project_recordid, '%')"))->groupBy('projects.project_recordid')->select('services_organizations.*', 'locations.*', 'projects.*', 'address.*')->groupBy('locations.id')->get();

        return view('frontend.organization_projects', compact('organization','organization_projects', 'organization_map'))->render();
    }

    public function services($id)
    {
        $organization = Organization::where('organizations_id','=',$id)->first();

        $organizations_services =DB::table('services_organizations')->where('organization_x_id','like', '%'.$id.'%')->value('organization_name');

        $organization_services = Organization::where('organizations_id','=', $id)->leftjoin('services_organizations', 'organizations.organizations_id', 'like', DB::raw("concat('%', services_organizations.organization_x_id, '%')"))->leftjoin('services', 'services_organizations.organization_services', 'like', DB::raw("concat('%', services.service_id, '%')"))->select('services.*')->leftjoin('services_phones', 'services.phones', 'like', DB::raw("concat('%', services_phones.phone_recordid, '%')"))->leftjoin('taxonomies', 'services.taxonomy', '=', 'taxonomies.taxonomy_id')->select('services.*', DB::raw('group_concat(services_phones.services_phone_number) as phone_numbers'), DB::raw('taxonomies.name as taxonomy_name'))->groupBy('services.id')->get();

        $organization_map = DB::table('services_organizations')->where('organization_x_id','=', $id)->leftjoin('locations', 'services_organizations.organization_locations', 'like', DB::raw("concat('%', locations.location_id, '%')"))->leftjoin('services_address', 'locations.address', 'like', DB::raw("concat('%', services_address.address_recordid, '%')"))->leftjoin('agencies', 'services_organizations.organization_recordid', 'like', DB::raw("concat('%', agencies.magency, '%')"))->leftjoin('projects', 'agencies.projects', 'like', DB::raw("concat('%', projects.project_recordid, '%')"))->groupBy('projects.project_recordid')->select('services_organizations.*', 'locations.*', 'projects.*', 'services_address.*')->groupBy('locations.id')->get();

        return view('frontend.organization_services', compact('organization', 'organizations_services', 'organization_services', 'organization_map'))->render();
    }

    public function peoples($id)
    {
        $organization_peoples = Organization::where('organizations_id','=', $id)->leftjoin('contacts', 'organizations.contacts', 'like', DB::raw("concat('%', contacts.contact_id, '%')"))->groupBy('contacts.contact_id')->get();

        return view('frontend.organization_peoples', compact('organization_peoples'))->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $find = $request->search_agency;

        $organizations = Organization::leftjoin('tags', 'organizations.tags', 'like', DB::raw("concat('%', tags.tag_id, '%')"))->select('organizations.*', DB::raw('group_concat(DISTINCT(tags.tag_name)) as tag_names'))->groupBy('organizations.organization_id')->where('organizations.name', 'like', '%'.$find.'%')
            ->orwhere('organizations.description', 'like', '%'.$find.'%')->sortable(['expenses_budgets'])->get();

        return view('frontend.organization_filter', compact('organizations'))->render();
    }

    public function filter(Request $request)
    {
        $types = $request->organization_type;
        $tags = $request->organization_tag;
        // $find = $request->val; 
        $check = 0;
        if(isset($types[0])){
            $organizations = Organization::where('type',$types[0]);
            $count = 0;
            for($i = 1; $i < count($types); $i++)
                $organizations = $organizations->orwhere('type',$types[$i]);
            $check = 1;
        }
        if(isset($tags[0])){
            if($check == 0)
                $organizations = Organization::where('tags',$tags[0]);
            else
                $organizations = $organizations->orwhere('tags', 'like', '%'.$tags[0].'%');
            for($i = 1; $i < count($tags); $i++)
                $organizations = $organizations->orwhere('tags', 'like', '%'.$tags[$i].'%');
            $check = 1;

        }
        // if(isset($find)){
            
        //     if($check == 0)
        //         $organizations = Organization::where(function($query) use ($find) {
        //         $query->where('name', 'like', '%'.$find.'%')->orwhere('description', 'like', '%'.$find.'%');
        //     });
        //     else
        //        $organizations = $organizations->where(function($query) use ($find) {
        //         $query->where('name', 'like', '%'.$find.'%')->orwhere('description', 'like', '%'.$find.'%');
        //     });
        //     $check = 1;
        // }        
        if($check == 1)
            $organizations = $organizations->leftjoin('tags', 'organizations.tags', 'like', DB::raw("concat('%', tags.tag_id, '%')"))->select('organizations.*', DB::raw('group_concat(DISTINCT(tags.tag_name)) as tag_names'))->groupBy('organizations.organization_id')->get();
        else
            $organizations = Organization::leftjoin('tags', 'organizations.tags', 'like', DB::raw("concat('%', tags.tag_id, '%')"))->select('organizations.*', DB::raw('group_concat(DISTINCT(tags.tag_name)) as tag_names'))->groupBy('organizations.organization_id')->get();

        return view('frontend.organization_filter', compact('organizations'))->render();
    }
    
}
