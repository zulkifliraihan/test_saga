<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Articel;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Articel::with('category', 'file');

        if (request()->ajax()) {
            return DataTables::of($artikel)
            ->addColumn('DT_RowIndex', function() {
                $i = 1;
                return $i++;
            })
            ->addColumn('category_name', function($query) {
                return $query->category->name;
            })
            ->addColumn('action', function ($action){
                $button_delete = '<a href="javascript:void(0)" class="delete-item" id="'. $action->id .'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-50 font-small-4">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                </a>';

                $button_edit = '<a href="javascript:void(0)" class="edit-item" id="'. $action->id .'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </a>';

                return $button_delete . $button_edit;
            })
            ->rawColumns(['DT_RowIndex', 'category_name','action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('dashboard.content.artikel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Category::all();

        $data = [
            'kategori' => $kategori
        ];

        return view('dashboard.content.artikel.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Start : Validation
        $rules = [
            'title' => 'required',
            'content' => 'required',
            'banner' => 'required',
        ];

        $messages = [
            'nama.required' => 'Nama layanan wajib di isi !',
            'deskripsi_singkat.required' => 'Deskripsi singkat wajib di isi !',
            'deskripsi_layanan.required' => 'Deskripsi layanan wajib di isi !',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'fail-validator',
                'message' => $validator->errors()->first()
            ], 400);
        }
        // End : Validation
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
