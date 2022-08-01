<?php

namespace App\Http\Livewire\Roles;


use App\Exports\RolesExport;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;

    protected $rules = [
        'name' => 'required|string',
        'guard_name' => 'required|string',
        'permissions' => 'array|min:1',
    ];

    public $status;
    public $data;
    public $permissions = [];
    protected $paginationTheme = 'bootstrap';

    public $name, $guard_name, $country, $created_at, $uid;

    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term)
                ->OrWhere('guard_name', 'like', $term);
        });
    }

    public function render()
    {


        $this->data['roles'] = \App\Models\role::latest()->search(trim($this->name))->simplePaginate(7);

        $this->data['total'] = Role::count();

        $this->data['models']  = ['users', 'sliders', 'services', 'packages', 'cities','education','bankaccounts', 'countries','partnerrequests','position' ,'workshop','bill','address','accountdetail','perfumerequest','perfume','merchant','coupons','notes','roles', 'products', 'pages', 'categories', 'settings', 'brands', 'articles'];

//        $this->data['models'] = ['users', 'sliders', 'services', 'packages', 'cities', 'countries', 'roles', 'products', 'pages', 'categories', 'settings', 'brands', 'articles'];
        $this->data['maps'] = ['create', 'update', 'read', 'delete'];
        return view('livewire.roles.index');
    }

    public function export()
    {
        return Excel::download(new RolesExport(), 'roles.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new RolesExport(), 'roles.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new RolesExport(), 'roles.pdf');

    }

    public function save()
    {
//        dd($this->permissions);
        $this->validate([

            'name' => 'required|string',
            'guard_name' => 'required|string',
            'permissions' => 'nullable'

        ]);
        $role = Role::create([

            'guard_name' => $this->guard_name,
            'name' => $this->name,


        ]);

        if ($this->permissions) {
            $role->syncPermissions($this->permissions);
        }
        if ($role) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }
        $this->AddModelOpened = false;
        $this->emit('userStore');

    }

    public function edit($id)
    {

        $role = Role::with('permissions')->find($id);
        $this->data['models']  = ['users', 'sliders', 'services', 'packages', 'cities','education','bankaccounts', 'countries','partnerrequests','position' ,'workshop','bill','address','order','accountdetail','perfumerequest','perfume','merchant','coupons','notes','roles', 'products', 'pages', 'categories', 'settings', 'brands', 'articles'];
        $this->data['maps'] = ['create', 'update', 'read', 'delete'];


        if ($role) {

            $this->getRole($role);

        }

    }

    public function update()
    {
        $this->validate([

            'name' => 'required|string',
            'guard_name' => 'required|string',
            'permissions' => 'nullable'

        ]);

        $role = Role::find($this->uid);

        $role->update([

            'guard_name' => $this->guard_name,
            'name' => $this->name,
        ]);

        if ($this->permissions) {
            $role->syncPermissions($this->permissions);
        }
        if ($role) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $role = Role::find($id);

        if ($role) {

            $this->getRole($role);

        }

    }

    public function getRole($role)
    {
        $this->role = $role;
        $this->name = $this->role['name'];
        $this->guard_name = $this->role['guard_name'];
        $this->permissions = $this->role->permissions->pluck('name');


        $this->created_at = isset($this->role['created_at']) ? Carbon::parse($this->role['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->role['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $role = Role::find($id);

        if ($role) {

            $this->getRole($role);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $role = Role::find($id);

        if ($role) {

            $this->getRole($role);


        }
    }

    public function toggleEditCloseModal()
    {
        $this->EditModelOpened = false;

    }


    public function toggleAddModal()
    {

        $this->AddModelOpened = !$this->AddModelOpened;
        $this->resetInput();

    }

    public function resetInput()
    {

        $this->name = '';
        $this->guard_name = '';


        $this->created_at = '';


    }

    public function destroy($id)
    {

        $role = Role::find($id);


        if ($role) {
            $role->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
