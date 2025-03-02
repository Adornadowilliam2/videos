<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vid;
use Illuminate\Support\Facades\Validator;
use Log;

class VideoController extends Controller
{
    public function show(){
        $videos = Vid::all();
        //for retrieval
        return $this->Ok($videos, "Retrieved Videos!");
    }

    //complete DML below
    public function insert(Request $request){
        $data = $request->all();
        //validations
        //multiple-line selection hold alt then double click a string
        $validator = Validator::make($data,[
            'title' => 'required',
            'description' => 'required',
            'date_uploaded' => 'required',
            'url' => 'required',
            'thumbnail' => 'required'
        ]);

        if($validator->fails()){
            return $this->BadRequest($validator);
        }
        //$data = ['title'=>'value', 'description'=>'value',...'thumbnail'=>'value']
        if(Vid::create($data)){
            return $this->Ok("","Video Item created!");
        }
        //return code below will not execute if the video insert function is successful
        return $this->Specific("Video Item is not added");

    }

    //update
    public function update(Request $request){
        $data = $request->all();
        $validator = Validator::make($data, [
            'id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date_uploaded' => 'required',
            'url' => 'required',
            'thumbnail' => 'required'
        ]);

        if($validator->fails()){
            return $this->BadRequest($validator);
        }

        //try{}catch(){}
        //when a code inside try caught an error, a code inside catch will execute
        try {
            //db query update
            //where first, before doing update; or else your update function will update all of the rows inside a table
            Vid::where('id',$data['id'])
            ->update([
                'title'=>$data['title'],
                'description'=>$data['description'],
                'date_uploaded'=>$data['date_uploaded'],
                'url'=>$data['url'],
                'thumbnail'=>$data['thumbnail']
            ]);
            return $this->Ok("","Video ID: ${data['id']} has been updated");
        } catch (\Exception $e) {
            Log::error($e);
            return $this->Specific("Video Update Failed!");
        }

    }

    //delete
    public function delete(Request $request){
        $data = $request->all();
        $validator = Validator::make($data, [
            'id' => 'required',
            'title' => 'required'
        ]);

        if($validator->fails()){
            return $this->BadRequest($validator);
        }

        //delete function can be inside an if statement
        if(Vid::where('id',$data['id'])->delete()){
            return $this->Ok("","Video ${data['title']} is deleted!");
        }

        return $this->Specific("Video Deletion failed!");
    }
}