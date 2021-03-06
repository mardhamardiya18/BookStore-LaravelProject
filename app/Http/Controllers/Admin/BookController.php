<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

            $query = Book::query()->with('category');
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle mr-1 mb-1" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            Aksi
                        </button>
                        <div class="dropdown-menu">
                           
                            <form action="' . route('book.destroy', $item->id) . '" method="POST">
                            ' . method_field('delete') . csrf_field() . '

                            <button class="text-danger dropdown-item" type="submit" >Hapus</button>
                            </form>
                            <a class="text-danger dropdown-item" href="' . route('book.edit', $item->id) . '">Detail</a>
                    
                        </div>
                        </div>
                    </div>                
                ';
                })

                ->editColumn('photo', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" width="100"/>' : '';
                })
                ->editColumn('price', function ($item) {
                    return 'Rp ' . number_format($item->price) . '';
                })
                ->rawColumns(['action', 'photo', 'price'])
                ->make(true);
        }

        return view('pages.admin.book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('pages.admin.book.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = $request->all();

        $item['slug'] = Str::slug($request->title);
        $item['photo'] = $request->file('photo')->store('asset/buku', 'public');

        Book::create($item);

        toast('Buku ' . $item['title'] . ' berhasil ditambahkan????', 'success');

        return redirect(route('book.index'));
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
        $book = Book::with('category')->findOrFail($id);
        $categories = Category::get();

        return view('pages.admin.book.edit', [
            'book' => $book,
            'categories' => $categories
        ]);
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
        $data = $request->all();
        $book = Book::findOrFail($id);

        if ($request->title) {
            $data['slug'] = Str::slug($request->title);
        } else {
            unset($data['slug']);
        }

        if ($request->photo) {
            Storage::disk('public')->delete($book->photo);
            $data['photo'] = $request->file('photo')->store('asset/buku', 'public');
        } else {
            unset($data['photo']);
        }

        $book->update($data);

        toast('Buku ' . $data['title'] . ' berhasil diupdate', 'success');

        return redirect(route('book.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Book::findOrFail($id);

        Storage::disk('public')->delete($data->photo);
        $data->delete();

        toast('Data buku berhasil dihapus????', 'success');

        return redirect(route('book.index'));
    }
}
