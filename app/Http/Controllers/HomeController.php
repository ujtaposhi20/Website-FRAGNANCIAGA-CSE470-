<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Session;
use App\Models\Student;
use App\Models\cart;
use App\Models\buy;
use App\Models\buy_c;
use App\Models\buy_copy;
use App\Models\del_copy;
use App\Models\product;
use App\Models\comment;

use App\Models\delivery;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function sum(){

        $sum=DB::table('products')->where('id',1)->count();
        //     $data=Student::all();
        //    return view('display',compact('data'));
        echo $sum;
        }




    public function upload(Request $request){
        $Student=new Student;
        $Student->name=$request->name;
        $Student->email=$request->email;
        $Student->password=$request->password;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('student',$imagename);
        $Student->image=$imagename;
        $Student->save();
        // return redirect()->back();
        return back()->with('message','Successfully Registered');
    }

    public function upload_2(Request $request){
        $Student=new Student;
        $Student->name=$request->name;
        $Student->email=$request->email;
        $Student->password=$request->password;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('student',$imagename);
        $Student->image=$imagename;
        $Student->save();
        return back()->with('message','ok');
    }
    
   
    public function addp(Request $request){
        $Product=new product;
        $Product->name=$request->name;
        $Product->price=$request->price;
        $Product->des=$request->des;
        $Product->cat=$request->cat;
        
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $Product->image=$imagename;
        $Product->save();
        return redirect('add_p')->with('message','Product Added Successfully');



    }

    public function buy(Request $request){
        $Buy=new buy;
        $Buy->p_id=$request->id;
        $Buy->u_n=$request->name;
        $Buy->amount=$request->amount;
        $t_a=$request->amount;
        $Buy->mn=$request->mn;

        $sum=DB::table('products')->where('id',$request->id)->first();
        $sum=$sum->price;
        $sum=$sum*$t_a;




        // $Buy->money=$request->money;
        $Buy->money=$sum;
        


        $Buy->way=$request->way;
        $Buy->tid=$request->t_id;

        
        
        $Buy->save();

        $Buy_c=new buy_copy;

        $Buy_c->p_id=$request->id;
        $Buy_c->u_n=$request->name;
        $Buy_c->amount=$request->amount;
        $Buy_c->money=$request->money;


        $Buy_c->money=$sum;


        
        $pro=product::where('id','=',$request->id)->first();

       

        $Buy_c->p_n=$pro->name;
        $Buy_c->price=$pro->price;
        $Buy_c->des=$pro->des;
        $Buy_c->image=$pro->image;

        $Buy_c->save();


        

        return redirect('display');



    }


public function comment($id){


    $pro=product::where('id','=',$id)->first();
    $comment=comment::where('p_id','=',$id)->get();


    $Std= array();
        if(Session::has('loginId')){
            $Std=Student::where('id','=',Session::get('loginId'))->first();

            

            return view('comment',compact('pro','Std','comment'));
        }

}



public function c_ad($id){
 $pro=product::where('id','=',$id)->first();
    $comment=comment::where('p_id','=',$id)->get();

            return view('c_ad',compact('pro','comment'));
}






