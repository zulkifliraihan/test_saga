<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Create;
use App\Http\Controllers\Controller;
use App\Models\Articel;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Articel::with('category', 'fileResize', 'fileOri');

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

                $button_edit = '<a href="'. route('dashboard.artikel.edit', $action->id) .'" class="edit-item" id="'. $action->id .'">
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
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
        ];

        $messages = [
            'category_id.required' => 'Kategori artikel wajib di isi !',
            'title.required' => 'Title artikel wajib di isi !',
            'content.required' => 'Content wajib di isi !',
            'image.required' => 'Banner wajib di isi !',
            'image.mimes' => 'Banner hanya bisa format JPG, JPEG, PNG!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'fail-validator',
                'message' => $validator->errors()->first()
            ], 400);
        }
        // End : Validation

        $data = $request->all();

        // Start : Deklarasi Folder & Path
        $folder = 'artikel';
        $path = $folder . '/' . Auth::user()->id;
        // End : Deklarasi Folder & Path

        // Start : Upload Image Original
        $helperImageOri = Create::image($request, $folder, $path);
        $data['banner_ori'] = $helperImageOri->id;
        // End : Upload Image Original

        // Start : Upload Image Resize
        $helperImageResize = Create::resize($request, $folder, $path);
        $data['banner_resize'] = $helperImageResize->id;
        // End : Upload Image Resize

        // Start : Store Database
        $data['slug'] = Str::slug($request->title);
        $artikel = Articel::create($data);
        // End : Store Database

        return response()->json([
            'status' => 'ok',
            'response' => 'created-successfully',
            'message' => 'Artikel berhasil dibuat!',
            'route' => route('dashboard.artikel.index')
        ], 200);
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
        $artikel = Articel::find($id);
        $kategori = Category::all();
        $data = [
            'artikel' => $artikel,
            'kategori' => $kategori
        ];

        return view('dashboard.content.artikel.edit', $data);
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
        // Start : Validation
        $rules = [
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ];

        $messages = [
            'category_id.required' => 'Kategori artikel wajib di isi !',
            'title.required' => 'Title artikel wajib di isi !',
            'content.required' => 'Content wajib di isi !',
            'image.mimes' => 'Banner hanya bisa format JPG, JPEG, PNG!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'fail-validator',
                'message' => $validator->errors()->first()
            ], 400);
        }
        // End : Validation

        // Start : Find Artikel
        $artikel = Articel::find($id);
        $data = $request->all();
        // End : Find Artikel

        if (isset($request->image) || $request->image != null) {

            // Start : Delete Image & Database
            $deleteFileOri = Storage::disk('public')->delete($artikel->fileOri->path);
            $deleteFileResize = Storage::disk('public')->delete($artikel->fileResize->path);

            $artikel->fileResize->delete();
            $artikel->fileOri->delete();
            // End : Delete Image & Database

            // Start : Deklarasi Folder & Path
            $folder = 'artikel';
            $path = $folder . '/' . Auth::user()->id;
            // End : Deklarasi Folder & Path

            // Start : Upload Image Original
            $helperImageOri = Create::image($request, $folder, $path);
            $data['banner_ori'] = $helperImageOri->id;
            // End : Upload Image Original

            // Start : Upload Image Resize
            $helperImageResize = Create::resize($request, $folder, $path);
            $data['banner_resize'] = $helperImageResize->id;
            // End : Upload Image Resize

        }
        // Start : Store Database
        $data['slug'] = Str::slug($request->title);
        $artikel->update($data);
        // End : Store Database

        return response()->json([
            'status' => 'ok',
            'response' => 'edited-successfully',
            'message' => 'Artikel berhasil dibuat!',
            'route' => route('dashboard.artikel.index')
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Start : Find Artikel
        $artikel = Articel::find($id);
        // End : Find Artikel

        // Start : Delete Image & Database
        $deleteFileOri = Storage::disk('public')->delete($artikel->fileOri->path);
        $deleteFileResize = Storage::disk('public')->delete($artikel->fileResize->path);

        $artikel->fileResize->delete();
        $artikel->fileOri->delete();
        $artikel->delete();
        // End : Delete Image & Database

        return response()->json([
            'status' => 'ok',
            'response' => 'deleted-successfully',
            'message' => 'Artikel berhasil dihapus!',
        ], 200);
    }
}
