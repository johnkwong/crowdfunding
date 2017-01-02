<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuggestionStoreRequest;
use App\Http\Requests\MessageStoreRequest;
use App\Http\Requests\ProjectStoreRequest;
use App\Suggestion;
use App\User;
use App\Project;
use App\Message;
use Auth;
use Request;
use App\Starter;
use Vsmoraes\Pdf\Pdf;

class PdfController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

	
	public function projectdownload($id){

		$project = Project::find($id);
		$starter=Starter::find($project->starter_id);
		$data = compact('project','starter');
		//$html = view('admins.projects.show', $data)->render();

   		 //PDF::load($html)
        //->filename('/tmp/example1.pdf')
        //->output();

		$html = '<html><head></head><body><h1>Hello world!</h1></body></html>';

        $this->pdf->load($html);
        $this->pdf->filename('my_pdf.pdf');               
        $this->pdf->setPaper('A4','portrait');
        return $this->pdf->show(); // 顯示
        return $this->pdf->download(); // 下載

		return redirect()->back();
	}

		public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
