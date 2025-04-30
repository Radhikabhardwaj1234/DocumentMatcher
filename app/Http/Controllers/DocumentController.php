<?php

namespace App\Http\Controllers;
use Smalot\PdfParser\Parser;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Http\Request;
use App\Models\Document;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; 

class DocumentController extends Controller
{
    public function showUploadForm()
    {
        return view('documents.upload');  
    }

    
    public function uploadDocument(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'document' => 'required|mimes:pdf,docx,txt|max:10240', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('document');
        $filePath = $file->store('documents'); 

        $content = file_get_contents($file->getRealPath());

        $document = new Document();
        $document->title = $request->title;
        $document->content = $content;
        $document->file_path = $filePath;
        $document->save();

        return redirect()->route('documents.list')->with('success', 'Document uploaded successfully!');
    }

    public function index()
    {
        $documents = Document::all();

        return view('documents.index', compact('documents'));
    }

    public function show($id)
    {
        $document = Document::findOrFail($id);  

        return view('documents.show', compact('document'));  
    }

    // public function match($id)
    // {
    //     $document = Document::findOrFail($id);
    //     $documents = Document::where('id', '!=', $id)->get();  // Exclude the document itself

    //     // Calculate similarity (for now, we can use a simple substring match or a better algorithm in the future)
    //     $similarDocuments = [];
    //     foreach ($documents as $doc) {
    //         // Example: Find if any part of content is similar (you can refine this with algorithms like Cosine Similarity)
    //         if (stripos($doc->content, $document->content) !== false) {
    //             $similarDocuments[] = $doc;
    //         }
    //     }

    //     return view('documents.match', compact('document', 'similarDocuments'));
    // }

    public function match($id)
{
    $document = Document::findOrFail($id);
    $documents = Document::where('id', '!=', $id)->get();

    $similarDocuments = [];
    foreach ($documents as $doc) {
       
        similar_text($document->content, $doc->content, $percent);

        $similarDocuments[] = [
            'document' => $doc,
            'similarity' => round($percent, 2)
        ];
    }
    usort($similarDocuments, function ($a, $b) {
        return $b['similarity'] <=> $a['similarity'];
    });
    return view('documents.match', compact('document', 'similarDocuments'));
}

    public function destroy($id)
{
   
    $document = Document::find($id);

    if ($document) {
      
        Storage::delete($document->file_path);

    
        $document->delete();

        return redirect()->route('documents.list')->with('success', 'Document deleted successfully!');
    }
    
    return redirect()->route('documents.list')->with('error', 'Document not found!');
}


    public function showCompareForm()
{
    return view('documents.compare'); 
}


public function compareDocument(Request $request)
{
 
    $validator = Validator::make($request->all(), [
        'document' => 'required|mimes:pdf,docx,txt|max:10240',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $file = $request->file('document');

    $extension = $file->getClientOriginalExtension();
    $content = '';

    if ($extension == 'pdf') {
        $parser = new Parser();
        $pdf = $parser->parseFile($file->getRealPath());
        $content = $pdf->getText();
    } elseif ($extension == 'docx') {
        $phpWord = IOFactory::load($file->getRealPath());
        foreach ($phpWord->getSections() as $section) {
            foreach ($section->getElements() as $element) {
                if (method_exists($element, 'getText')) {
                    $content .= $element->getText() . ' ';
                }
            }
        }
    } elseif ($extension == 'txt') {
        $content = file_get_contents($file->getRealPath());
    }
    $documents = Document::all();

    $similarDocuments = [];

    foreach ($documents as $doc) {
    
        similar_text($content, $doc->content, $percent);

        if ($percent > 20) { 
            $similarDocuments[] = [
                'document' => $doc,
                'similarity' => round($percent, 2)
            ];
        }
    }
    usort($similarDocuments, function ($a, $b) {
        return $b['similarity'] <=> $a['similarity'];
    });
    return view('documents.compare_results', compact('similarDocuments'));
}


}
