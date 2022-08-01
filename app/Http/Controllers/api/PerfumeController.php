<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
// use App\Models\Post;
use App\Models\perfume;
use App\Traits\GeneralTrait;
// use App\Models\review_rating;
use Session;

use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function index()
    {
        $perfumes = perfume::get();
        return response()->json($perfumes);

        // return $this -> returnData('categories',$categories);
    }
    public function AddPerfume(Request $request)
    {
        $rule = [
            'perfume_name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'image' => 'required|image|max:1024'
        ];

        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);
        if ($validator->fails()) {
            if (str_contains(validationErrorsToString($validator->errors()), 'perfume_id')) {
                return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
            }
            return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
        }
        $perfume = perfume::create([


            'perfume_name_en' => $request['perfume_name_en'],
            'perfume_name_ar' => $request['perfume_name_ar'],
            'price' => $request['price'],
            'discount' => $request['discount'],
            'desc_en' => $request['desc_en'],
            'desc_ar' => $request['desc_ar'],
            'quantity' => $request['quantity'],
            'count_in_stock' => $request['quantity'],
            'count_in_rate' => $request['count_in_rate'],
            'rate' => $request['rate'],
            'star_rating' => $request['star_rating'],
            'date' => $request['date'],
            'category' => $request['category'],
            'stock' => $request['stock'],
            'image' => $request['image'],
            'availabilty' => $request['availabilty'],
            'category_id' => $request['category_id'],

        ]);


        return response()->json(['status' => 1, 'data' => $perfume]);

    }

    public function filterproducts(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input();
            foreach($data as $key => $value){
                $items = perfume::join('categories', 'perfumes.id' , '=' , 'categories.perfume_id')->whereIn('perfumes.id' ,
                 $data ['selected_categories'])->get(['categories.name_en' , 'categories.description_en' , 'categories.status']);
            }
            $result = json_encode($items , true);
            return $result;
        }

    }

    // public function create()
    // {
    //     return view('post.create');
    // }

    // public function store(Request $request){
    //     $post = new Post();
    //     $post->author = $request->author;
    //     $post->title  = $request->title;
    //     $post->description = $request->description;
    //     $post->save();
    //     return redirect()->route('post.list');

    // }

    // public function list()
    // {
    //     $posts = Post::orderBy('id','desc')->get();
    //     return view('post.list',compact('posts'));
    // }

    // public function view($id){
    //     $post_detail = Post::with('ReviewData')->find($id);
    //     return view('post.view',compact('post_detail'));
    // }

    // public function reviewstore(Request $request){
    //     $review = new review_rating();
    //     $review->perfume_id = $request->perfume_id;
    //     $review->name    = $request->name;
    //     $review->email   = $request->email;
    //     $review->phone   = $request->phone;
    //     $review->comments= $request->comment;
    //     $review->star_rating = $request->rating;
    //     $review->save();
    //     return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
    // }
}
