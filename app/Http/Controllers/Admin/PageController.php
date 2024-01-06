<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function index ()
    {   
        $pages = Page::get()->toArray();
        return view('admin.page_index', [
            'pages' => $pages
        ]);
    }

    public function show (Page $page)
    {
        return view('admin.page_show', [
            'page' => $page
        ]);
    }

    public function create ()
    {
        return view('admin.page_create');
    }

    public function store (PageRequest $request)
    {
        if  (Page::create($request->validated())) $request->session()->flash('success', 'Старица создана успешно'); else $request->session()->flash('error', 'Старица создана с ошибкой');
        return redirect()->route('admin.page_index');
    }

    public function edit (Page $page)
    {
        return view('admin.page_edit', [
            'page' => $page
        ]);
    }

    public function update (PageRequest $request, Page $page)
    {   
        if  ($page->update($request->validated())) $request->session()->flash('success', 'Старица обновлена успешно'); else $request->session()->flash('error', 'Старица обновлена с ошибкой');
        return redirect()->route('admin.page_show', $page->id);
    }

    public function delete (Request $request, Page $page)
    {
        if  ($page->delete()) $request->session()->flash('success', 'Старица удалена успешно'); else $request->session()->flash('error', 'Старица удалена с ошибкой');
        return redirect()->route('admin.page_index');
    }
}
