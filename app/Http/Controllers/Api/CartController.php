<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CartRequest;
use App\Http\Resources\Api\CartResource;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    protected $model;
    public function __construct(CartItem $model)
    {
        $this->model = $model;
    }
    public function index(Request $request)
    {

        if($request->header('locale'))
        {
            App::setLocale($request->header('locale'));
        }else{
            App::setLocale('ar');
        }
        $sign  = $request->sign;
        $data = $this->model->where('user_id',auth()->user()->id)->with('product')->latest()->simplePaginate(7);
        return response()->json([
            'status'=>200,
            'data'=>CartResource::collection($data->map(function ($product) use ($sign) {
                $product->product->price = $product->getPriceInCurrency($sign,  $product->product->price);
                return $product;
                })),
            'deliver'=> 5,
            'message'=>'Success'
        ]);
    }
    public function store(CartRequest $request)
    {
        $data = $request->validated();
        $id = $data['product_id'];
        $pr = Product::find($id);

        if ($pr) {
            $data['colors']  = json_encode($data['colors']);
            $data['size']    = json_encode($data['size']);
            $data['user_id'] = auth()->user()->id;
            //$data['qantity'] = $pr->stock;

            $cartItem = $this->model->firstOrCreate($data);

            return response()->json([
                'status' => 200,
                'message' => 'Created Successfully',
                'data' => $cartItem
            ]);
        } else {
            return response()->json(['status' => 400, 'message' => 'This product is not found'], 400);
        }
    }

    public function addQuantity(Request $request)
    {
        $data = $this->model->findOrFail($request->id);
        $data->increment('qantity',1);
        $data->save();
        return response()->json([
            'data'=>NULL,
            'status'=>200,
            'message'=>'success'
        ]);
    }
    public function decQuantity(Request $request)
    {
        $data = $this->model->findOrFail($request->id);
        $data->decrement('qantity',1);
        $data->save();
        return response()->json([
            'data'=>NULL,
            'status'=>200,
            'message'=>'success'
        ]);
    }
        public function delete($id){
        $data  =$this->model->find($id)->delete();
        return response()->json([
            'message'=>'Deleted',
            'data'=> NULL,
            'status'=>200
        ]);
    }
}
