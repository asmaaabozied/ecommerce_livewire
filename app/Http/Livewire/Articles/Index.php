<?php

namespace App\Http\Livewire\Articles;


use App\Exports\ArticlesExport;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Hash;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithFileUploads;

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';

    public $name_ar, $name_en, $description_en, $description_ar, $article, $created_at, $uid, $image_path, $image;


//   public function __construct()
//    {
//        $this->middleware('permission:articles_read|role-create|articles_update|articles_delete', ['only' => ['index','store']]);
//        $this->middleware('permission:articles_create', ['only' => ['create','store','save']]);
//        $this->middleware('permission:articles_update', ['only' => ['edit','update']]);
//        $this->middleware('permission:articles_delete', ['only' => ['destroy']]);
//    }

    public function render()
    {

        $this->data['articles'] = Article::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Article::count();
        return view('livewire.articles.index');
    }


    public function export()
    {
        return Excel::download(new ArticlesExport(), 'articles.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new ArticlesExport(), 'articles.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new ArticlesExport(), 'articles.pdf');

    }

    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'required',


        ]);

        $article = Article::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/articles/' . $filename));
            $article->image = $filename;
            $article->save();
        }


        if ($article) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }
        $this->emit('userStore');


    }

    public function edit($id)
    {

        $article = Article::find($id);

        if ($article) {

            $this->getArticle($article);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $article = Article::find($this->uid);

        $article->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,

            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/articles/' . $filename));
            $article->image = $filename;
            $article->save();
        }

        if ($article) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $article = Article::find($this->uid);

        if ($article) {

            $this->getArticle($article);

        }

    }

    public function getArticle($article)
    {
        $this->article = $article;
        $this->name_ar = $this->article['name_ar'];
        $this->name_en = $this->article['name_en'];
        $this->description_en = $this->article['description_en'];
        $this->description_ar = $this->article['description_ar'];
        $this->status = $this->article['status'];
        $this->image_path = $this->article['image_path'];
        $this->image = $this->article['image'];


        $this->created_at = isset($this->article['created_at']) ? Carbon::parse($this->article['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->article['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $article = Article::find($id);

        if ($article) {

            $this->getArticle($article);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $article = Article::find($id);

        if ($article) {

            $this->getArticle($article);


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

        $this->name_ar = '';
        $this->name_en = '';
        $this->description_en = '';
        $this->description_ar = '';
        $this->status = '';
        $this->created_at = '';
        $this->image = '';


    }

    public function destroy($id)
    {

        $article = Article::find($id);

        if ($article->image) {


            if (File::exists('images/articles/' . $article->image)) {

                unlink('images/articles/' . $article->image);
            }
        }
        if ($article) {
            $article->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
