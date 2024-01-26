<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\crudApp;

class CrudAppController extends Controller
{
    public function Home(){
        $data = DB::table('crud_apps')->paginate(2);
        return view('pages.Home',['data'=>$data]);
    }
    public function ShowSingle($id){
        $data = DB::table('crud_apps')->where('id',$id)->get()->first();
        // return dd($data->image);
        return view('pages.SingleView',['data'=>$data]);
    }
    public function Register(){
        return view('pages.Register');
    }
    public function Store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg,docx|max:100000'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('Product_image'),$imageName);
        DB::table('crud_apps')->insert([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);
        return redirect('/')->with('success','SuccessFully Store data !!!');
    }
    public function Delete($id){
        $data = DB::table('crud_apps')->where('id',$id)->delete();
        return redirect('/')->with('success','Delete Product Successfully !!!');
    }
    public function Update($id){
       $data =  DB::table('crud_apps')->where('id',$id)->get()->first();
       return view('pages.updateForm',['data'=>$data]);
    }
    public function UpdateStore(Request $request,$id){

        $product = crudApp::where('id',$id)->first();

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('Product_image'),$imageName);

            $product->image=$imageName;
        }
            $product->name=$request->name;
            $product->description=$request->description;
            $product->save();
        return redirect('/')->with('success','Update Successfully !!!');
    }

}
