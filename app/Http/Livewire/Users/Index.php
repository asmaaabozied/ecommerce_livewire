<?php

namespace App\Http\Livewire\Users;
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

use Spatie\Permission\Models\Role;

class Index extends Component
{
    use WithPagination,
        WithFileUploads;

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;

    public $status;
    public $role_id = [];
    public $data;
    protected $paginationTheme = 'bootstrap';


    public $image, $first_name, $last_name, $email, $phone, $address, $user, $created_at, $image_path, $u_id;

    protected $listeners = ['getUser' => 'getUser', 'getDataNull' => 'getDataNull'];


    public function render()
    {


        $this->data['users'] = User::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = User::count();
        $this->data['roles'] = Role::all();


        return view('livewire.users.index');

    }

    public function export()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new UsersExport, 'users.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new UsersExport, 'users.pdf');

    }


    public function save()
    {

//        dd($this->role_id);
        $this->validate([

            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|min:11',

            'email' => 'required|email|unique:users',

//            'image' => 'required',

        ]);


        $user = User::create([

            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,

            'phone' => $this->phone,
            'address' => $this->address,
            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($this->role_id) {

            $user->syncRoles($this->role_id);
//            $user->assignRole($this->role_id);
        }
        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/users/' . $filename));
            $user->image = $filename;
            $user->save();
        }

        if ($user) {
            $this->emit('getDataNull');

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $user = User::find($id);

        if ($user) {

            $this->emit('getUser', $user);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleAddModal()
    {

        $this->AddModelOpened = !$this->AddModelOpened;
        $this->emit('getDataNull');

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $user = User::find($id);

        if ($user) {

            $this->emit('getUser', $user);


        }
    }

    public function toggleEditCloseModal()
    {
        $this->EditModelOpened = false;

    }


    public function edit($id)
    {
        $user = User::find($id);

        if ($user) {

            $this->emit('getUser', $user);

        }

    }

    public function show($id)
    {
        $user = User::find($id);

        if ($user) {

            $this->emit('getUser', $user);

        }

    }


    public function update()
    {


        $this->validate([

            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|min:11',

            'email' => 'required|email',

//            'image' => 'required',

        ]);

        $user = User::find($this->u_id);

        $user->update([

            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,

            'phone' => $this->phone,
            'address' => $this->address,
            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->role_id) {

//            dd($this->role_id);
            $user->syncRoles($this->role_id);
//            $user->assignRole($this->role_id);
        }

        if ($this->image) {
            $thumbnail = $this->image;
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/users/' . $filename));
            $user->image = $filename;
            $user->save();
        }

        if ($user) {
            $this->EditModelOpened = false;
            $this->emit('getDataNull');

            flash(trans('lang.updated_successfully'));

        }
    }

    public function destroy($id)
    {

        $user = User::find($id);

        if ($user->image) {


            if (File::exists('images/users/' . $user->image)) {

                unlink('images/users/' . $user->image);
            }
        }
        if ($id == 1) {
            flash(trans('lang.cannotdeletedadmin'));

        } else {
            $user->delete();

            flash(trans('lang.deleted_sucessfully'));
        }


    }

    public function getUser($user)
    {
        $this->user = $user;
        $this->first_name = $this->user['first_name'];

        $this->last_name = $this->user['last_name'];
        $this->email = $this->user['email'];
        $this->phone = $this->user['phone'];
        $this->address = $this->user['address'];


        $this->status = $this->user['status'];

        $this->created_at = isset($this->user['created_at']) ? Carbon::parse($this->user['created_at'])->format('Y-m-d') : '';
        $this->image = $this->user['image'];
        $this->u_id = $this->user['id'];
        $this->image_path = $this->user['image_path'];

    }

    public function getDataNull()
    {

        $this->first_name = null;
        $this->last_name = null;
        $this->email = null;
        $this->phone = null;
        $this->address = null;
        $this->status = null;
        $this->created_at = null;
        $this->image = null;

    }


}
