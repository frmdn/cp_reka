<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = Page::all();
		return view('page.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Page::where('halaman', '=', '1')->orWhere('halaman', '=', '2')->get();
		$datas = DB::table('post')->get();
		return view('page.create', compact('data','datas'));
		
		//return view('page.create'); jika hanya ingin create saja tanpa looping dari db
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$data = new Page();
		$data->title = $request->title;
		$data->description = $request->description;
		$data->no_urut = $request->no_urut;
		$data->halaman = $request->halaman;
        $data->sub_page = $request->sub_page;
		$data->post_id = $request->post_id;
		$data->status = $request->status;
		$data->save();

        // Lakukan validasi apabila Sub Page tidak dipilih
        // Proses ini dilakukan untuk membuat kolom sub_page terisi sesuai dengan ID page yang dipilih / ID page sendiri
        $subpage = $request->sub_page;
        if ($subpage == "0") {
            $subpage =  $data->id;
            // This add and work
            $upd = Page::where('id', $data->id)->first();
            $upd->sub_page = $subpage;
            $upd->save();
        }
		return redirect()->route('page.index')->with('alert-success', 'Berhasil Menambahkan Data!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Page::find($id);
		return view('page.lihat', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	   $data = Page::where('id', $id)->get();
	   return view('page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$data = Page::where('id', $id)->first();
		$data->title = $request->title;
		$data->description = $request->description;
		$data->no_urut = $request->no_urut;
		//$data->halaman = $request->halaman;
		$data->sub_page = $request->sub_page;
		$data->status = $request->status;
		$data->save();
		return redirect()->route('page.index')->with('alert-success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$data = Page::where('id', $id)->first();
		$data->delete();
		return redirect()->route('page.index')->with('alert-success', 'Data berhasi dihapus!');
    }
}
