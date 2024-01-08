<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Models\Page;
use App\Http\Requests\Admin\ContentRequest;
use App\Models\Content;
use Illuminate\Support\Facades\File;

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
        $contents = $page->contents()->get()->sortBy('sort');

        return view('admin.page_show', [
            'page' => $page,
            'contents' => $contents,
        ]);
    }

    public function create ()
    {
        return view('admin.page_create');
    }

    public function store (PageRequest $request)
    {
        Page::create($request->validated()) ? $this->alert_success() : $this->alert_error();
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
        $page->update($request->validated()) ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.page_show', $page->id);
    }

    public function delete (Page $page)
    {
        $page->delete() ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.page_index');
    }

    public function createContent (Page $page)
    {
        return view('admin.content_create', [
            'page' => $page
        ]);
    }

    public function storeContent (Page $page, ContentRequest $request)
    {
        $content = $page->contents()->create($request->validated());

        if ($file = $request->file('image'))
        {
            $this->storeImage($file, $content);
        }
        
        return redirect()->route('admin.page_show', $page->id);
    }

    public function editContent (Page $page, Content $content)
    {
        return view('admin.content_edit', [
            'page' => $page,
            'content' => $content
        ]);
    }

    public function updateContent (ContentRequest $request, Page $page, Content $content)
    {
        if ($file = $request->file('image'))
        {
            $this->deleteImage($content);
            $this->updateImage($file, $content);
        } 

        $content->update($request->validated()) ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.page_show', $page->id);
    }

    public function deleteContent (Page $page, Content $content)
    {
        $content->delete() ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.page_show', $page->id);
    }

    public function storeImage ($file, Content $content)
    {
        $this->image_update($file, $content);
    }

    public function updateImage ($file, Content $content)
    {
        $this->image_update($file, $content);
    }

    public function deleteImage (Content $content)
    {
        $this->image_delete($content);
    }

}
