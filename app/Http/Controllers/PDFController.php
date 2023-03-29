<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PDF;
class PDFController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePDF()
    {
        $user = User::find(Auth()->user()->id);

        $data = [
            'title' => 'Welcome to essammossad.com',
            'date' => date('m/d/Y'),
            'user' => $user
        ];

        $pdf = PDF::loadView('Pdfbar', $data);

        return $pdf->download('Barcode.pdf');
    }
}