public function pub_c($id){


    $pro=product::where('id','=',$id)->first();
    $comment=comment::where('p_id','=',$id)->get();




            

            return view('pub_c',compact('pro','comment'));
        

}

    


   

    public function add_comment(Request $request){
        $Buy=new comment;
        $Buy->p_id=$request->p_id;
        $Buy->u_n=$request->u_n;
        $Buy->comment=$request->comment;
        

        
        
        $Buy->save();
        return redirect()->back();



    }




    public function update(Request $request){
        $id=$request->id;
        $Std=Student::where('id','=',$id)->first();

        $Std->name=$request->name;
        $Std->email=$request->email;
        


        $image=$request->image;

        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('student',$imagename);
        $Std->image=$imagename;

    }

        
        
        $Std->update();
        return redirect('display');



    }



    

   

    public function update_p(Request $request){
        $id=$request->id;
        $Std=product::where('id','=',$id)->first();
        // $Std_2=cart::where('p_id','=',$id)->first();

        // $sum=DB::table('carts')->where('p_id',$id)->count();

        // if($sum>0){
        //     $Std_2->name=$request->name;
        //     $Std_2->price=$request->price;
        //     $Std_2->des=$request->des;
        //     $Std_2->cat=$request->cat;
        // }

        $Std->name=$request->name;
        


        $Std->price=$request->price;
        


        $Std->des=$request->des;
        


        $Std->cat=$request->cat;
        


        $image=$request->image;

        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        
        
        
        $Std->image=$imagename;
        // if($sum>0){
        // $Std_2->image=$imagename;
        // }
    }

        
        
        $Std->update();
        // if($sum>0){
        //     $Std_2->update();
        //     }
        



        return redirect()->back()->with('message','Product Information Updated');



    }


    



    public function view(){
        $data=Student::all();
       return view('display',compact('data'));
    }

    public function log_in(Request $request){
    $user = Student::where('email','=',$request->email)->first();
    $count = Student::where('email','=',$request->email)->count();
    if($count>0){
    $op=$user->password;
    $tp=$request->password;
    if($op==$tp){
        $request->session()->put('loginId',$user->id);
        return redirect('display');
        // return redirect('display')->with('log_in','Logged In');
        // echo "Done";
    }
    else{
        // echo "Incorrect ID or Password";
        return back()->with('message','Incorrect Email or Password');
    }
}
else{
    return back()->with('message','Incorrect Email or Password');
}
    }



    public function pwd(Request $request){
        $Std=Student::where('id','=',$request->id)->first();


      

        $op=$Std->password;
        $tp=$request->o_p;
        $np=$request->password;
        if($op==$tp){
            $Std->password=$np;
            $Std->update();
            return redirect('display');

            
        }
        else{
            // echo 'Incorrect Password';
            return back()->with('message','Old Password is wrong');
        }
        }

    

    public function log_in_admin(Request $request){
        
        $op=$request->name;
        $tp=$request->password;
        if($op=='admin' && $tp=='admin'){
            $request->session()->put('loginId_admin','admin');
            return redirect('ok');
            // echo "Done";
        }
        else{
            echo "Incorrect ID or Password";
        }
        }



    public function display(){
        // $Std=Student::all();
        $Std=DB::table('students')->get();

        // $pro=product::all();
        $pro=DB::table('products')->get();

       


        // $male=product::where('cat','male')->get();
        $male=DB::table('products')->where('cat','male')->get();



        // $female=product::where('cat','female')->get();
        $female=DB::table('products')->where('cat','female')->get();


        $data= array();
        if(Session::has('loginId')){
            // $data=Student::where('id','=',Session::get('loginId'))->first();
            $data=DB::table('students')->where('id',Session::get('loginId'))->first();
            
            
            // $cart=cart::where('u_id','=',$data->id)->get();
            $cart=DB::table('carts')->where('u_id',$data->id)->get();



            // $delivery=del_copy::where('u_n','=',$data->id)->get();
            $delivery=DB::table('del_copies')->where('u_n',$data->id)->orderBy('id','desc')->get();

            
            $sum=DB::table('buy_copies')->where('u_n',$data->id)->sum('money');
            //     $data=Student::all();
            //    return view('display',compact('data'));
            
            
            


            // $up=product::where('id','=',$delivery->p_id)->get();

            return view('display',compact('data','Std','pro','male','female','cart','delivery','sum'));
        }
        // return view('display');
        
    }




    public function mm(){
        // $Std=Student::all();
        $pro=product::all();

       


        $male=product::where('cat','male')->get();
        $female=product::where('cat','female')->get();


        

            
            
            
            


            // $up=product::where('id','=',$delivery->p_id)->get();

            return view('mm',compact('pro','male','female'));
        
        // return view('display');
        
    }







    public function ok(){
        // $Std=Student::all();
        $Std=Student::all();
        $pro=product::all();
        $buy=buy::all();

        $delivery=delivery::all();
        
        // return view('ok',compact('Std'));
        // // return view('display');
        $admin='admin';

        if(Session::has('loginId_admin')){
      

            return view('ok',compact('admin','pro','buy','Std','delivery'));
        }
        
    }

    public function ok_3($id){
        
        $Std= array();
        
            $Std=Student::where('id','=',$id)->first();
            // $name=$data->name;
            return view('ok_3',compact('Std'));
   
}




