<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Models\Document;




class DocumentController extends Controller
{
    public function index(){
        $documents =  Document::with('program')->whereHas('program', function($q){
                            $q->where('code', '60');
                        })->get();
        //Document::where('type', 'PROVINCIA')->get();
        $file1=storage_path()."/app/docs/Anexo I";
        $file2=storage_path()."/app/docs/Anexo II";
        $file3=storage_path()."/app/docs/Anexo III";
        $file4=storage_path()."/app/docs/Anexo IV";
        $files= array($file1, $file2, $file3,  $file4);


        return view('documents.list',['documents'=>$documents, 'files'=>$files]);
    }

    public function show(Request $request)
    {
      // Show a single resource.
      $document = Document::find($request->input('id'));
      
    return view('documents.show', ['document' => $document]);

    }
  

    public function update(Request $req){
      
        $documentModel =Document::find($req->input('id'));
        if($req->file()) {
         
         
           $fileName=$req->input('url');
          
          $req->file('file')->storeAs('docs', $fileName);

           

            $documentModel->name = $req->input('name');
            //$documentModel->id = $req->input('id');
            $documentModel->save();
            return view('documents.show', ['document'=>$documentModel])->with("message", "Documento carregado com sucesso!");
            
        }
   }
   public function download($req, Request $request){
      //PDF file is stored under project/public/download/info.pdf
      $fileName=$req;
      $file=storage_path()."/app/docs/".$fileName;
      if(file_exists(storage_path()."/app/docs/".$fileName)){
        return Response::download($file, $fileName, ['Content-Type: application/pdf']);
      }else{
       
        return redirect()->route('documents.start');
      }
   
    }

    public function downloadr($req, Request $request){
      //PDF file is stored under project/public/download/info.pdf
      $fileName=$req;
      $file=storage_path()."/app/docs/".$fileName;
      if(file_exists(storage_path()."/app/docs/".$fileName)){
        return Response::download($file, $fileName, ['Content-Type: application/pdf']);
      }else{
       
        //return view('colera.clinico.resultado_3');
      }
    }
}