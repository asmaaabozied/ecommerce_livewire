<?php

namespace App\Http\Livewire\Partnerrequests;


use App\Exports\PartnersExport;
use App\Models\City;
use App\Models\PartnerRequest;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';

    public $full_name, $email,$age,$phone,$money,$experience,$city_id,$partner, $created_at, $uid;


    public function render()
    {

        $this->data['partnerrequests'] = PartnerRequest::latest()->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = PartnerRequest::count();

        $this->data['cities'] = City::count();
        return view('livewire.partnerrequests.index');
    }



    public function export()
    {
        return Excel::download(new PartnersExport(), 'partnerrequests.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PartnersExport(), 'partnerrequests.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new PartnersExport(), 'partnerrequests.pdf');

    }

    public function show($id)
    {
        $partner = PartnerRequest::find($id);

        if ($partner) {

            $this->getPartner($partner);

        }

    }

    public function getPartner($partner)
    {
        $this->partner = $partner;
        $this->full_name = $this->partner['full_name'];
        $this->email = $this->partner['email'];
        $this->city_id = $this->partner['city_id'];

        $this->age = $this->partner['age'];
        $this->phone = $this->partner['phone'];
        $this->money = $this->partner['money'];
        $this->experience = $this->partner['experience'];




        $this->created_at = isset($this->partner['created_at']) ? Carbon::parse($this->partner['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->partner['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $partner = PartnerRequest::find($id);

        if ($partner) {

            $this->getPartner($partner);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }







    public function destroy($id)
    {

        $partner = PartnerRequest::find($id);


        if ($partner) {
            $partner->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