public function b_f_c($id){
        
    $abc=$id;
    
    $Std=product::where('id','=',$id)->get();

       
        // $name=$data->name;
        return view('b_f_c',compact('Std','abc'));

}







public function c_p($id){
        
    $abc=$id;
    
    
       
        // $name=$data->name;
        return view('c_p',compact('abc'));

}

public function p_update($id){
        
    $Std= array();
    
        $Std=product::where('id','=',$id)->first();
        // $name=$data->name;
        return view('p_update',compact('Std'));

}


public function cart_delete($id){
        
    
        $Std=cart::where('id','=',$id)->first();
       
        $Std->delete();

        return redirect()->back();
        // $name=$data->name;
        // return view('p_update',compact('Std'));

}


public function u_delete($id){
        
    
    $Std=Student::where('id','=',$id)->first();
   
    $Std->delete();

    return redirect()->back();
    // $name=$data->name;
    // return view('p_update',compact('Std'));

}

public function p_delete($id){
        
    
    $Std=product::where('id','=',$id)->first();
   
    $Std->delete();

    return redirect()->back();
    // $name=$data->name;
    // return view('p_update',compact('Std'));

}


public function delivery($id){
        
    $Std= array();
    $Delivery=new delivery;
        $Std=buy::where('id','=',$id)->first();
        $Delivery->p_id=$Std->p_id;
        $Delivery->u_n=$Std->u_n;
        $Delivery->amount=$Std->amount;
        $Delivery->mn=$Std->mn;
        $Delivery->money=$Std->money;
        $Delivery->way=$Std->way;
        $Delivery->tid=$Std->tid;


        $Delivery->save();
        $Std->delete();

        // **************
        $Buy_c=new del_copy;

        $Buy_c->p_id=$Std->p_id;
        $Buy_c->u_n=$Std->u_n;
        $Buy_c->amount=$Std->amount;
        $Buy_c->money=$Std->money;

        $pro=product::where('id','=',$Std->p_id)->first();

       

        $Buy_c->p_n=$pro->name;
        $Buy_c->price=$pro->price;
        $Buy_c->des=$pro->des;
        $Buy_c->image=$pro->image;

        $Buy_c->save();

        return redirect()->back();

    
        // $name=$data->name;
        // return view('p_update',compact('Std'));

}

    public function ok_2(){
        
        $Std=product::all();
       
        return view('ok_2',compact('Std'));
        // return view('display');
        
    }

    
    public function pay($id){
        $Std=$id;
        $data= array();
        if(Session::has('loginId')){
            $data=Student::where('id','=',Session::get('loginId'))->first();
            $name=$data->id;
            return view('pay',compact('Std','name'));
    }
    }

    public function cod($id){
        $Std=$id;
        $data= array();
        if(Session::has('loginId')){
            $data=Student::where('id','=',Session::get('loginId'))->first();
            $name=$data->id;
            return view('cod',compact('Std','name'));
    }
    }


    public function cart($id){
        $Cart=new cart;
        $Std=$id;
       
        $data= array();
        if(Session::has('loginId')){
            $data=Student::where('id','=',Session::get('loginId'))->first();
            // return view('display',compact('data','Std','pro','male','female'));
           
            // $Cart->u_id=$data->id;
            
            $pro=product::where('id','=',$id)->first();

            

            // $Cart->p_id=$pro->id;

            $sum=DB::table('carts')->where('u_id',$data->id)->where('p_id',$id)->count();

           if($sum==0){
            $Cart->p_id=$pro->id;
            $Cart->u_id=$data->id;


            $Cart->name=$pro->name;
            $Cart->price=$pro->price;

            $Cart->des=$pro->des;

            $Cart->cat=$pro->cat;

            $Cart->image=$pro->image;
           
            
            
            $Cart->save();
            return redirect()->back();

           }
           else{
            return redirect()->back();  
           }

        }

       
        // return view('display');
        
    }


    public function log_out(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('log_in');
        }
    }

    public function log_out_admin(){
        if(Session::has('loginId_admin')){
            Session::pull('loginId_admin');
            return redirect('admin_login');
        }
    }
}
